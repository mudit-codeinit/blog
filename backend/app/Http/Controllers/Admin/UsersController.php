<?php
namespace App\Http\Controllers\Admin;
use Auth;
use App\Models\User;
use App\Http\Requests;
use Illuminate\Http\Request;


class UsersController extends MainAdminController
{
    public function __construct()
    {
	$this->middleware('auth');	
         
    }
    public function index()
    { 
    	if(Auth::user()->usertype=='Admin')	
        {  
            $allusers = User::where('usertype', 'User')->get();
            
            return view('admin.pages.users',compact('allusers'));
	    }else{
	        return redirect('/');
	    }
   
    }
		
}