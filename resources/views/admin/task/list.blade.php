@extends('admin.layouts.app')
@section('scripts')
    <script src="{{asset('assets/js/pages/task.js')}}"></script>
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
                                    <li class="active">Task List</li>
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
                                    <h4>Add Task</h4>
                                </div>
                                <form method="POST" @if( count($current_task)==0) action="{{url('admin/task_add')}}" @else action="{{url('admin/task_edit/'.$current_task[0]->id)}}" @endif enctype="multipart/form-data">
                                    @csrf
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" @if( count($current_task)!=0) value="{{$current_task[0]->name}}" @endif class="form-control border-none input-flat bg-ash" placeholder="">
                                             @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Desc</label>
                                            <textarea name="desc" style="height:300px;"class="form-control border-none input-flat bg-ash">@if( count($current_task)!=0) {{$current_task[0]->desc}} @endif </textarea>
                                            @error('desc')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" name="link" @if( count($current_task)!=0) value="{{$current_task[0]->link}}" @endif class="form-control border-none input-flat bg-ash" placeholder="">
                                             @error('link')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category">
                                                @foreach($categories as $category)
                                                    <option @if( count($current_task)!=0 && $current_task[0]->category_id == $category->id) selected @endif>{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>File</label>
                                            <input type="file" name="file" accept="image/*">
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
                                    <h4>Task List </h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Img</th>
                                                    <th >Name</th>
                                                    <th>Desc</th>
                                                    <th>Category</th>
                                                    <th>Link</th>
                                                    <th style="text-align:center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($tasks as $task)
                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="round-img">
                                                            <a href="#"><img style="width:50px;height:50px;"src="{{asset('upload/images/task/'.$task->url)}}" alt=""></a>
                                                        </div>
                                                        </td>
                                                         <td>
                                                            {{$task->name}}
                                                        </td>
                                                         <td>
                                                            {{$task->desc}}
                                                        </td>
                                                         <td>
                                                            {{$task->title}}
                                                        </td>
                                                        <td>
                                                        	<a href="{{$task->link}}">
                                                            	{{$task->link}}
                                                        	</a>
                                                        </td>
                                                         <td style="text-align:center">
                                                            <span><a href="{{url('admin/task_info/'.$task->id)}}"><i class="ti-pencil-alt color-success"></i></a></span>
                                                            <span><a href="{{url('admin/task_del/'.$task->id)}}"><i class="ti-trash color-danger"></i> </a></span>
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
