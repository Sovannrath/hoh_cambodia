@extends('/Admin.layouts.master')
@section('template_title')
ទំនិញទាំងអស
@endsection
@section('content')

{{-- #MAIN CONTENT --}}
<div id="content">
	<div class="row">
		{{-- col --}}
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
			<h1 class="page-title txt-color-blueDark">
				{{-- PAGE HEADER --}}
				<i class="fa-fw fa fa-home"></i>បញ្ជីទំនិញទាំងអស់
			</h1>
		</div>
		{{-- end col --}}
		{{-- col --}}
	</div>
	{{-- widget grid --}}
	<section id="widget-grid" class="">
		{{-- row --}}
		<div class="row">
			<article class="col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget" id="" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
					<header>
						<span class="widget-icon"> <i class="fa fa-pencil-square-o txt-color-darken"></i> </span>
						<h2>តារាងទំនិញ</h2>
					</header>
					<div>
						<div class="jarviswidget-editbox">
						</div>
						<div class="widget-body no-padding">
							<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
								<thead>
								<tr>
									<th data-hide="phone">លេខរៀង</th>
									<th data-class="expand">ឈ្មោះទំនិញ</th>
									<th data-hide="phone">លេខកូដទំនិញ</th>
									<th data-hide="phone,tablet">ម៉ាកសញ្ញា / ក្រុមហ៊ុន</th>
									<th data-hide="phone,tablet">លក្ខណៈទំនិញ</th>
									<th data-hide="phone,tablet">ស្ថានភាព</th>
                                    <th data-hide="phone,tablet">រូបភាពអំពីទំនិញ</th>
                                    <th data-hide="phone,tablet">ជម្រើស</th>
								</tr>
								</thead>
								<tbody>
								@php
								$i = 0;
								@endphp
								@foreach($products as $product)
								<tr>
									<td>{{ $i+=1}}</td>
									<td>{{ $product->product_name }}</td>
									<td><label>{{ $product->product_code }}</label></td>
									<td>{{ $product->brand_name }}</td>
									<td>{{ $product->condition }}</td>
									<td>{{ $product->status }}</td>
                                    <td><img src="/images/shop/product-images/{{ $product->product_image }}" style="height: 50px; width: 50px;"></td>
                                    <td><a href="/{{$product->id}}/product-edit" class="btn btn-sm btn-success">កែប្រែ</a>  <a href="/{{ $product->id}}/product-delete" class="btn btn-sm btn-danger">លុប</a></td>
								</tr>
								@endforeach
								</tbody>
							</table>
						</div>{{-- end widget body --}}
					</div>{{-- end widget div --}}
				</div>{{-- end jarviswidget --}}
			</article>
		</div>
	</section>
</div>

@endsection
@section('script')

@endsection