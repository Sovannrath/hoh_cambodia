@extends('/layouts.master')
@section('slider')
	@include('partials.slider')
@endsection
@section('body-container')
	<section>
		<div class="container">
			<div class="row">
				{{-- Left-Sidebar --}}
				@include('partials.left-sidebar')
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">លក្ខណៈពិសេស</h2>
						@foreach(App\Product::where('recommend','=',0)->get() as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
							
								<div class="single-products">
								
										<div class="productinfo text-center">
											<img with="268" height="249" src="/images/shop/product-images/{{ $product->product_image}}" alt="" />
											<h2>{{ $product->pro_price }} $</h2>
											<p>{{ $product->product_name }}</p>
											<a href="/product-details/{{$product->id}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>ចូលមើល</a>
										</div>
								</div>
							</div>
						</div>
						@endforeach
						
					</div><!--features_items-->
					
					<div class=""><!--recommended_items-->
						<h2 class="title text-center">ទំនិញដែលយើងណែនាំ</h2>
                            <div class="recommended-item">
								@foreach(App\Product::where('recommend','=',1)->get() as $product)
									<div class="col-sm-4 col-xs-12">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img with="268" height="249" src="/images/shop/product-images/{{ $product->product_image}}" alt="" />
													<h2>{{ $product->pro_price }} $</h2>
													<p>{{ $product->product_name }}</p>
													<a href="/product-details/{{$product->id}}" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>មន្ថែមចូលកន្រ្ដក</a>
												</div>
												
											</div>
										</div>
									</div>
								@endforeach
                            </div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>

@endsection
