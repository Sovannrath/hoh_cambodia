<?php

namespace App\Http\Controllers;

use App\Product;
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
