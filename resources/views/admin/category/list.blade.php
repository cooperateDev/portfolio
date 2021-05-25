@extends('admin.layouts.app')
@section('scripts')
    <script src="{{asset('assets/js/pages/category.js')}}"></script>
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
                                    <li class="active">CategoryList</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card alert">
                                <div class="card-header pr">
                                    <h4>Add Category</h4>
                                </div>
                                <form method="POST" @if( count($current_category)==0) action="{{url('admin/category_add')}}" @else action="{{url('admin/category_edit/'.$current_category[0]->id)}}" @endif enctype="multipart/form-data">
                                    @csrf
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" @if( count($current_category)!=0) value="{{$current_category[0]->title}}" @endif class="form-control border-none input-flat bg-ash" placeholder="">
                                             @error('title')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Desc</label>
                                            <textarea name="desc" style="height:300px;"class="form-control border-none input-flat bg-ash">@if( count($current_category)!=0) {{$current_category[0]->desc}} @endif</textarea>
                                             @error('desc')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                     <div class="basic-form m-t-20 text-center">
                                        <div class="form-group">
                                            <button class="btn btn-default btn-lg m-b-10 bg-warning border-none m-r-5 sbmt-btn" type="submit">Save</button>
                                        </div>
                                    </div>
                                </form>
                              
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Category List </h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Title</th>
                                                    <th >Description</th>
                                                    <th style="text-align:center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($categories as $category)
                                                    <tr>
                                                         <td>
                                                            {{$category->title}}
                                                        </td>
                                                         <td>
                                                            {{$category->desc}}
                                                        </td>
                                                        
                                                         <td style="text-align:center">
                                                            <span><a href="{{url('admin/category_info/'.$category->id)}}"><i class="ti-pencil-alt color-success"></i></a></span>
                                                            <span><a href="{{url('admin/category_del/'.$category->id)}}"><i class="ti-trash color-danger"></i> </a></span>
                                                            </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    
                </section>
            </div>
        </div>
    </div>
@endsection 
