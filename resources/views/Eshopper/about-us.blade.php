@extends('/layouts.master')
@section('body-container')

<div id="contact-page" class="container">
	<div class="bg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="title text-center">អំពីយើង</strong></h2>
				<div>
					<p>
						Hands On Health Cambodia
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="contact-form">
					<h2 class="title text-center">ផ្ញើសារមកយើង</h2>
					<div class="status alert alert-success" style="display: none"></div>
					<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
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
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-youtube"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--/#contact-page-->
@endsection
@section('script')
<script>
    function changeProfile() {
        $('#image').click();
    }
    $('#image').change(function () {
        var imgPath = $(this)[0].value;
        var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
            readURL(this);
        else
            alert("Please select image file (jpg, jpeg, png).")
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
                $('#remove').val(0);
            }
        }
    }
    function removeImage() {
        $('#preview').attr('src', '{{url('')}}');
        $('#remove').val(1);
    }
</script>

@endsection