@extends('main')
@section('title')
    {{$title}}
@endsection

@section('content')
@include('left_menu')
<div class="col-md-6" style="margin-top:18px;">
    <!-- <div>{{$productList->count()}}</div> -->
    <div class="row row-wrap" id="masonry" >
        @foreach($productList as $p)
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

    {{$productList->appends(Request::get('search'))->links();}}
</div>
@include('right_menu')
@endsection