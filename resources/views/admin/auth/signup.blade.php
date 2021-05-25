@extends('admin.layouts.app')
@section('page')
<body class="bg-primary">

<div class="unix-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>WIN-WIN</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Register to Administration</h4>
                            <form method="POST" action="{{url('admin/signup')}}">
                                @csrf
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="User Name">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email"  name="email"  class="form-control" placeholder="Email">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password"  name="password" class="form-control" placeholder="Password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Agree the terms and policy 
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="{{url('admin/login')}}"> Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection 