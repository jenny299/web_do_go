@extends('main')
@section('title')
    {{$title}}
@endsection

@section('content')


<div class="col-md-6 no-padding-left-right ">
    <div class="row row-wrap wrapper-content-post">
        @if(Session::get('locale')=='vn')
        <h3 class="mb20">DỊCH VỤ</h3>
        <div class="col-md-12 content-post ">
			{{$post->content}}
        </div>
      	@elseif(Session::get('locale')=='en')
      	<h3 class="mb20">SERVICES</h3>
        <div class="col-md-12 content-post ">
			{{$post->content_en}}
        </div>
      	@else
      	<h3 class="mb20">DỊCH VỤ</h3>
        <div class="col-md-12 content-post ">
			{{$post->content}}
        </div>
      	@endif
    </div>
          
</div>
@endsection