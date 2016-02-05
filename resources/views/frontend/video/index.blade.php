@extends('frontend.master')

@section('content')
<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
@foreach($post as $pos)
<div class="bs-example">
    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Launch Demo Modal</a>
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">YouTube Video</h4>
                </div>
                <div class="modal-body">
                    <iframe id="cartoonVideo" width="560" height="315" src="//www.youtube.com/embed/R1cF3qfoge8" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>     
@endforeach
</div>




@endsection