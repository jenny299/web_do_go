@extends('main')
@section('title')
    {{$title}}
@endsection

@section('content')
@include('left_menu')
<div class=" content-home col-md-6">
    <!-- <h1 class="mb20">Weekly Featured <small><a href="#">View All</a></small></h1> -->
    <div class="row row-wrap" style="margin-top: 45px; padding-left:15px; padding-right:15px;">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="430" height="308">
        <param name="movie" value="{{Asset($banners_web[1]->flash)}}" />
        <param name="quality" value="high" />
        <PARAM NAME="SCALE" VALUE="exactfit">
        <embed src="{{Asset($banners_web[1]->flash)}}" quality="high" type="application/x-shockwave-flash" width="100%" height="100%" SCALE="exactfit" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
    </div>

    <div id="product-quick-view-dialog" class="mfp-with-anim mfp-hide mfp-dialog mfp-dialog-big clearfix">
                <div class="row">
                    <div class="col-md-8">
                        <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="100" data-thumbwidth="100">
                            <img src="img/800x600.png" alt="Image Alternative text" title="power of the life" />
                            <img src="img/800x600.png" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                            <img src="img/800x600.png" alt="Image Alternative text" title="cascada" />
                            <img src="img/800x600.png" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                            <img src="img/800x600.png" alt="Image Alternative text" title="a turn" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-page-meta">
                            <h4>Awesome Vacation Pack</h4>
                            <p>Primis metus ut imperdiet adipiscing sit phasellus ante fringilla nostra suspendisse dictumst iaculis elit vehicula tincidunt hendrerit morbi tristique quam</p><a class="btn btn-primary btn-lg btn-block" href="#">$225 Buy Now</a>
                            <ul class="list product-page-meta-info">
                                <li>
                                    <ul class="list product-page-meta-price-list">
                                        <li><span class="product-page-meta-title">List Price</span><span class="product-page-meta-price">$1000</span>
                                        </li>
                                        <li><span class="product-page-meta-title">Discount</span><span class="product-page-meta-price">77.5%</span>
                                        </li>
                                        <li><span class="product-page-meta-title">Savings</span><span class="product-page-meta-price">$775</span>
                                        </li>
                                    </ul>
                                </li>
                                <li><span class="product-page-meta-title">Time Left to Buy</span>
                                    <!-- COUNTDOWN -->
                                    <div data-countdown="Aug 25, 2013 10:45:00" class="countdown countdown-inline"></div>
                                </li>
                                <li><span class="product-page-meta-title">5000+ bought</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr/><a class="btn btn-primary" href="#">More Details</a>
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