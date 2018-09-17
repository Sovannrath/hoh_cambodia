
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>  ទូរស័ព្ទ : (+855) 95 878 999 / 96 77 78 889</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i>  អ៊ីមែល : info@handsonhealthcambodia.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/handsonhealthcambodia"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url('/')}}"><img src="{{asset('images/home/logo.png') }}" height="39" alt="" /></a>
						</div>
						<div class="btn-group">
							<h4 style="padding-left: 8px; font-family: 'Khmer OS Muol Light';" class="text-success">ព្យាបាលដោយចលនា ស្អំសរសៃ</h4>
						</div>
	{{-- This is comment <div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div> End comment--}}
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> គណនី​ខ្ញុំ</a></li>
								<li><a href="#"><i class="fa fa-star"></i> បញ្ជី</a></li>
								<li><a href="{{url('/checkout') }}"><i class="fa fa-crosshairs"></i> បង់ប្រាក់</a></li>
								<li><a href="{{url('/cart') }}"><i class="fa fa-shopping-cart"></i> កន្ដ្រក</a></li>
								<li><a href="{{route('login')}}"><i class="fa fa-lock"></i> ចូល</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{url('/')}}" class="active">ទំព័រដើម</a></li>
                                <li><a href="{{url('/shop')}}">ទំនិញ</a></li>
<!--								<li class="dropdown"><a href="#">ហាង<i class="fa fa-angle-down"></i></a>-->
<!--                                    <ul role="menu" class="sub-menu">-->
<!--                                        <li><a href="{{url('/shop')}}">ទំនិញ</a></li> -->
<!--                                    </ul>-->
<!--                                </li>-->
								<li><a href="{{url('/contact')}}">ទំនាក់ទំនង</a></li>
                                <li><a href="{{url('/about')}}">អំពីយើង</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="ស្វែងរក"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->