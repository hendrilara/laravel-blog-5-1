
@extends('frontend.master')

@section('content')
<div class="col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
    <div class="animated rubberBand">
				          <div  class="content-box login-form">
		<form method="POST" action="/password/email">
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
		        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
		    </div>

		    <div class="form-group">
                 <button type="submit" class="btn btn-primary btn-block btn-login">Klik Reset</button>
             </div>
		</form>

		</div>
		</div>
		</div>
@endsection