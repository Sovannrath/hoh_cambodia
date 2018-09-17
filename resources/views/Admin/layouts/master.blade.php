<!DOCTYPE html>
<html lang="en-us">
@include('Admin.partials.head')
	{{-- #BODY --}}
	<body class="smart-style-4 fixed-header fixed-page-footer">
		{{-- #HEADER --}}
			@include('Admin.partials.dashboard-header')
		{{-- END HEADER --}}

		{{-- #NAVIGATION --}}
		{{-- Left panel : Navigation area --}}
		{{-- Note: This width of the aside area can be adjusted through LESS/SASS variables --}}
			@include('Admin.partials.left-panel')
		{{-- END NAVIGATION --}}

		{{-- #MAIN PANEL --}}
		<div id="main" role="main">
			{{-- RIBBON  --}}
			<div id="ribbon">
				<ol class="breadcrumb">
					<li>ផ្ទាំងត្រួតពិនិត្យ</li><li>@yield('template_title')</li>
				</ol>
				{{-- You can also add more buttons to the ribbon for further usability
				Example below: --}}
			</div>
			{{--END RIBBON --}}

			{{-- Main contents)--}}
				@yield('content')
			{{-- END #MAIN PANEL --}}

<!--			@include('Admin.partials.footer')-->
			{{-- #SHORTCUT AREA : With large tiles (activated via clicking user name tag)
			 Note: These tiles are completely responsive, you can add as many as you like --}}
			<div id="shortcut">
				<ul>
					<li>
						<a href="#" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
					</li>
				</ul>
			</div>
			{{-- END SHORTCUT AREA --}}
		</div>
		@include('Admin.scripts.script')
		@yield('jquery_popup')
		@yield('script')
	</body>
</html>
