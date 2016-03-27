@extends('main')
@section('title')
    {{$title}}
@endsection

@section('content')
@include('left_menu')
<div class="col-md-6">
    <!-- <h1 class="mb20">Weekly Featured <small><a href="#">View All</a></small></h1> -->
    <div class="row row-wrap" style="margin-top: 45px; padding-left:15px; padding-right:15px;">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="430" height="308">
        <param name="movie" value="{{Asset('upload/image/slider_img.swf')}}" />
        <param name="quality" value="high" />
        <PARAM NAME="SCALE" VALUE="exactfit">
        <embed src="{{Asset('upload/image/slider_img.swf')}}" quality="high" type="application/x-shockwave-flash" width="100%" height="100%" SCALE="exactfit" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
    </div>

    <div class="row row-wrap" id="masonry">
        @foreach($product as $p)
          <a class="col-md-4 col-masonry popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top">
             <div class="product-thumb">
                 <header class="product-header">
                     <img src="{{url($p->image)}}" alt="Image Alternative text" title="Green Furniture" />
                     <div class="product-quick-view"><span class="fa fa-eye"></span>
                     </div>
                 </header>
                 <div class="product-inner">
                     <h5 class="product-title">
                        @if(Session::get('locale')=='vn')
                          <?php echo str_limit(strip_tags($p->name), $limit = 25, $end = '...'); ?>
                        @elseif(Session::get('locale')=='en') 
                          <?php echo str_limit(strip_tags($p->name_en), $limit = 25, $end = '...'); ?>
                        @else
                          <?php echo str_limit(strip_tags($p->name), $limit = 25, $end = '...'); ?>
                        @endif
                    </h5>
                     <div class="product-meta">
                         <ul class="product-price-list">
                             <li><span class="product-price">{{$p->gia}} VND </span></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </a>
        @endforeach
    </div>
    <div class="row" style="text-align:center">
        
        @if(Session::get('locale')=='vn')
          <a href="{{Asset('san-pham')}}" class="view-all">Xem tất cả</a>
        @elseif(Session::get('locale')=='en') 
          <a href="{{Asset('san-pham')}}" class="view-all">View all</a>
        @else
          <a href="{{Asset('san-pham')}}" class="view-all">Xem tất cả</a>
        @endif
    </div>
</div>
@include('right_menu')
@endsection