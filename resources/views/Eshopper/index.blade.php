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
						@foreach(App\Product::all() as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
							
								<div class="single-products">
								
										<div class="productinfo text-center">
											<img src="/images/shop/product-images/{{ $product->product_image}}" alt="" />
											<h2>{{ $product->pro_price }} $</h2>
											<p>{{ $product->product_name }}</p>
											<a href="/product-details/{{$product->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ចូលមើល</a>
										</div>
								</div>
							</div>
						</div>
						@endforeach
						
					</div><!--features_items-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">ទំនិញដែលយើងណែនាំ</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							
								<div class="item active">
								@for($i = 1; $i < 4; $i++)								
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" / >
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>មន្ថែមចូលកន្រ្ដក</a>
												</div>
												
											</div>
										</div>
									</div>
								@endfor
								</div>
								<div class="item">
								@for($i = 1; $i < 4; $i++)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>មន្ថែមចូលកន្រ្ដក</a>
												</div>
												
											</div>
										</div>
									</div>
								@endfor
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>

@endsection
