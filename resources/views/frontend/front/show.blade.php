@extends('frontend.master')

@section('content')
 <div class="row">
   <div class="col-lg-9 col-md-8">
	<div class="content-box">
		<div class="trick-user">
			<div class="trick-user-image">
				<img src="https://secure.gravatar.com/avatar/d571f02fae99526e987678a50179cdd1?s=100&r=g&d=mm" class="user-avatar">
			</div>
			<div class="trick-user-data">
				<h1 class="page-title">{{$tampil->title}}</h1>
				<div>
					 Submitted by <b><a href="http://laravel-tricks.com/PunnaRao">{{$tampil->author->name}}</a></b> - 2 weeks ago
				</div>
			</div>
		</div>
		<p>
			{{ $tampil->description}}
		</p>
		<pre>
			<code class="php">{{$tampil->body}}</code>
		</pre>


	</div>



	<div id="disqus_thread"></div>
			<script>
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');

			s.src = '//hendrilara.disqus.com/embed.js';

			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>


						
</div>


</div>



  @endsection