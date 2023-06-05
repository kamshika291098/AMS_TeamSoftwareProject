<?php

namespace App\Http\Controllers;

use App\Models\Incharge;
use App\Models\Organization;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
use DB;

class InchargeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    if (isset($_GET['q'])) {
        $search_text = $_GET['q'];
    
        $incharges = Incharge::with('organization')
            ->where('inchargename', 'LIKE', '%' . $search_text . '%')
            ->orWhere('id', 'LIKE', '%' . $search_text . '%')
            ->orWhereHas('organization', function ($query) use ($search_text) {
                $query->where('organizationname', 'LIKE', '%' . $search_text . '%');
            })
            ->orWhere('email', 'LIKE', '%' . $search_text . '%')
            ->orWhere('phonenumber', 'LIKE', '%' . $search_text . '%')
            ->orWhere('position', 'LIKE', '%' . $search_text . '%')
            ->orWhere('address', 'LIKE', '%' . $search_text . '%')
            ->paginate(5);
    
        return view('incharge.index', compact('incharges'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
     else {
       // $incharges = Incharge::paginate(5);
        //return view('incharge.index', compact('incharges'))->with('i', (request()->input('page', 1) - 1) * 5);
        $incharges = Incharge::with('organization')->paginate(5);
        return view('incharge.index', compact('incharges'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations = Organization::get();

        // dd($organizations);
        return view("incharge.create")->with('organizations', $organizations);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [
        'inchargename' => 'required',
        'organization'=> 'required',
        'email'=>'required',
        'password'=>'required',
        'phonenumber'=>'required',
        'position'=>'required',
        'address'=>'required',
    ]);

    $hashedPassword = Hash::make($request->input('password'));

    $incharge = new Incharge([
        'inchargename' => $request->get('inchargename'),
        'organization_id' => $request->get('organization'),
        'email'=>$request->get('email'),
        'password'=>$hashedPassword, // Store the hashed password
        'phonenumber'=>$request->get('phonenumber'),
        'position'=>$request->get('position'),
        'address'=>$request->get('address'),
        'remember_token' => Str::random(8)
    ]);

    $incharge->save();
    return back()->with('success','Incharge created successfully!!!');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Incharge $incharge)
    {
        return view('incharge.show',compact('incharge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Incharge $incharge)
    {
        // dd($incharge);
        $organizations = Organization::get();
        return view('incharge.edit',compact('incharge','organizations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $supplier
     * @return \Illuminate\Http\Response
     */
     
     public function update(Request $request, Incharge $incharge)
     {
        //dd($request->all());
         $request->validate([
             'inchargename' => 'required',
             'organization_id'=> 'required',
             'email'=>'required',
             'phonenumber'=>'required',
             'position'=>'required',
             'address'=>'required',
         ]);
     
         $data = [
             'inchargename' => $request->input('inchargename'),
             'organization_id' => $request->input('organization_id'),
             'email' => $request->input('email'),
             'phonenumber' => $request->input('phonenumber'),
             'position' => $request->input('position'),
             'address' => $request->input('address'),
         ];
     
         if ($request->filled('password')) {
             $data['password'] = Hash::make($request->input('password'));
         }
     
         $incharge->update($data);
     
         return redirect('incharges')->with('success','Incharge updated successfully!');
     }
     

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Incharge $incharge)
    {
        
        $incharge->delete();
        return back()->with('success','Incharge Deleted successfully!!!');
    }
    public function search(Request $request)
    {
        $searchincharge = $request->get('searchincharge');
        if(!empty($searchincharge))
        {
            $incharges=DB::table('incharges')->where('inchargename','like','%' .$searchincharge. '%')->paginate(5);
            return view('incharge.index', ['incharges' => $incharges]);
        }
        else 
            return view('incharge.index', 'Empty search Input!!');
    }
   
   
}
