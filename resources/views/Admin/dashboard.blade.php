
@extends('Admin/layouts.master')
@section('template_title')
	Dashboard
@endsection
@section('content')

{{-- #MAIN CONTENT --}}
<div id="content">
	<div class="row">
		{{-- col --}}
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
			<h1 class="page-title txt-color-blueDark">
		      {{-- PAGE HEADER --}}
		      <i class="fa-fw fa fa-home"></i>ផ្ទាំងត្រួតពិនិត្យ
			</h1>
		</div>
		{{-- end col --}}
		{{-- col --}}
	</div>

	{{-- widget grid --}}
	<section id="widget-grid" class="">
		{{-- row --}}
		<div class="row">

			<article class="col-sm-4 col-md-4 col-lg-4">
				<div class="jarviswidget" id="" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
					<header>
						<span class="widget-icon"> <i class="glyphicon glyphicon-stats txt-color-darken"></i> </span>
						<h2>ទំនិញទាំងអស់</h2>
					</header>
					<div>
						<div class="jarviswidget-editbox">
						</div>
						<div class="widget-body">
                            <p class="text-center" style="font-size:50px">{{ count(App\Product::all())}}</p>
						</div>{{-- end widget body --}}
					</div>{{-- end widget div --}}
				</div>{{-- end jarviswidget --}}

			</article>{{--End Incidents Table--}}

            <article class="col-sm-4 col-md-4 col-lg-4">
                <div class="jarviswidget" id="" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="glyphicon glyphicon-stats txt-color-darken"></i> </span>
                        <h2>ឈ្មោះប្រភេទទំនិញទាំងអស់</h2>
                    </header>
                    <div>
                        <div class="jarviswidget-editbox">
                        </div>
                        <div class="widget-body">
                            <p class="text-center" style="font-size:50px">{{ count(App\Category::all())}}</p>
                        </div>{{-- end widget body --}}
                    </div>{{-- end widget div --}}
                </div>{{-- end jarviswidget --}}

            </article>{{--End Incidents Table--}}

            <article class="col-sm-4 col-md-4 col-lg-4">
                <div class="jarviswidget" id="" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                    <header>
                        <span class="widget-icon"> <i class="glyphicon glyphicon-stats txt-color-darken"></i> </span>
                        <h2>Incidents</h2> <h2 class="pull-right"><span style="margin-right:10px"> Filter by: <div class="btn-group">
										{{-- add: non-hidden - to disable auto hide --}}
										<div class="btn-group">
											<button class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown">
												Month <i class="fa fa-caret-down"></i>
											</button>
											<ul class="dropdown-menu js-status-update pull-right">
												<li>
													<a href="javascript:void(0);" id="ag">Day</a>
												</li>
												<li>
													<a href="javascript:void(0);" id="mt">Month</a>
												</li>
												<li>
													<a href="javascript:void(0);" id="td">Year</a>
												</li>
											</ul>
										</div>
									</div></span></h2>
                    </header>
                    <div>
                        <div class="jarviswidget-editbox">
                        </div>
                        <div class="widget-body">
                            <div class="col-sm-12 col-md-12 col-lg-6">{{-- this is what the user will see --}}
                                <div id="columnchart_values"></div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">{{-- this is what the user will see --}}
                                <div id="columnchart_values2"></div>
                            </div>
                        </div>{{-- end widget body --}}
                    </div>{{-- end widget div --}}
                </div>{{-- end jarviswidget --}}

            </article>{{--End Incidents Table--}}
	    </div>
	    {{-- end row --}}
	</section>
</div>
{{-- END #MAIN CONTENT --}}

@endsection
@section('script')
<!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
<!--	@include('Admin.scripts.google-chart')-->
<!--	@include('Admin.scripts.column-chart')-->
<!--	@include('Admin.scripts.calendar-script')-->
	@include('Admin.scripts.dataTable')
@endsection