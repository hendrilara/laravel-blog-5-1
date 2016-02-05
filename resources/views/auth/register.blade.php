@extends('frontend.master')

@section('content')

      <div class="col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
       <div class="animated bounce">
                <div class="content-box register-form">
                    <h1 class="page-title">Daftar Sekarang</h1>
                   
                    <form method="POST" action="{{ url('register')}}" accept-charset="UTF-8"> 
                    {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input class="form-control"type="text" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">E-mail</label>
                             <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input class="form-control" placeholder="Password" name="password" type="password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="control-label">Confirm Password</label>
                            <input class="form-control" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block btn-login">Daftar</button>
                        </div>
                    </form>

                    <p class="text-center" style="margin-top:10px;">OR</p>
                    <a class="btn btn-default btn-block btn-login-github" href="{{ url('auth/github')}}"><i class="fa fa-github"></i> Daftar with Github</a>
                     <a class="btn btn-default btn-block btn-login-github" href="{{ url('auth/facebook')}}">
                     <i class="fa fa-facebook"></i> Daftar with Facebook</a>
                    <ul class="nav nav-list">
                        <li class="text-center"><a href="{{ url('login')}}">Sudah Punya Akun</a></li>
                    </ul>
                </div>
            </div>
       </div>

@endsection