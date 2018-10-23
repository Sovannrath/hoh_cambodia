@extends('/layouts.master')
@section('page_title')
ទំនាក់ទំនង
@endsection
@php
use Illuminate\Pagination\Paginator;
@endphp
@section('body-container')
<section id="advertisement">
	<div class="container">
		<img src="{{asset('images/shop/advertisement.jpg')}}" alt="" />
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			{{-- Left-Sidebar --}}
			@include('partials.left-sidebar')
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">ទំនិញទាំងអស់</h2>
					@foreach($products as $product)
					<div class="col-sm-4">
						<div class="product-image-wrapper">

							<div class="single-products">

								<div class="productinfo text-center">
									<img with="268" height="249" src="/images/shop/product-images/{{ $product->product_image}}" alt="" />
									<h2>{{ $product->pro_price }} $</h2>
									<p>{{ $product->product_name }}</p>
									<a href="/product-details/{{$product->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>ចូលមើល</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div><!--features_items-->
				<div class="text-center">
					{{ $products->links() }}
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
@section('Admin')
@endsection
