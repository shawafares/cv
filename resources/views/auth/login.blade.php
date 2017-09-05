@extends('layouts.auth')
@section('content')
<div class="account-pages"></div>
    <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="account-bg">
                <div class="card-box mb-0">
                    <div class="text-center m-t-20">
                        <a href="#" class="logo">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Login</span>
                        </a>
                    </div>
                    <div class="m-t-10 p-20">
                        <div class="row">
                            
                        </div>
                        <form class="m-t-20" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="email" class="form-control" type="text" required="" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="password" class="form-control" type="password" required="" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group text-center row m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button><BR><BR>
                                    <a href="/" class="pull-left">Back To Website</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end card-box-->
        </div>
        <!-- end wrapper page -->
    @endsection