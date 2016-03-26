@extends('main')
@section('title')
    {{$title}}
@endsection

@section('content')

<div class="col-md-6">
    <!-- <h1 class="mb20">Weekly Featured <small><a href="#">View All</a></small></h1> -->
    <div class="row row-wrap" style="margin-top: 45px">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="450" height="308">
        <param name="movie" value="{{Asset('upload/image/slider_img.swf')}}" />
        <param name="quality" value="high" />
        <PARAM NAME="SCALE" VALUE="exactfit">
        <embed src="{{Asset('upload/image/slider_img.swf')}}" quality="high" type="application/x-shockwave-flash" width="100%" height="100%" SCALE="exactfit" pluginspage="http://www.macromedia.com/go/getflashplayer" />
        </object>
    </div>

    <div class="row row-wrap" id="masonry">
        <a class="col-md-4 col-masonry popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Green Furniture" />
                    <div class="product-quick-view"><span class="fa fa-eye"></span>
                    </div>
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Green Furniture Pack</h5>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$102,000,000</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
        <a class="col-md-4 col-masonry popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Green Furniture" />
                    <div class="product-quick-view"><span class="fa fa-eye"></span>
                    </div>
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Green Furniture Pack</h5>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$102,000,000</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
        <a class="col-md-4 col-masonry popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Green Furniture" />
                    <div class="product-quick-view"><span class="fa fa-eye"></span>
                    </div>
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Green Furniture Pack</h5>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$102,000,000</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
        <a class="col-md-4 col-masonry popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Green Furniture" />
                    <div class="product-quick-view"><span class="fa fa-eye"></span>
                    </div>
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Green Furniture Pack</h5>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$102,000,000</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
        <a class="col-md-4 col-masonry popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Green Furniture" />
                    <div class="product-quick-view"><span class="fa fa-eye"></span>
                    </div>
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Green Furniture Pack</h5>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$102,000,000</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
        <a class="col-md-4 col-masonry popup-text" href="#product-quick-view-dialog" data-effect="mfp-move-from-top">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="img/800x600.png" alt="Image Alternative text" title="Green Furniture" />
                    <div class="product-quick-view"><span class="fa fa-eye"></span>
                    </div>
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Green Furniture Pack</h5>
                    <div class="product-meta">
                        <ul class="product-price-list">
                            <li><span class="product-price">$102,000,000</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </a>
        
       
      
    </div>
</div>
@endsection