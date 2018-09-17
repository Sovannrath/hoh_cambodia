@extends('/Admin.layouts.master')
@section('template_title')
បន្ថែមទំនិញ
@endsection
@section('content')

{{-- #MAIN CONTENT --}}
<div id="content">
	<div class="row">
		{{-- col --}}
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
			<h1 class="page-title txt-color-blueDark">
				{{-- PAGE HEADER --}}
				<i class="fa-fw fa fa-home"></i>បន្ថែមទំនិញថ្មី
			</h1>
		</div>
		{{-- end col --}}
		{{-- col --}}
	</div>
	{{-- widget grid --}}
	<section id="widget-grid" class="">
		{{-- row --}}
		<div class="row">
			<article class="col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget" id="" data-widget-editbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
					<header>
						<span class="widget-icon"> <i class="fa fa-pencil-square-o txt-color-darken"></i> </span>
						<h2>ទម្រង់បញ្ចូលទំនិញ</h2>
					</header>
					<div>
						<div class="jarviswidget-editbox">
						</div>
						<div class="widget-body no-padding"​>
							<form action="{{url('/add-product')}}" id="product-form" class="smart-form" method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								<fieldset>
									<div class="row">
										<section class="col col-6">
											<label class="input"> <i class="icon-append fa fa-tag"></i>
												<input type="text" name="pro_name" placeholder="ឈ្មោះទំនិញ">
											</label>
										</section>
										<section class="col col-6">
											<label class="input"> <i class="icon-append fa fa-qrcode"></i>
												<input type="text" name="pro_code" placeholder="លេខកូដទំនិញ">
											</label>
										</section>
									</div>

									<div class="row">
										<section class="col col-6">
											<label class="input"> <i class="icon-append fa fa-envelope-o"></i>
												<input type="text" name="brand_name" placeholder="ម៉ាកសញ្ញា ឬក្រុមហ៊ុន">
											</label>
										</section>
										<section class="col col-6">
											<label class="select">
												<select name="pro_condition">
													<option value="0" selected="" disabled="">លក្ខណៈទំនិញ</option>
													<option value="1">ថ្មី</option>
													<option value="2">មួយតឹក</option>
												</select> <i></i> </label>
										</section>
									</div>
								</fieldset>

								<fieldset>
									<div class="row">
										<section class="col col-6">
											<label class="select">
												<select name="availability">
													<option value="0" selected="" disabled="">ស្ថានភាព</option>
													<option value="1">មាននៅក្នុងស្ដុក</option>
													<option value="2">អស់ពីស្ដុក</option>
												</select> <i></i> </label>
										</section>
										<section class="col col-6">
											<label class="input"> <i class="icon-append fa fa-dollar"></i>
												<input type="text" name="pro_price" placeholder="តម្លៃទំនិញ">
											</label>
										</section>
									</div>

									<div class="row">
										<section class="col col-6">
                                            <label class="select">
                                                <select name="cate_name">
                                                    <option value="0" selected="" disabled="">ប្រភេទទំនិញ</option>
                                                    @foreach( App\Category::all() as $category)
                                                    <option value="{{ $category->cate_id}}">{{ $category->cate_name}}</option>
                                                    @endforeach
                                                </select> <i></i> </label>
										</section>
									</div>

									<section>
                                        <label class="input"> <i class="icon-append fa fa-calendar"></i>បញ្ចូលរូបភាពទំនិញ
                                        </label>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <img style="max-height: 150px; padding-bottom: 10px; float:left" class="img-responsive" id="preview" src="" alt="" />
                                            <input type="file" name="pro_image" id="image" style="display:none"class="form-control"/>
                                            <a href="javascript:changeProfile();" class="btn btn-primary btn-sm">រូបភាព 1</a> |
                                            <a style="color: red" href="javascript:removeImage()">លុបចេញ</a>
                                            <input type="hidden" style="display: none" value="0" name="remove" id="remove">
                                        </div>

									</section>

									<section>
										<label class="textarea"> <i class="icon-append fa fa-comment"></i>
											<textarea rows="5" name="pro_detail" placeholder="ពត៌មានលម្អិត"></textarea>
										</label>
									</section>
								</fieldset>
								<footer>
									<button type="submit" class="btn btn-primary">
										បន្ថែមទំនិញថ្មី
									</button>
								</footer>
							</form>
						</div>{{-- end widget body --}}
					</div>{{-- end widget div --}}
				</div>{{-- end jarviswidget --}}
			</article>
		</div>
	</section>
</div>

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
<script type="text/javascript">
    runAllForms();

    $(function() {
        // Validation
        $("#product-form").validate({
            // Rules for form validation
            rules : {
                pro_name: {
                    required : true,
                },
                pro_condition: {
                    required : true,
                },
                availability : {
                    required : true,
                },
                pro_price : {
                    required : true,
                },
                cate_name : {
                    required : true,
                },
                pro_detail : {
                    required : true,
                }

            },

            // Messages for form validation
            messages : {
                pro_name:{
                    required : 'បញ្ចូលឈ្មោះទំនិញ',
                },
                pro_condition:{
                    required : 'ជ្រើសរើសលក្ខណៈតំនិញ',
                },
                availability:{
                    required : 'ជ្រើសរើសស្ថានភាព',
                },
                pro_price:{
                    required : 'បញ្ចូលតម្លតម្លៃ',
                },
                cate_name:{
                    required : 'ជ្រើសរើសប្រភេទទំនិញ',
                },
                pro_detail:{
                    required : 'បញ្ចូលពត៌មានលម្អិត',
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.css({'color':'red', 'font-size':'11px', 'padding-top':'5px'});
                error.insertAfter(element.parent());
            }
        });
    });
</script>

@endsection