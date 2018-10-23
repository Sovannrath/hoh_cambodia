<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Eshopper.index');
    }

    public function showServices(){
    	return view('Eshopper.services');
    }
    /**
     * Display Contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function showContact()
    {
        return view('Eshopper.contact-us');
    }

	/**
	 * Display Contact.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function Contact(Request $request)
	{
		$name = $request->input('name');
		$email = $request->input('email');
		$subject = $request->input('subject');
		$message = $request->input('message');


		$result = DB::table('message')
			->insert([
				'name' => $name,
				'email' => $email,
				'subject' => $subject,
				'message' => $message,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now()
			]);
	if($result)
		return redirect()->back();
	else
		return 'Error!!!';
//		return redirect()->back();
	}
	/**
	/**
	 *
	 * Display Contact.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showAbout()
	{
		return view('Eshopper.about-us');
	}
	/**
     * Display Product detailt.
     *
     * @return \Illuminate\Http\Response
     */
    public function showShop()
    {
        return view('Eshopper.shop');
    }
	/**
     * Display Product detailt.
     *
     * @return \Illuminate\Http\Response
     */
    public function showProductDetails($id)
    {
    	$product = Product::where('id', '=', $id)->get();
        return view('Eshopper.product-details', compact('product'));
    }
	
	/**
     * Display Checkout.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCheckout()
    {
        return view('Eshopper.checkout');
    }
	
	public function showBlog()
    {
        return view('Eshopper.blog');
    }
	
	public function showBlogByID()
    {
        return view('Eshopper.blog-single');
    }
	
	/**
     * Display Checkout.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCart()
    {
        return view('Eshopper.cart');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

	public function productByCategoryID($cate_id){
		$products = DB::table('products')->where('cate_id', '=', $cate_id)->paginate(9);
//		dd($products);
		return view('Eshopper.product-category', compact('products'));
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
