@extends('admin.layouts.app')
@section('scripts')
    <script src="{{asset('assets/js/pages/member.js')}}"></script>
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
                                    <li class="active">MemberList</li>
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
                                    <h4>Add Member</h4>
                                </div>
                                <form method="POST" @if( count($current_member)==0) action="{{url('admin/member_add')}}" @else action="{{url('admin/member_edit/'.$current_member[0]->id)}}" @endif enctype="multipart/form-data">
                                    @csrf
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" @if( count($current_member)!=0) value="{{$current_member[0]->name}}" @endif class="form-control border-none input-flat bg-ash" placeholder="">
                                             @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" @if( count($current_member)!=0) value="{{$current_member[0]->email}}" @endif class="form-control border-none input-flat bg-ash" placeholder="">
                                             @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Skills</label>
                                            <input type="text" name="skill" @if( count($current_member)!=0) value="{{$current_member[0]->skill}}" @endif  class="form-control border-none input-flat bg-ash" placeholder="">
                                             @error('skill')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Photo</label>
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
                                    <h4>Member List </h4>
                                    
                                </div>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Avatar</th>
                                                    <th >Name</th>
                                                    <th>Email</th>
                                                    <th>Skills</th>
                                                    <th style="text-align:center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($members as $member)
                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="round-img">
                                                            <a href="#"><img style="width:50px;height:50px;"class="img-circle"src="{{asset('upload/images/avatar/'.$member->avatar)}}" alt=""></a>
                                                        </div>
                                                        </td>
                                                         <td>
                                                            {{$member->name}}
                                                        </td>
                                                         <td>
                                                            {{$member->email}}
                                                        </td>
                                                         <td>
                                                            {{$member->skill}}
                                                        </td>
                                                         <td style="text-align:center">
                                                            <span><a href="{{url('admin/member_info/'.$member->id)}}"><i class="ti-pencil-alt color-success"></i></a></span>
                                                            <span><a href="{{url('admin/member_del/'.$member->id)}}"><i class="ti-trash color-danger"></i> </a></span>
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
