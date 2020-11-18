<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use session;
use DB;
use App\Admin;
class AdminController extends Controller
{
    
    public function index()
    {
        return view('admin.pages.index');
    }

    public function adminuser()
    {
    	$admins = admin::all();
        return view('admin.pages.admins',compact('admins'));
    }

    public function adminupdate(Request $req)
    {
    	$admin = Admin::find($req->id);
    	$admin->email = $req->email;
    	$admin->name = $req->name;
    	if($admin->save()){
    		$req->session()->put('admindata',$admin);
    		return 'Admin User data updated successfully!';
    	}
    }

    public function admindelete(Request $request,$id)
    {
    	if(session::get('admintype')=='superadmin')
    	{
    		Admin::where('id',$id)->delete();
    		return back();
    	}
    }
}
