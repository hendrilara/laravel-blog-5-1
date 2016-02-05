@extends('frontend.master')

@section('content')

    <div class="col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
    <div class="animated rubberBand">
          <div  class="content-box login-form">
              <h1 class="page-title">Login</h1>      
               <form method="POST" action="" accept-charset="UTF-8">
               {!! csrf_field() !!}
                @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
               <div class="form-group">
                <label for="email" class="control-label">Email</label>
                <input class="form-control" placeholder="Username..." name="email" type="email" ivalue="{{ old('email') }}">
                </div>

                <div class="form-group">
                 <label for="password" class="control-label">Password</label>
                 <input class="form-control" placeholder="Password..." name="password" type="password" id="password" >
                </div>

                <div class="checkbox">
                <label>
                <input name="remember" type="checkbox"> Remember me
                </label>
                </div>

                <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-block btn-login">Login</button>
                </div>
                </form>

                    <p class="text-center" style="margin-top:10px;">OR</p>
                    <a class="btn btn-default btn-block btn-login-github" href="{{ url('auth/github')}}"><i class="fa fa-github"></i> Login with Github</a>
                     <a class="btn btn-default btn-block btn-login-github" href="{{ url('auth/facebook')}}"><i class="fa fa-facebook"></i> Login with Facebook</a>
                    <ul class="nav nav-list">
                        <li class="text-center"><a href="{{ url('password/email')}}">Reset Password</a></li>
                        <li class="text-center"><a href="{{ url('register')}}">Belum Punya Akun</a></li>
                    </ul>
                </div>
                </div>
            </div>
       

@endsection