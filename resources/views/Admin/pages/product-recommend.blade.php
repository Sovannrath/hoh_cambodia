@extends('/Admin.layouts.master')
@section('template_title')
ទំនិញដែលណែនាំ
@endsection
@section('content')

{{-- #MAIN CONTENT --}}
<div id="content">
    <div class="row">
        {{-- col --}}
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
            <h1 class="page-title txt-color-blueDark">
                {{-- PAGE HEADER --}}
                <i class="fa-fw fa fa-home"></i>ទំនិញដែលណែនាំ
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
                        <h2>បញ្ជីឈ្មោះប្រភេទទំនិញ</h2>
                    </header>
                    <div>
                        <div class="jarviswidget-editbox">
                        </div>
                        <div class="widget-body no-padding">
                            <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                <thead>
                                <tr>
                                    <th data-hide="phone">លេខ ID</th>
                                    <th data-hide="phone">ឈ្មោះប្រភេទទំនិញ</th>
                                    <th data-hide="phone,tablet">កាលបរិច្ឆេទបង្កើត</th>
                                    <th data-class="expand">ជម្រើស</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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
                error.css({'color':'red', 'font-size':'10px', 'padding-top':'5px'});
                error.insertAfter(element.parent()ខ);
            }
        });
    });
</script>

@endsection