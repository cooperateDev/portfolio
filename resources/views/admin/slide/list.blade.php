@extends('admin.layouts.app')
@section('scripts')
    <script src="{{asset('assets/js/pages/slide.js')}}"></script>
    <script>
    function preview_profile_image(input,id) {
        if (input.files && input.files[0]) {
            var filerdr = new FileReader();

            filerdr.onload = function(e) {
                jQuery('.list_prev'+id).attr('src', e.target.result);
            }
            filerdr.readAsDataURL(input.files[0]);
        }
    }
    </script>
@endsection
@section('page')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Slide List</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <form method="POST" action="{{url('admin/slide_add')}}" enctype="multipart/form-data">
                      @csrf 
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card alert">
                                    <div class="card-header">
                                        <h4>Slides</h4>
                                        
                                    </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="thumbnail">
                                            <a href="#">
                                                
                                                    <img class="w-100 list_prev1" @if(count($orders) != 0 && array_search(1,$orders) !== false) src="{{asset('upload/images/slide/'.$slides[array_search(1,$orders)]->url)}}" @else src="" @endif>

                                                <div class="basic-form m-t-20 ">
                                                    <div class="form-group text-center">
                                                        <input type="file" id="file1" style="display:none" name="file1" accept="image/*"  onchange="preview_profile_image(this,1)">
                                                        <a onclick="$('#file1').click();" class="btn btn-default btn-info btn-sm m-b-10  border-none m-r-5 sbmt-btn" ><i class="ti-plus color-white"></i></a>
                                                        <a href="{{url('admin/slide_del/1')}}"class="btn btn-default btn-danger btn-sm m-b-10  border-none m-r-5 sbmt-btn" ><i class="ti-trash color-white"></i></a>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img class="w-100 list_prev2" @if(count($orders) != 0 && array_search(2,$orders) !== false) src="{{asset('upload/images/slide/'.$slides[array_search(2,$orders)]->url)}}" @else src="" @endif >
                                                <div class="basic-form m-t-20 ">
                                                    <div class="form-group text-center">
                                                        <input type="file" id="file2" style="display:none" name="file2" accept="image/*"  onchange="preview_profile_image(this,2)">
                                                        <a onclick="$('#file2').click();" class="btn btn-default btn-info btn-sm m-b-10  border-none m-r-5 sbmt-btn" ><i class="ti-plus color-white"></i></a>
                                                        <a href="{{url('admin/slide_del/2')}}"class="btn btn-default btn-danger btn-sm m-b-10  border-none m-r-5 sbmt-btn" ><i class="ti-trash color-white"></i></a>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="thumbnail">
                                            <a href="#">

                                                <img class="w-100 list_prev3" @if(count($orders) != 0 && array_search(3,$orders) !== false) src="{{asset('upload/images/slide/'.$slides[array_search(3,$orders)]->url)}}" @else src="" @endif >
                                                <div class="basic-form m-t-20 ">
                                                    <div class="form-group text-center">
                                                        <input type="file" id="file3" style="display:none" name="file3" accept="image/*"  onchange="preview_profile_image(this,3)">
                                                        <a onclick="$('#file3').click();" class="btn btn-default btn-info btn-sm m-b-10  border-none m-r-5 sbmt-btn" ><i class="ti-plus color-white"></i></a>
                                                        <a href="{{url('admin/slide_del/3')}}"class="btn btn-default btn-danger btn-sm m-b-10  border-none m-r-5 sbmt-btn" ><i class="ti-trash color-white"></i></a>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="thumbnail">
                                            <a href="#">
                                                <img class="w-100 list_prev4" @if(count($orders) != 0 && array_search(4,$orders) !== false) src="{{asset('upload/images/slide/'.$slides[array_search(4,$orders)]->url)}}" @else src="" @endif >
                                                <div class="basic-form m-t-20 ">
                                                    <div class="form-group text-center">
                                                        <input type="file" id="file4" style="display:none" name="file4" accept="image/*"  onchange="preview_profile_image(this,4)">
                                                        <a onclick="$('#file4').click();" class="btn btn-default btn-info btn-sm m-b-10  border-none m-r-5 sbmt-btn" ><i class="ti-plus color-white"></i></a>
                                                        <a href="{{url('admin/slide_del/4')}}"class="btn btn-default btn-danger btn-sm m-b-10  border-none m-r-5 sbmt-btn" ><i class="ti-trash color-white"></i></a>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>    
                                <button class="btn btn-default btn-lg m-b-10 bg-info border-none m-r-5 sbmt-btn" type="submit">Save</button>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                        </div>
                    <!-- /# row -->
                    </form>
                </section>
            </div>
        </div>
    </div>
@endsection 
<script>

</script>
