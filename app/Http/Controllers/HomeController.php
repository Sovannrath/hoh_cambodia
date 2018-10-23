<?php

namespace App\Http\Controllers;

use Illuminate\Validation;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.dashboard');
    }

	public function showCategory(Request $request){
    	$category = Category::all();
		return view('Admin.pages.category', compact('category'));
	}

    public function addCategory(Request $request){

    	$this->Validate($request,['cate_id' => 'unique:categories']);
    	$category = new Category;
    	$category->cate_id = $request->cate_id;
    	$category->cate_name = $request->cate_name;
		$category->save();
		if(!$category){
			$request->session()->flash('alert-danger', 'Cannot insert');
			return back()->withInput($request->only('cate_id', 'cate_name'));
		}
		return back()->with('alert-success', 'បញ្ចូលបានជោគជ័យ');
//    	$category = new Category;
    }

	public function deleteCategory($cate_id){
		$category = DB::table('categories')->where('cate_id', '=', $cate_id)
			->delete();
		if(!$category){
			return back()->with('alert-danger', 'បរាជ័យ');
		}
		return back()->with('alert-success', 'លុបបានជោគជ័យ');
	}
	public function showAllMessage(){
    	$messages = DB::table('message')->get();
    	return view('Admin.pages.message', compact('messages'));
	}
}
