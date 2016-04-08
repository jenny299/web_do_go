@extends('main')
@section('title')
    {{$title}}
@endsection

@section('content')
@include('left_menu')
<div class="col-md-6">  

    @if($isSearch == "1" || $productList->getTotal() <= 0)
        <div class="row" style="margin-top:48px; margin-left: 0px">
        <h3 class="mb20">{{$msgProduct}}</h3>
    </div>
    <div class="row row-wrap" id="masonry" style="margin-top: 0px">
    @else
    <div class="row row-wrap" id="masonry">
    @endif 
    
    @if($productList->getTotal() > 0)
        @foreach($productList as $p)
          <a class="col-md-4 col-masonry" href="#product-quick-view-dialog" data-effect="mfp-move-from-top">
             <div class="product-thumb">
                 <header class="product-header">
                     <img src="{{url($p->image)}}" alt="{{$p->name}}" title="Green Furniture" />
                     <div class="product-quick-view">
                        <!-- <span class="fa fa-eye"></span> -->
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
    @endif
        
    </div>
    @if($isSearch == "1")
        {{$productList->appends(Request::get('search'))->links();}}
    @else
        {{$productList->appends(Request::get('name'), Request::get('level'), Request::get('id'))->links();}}
    @endif
</div>
@include('right_menu')
@endsection