
		<div class="navbar navbar-default navbar-fixed-topp" roll="navigation">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="wow pulse animated" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-delay: 300ms; animation-iteration-count: infinite; animation-name: pulse;">
				<a class="navbar-brand" href="/">
				<img width="207" height="50" src="http://www.coderdojotc.org/_asset/zylfv6/Code42_Logo_Horizontal_Color.png">
			</a>
			</div>
			</div>
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/')}}">Id-Code</a></li>
					<li><a href="{{ url('category')}}">Tutorial</a></li>
					<li><a href="{{ url('video')}}">Video</a></li>
					<li><a href="{{ url('post/baru')}}">Kontribusi</a></li>
					<li class="visible-xs"><a href="{{'register'}}">Register</a></li>
					<li class="visible-xs"><a href="{{'login'}}">Login</a></li>
				</ul>
				<div class="navbar-right hidden-xs">
				@if(Auth::guest())
					<a href="{{ url('login')}}" class="btn btn-primary">login</a>
					<a href="{{ url('register')}}" class="btn btn-primary">Register</a>
					@else

					<ul class="nav">
					
					<li class="dropdown ">
					  <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">Hay 
					  {{ Auth::user()->name }}
					  <b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu">
					    <li class="">
					    <a href="{{ url('post/user/all')}}">My Artikel</a>
					    </li>
					    <li class="">
					    <a href="">Settings</a>
					    </li>
					    <li>
					    <a href="{{ url('logout')}}">Logout</a>
					    </li>
					  </ul>
					</li>
				</ul>
					@endif
				</div>

			</div>
		</div><!-- /.navbar-collapse -->

@if ($errors->any())
			<div class='flash alert-danger'>
				<ul class="panel-body">
					@foreach ( $errors->all() as $error )
					<li>
						{{ $error }}
					</li>
					@endforeach
				</ul>
			</div>
			@endif