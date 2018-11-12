@php
use Carbon\Carbon;
@endphp
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
							<table id="product_list" class="table table-striped table-bordered table-hover" width="100%">
								<thead>
								<tr>
									<th data-hide="phone">លេខ ID</th>
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
								@foreach($products as $product)
								<tr id="product">
									<td>{{ $product->id }}</td>
									<td>{{ $product->product_name }}</td>
									<td><label>{{ $product->product_code }}</label></td>
									<td>{{ $product->brand_name }}</td>
									<td>{{ $product->condition }}</td>
									<td>{{ $product->status }}</td>
                                    <td><a href="#" id="img-preview" data-id="{{$product->id}}"><img class="img img-rounded img-preview" src="/images/shop/product-images/{{ $product->product_image }}" style="height: 40px; width: 40px;"></a> <span><button class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i></button></span></td>
                                    <td>
                                        <a href="/{{$product->id}}/product-edit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a id="delete" data-id="{{$product->id}}" href="#" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
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
<script src="{{asset('js/plugin/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('js/plugin/datatables/dataTables.colVis.min.js') }}"></script>
<script src="{{asset('js/plugin/datatables/dataTables.tableTools.min.js') }}"></script>
<script src="{{asset('js/plugin/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{asset('js/plugin/datatable-responsive/datatables.responsive.min.js') }}"></script>
<script>
    // DO NOT REMOVE : GLOBAL FUNCTIONS!
    $(document).ready(function() {
        pageSetUp();
        /* BASIC ;*/
        var responsiveHelper_dt_basic = undefined;
        var responsiveHelper_datatable_fixed_column = undefined;
        var responsiveHelper_datatable_col_reorder = undefined;
        var responsiveHelper_datatable_tabletools = undefined;

        var breakpointDefinition = {
            tablet: 1024,
            phone: 480
        };
        var table = $('#product_list').DataTable({
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>" +
            "t" +
            "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            "autoWidth": true,
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
            },
            "preDrawCallback": function () {
                // Initialize the responsive datatables helper once.
                if (!responsiveHelper_dt_basic) {
                    responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#product_list'), breakpointDefinition);
                }
            },
            "rowCallback": function (nRow) {
                responsiveHelper_dt_basic.createExpandIcon(nRow);
            },
            "drawCallback": function (oSettings) {
                responsiveHelper_dt_basic.respond();
            }
        });
        /* END BASIC */
        $('#product_list tbody').on('click', '#product #img-preview', function () {
            // var data = table.row( this ).data();
            var id = $(this).attr("data-id");
            $.ajax({
                url: '/'+id+'/img-preview',
                type: 'GET',
                data: 'id='+id,
                success: function(data){
                    var get_data = JSON.parse(data);
                    var image_url = get_data[0].product_image;;
                    $.dialog({
                        title: 'Image Preview',
                        content: '<img src="/images/shop/product-images/'+ image_url+'">',
                    });
                }
            });

        });
        $('#product_list tbody').on('click', '#product #delete', function () {
            // var data = table.row( this ).data();
            var id = $(this).attr("data-id");
            $.confirm({
                title: 'លុប',
                icon: 'fa fa-trash-o',
                content: 'តើអ្នកចង់លុបមែនទេ?',
                type: 'red',
                buttons: {
                    Delete: {
                        text: 'លុប',
                        btnClass: 'btn-red',
                        action: function () {
                            $.ajax({
                                url:'/'+id+'/product-delete',
                                type:'get',
                                data: 'id='+id,
                                success: function () {
                                    $.smallBox({
                                        title: 'ការលុបបានជោគជ័យ!',
                                        content : "<i class='fa fa-clock-o'></i> <i>{{Carbon::now()->format('d / m / Y h:s A')}}</i>",
                                        iconSmall : "fa fa-bell bounce animated",
                                        color : "#32c508",
                                        timeout: 2800,
                                    });
                                    window.setTimeout(function(){window.location.reload()}, 3000);
                                }
                            })
                        }
                    },
                    បោះបង់: function () {

                    }
                }
            });
        });
            // $.ajax({
            //{{ $product->id}}/product-delete
            //     url: '/'+id+'/img-preview',
            //     type: 'GET',
            //     data: 'id='+id,
            //     success: function(data){
            //         var get_data = JSON.parse(data);
            //         var image_url = get_data[0].product_image;;
            //         $.dialog({
            //             title: 'Image Preview',
            //             content: '<img src="/images/shop/product-images/'+ image_url+'">',
            //         });
            //     }
            // });


        $('.favorite').click(function () {
            // $.alert(data);
            $.confirm({
                title:'ដាក់ចូលទំនិញដែលណែនាំ?',
                icon:'fa fa-star',
                type:'green',
                content: 'ឈ្មោះផលិតផល : ',
                buttons:{
                    យល់ព្រម:function(){
                        $.ajax({
                            url: "",
                            type: "POST",
                            data: "",
                            success: function(data){
                                data = JSON.toString(data);

                            }
                        });

                    },
                    បោះបង់:function () {
                        //
                    }
                }
            });
        })
    });
</script>
@endsection