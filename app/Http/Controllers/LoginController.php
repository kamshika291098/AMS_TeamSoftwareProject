<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Auth;
use DB;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    //
    function checklogin(Request $request, User $user)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => [
                'required',
                'string',
                'min:7',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
        ]);
        $user_data = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );
       
        if(Auth::attempt($user_data))
        {
            if(Auth::user()->role == 'Admin')

            $inchargecount = DB::table('incharges')->count();
            $organizationcount = DB::table('organizations')->count();
            return View::make('dashboard.adminfront')
            ->with(compact('inchargecount'))
            ->with(compact('organizationcount'));
            
             
                
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        }
        
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function dashboard(User $user)
    {
        $inchargecount = DB::table('incharges')->count();
        $organizationcount = DB::table('organizations')->count();
        return View::make('dashboard.adminfront')
        ->with(compact('inchargecount'))
        ->with(compact('organizationcount'));
    }
    
}
