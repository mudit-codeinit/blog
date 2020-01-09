<?php
namespace App\Http\Controllers\Admin;
use Auth;
use App\Models\Category;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends MainAdminController
{
    public function __construct()
    {
	$this->middleware('auth');	
         
    }
    public function index()
    { 
    	if(Auth::user()->usertype=='Admin')	
        {  
            //$allcategory = Category::get();
            //$allcategory = Category::with('children')->get();
            $allcategory = DB::select('SELECT c1.id,c1.`category_name` ,c1.`status`, c2.category_name as parent_category FROM `category` c1 left join `category` c2 on c1.`parent_id`=c2.`id` order by id asc' );
            return view('admin.pages.category',compact('allcategory'));
	    }else{
	        return redirect('/');
	    }
   
    }

    public function addnewcategory(Request $request){

        if($request->id){
            $id = $request->id;
            $allcategory = Category::with('children')->get();
            $category = DB::table('category')->where('id',$request->id)->first();
            return view('admin.pages.add_edit_category', compact('category','id','allcategory'));
        } else{
            return view('admin.pages.add_edit_category');
        }
    
    }


    public function addcategory(Request $request){

        if(Auth::User()->usertype!="Admin")
        {
            \Session::flash('flash_message', 'Access denied!');
            return redirect('admin/dashboard');            
        }

        $inputs = $request->all();
        if($request->id){
            $id = $request->id;
            $category = Category::findOrFail($id);
        } else {
            $category = new Category;
        }


        $category->category_name = $inputs['category_name'];
        

        $category->save();
        if($request->id){
            \Session::flash('flash_message', 'Category Has Been Updated Successfully!');
           return \Redirect::back();
        } else {
            \Session::flash('flash_message', 'Category Has Been Added Successfully!');
        return \Redirect::back();
        }
    
    }

    public function deletecategory(Request $request){
        if(Auth::User()->usertype!="Admin")
       {
           \Session::flash('flash_message', 'Access denied!');
           return redirect('admin/dashboard');            
       } 
       $delete = DB::table('category')->where('id',$request->id)->delete();
   
        return \Redirect::back();
   }

   public function changestatus(Request $request){
            if(Auth::User()->usertype!="Admin")
            {
                \Session::flash('flash_message', 'Access denied!');
                return redirect('admin/dashboard');            
            } 
            $category = DB::table('category')->where('id',$request->id)->first();
            if($category->status ==1)
                 DB::table('category')->where('id',$request->id)->update(['status'=>0]);
            else
                DB::table('category')->where('id',$request->id)->update(['status'=>1]);
            return \Redirect::back();
        }

		
}