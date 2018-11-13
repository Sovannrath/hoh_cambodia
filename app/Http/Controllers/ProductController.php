<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a form for adding product.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct()
    {
        return view('Admin.pages.product-add');
//	    return 'Yes';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listProduct()
    {
    	$products = Product::viewProduct();
//    	dd($products);
//    	$products = Product::all();
        return view('Admin.pages.list-product', compact('products'));
    }

    public function imgPreview($id){
    	$product = Product::where('id', '=', $id)->get();
		$data = json_encode($product, 200);
    	return $data;
    }

    public function showRecommendProduct(){
    	return view('Admin.pages.product-recommend');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('pro_image')){
	        $file = $request->file('pro_image');
	        $ext = $file->getClientOriginalExtension();
	        $name=time().uniqid().'.'.$ext;
	        $file->move(public_path().'/images/shop/product-images/', $name);
	        $pro_img = $name;
        }
        else{
	        $pro_img = null;
        }


	    $product = new Product;
	    $product->product_name = $request->input('pro_name');
	    $product->product_code = $request->input('pro_code');
	    $product->brand_name = $request->input('brand_name');
	    $product->condition = $request->input('pro_condition');
	    $product->status = $request->input('availability');
	    $product->pro_price = $request->input('pro_price');
	    $product->cate_id = $request->input('cate_name');
	    $product->recommend = $request->input('recommend');
	    $product->product_image = $pro_img;
	    $product->product_detail = $request->input('pro_detail');
	    $product->product_feature = $request->input('pro_feature');

//	    return response()->json($product);
//	    dd($product);
	    $product->Save();
//	    return redirect()->back()->with('alert-success', 'You added the product successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productEdit($id)
    {
    	$product = Product::where('id', '=', $id)->get();
//    	dd($product);
        return view('Admin.pages.product-edit', compact('product'));
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
    public function productUpdate(Request $request, $id)
    {
	    $product = Product::where('id', '=', $id)->first();
	    if($request->hasFile('pro_image')){
		    $file = $request->file('pro_image');
		    $ext = $file->getClientOriginalExtension();
		    $name=time().uniqid().'.'.$ext;
		    $file->move(public_path().'/images/shop/product-images/', $name);
		    $pro_img = $name;
	    }
	    else{
		    $pro_img = $product->product_image;
	    }
	    $product->product_name = $request->input('pro_name');
	    $product->product_code = $request->input('pro_code');
	    $product->brand_name = $request->input('brand_name');
	    $product->condition = $request->input('pro_condition');
	    $product->status = $request->input('availability');
	    $product->pro_price = $request->input('pro_price');
	    $product->cate_id = $request->input('cate_name');
	    $product->product_image = $pro_img;
	    $product->product_detail = $request->input('pro_detail');
//		dd($product);
	    $product->save();

		if(!$product){
			return redirect()->back()->with('alert-danger', 'You update the product unsuccessfully!');
		}
//	    dd($product);
	    return redirect('/product-list')->with('alert-success', 'You update the product successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function productDelete($id)
    {
        $product = Product::where('id','=', $id)
	        ->delete();
        if(!$product){
        	return back()->with('alert-danger','Cannot delete product!!!');
        }
        return redirect('/product-list')->with('alert-success','Product deleted successfully');
    }

}
