extends('admin.layouts.app')
@section('script')
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
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Member List </h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li ><a href="{{url('admin/member_add')}}"><i class="ti-plus"></i></a></li>
                                        </ul>
                                    </div>
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
                                                            <a href=""><img src="{{asset('assets/images/avatar/'.$member->avatar)}}" alt=""></a>
                                                        </div>
                                                        </td>
                                                         <td>
                                                            {{$member->name}}
                                                        </td>
                                                         <td>
                                                            {{$member->email}}
                                                        </td>
                                                         <td>
                                                            {{$member->skills}}
                                                        </td>
                                                         <td style="text-align:center">
                                                            <span><a href=""><i class="ti-pencil-alt color-success"></i></a></span>
                                                            <span><a href=""><i class="ti-trash color-danger"></i> </a></span>
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
