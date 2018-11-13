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
							<form id="product-form" class="smart-form">
                                {{ csrf_field() }}
								<fieldset>
									<div class="row">
										<section class="col col-6">
											<label class="input"> <i class="icon-append fa fa-tag"></i>
												<input type="text" name="pro_name" placeholder="ឈ្មោះទំនិញ" id="pro_name">
											</label>
										</section>
										<section class="col col-6">
											<label class="input"> <i class="icon-append fa fa-qrcode"></i>
												<input type="text" name="pro_code" placeholder="លេខកូដទំនិញ" id="pro_code">
											</label>
										</section>
									</div>

									<div class="row">
										<section class="col col-6">
											<label class="input"> <i class="icon-append fa fa-envelope-o"></i>
												<input type="text" name="brand_name" placeholder="ម៉ាកសញ្ញា ឬក្រុមហ៊ុន" id="brand_name">
											</label>
										</section>
                                        <section class="col col-6">
                                            <label class="select">
                                                <select name="cate_name" id="cate_name">
                                                    <option value="" selected="" disabled="">ប្រភេទទំនិញ</option>
                                                    @foreach( App\Category::all() as $category)
                                                    <option value="{{ $category->cate_id}}">{{ $category->cate_name}}</option>
                                                    @endforeach
                                                </select> <i></i> </label>
                                        </section>
									</div>
								</fieldset>

								<fieldset>
									<div class="row">
                                        <section class="col col-4">
                                            <label class="select">
                                                <select name="pro_condition" id="pro_condition">
                                                    <option value="" selected="" disabled="">លក្ខណៈទំនិញ</option>
                                                    <option value="1">ថ្មី</option>
                                                    <option value="2">មួយតឹក</option>
                                                </select> <i></i> </label>
                                        </section>
										<section class="col col-4">
											<label class="select">
												<select name="availability" id="availability">
													<option value="" selected="" disabled="">ស្ថានភាព</option>
													<option value="1">មាននៅក្នុងស្ដុក</option>
													<option value="2">អស់ពីស្ដុក</option>
												</select> <i></i> </label>
										</section>
										<section class="col col-4">
											<label class="input"> <i class="icon-append fa fa-dollar"></i>
												<input type="number" name="pro_price" placeholder="តម្លៃទំនិញ" id="pro_price">
											</label>
										</section>
									</div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <div class="col col-sm-6">
                                            <section>
                                                <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                                                    <textarea rows="5" name="pro_detail" placeholder="ពត៌មានលម្អិត" id="pro_detail"></textarea>
                                                </label>
                                            </section>
                                        </div>
                                        <div class="col col-sm-6">
                                            <section>
                                                <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                                                    <textarea rows="5" name="pro_feature" placeholder="លក្ខណៈពិសេស" id="pro_feature"></textarea>
                                                </label>
                                            </section>
                                        </div>
                                    </div>

								</fieldset>
                                <fieldset>
                                    <div class="row">
                                        <div class="col col-sm-12">
                                            <section>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" name="recommend" id="recommend"> ផលិតផលដែលណែនាំ
                                                    </label>
                                                </div>
                                            </section>
                                            <section>
                                                <label class="input">បញ្ចូលរូបភាពទំនិញ</label>
                                                <div style="margin-top: 10px; margin-bottom: 10px;">
                                                    <img style="max-height: 150px; padding-bottom: 10px; margin-right:10px; float:left" class="img-responsive" id="preview" src="" alt="" />
                                                    <input type="file" name="pro_image" id="image" style="display:none"class="form-control"/>
                                                    <a href="javascript:uploadImage();" class="btn btn-primary btn-sm">រូបភាព 1</a> |
                                                    <a style="color: red" href="javascript:removeImage()">លុបចេញ</a>
                                                    <input type="hidden" style="display: none" value="0" name="remove" id="remove">
                                                </div>

                                            </section>
                                        </div>
                                    </div>
                                </fieldset>
								<footer>
									<button type="button" id="save" class="btn btn-primary"><i class="fa fa-save"></i> រក្សាទុក</button>
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
    $(document).ready(function () {

        $('#save').click(function () {
            var proName = $('#pro_name').val();
            var proCode = $('#pro_code').val();
            var proBrand = $('#brand_name').val();
            var cateName = $('#cate_name').val();
            var proCondition = $('#pro_condition').val();
            var proStatus = $('#availability').val();
            var proPrice = $('#pro_price').val();
            var proDetail = $('#pro_detail').val();
            var proFeature = $('#pro_feature').val();
            var proImage = $('input[name="pro_image"]').val();

            $('#recommend').on('change', function(){
                this.value = this.checked ? 1 : 0;
            }).change();
            var proRecommend = $('#recommend').val();
            console.log(proRecommend);
            console.log(proImage);
            if(!proName){
                $.dialog({
                    title:false,
                    type: 'red',
                    content: 'សូមបញ្ចូល <strong>ឈ្មោះទំនិញ !</strong>',
                    backgroundDismiss:true,
                });
            }else if(!proBrand){
                $.dialog({
                    title:false,
                    type: 'red',
                    content: 'សូមបញ្ចូល <strong>ម៉ាកសញ្ញា ឬក្រុមហ៊ុន!</strong>',
                    backgroundDismiss:true,
                });
            }else if(!cateName){
                $.dialog({
                    title:false,
                    type: 'red',
                    content: 'សូមជ្រើសរើស <strong>ប្រភេទទំនិញ!</strong>',
                    backgroundDismiss:true,
                });
            }else if(!proCondition){
                $.dialog({
                    title:false,
                    type: 'red',
                    content: 'សូមជ្រើសរើស <strong>លក្ខណៈទំនិញ!</strong>',
                    backgroundDismiss:true,
                });
            }else if(!proStatus){
                $.dialog({
                    title:false,
                    type: 'red',
                    content: 'សូមជ្រើសរើស <strong>ស្ថានភាព!</strong>',
                    backgroundDismiss:true,
                });
            }else if(!proPrice){
                $.dialog({
                    title:false,
                    type: 'red',
                    content: 'សូមបញ្ចូល <strong>តម្លៃ!</strong>',
                    backgroundDismiss:true,
                });
            }else{
                saveProduct(proName, proCode, proBrand, cateName, proCondition, proStatus, proPrice, proDetail, proFeature, proRecommend, proImage);
            }
        });
    });
    function saveProduct(proName, proCode, proBrand, cateName, proCondition, proStatus, proPrice, proDetail, proFeature, proRecommend, proImage) {
        $.ajax({
            method: 'post',
            url: '/add-product',
            data: 'pro_name='+proName+'&pro_code='+proCode+'&brand_name='+ proBrand+'&cate_name='+cateName+'&pro_condition='+proCondition
            +'&availability='+proStatus+'&pro_price='+proPrice+'&pro_detail='+proDetail+'&pro_feature='+proFeature+'&recommend='+proRecommend+'&pro_image='+proImage,
            success: function (response) {
                $.alert('Successful!');
            },
            error: function (response) {
                return response;
            }
        });
    }
</script>
<script>
        function uploadImage() {
            $('#image').click();
        }

        $('#image').change(function () {
            var imgPath = $(this)[0].value;
            var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
            if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
                readURL(this);
            else
                alert("Please select image file (jpg, jpeg, png).");
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
            $('#preview').attr('src', '{{url("")}}');
            $('#remove').val(1);
        }

        $('#recommend').change(function () {
            if ($(this).attr('checked')) {
                $(this).val('TRUE');
            } else {
                $(this).val('FALSE');
            }
        });
</script>

@endsection