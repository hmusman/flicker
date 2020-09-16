<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Role;
use App\User;
use DB;
class LoginAndRegisterController extends Controller
{
    public function index()
    {
    	$roles = Role::all();
    	return view('login')->with(compact('roles'));
    }

    public function adminIndex()
    {
        return view('admin_login');
    }

    public function buyer(Request $request)
    {
    	$buyer_validation  = Validator::make($request->all(),[
    		'buyer_username'=>'bail | required | alpha_num',
    		'buyer_name'=>'bail | required | alpha',
    		'buyer_email'=>'bail | required | email',
    		'buyer_password'=>'bail | required | min:8 | confirmed',
    		// 'buyer_password_confirm'=>'bail | required | min:8 ',
    		'buyer_city'=>'bail | required',
    		'buyer_phone'=>'bail | required | numeric',
    		'buyer_company'=>'bail | required | alpha',

    	]);
    	if ($buyer_validation->fails())
    	{
    		return back()->withErrors($buyer_validation)->withInput();
	    }
	    else
	    {
	    	if( User::select('*')->where([['email','=',$request->buyer_email],['role_name','=',$request->type]])->first())
	    	{
	    	
	    		return back()->withErrors(['alreadyError'=>'Sorry '.$request->buyer_email. ' Is Already Registered'])->withInput();
	    	}
	    	else
	    	{
	    		$user = new User();
		    	$user->role_name = $request->type;
		    	$user->username = $request->buyer_username;
		    	$user->name = $request->buyer_name;
		    	$user->email = $request->buyer_email;
		    	$user->company = $request->buyer_company;
		    	$user->password =Hash::make($request->buyer_password);
		    	$user->phone = $request->buyer_phone;
		    	$user->city = $request->buyer_city;
		    	if($user->save())
		    	{
		    		return back()->withErrors(['success'=>'You Have Been Registered Successfully']);
		    	}
	    	}
    		
	    }
    	

    }

    public function seller(Request $request)
    {
    	$seller_validation  = Validator::make($request->all(),[
    		'username'=>'bail | required | alpha_num',
    		'name'=>'bail | required | alpha',
    		'email'=>'bail | required | email',
    		'password'=>'bail | required | min:8 | confirmed',
    		// 'password_confirm'=>'bail | required | min:8 ',
    		'city'=>'bail | required',
    		'phone'=>'bail | required | numeric',
    		'shop'=>'bail | required | alpha',

    	]);
    	if ($seller_validation->fails())
    	{
    		return back()->withErrors($seller_validation)->withInput();
	    }
	    else
	    {
	    	if( User::select('*')->where([['email','=',$request->email],['role_name','=',$request->type]])->first())
	    	{
	    		return back()->withErrors(['success'=>'Sorry '.$request->email. ' Is Already Registered'])->withInput();
	    	}
	    	else
	    	{
	    		$user = new User();
		    	$user->role_name = $request->type;
		    	$user->username = $request->username;
		    	$user->name = $request->name;
		    	$user->email = $request->email;
		    	$user->shop= $request->shop;
		    	$user->password =Hash::make($request->password);
		    	$user->phone = $request->phone;
		    	$user->city = $request->city;
		    	if($user->save())
		    	{
		    		return back()->withErrors(['success'=>'You Have Been Registered Successfully']);
		    	}
	    	}
    	}
    }


    public function login(Request $request)
    {
        $validation = Validator::make($request->all(),[
    		'login_email'=>'bail | required | email',
    		'login_password'=>'bail | required'
    	]);

    	if ($validation->fails())
    	{
    		return back()->withErrors($validation)->only('login_email');
    	}
    	else
    	{
            $user =  User::select('*')->where([['email','=',$request->login_email],['status','=',1]])->first();
            if ($user) 
            {
                if(Hash::check($request->login_password,$user->password))
                {
                   $request->session()->put('user',$user->email);
                   return redirect('/BuyUsedMobilePhones');
                }
                else
                {
                    return back()->withErrors(['loginError'=>'Sorry Email / Password Is Wrong'])->only('login_email');
                }
            }
            else
            {
                return back()->withErrors(['loginError'=>'You are not active user'])->withInput($request->only('login_email'));
            }
    	}
    }

     public function adminLogin(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'login_email'=>'bail | required | email',
            'login_password'=>'bail | required'
        ]);

        if ($validation->fails())
        {
            return back()->withErrors($validation)->withInput();
        }
        else
        {

           $user =  DB::table('admins')->select('*')->where([['email','=',$request->login_email]])->first();
            if ($user) 
            {
                if(Hash::check($request->login_password,$user->password))
                {
                   $request->session()->put('admin',$user->email);
                    return redirect('Admin');
                }
                else
                {
                     return back()->withErrors(['loginError'=>'Sorry Email / Password Is Wrong'])->with($request->only('email'));
                }
            }
        }
    }

    public function adminLogout(Request $request)
    {
        $request->session()->put('admin','');
        return redirect('/AdminLogin');
    }
    public function logout(Request $request)
    {
    	$request->session()->put('user','');
    	return redirect('/Login');
    }

    public function show($id)
    {
        return "thsi";
    }

}
