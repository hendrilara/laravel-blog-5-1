@extends('frontend.master')

@section('content')

<div class="row push-down">
		<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
			<h1 class="page-title">Artikel Saya </h1>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-right">
			<a href="{{ url('post/baru')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Add Code</a>
			<a href="{{ url('post/baru')}}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Add Artikel</a>
		</div>
	</div>

@if (count($posts) === 0)
 <div class="row js-trick-container">
			<div class="col-lg-12">
			<div class="alert alert-danger">
				Maaf Artikel Belum Ada
			</div>
@elseif (count($posts) >= 1)
 @foreach($posts as $pos)
	<a href="#"><div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
		<div  class="panel panel-default">
			<div class="panel-thumbnail">
				<a href="">
				</a>
			</div>
			<div class="panel-body">
				<p class="lead text-capitalize">
					<a href="">{{$pos->title}}</a>
				</p><hr>
				<div class="">by <b><a href=""></a></b></div>
				<div class="trick-card-timeago">Submitted 2 weeks ago in <a href="">Eloquent</a></div>
				<p>
					<a href="" class="label label-info"></a>
				</p>
				
				@if(!Auth::guest() && ($pos->author_id == Auth::user()->id || Auth::user()->is_admin()))
					@if($pos->active == '1')
					<button class="btn" style="float: right"><a href="{{ url('edit/'.$pos->slug)}}">Edit Post</a></button>
					@else
					<button class="btn" style="float: right"><a href="{{ url('edit/'.$pos->slug)}}">Edit Draft</a></button>
					@endif
				@endif
			</div>
		</div>
		
	</div></a>
	
@endforeach
@endif
</div>

</div>
@endsection