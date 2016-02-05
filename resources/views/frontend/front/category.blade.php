@extends('frontend.master')

@section('content')

<div class="row">
    <div class="col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
    <div class="animated bounceInDown" data-wow-delay="300ms" data-wow-duration="4s" style="visibility: visible; animation-duration: 2s; animation-delay: 300ms; animation-name: bounceInDown;">
        <div class="content-box">
            <ul class="nav nav-list">
            @foreach($category as $cate)
                <li>
                    <a href="">{{$cate->name}}<span class="text-muted pull-right">{{count($cate->category_id)}}</span></a>
                </li>
                <li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</div>
</div>

  @endsection