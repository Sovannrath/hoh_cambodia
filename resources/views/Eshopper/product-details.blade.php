@extends('/layouts.master')
@section('page_title')
ពត៌មានលម្អិត
@endsection
@section('body-container')
	<section>
		<div class="container">
			<div class="row">
				{{-- Left-Sidebar --}}
				@include('partials.left-sidebar')
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
                        @foreach($product as $value)
						<div class="col-sm-5">
							<div class="view-product">
								<img src="/images/shop/product-images/{{ $value->product_image}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="/images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="/images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="/images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{ asset('images/product-details/new.jpg') }}" class="newarrival" alt="" />
								<h2>{{ $value->product_name }}</h2>
								<p>លេខកូដ: {{ $value->product_code }}</p>
								<img src="{{ asset('images/product-details/rating.png') }}" alt="" />
								<p><b>ស្ថានភាព: ​</b>{{ ($value->status == 1)? 'ថ្មី' : 'មួយតឹក' }}</p>
								<p><b>លក្ខណៈ ​</b> {{ $value->condition }}</p>
								<p><b>ម៉ាក / ​ក្រុមហ៊ុន: ​</b> {{ $value->brand_name }}</p>
								<a href=""><img src="{{ asset('images/product-details/share.png') }}" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
                        @endforeach
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">ពត៌មានលម្អិត</a></li>
                                <li class=""><a href="#feature" data-toggle="tab">លក្ខណៈពិសេស</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade​ active" id="details" >
                                <div class="col col-md-12">
                                    <p>{{ $value->product_detail}}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade​" id="feature" >
                                <div class="col col-md-12">
                                    <p>ដសាថសដដ</p>
                                </div>
                            </div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">ទំនិញដែលយើងណែនាំ</h2>
                        <div class="recommended-item">
                            @foreach(App\Product::all()->take(9) as $product)
                            <div class="col-sm-4">
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
