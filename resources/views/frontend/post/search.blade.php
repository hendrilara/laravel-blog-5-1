@extends('frontend.master')

@section('content')

@if (count($post) === 0)
 <p>Artike Tidak Ada</p>
@elseif (count($post) >= 1)
 @foreach($post as $pos)
	<a href="#"><div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
		<div  class="panel panel-default">
			<div class="panel-thumbnail">
				<a href="http://lelangshop.com/auction/tW04xRLTVH">
				</a>
			</div>
			<div class="panel-body">
				<p class="lead text-capitalize">
					<a href="">{{$pos->title}}</a>
				</p><hr>
				<div class="">by <b><a href="">{{ $pos->author->name}}</a></b></div>
				<div class="trick-card-timeago">Submitted 2 weeks ago in <a href="">Eloquent</a></div>

				
				<p>
					<a href="" class="label label-info">{{ $pos->category->name}}</a>
				</p>
			</div>
		</div>
		
	</div></a>
	
@endforeach
@endif
</div>

</div>

@endsection