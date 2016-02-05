<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@if(!empty($meta['title']))
    	<title>{{ $meta['title'] . ' - Code-Sharing' }}</title>
		@else
		    <title>Code-Sharing</title>
		@endif
		    <!--Facebook Metadata /-->
		@if(!empty($meta['image']))
		    <meta property="og:image" content="{{ url($meta['image']) }}"/>
		@else
		    <meta property="og:image" content="{{ url('/mackhankins-social.jpg') }}"/>
		@endif
		@if(!empty($meta['description']))
		    <meta property="og:description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
		@else
		    <meta property="og:description" content="A personal website built on Laravel 5."/>
		@endif
		@if(!empty($meta['title']))
		    <meta property="og:title" content="{{ $meta['title'] }}"/>
		@else
		    <meta property="og:title" content="Mack Hankins"/>
		@endif
		    <!--Google+ Metadata /-->
		@if(!empty($meta['title']))
		    <meta itemprop="name" content="{{ $meta['title'] }}">
		@else
		    <meta itemprop="name" content="Mack Hankins">
		@endif
		@if(!empty($meta['description']))
		    <meta itemprop="description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
		@else
		    <meta itemprop="description" content="A personal website built on Laravel 5."/>
		@endif
		@if(!empty($meta['image']))
		    <meta itemprop="image" content="{{ url($meta['image']) }}"/>
		@else
		    <meta itemprop="image" content="{{ url('/mackhankins-social.jpg') }}"/>
		@endif
		    <!-- Twitter Metadata /-->
		    <meta name="twitter:card" content="summary"/>
		    <meta name="twitter:site" content="@mackhankins"/>
		@if(!empty($meta['title']))
		    <meta name="twitter:title" content="{{ $meta['title'] }}">
		@else
		    <meta name="twitter:title" content="Mack Hankins">
		@endif
		@if(!empty($meta['description']))
		    <meta name="twitter:description" content="{{ str_limit($meta['description'], $limit = 100, $end = '...') }}"/>
		@else
		    <meta name="twitter:description" content="A personal website built on Laravel 5."/>
		@endif
		@if(!empty($meta['image']))
		    <meta name="twitter:image" content="{{ url($meta['image']) }}"/>
		@else
		    <meta name="twitter:image" content="{{ url('/mackhankins-social.jpg') }}"/>
		@endif
		    <meta name="twitter:domain" content="mackhankins.com">
		<!-- Bootstrap CSS -->
		<!-- Latest compiled and minified CSS -->

		
		{!! Html::style('codemirror/lib/codemirror.css')!!}
		{!! Html::style('codemirror/theme/ambiance.css')!!}
		{!! Html::style('codemirror/theme/monokai.css')!!}
		{!! Html::style('codemirror/theme/blackboard.css')!!}
		{!! Html::style('codemirror/theme/dracula.css')!!}
		{!! Html::style('code-laravel/css/styles.min.css')!!}
		{!! Html::style('code-laravel/css/animate.css')!!}
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

        <style>
        	.panel-body {
        		min-height: 220px;
        		min-width: 250px;
			}

			.panel-default {
    border-top-color: #f47063;
    border-radius: 5px;
}

.container {
    max-width: 1000px;


}
  .bs-example{
    	margin: 20px;
    }
    .modal-content iframe{
        margin: 0 auto;
        display: block;
    }
        </style>
	</head>
	<body>
	<div id="wrap">
	@include('layouts.navbar')
	</div>

   <div class="container">
    @yield('content')

</div>
</div>
<div id="footer">
  <div class="container">
    <p class="text-muted credit">Website built with <a href="http://laravel.com">Laravel</a> by <a target="_blank" href="#">Hendri-Saputra</a> | <a href="http://laravel-tricks.com/about">About</a>
    <span class="pull-right">
        <a target="_blank" href="#" title="Follow updates"><i class="fa fa-twitter fa-lg"></i></a>
        |
        <a target="_blank" href="https://github.com/CodepadME/laravel-tricks" title="Get the source of this site"><i class="fa fa-github fa-lg"></i></a>
    </span>
    </p>

  </div>
</div>


		<!-- jQuery -->
		{!! Html::script('code-laravel/js/jquery.js')!!}
		{!! Html::script('codemirror/mode/php/php.js')!!}
		{!! Html::script('code-laravel/js/bootstrap.min.js')!!}
		{!! Html::script('codemirror/lib/codemirror.js')!!}
		
	  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.3/summernote.css" rel="stylesheet">
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.3/summernote.js"></script>
			
		<script src="js/jquery.js"></script>
		<script>
		var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
		    lineNumbers: true,
		    styleActiveLine: true,
		    matchBrackets: true
		  });
		  var input = document.getElementById("select");
		  function selectTheme() {
		    var theme = input.options[input.selectedIndex].textContent;
		    editor.setOption("theme", theme);
		    location.hash = "#" + theme;
		  }
		  var choice = (location.hash && location.hash.slice(1)) ||
		               (document.location.search &&
		                decodeURIComponent(document.location.search.slice(1)));
		  if (choice) {
		    input.value = choice;
		    editor.setOption("theme", choice);
		  }
		  CodeMirror.on(window, "hashchange", function() {
		    var theme = location.hash.slice(1);
		    if (theme) { input.value = theme; selectTheme(); }
		  });
		</script>
		<!-- Bootstrap JavaScript -->
		<script src="js/bootstrap.min.js"></script>


		<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>

  <script type="text/javascript">
	$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
});
</script>
	</body>
</html>