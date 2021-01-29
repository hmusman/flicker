<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\User;
use DB;
use App\Mail\SendEmailToActiveUser;
use App\Mail\SendEmailToBlockUser;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('admin.pages.users',compact('users'));
    }

    public function create()
    {
        return view('admin.pages.add_user');
    }

   
    public function store(Request $request)
    {

        if ($request->type=='buyer')
        {
           $email = $request->buyer_email;
           $validation  = Validator::make($request->all(),[
                'buyer_username'=>'required ',
                'buyer_name'=>'required ',
                'buyer_email'=>'bail | required | email',
                'buyer_password'=>'bail | required | min:8 | confirmed',
                // 'buyer_password_confirm'=>'bail | required | min:8 ',
                'buyer_city'=>'bail | required',
                'buyer_phone'=>'bail | required | numeric',
                'buyer_company'=>'required ',

            ]);
        }
        else
        {
            $email = $request->email;
            $validation  = Validator::make($request->all(),[
                'username'=>'required',
                'name'=>'required',
                'email'=>'bail | required | email',
                'password'=>'bail | required | min:8 | confirmed',
                // 'password_confirm'=>'bail | required | min:8 ',
                'city'=>'bail | required',
                'phone'=>'bail | required | numeric',
                'shop'=>'bail | required | alpha',

            ]);
        }

        if ($validation->fails())
        {
            return back()->withErrors($validation)->withInput();
        }
        else
        {
            if( User::select('*')->where([['email','=',$email],['role_name','=',$request->type]])->first())
            {
            
                return back()->withErrors(['alreadyError'=>'Sorry '.$email. ' Is Already Registered'])->withInput();
            }
            else
            {
                $user = new User();
                if ($request->type=='buyer')
                {
                    $user->role_name = $request->type;
                    $user->username = $request->buyer_username;
                    $user->name = $request->buyer_name;
                    $user->email = $request->buyer_email;
                    $user->company = $request->buyer_company;
                    $user->password = $request->buyer_password;
                    $user->phone = $request->buyer_phone;
                    $user->city = $request->buyer_city;
                }
                else
                {
                    $user->role_name = $request->type;
                    $user->username = $request->username;
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->shop= $request->shop;
                    $user->password = $request->password;
                    $user->phone = $request->phone;
                    $user->city = $request->city;
                }

                if($user->save())
                {
                   $request->session()->flash('msg','User Added Successfully');
                   return redirect()->route('User.index');
                }
            }
            
        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.pages.update_user',compact('user'));
    }

    
    public function update(Request $request, $id)
    {
        if ($request->type=='buyer')
        {
           $email = $request->buyer_email;
           $validation  = Validator::make($request->all(),[
                'buyer_username'=>'required',
                'buyer_name'=>'required',
                'buyer_email'=>'bail | required | email',
                'buyer_city'=>'bail | required',
                'buyer_phone'=>'bail | required | numeric',
                'buyer_company'=>'required',

            ]);
        }
        else
        {
            $email = $request->email;
            $validation  = Validator::make($request->all(),[
                'username'=>'required',
                'name'=>'required',
                'email'=>'bail | required | email',
                'city'=>'bail | required',
                'phone'=>'bail | required | numeric',
                'shop'=>'required',

            ]);
        }

        if ($validation->fails())
        {
            return back()->withErrors($validation)->withInput();
        }
        else
        {
            $user = User::find($id);
            if ($request->type=='buyer')
            {
                $user->role_name = $request->type;
                $user->username = $request->buyer_username;
                $user->name = $request->buyer_name;
                $user->email = $request->buyer_email;
                $user->company = $request->buyer_company;
                $user->phone = $request->buyer_phone;
                $user->city = $request->buyer_city;
            }
            else
            {
                $user->role_name = $request->type;
                $user->username = $request->username;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->shop= $request->shop;
                $user->phone = $request->phone;
                $user->city = $request->city;
            }

            if($user->save())
            {
               $request->session()->flash('msg','User Updated Successfully');
               return redirect()->route('User.index');
            }
            
        }
    }

    
    public function destroy(Request $request, $id)
    {
        if(User::where('id',$id)->delete())
        {
           $request->session()->flash('msg','User Deleted Successfully');
           return redirect()->route('User.index');
        }
    }

    public function active($id)
    {
       $data = User::where('id',$id)->first();
       $user = User::where('id',$id)->update(['status'=>1]);
       Mail::to($data->email)->send(new SendEmailToActiveUser());
       return redirect()->route('User.index');
        
    }

     public function block($id)
    {
       $data = User::where('id',$id)->first();
       $user = User::where('id',$id)->update(['status'=>0]);
       Mail::to($data->email)->send(new SendEmailToBlockUser());
       return redirect()->route('User.index');
        
    }
}
 