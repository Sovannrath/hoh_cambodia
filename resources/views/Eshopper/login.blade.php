@extends('/layouts.master')
@section('page_title')
ចូលក្នុងគណនី
@endsection
@section('body-container')
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>ចូលក្នុងគណនីរបស់អ្នក</h2>
						<form action="{{ route('login') }}" method ="POST">
							{{ csrf_field() }}
							<input name="email" type="email" placeholder="បញ្ចូលអ៊ីម៉ែល" autofocus/>
							<input name="password" type="password" placeholder="បញ្ចូលលេខសម្ងាត់" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">ចូល</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">ឬ</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
					{{ csrf_field() }}
						<h2>ចុះឈ្មោះគណនីថ្មី!</h2>
						<form action="#">
							<input type="text" placeholder="បញ្ចូលឈ្មោះ"/>
							<input type="email" placeholder="បញ្ចូលអ៊ីម៉ែល"/>
							<input type="password" placeholder="បញ្ចូលលេខសម្ងាត់"/>
							<button type="submit" class="btn btn-default">ចុះឈ្មោះ</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
@endsection