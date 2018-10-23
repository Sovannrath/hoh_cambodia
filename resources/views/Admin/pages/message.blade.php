@extends('/Admin.layouts.master')
@section('template_title')
សារទាំងអស
@endsection
@section('content')
{{-- #MAIN CONTENT --}}
<div id="content">
	<div class="row">
		{{-- col --}}
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
			<h1 class="page-title txt-color-blueDark">
				{{-- PAGE HEADER --}}
				<i class="fa-fw fa fa-home"></i>សារទាំងអស់
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
						<h2>សារទាំងអស់</h2>
					</header>
					<div>
						<div class="jarviswidget-editbox">
						</div>
						<div class="widget-body no-padding">
							<table id="#dt_basic" class="table table-striped table-bordered table-hover" width="100%">
								<thead>
								<tr>
									<th data-hide="phone">លេខរៀង</th>
									<th data-class="expand">ឈ្មោះ</th>
									<th data-hide="phone">អ៊ីម៉ែល</th>
									<th data-hide="phone,tablet">ចំណងជើង</th>
									<th data-hide="phone,tablet">សារ</th>
									<th data-hide="phone,tablet">ថ្ងៃបង្កើត</th>
									<th data-hide="phone,tablet">ថ្ងៃកែប្រែចុងក្រោយ</th>
								</tr>
								</thead>
								<tbody>
								@php
								$i = 0;
								@endphp
								@foreach($messages as $message)
								<tr>
                                    <td>{{$i+=1}}</td>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->subject}}</td>
                                    <td>{{$message->message}}</td>
                                    <td>{{$message->created_at}}</td>
                                    <td>{{$message->updated_at}}</td>
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
@section('page-script')
<script src="{{asset('js/plugin/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{asset('js/plugin/datatables/dataTables.colVis.min.js') }}"></script>
<script src="{{asset('js/plugin/datatables/dataTables.tableTools.min.js') }}"></script>
<script src="{{asset('js/plugin/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{asset('js/plugin/datatable-responsive/datatables.responsive.min.js') }}"></script>
<script>
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
        $('#dt_basic').dataTable({
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
                    responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
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
    });
</script>
@endsection