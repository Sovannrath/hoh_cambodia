@extends('/layouts.master')
@section('body-container')
<style>
	li{
		line-height: 2;
	}
    p{
        font-size:16px;
        line-height: 2;
    }
</style>
<div id="contact-page" class="container">
	<div class="bg">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="title text-center">សេវាកម្ម</strong></h2>
				<div class="row">
					<div id="about" class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>តើការព្យាបាលដោយចលនាគឺជាអ្វី?</h3>
                                <div>
                                    <p>ការព្យាបាលដោយចលនា គឺជាវិជ្ជាពេទ្យ និងវិជ្ជាជីវៈព្យាបាលមានគោលដៅព្យាបាល ហើយកែលំអសុខភាពរបស់អ្នកជំងឺ ដែលមានបញ្ហានឹងប្រព័ន្ធគ្រោងឆ្អឹង និងសាច់ដុំ រួមទាំងបញ្ហានឹងអវយវៈដែលធ្វើចលនាខុសពីធម្មតា។ ការព្យាបាលដោយចលនាប្រើវិធីសាស្ត្រដែលយកវិជ្ជាសាស្ត្រជាគោលការណ៍មូលដ្ឋាន និងវិធីសាស្ត្រធម្មជាតិផងដែរ។</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h3>តើការព្យាបាលណាខ្លះដែលយើងខ្ញុំផ្ដល់ជូន?</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li><i class="fa fa-star"></i> ស្រ្ដេសពីការងារ</li>
                                    <li><i class="fa fa-star"></i> ឈឺចុករោយ ក ខ្នង និងចង្កេះ</li>
                                    <li><i class="fa fa-star"></i> ឈឺចាក់ពីស្មា(លើកមិនរួច ខ្សោយឬគាំង)</li>
                                    <li><i class="fa fa-star"></i> គៀបសរសៃឆ្អឹងកង ក និងចង្កេះ</li>
                                    <li><i class="fa fa-star"></i> ឈឺត្រកៀក ជង្គង់ និងកជើង</li>
                                    <li><i class="fa fa-star"></i> ឈឺចាក់ពីស្មា(លើកមិនរួច ខ្សោយឬគាំង)</li>
                                    <li><i class="fa fa-star"></i> ឈឺក្នុងត្រកៀក ចាក់ស្ពឹកមកបាតជើង</li>
                                    <li><i class="fa fa-star"></i> ស្ពឹក ក្រហាយ ខ្សោយកម្លាំងជើង</li>
                                    <li><i class="fa fa-star"></i> ឈឺចាក់មកស្មា និងប្រអប់ដៃ</li>
                                    <li><i class="fa fa-star"></i> ឈឺចាប់នៅសរសៃសាច់ដុំ សន្លាក់ឆ្អឹង</li>
                                    <li><i class="fa fa-star"></i> វៀចមុខ វៀចមាត់</li>
                                    <li><i class="fa fa-star"></i> ស្លាប់មួយចំហៀងខ្លួន</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-4" style="margin-bottom: 10px">
                                    <img class="img-responsive img-rounded" src="{{ asset('/images/services/stress.jpg') }}">
                                </div>
                                <div class="col-sm-4" style="margin-bottom: 10px">
                                    <img class="img-responsive img-rounded" src="{{ asset('/images/services/neckpain.jpg') }}">
                                </div><div class="col-sm-4" style="margin-bottom: 10px">
                                    <img class="img-responsive img-rounded" src="{{ asset('/images/services/shoulderpain.jpg') }}">
                                </div>
                                <div class="col-sm-4" style="margin-bottom: 10px">
                                    <img class="img-responsive img-rounded" src="{{ asset('/images/services/backpain.jpg') }}">
                                </div>
                                <div class="col-sm-4" style="margin-bottom: 10px">
                                    <img class="img-responsive img-rounded" src="{{ asset('/images/services/kneepain.jpg') }}">
                                </div>
                                <div class="col-sm-4" style="margin-bottom: 10px">
                                    <img class="img-responsive img-rounded" src="{{ asset('/images/services/veachmuk.jpg') }}">
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" style="margin-bottom: 10px">
                                <img class="img-responsive img-rounded" src="{{asset('/images/services/treatment-hand.jpg')}}">
                            </div>
                            <div class="col-sm-6" style="margin-bottom: 10px">
                                <h3>ការព្យាបាលដោយដៃរបស់គ្រូពេទ្យ</h3>
                                <div>
                                    <p>កំលុងពេលលោកអ្នកជួបគ្រូពេទ្យលើកដំបូង គាត់នឹងសួរសំនួរពិសេសខ្លះ ដើម្បីឲ្យបានយល់ច្បាស់អំពីប្រវត្តិសុខភាពរបស់លោកអ្នក។ បន្ទាប់ពីនោះ គាត់នឹងពិនិត្យមើលសុខភាពរាងកាយ រួមមានការពិនិត្យមើលឥរិយាបថ និងការធ្វើចលនារបស់អវយវៈ ហើយការពិនិត្យមើលសន្លាក់ ឲ្យរកឃើញប្រភពបញ្ហារបស់លោកអ្នក។ គាត់នឹងពិគ្រោះជាមួយនឹងអ្នកជំងឺអំពីលទ្ធផល ហើយអ្នកទាំងពីរនឹងរួមគ្នាធ្វើការសម្រេចចិត្តចំពោះវិធីសាស្ត្ររបៀបណា ដែលសមស្របទៅនឹងតម្រូវការរបស់អ្នកជំងឺ។</p>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6" style="margin-bottom: 10px">
                                <h3>ការព្យាបាលដោយប្រើម៉ាស៊ីនរលកកាំរស្មី (Shockwave)</h3>
                                <div>
                                    <p> ម៉ាស៊ីនរលកកាំរស្មី (Shockwave) គឺជាឩបករណ៏ដែលមានមុខងារជាច្រើន ហើយវាត្រូវបានគេប្រើប្រាស់សំរាប់ព្យាបាលបញ្ហាឆ្អឹងឬសាច់ដុំ,ការព្យាបាលដោយចលនានិង ជាថ្នាំកីឡា និងវាអាចបាញ់បំបែកគ្រួសក្នុងដំរងនោមផងដែរ ។ គុណសម្បត្តិដ៍ធំបំផុតរបស់ម៉ាស៊ីននេះ គឺវាជួយបំបាត់ការឈឺចាប់បានយ៉ាងឆាប់រហ័ស និងជួយស្តាឡើងវិញនូវមុខងាចលនា។ ការព្យាបាលដោយពុំមានការវះកាត់បូករួមជាមួយ នឹងការមិនប្រើថ្នាំបំបាត់ការឈឺចាប់ គឺជាវិធីដ៏ល្អបំផុតដើម្បីជំរុញការជាសះស្បើយឱ្យកាន់តែលឿន និងបំបាត់ រោគសញ្ញាដែលអាចបង្ករការឈឺចាប់ថ្មីៗ និងរ៉ាំរ៉ៃ។</p>
                                </div>
                            </div>
                            <div class="col-sm-6" style="margin-bottom: 10px">
                                <img class="img-responsive img-rounded" src="{{asset('/images/services/shockwave.jpg')}}">
                            </div>
                        </div>
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