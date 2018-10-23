@extends('/layouts.master')
@section('page_title')
ទំនាក់ទំនង
@endsection
@section('body-container')
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">ទំនាក់ទំនងមក <strong>យើង</strong></h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1162.0025979127752!2d104.90513321837891!3d11.587995763599759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951629bf8d505%3A0x768787221b7aeda!2sHands+On+Health+Cambodia!5e0!3m2!1sen!2skh!4v1537193842105" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">ផ្ញើសារមកយើង</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" method="post" action="{{url('/contact')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="បញ្ចូលឈ្មោះរបស់អ្នក">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="បញ្ចូលអសយដ្ឋានអ៊ីម៉ែល">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="ចំណងជើង">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="សារដែលចង់និយាយមកកាន់យើង"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="យល់ព្រម">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">ទំនាក់ទំនង និង អសយដ្ឋាន</h2>
	    				<address>
	    					<p>គ្លីនិកព្យាបាលដោយចលនា និងស្អំសរសៃ</p>
							<p>ផ្ទះលេខ ៣៦ ផ្លូវ ២៧៣ ភូមិទួលគោក សង្កាត់ទួលសង្កែ ខណ្ឌឬស្សីកែវ រាជធានីភ្នំពេញ</p>
							<p>ទូរស័ព្ទ : (+855) 95 878 999 / 96 77 78 889</p>
							<p>អ៊ីមែល : info@handsonhealthcambodia.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">បណ្ដាញសង្គម</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/handsonhealthcambodia"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://plus.google.com/109578045120671411847"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="https://www.youtube.com/channel/UCz8-9chHk1lS6bfxk1Dq5dQ"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
@endsection

@section('page-script')
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="{{ asset('js/gmaps.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection