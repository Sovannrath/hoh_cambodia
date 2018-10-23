<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sovannrath">
    <title> @yield('page_title')| ព្យាបាលដោយចលនានិងស្អំសរសៃ</title>
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{asset('css/main.css') }}" rel="stylesheet">
	<link href="{{asset('css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
<!--    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>-->
	<link rel="icon" type="image/png" href="{{asset('images/home/favicon.png')}}"/>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<!-- Web font Khmer -->
	<link href='https://fonts.googleapis.com/css?family=Moul' rel='stylesheet' type='text/css'>
</head><!--/head-->

@include('partials.header')

@yield('slider')
<body>
@yield('body-container')


@include('partials.footer')

    @yield('page-script')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{asset('js/jquery.js') }}"></script>
	<script src="{{asset('js/bootstrap.min.js') }}"></script>
	<script src="{{asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{asset('js/price-range.js') }}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.recommended-item').slick({
                autoplay: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                prevArrow:'<a class="left recommended-item-control slick-prev" style="position: absolute !important;"><i class="fa fa-angle-left"></i></a>',
                nextArrow:'<a class="right recommended-item-control slick-next" style="position: absolute !important;"><i class="fa fa-angle-right"></i></a>',
            });
        });
    </script>
</body>
</html>