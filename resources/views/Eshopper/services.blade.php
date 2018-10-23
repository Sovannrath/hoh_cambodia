@extends('/layouts.master')
@section('body-container')
<style>
	#about>li{
		line-height: 2;
	}
</style>
<div id="contact-page" class="container">
	<div class="bg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="title text-center">សេវាកម្ម</strong></h2>
				<div class="row">
					<div class="col-sm-6">
						<img class="img-responsive" src="images\about\about1.jpg">
					</div>
					<div class="col-sm-6">
						<img class="img-responsive" src="images\about\about2.jpg">
					</div>
				</div>
				<br>
				<div class="row">
					<div id="about" class="col-sm-12">
						<p style="text-align: justify; text-indent: 30px; line-height: 2" ​>
							គ្លីនីកព្យាបាលដោយចលនា និងស្អំសរសៃ <strong>Hands On Health Cambodia</strong> បានបើកដំណើរការនៅឆ្នាំ 2017 ដែលមានទីតាំងផ្ទះលេខ ៣៦ ផ្លូវ ២៧៣ ភូមិទួលគោក សង្កាត់ទួលសង្កែ ខណ្ឌឬស្សីកែវ រាជធានីភ្នំពេញ។ ជាមួយបទពិសោធព្យាបាលកន្លងមក គ្លីនីកយើងកំពុងទទួលបានការទុកចិត្ត និងគាំទ្រពីសំណាក់លោកអ្នក
							ដែលបានមកព្យាបាល ជាគ្លីនីកមួយដែលព្យាបាលប្រកបដោយប្រសិទ្ធភាពខ្ពស់ តាមស្ដង់ដារនៃវិទ្យាស្ថាន ហ៊ីផូក្រែតអូស្ដ្រាលី។ គ្លីនីកព្យាបាលដោយចលនា និងស្អំសរសៃ មានទទួលព្យាបាលដូចជា៖<br>
						<li>ស្រ្ដេសពីការងារ</li>
						<li>ឈឺចុករោយ ក ខ្នង និងចង្កេះ</li>
						<li>ឈឺចាក់ពីស្មា(លើកមិនរួច ខ្សោយឬគាំង)</li>
						<li>គៀបសរសៃឆ្អឹងកង ក និងចង្កេះ</li>
						<li>ឈឺត្រកៀក ជង្គង់ និងកជើង</li>
						<li>ឈឺក្នុងត្រកៀក ចាក់ស្ពឹកមកបាតជើង</li>
						<li>ស្ពឹក ក្រហាយ ខ្សោយកម្លាំងជើង</li>
						<li>ឈឺចាក់មកស្មា និងប្រអប់ដៃ</li>
						<li>ឈឺចាប់នៅសរសៃសាច់ដុំ សន្លាក់ឆ្អឹង</li>
						<li>វៀចមុខ វៀចមាត់</li>
						<li>ស្លាប់មួយចំហៀងខ្លួន</li>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

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