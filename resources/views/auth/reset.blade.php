@extends('frontend.master')

@section('content')
   <div class="col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
    <div class="animated rubberBand">
		          <div  class="content-box login-form">
		<form method="POST" action="/password/reset">
		    {!! csrf_field() !!}
		    <input type="hidden" name="token" value="{{ $token }}">

		    @if (count($errors) > 0)
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    @endif

		    <div>
		        Email
		        <input type="email" name="email" value="{{ old('email') }}">
		    </div>

		    <div>
		        Password
		        <input type="password" name="password">
		    </div>

		    <div>
		        Confirm Password
		        <input type="password" name="password_confirmation">
		    </div>

		    <div>
		        <button type="submit">
		            Reset Password
		        </button>
		    </div>
		</form>
		</div>
		</div>
		</div>

@endsection