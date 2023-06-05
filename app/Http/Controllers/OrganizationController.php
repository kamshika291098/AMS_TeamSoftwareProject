<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Validator;
use Auth;
use DB;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       // $organizations = DB::table('organizations')->orderBy('id')->Paginate(5);
       // return view('organization.index', compact('organizations'))->with('i',(request()->input('page',1)-1)*5);
        //$organizations = Organization::paginate(5);
       // return view('organization.index', compact('organizations'))->with('i',(request()->input('page',1)-1)*5);
        if(isset($_GET['q'])){   
            $search_text = $_GET['q'];

            $organizations = DB::table('organizations')
                ->where(function($query) use ($search_text) {
                    $query->where('organizationname', 'LIKE', '%'.$search_text.'%')
                    ->orwhere('id', 'LIKE', '%'.$search_text.'%')
                    ->orWhere('email', 'LIKE', '%'.$search_text.'%');
                })
                ->paginate(5);
                $organizations = new LengthAwarePaginator($organizations->items(), $organizations->total(), $organizations->perPage(), $organizations->currentPage(), [        'path' => url()->current(),        'query' => request()->query(),    ]);
             return view('organization.index', compact('organizations'))->with('i',(request()->input('page',1)-1)*5);
            
        }else{
            $organizations =Organization::paginate(5);
            return view('organization.index', compact('organizations'))->with('i',(request()->input('page',1)-1)*5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("organization.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$id = IdGenerator::generate(['table' => 'organizations', 'length' => 12, 'prefix' => 'Organization-']);
        $this->validate($request, [
            'organizationname' => 'required',
            'email'=> 'required',
        ]);

        $organization = new Organization([
            'organizationname' => $request->get('organizationname'),
            'email' => $request->get('email'),
            'remember_token' => Str::random(8)
        ]);
       
        $organization->save();
        return back()->with('success','Organization created successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        return view('organization.show',compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        return view('organization.edit',compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Organization $organization)
    {
        $request->validate([
            'organizationname' => 'required',
            'email'=> 'required',
           
        ]);
        $organization->update($request->all());
        return redirect('organizations')->with('success','Organization updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        
        $organization->delete();
        return back()->with('success','Organization Deleted successfully!!!');
    }
    public function search(Request $request)
    {
        $searchorganization = $request->get('searchorganization');
        if(!empty($searchorganization))
        {
            $organizations=DB::table('organizations')->where('organizationname','like','%' .$searchorganization. '%')->paginate(5);
            return view('organization.index', ['organizations' => $organizations]);
        }
        else 
            return view('organization.index', 'Empty search Input!!');
    }
}
