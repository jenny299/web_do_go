@extends('main')
@section('title')
    {{$title}}
@endsection

@section('content')

@include('left_menu')

<div class="col-md-6 no-padding-left-right ">
    <div class="row row-wrap wrapper-content-post">
        @if(Session::get('locale')=='vn')
        <h3 class="mb20">CTY CP KIÊN LINH VIỆT NAM</h3>
        <div class="col-md-12 content-post ">
			{{$post->about}}
        </div>
      	@elseif(Session::get('locale')=='en')
      	<h3 class="mb20">KIEN LINH VIET NAM COMPANY</h3>
        <div class="col-md-12 content-post ">
			{{$post->about_en}}
        </div>
      	@else
      	<h3 class="mb20">CTY CP KIÊN LINH VIỆT NAM</h3>
        <div class="col-md-12 content-post ">
			{{$post->about}}
        </div>
      	@endif
    </div>
</div>

@include('right_menu')

@endsection