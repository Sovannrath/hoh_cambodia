
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
                        <h2>សារទាំងអស់</h2>
                    </header>
                    <div>
                        <div class="jarviswidget-editbox">
                        </div>
                        <div class="widget-body">
                            <p class="text-center" style="font-size:50px">{{ count(App\Contact::all())}}</p>
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