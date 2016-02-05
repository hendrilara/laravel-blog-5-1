@extends('frontend.master')


@section('content')
	
 <div class="col-md-8">
 <div class="animated bounceInDown">
    <form data-toggle="tooltip" title="Silahka Cari Code" method="GET" action="{{ url('search')}}" accept-charset="UTF-8">
	<input type="text" name="search" class="search-box form-control" placeholder="Search..." value="">
	<input style="display:none;" type="submit">
</form></div></div><br><br><br>
           
   @foreach($posts as $pos)
	<a href="#"><div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
	<div class="animated jello">
		<div  class="panel panel-default">
			<div class="panel-thumbnail">
				<a href="">
				</a>
			</div>
			<div class="panel-body">
				<p class="lead text-capitalize">
					<a href="{{ url('post/'.$pos->slug)}}" style:"color:pink;">{{$pos->title}}</a>
				</p><hr>
				<div class="">by <b><a href="">{{ $pos->author->name}}</a></b></div>
				<div class="trick-card-timeago">Submitted 2 weeks ago in <a href="">Eloquent</a></div>

				<p>
					<a href="" class="label label-info">{{ $pos->category->name}}</a>
				</p>
				<span class="disqus-comment-count" data-disqus-identifier="{{$pos->id}}"></span>
			</div>
		</div>
		</div>
	</div></a>
	
@endforeach
</div>

</div>
						

<div class="col-md-12 text-center">    
{!! $posts->render()!!}
</div>
@endsection
