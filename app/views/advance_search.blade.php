@extends('main')
@section('title')
    {{$title}}
@endsection

@section('content')
@include('left_menu')
<div class="col-md-6 no-padding-left-right box-search">
    <div class="col-md-12 no-padding-left-right">
        <div class="row row-wrap wrapper-content-post">
            <div class="col-md-12 content-post ">
                <form action="{{Asset('advance-search')}}?contentSearch=Input::get('contentSearch')&prices=Input::get('prices')&colorP=Input::get('colorProduct')" method="get">
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="contentSearch">
                                @if(Session::get('locale')=='vn')
                                Nội dung
                                @else
                                Content
                                @endif
                            </label>
                            <div class="col-sm-9">
                                <input type="text" value="{{$oldContentSearch}}" name="contentSearch" id="contentSearch" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="prices">
                                @if(Session::get('locale')=='vn')
                                Giá
                                @else
                                Prices
                                @endif
                            </label>
                            <div class="col-sm-9">
                                @if(Session::get('locale')=='vn')
                                <select class="form-control" id="prices" name="prices">
                                    @if($oldPriceID == "")
                                    <option selected="selected" value="">Tất cả</option>
                                    @else
                                    <option value="">Tất cả</option>
                                    @endif

                                    @if($oldPriceID == "false")
                                    <option selected="selected" value="false">Below {{$minPrices->min}}/{{$minPrices->unit}}</option>
                                    @else
                                    <option value="false">Dưới {{$minPrices->min}}/{{$minPrices->unit}}</option>
                                    @endif


                                    @foreach($pricesList as $p)
                                        @if($oldPriceID == $p->id)
                                        <option selected="selected" value="{{$p->id}}_{{$p->min}}_{{$p->max}}">{{$p->min}}/{{$p->unit}} - {{$p->max}}/{{$p->unit}}</option>
                                        @else
                                        <option value="{{$p->id}}_{{$p->min}}_{{$p->max}}">{{$p->min}}/{{$p->unit}} - {{$p->max}}/{{$p->unit}}</option>
                                        @endif
                                    @endforeach

                                    @if($oldPriceID == "true")    
                                    <option selected="selected" value="true">Higher than {{$maxPrices->max}}/{{$maxPrices->unit}}</option>
                                    @else
                                    <option value="true">Trên {{$maxPrices->max}}/{{$maxPrices->unit}}</option>
                                    @endif
                                </select>
                                @else
                                <select class="form-control" id="prices" name="prices">
                                    @if($oldPriceID == "")
                                    <option selected="selected" value="">All</option>
                                    @else
                                    <option value="">All</option>
                                    @endif

                                    @if($oldPriceID == "false")
                                    <option selected="selected" value="false">Below {{$minPrices->min}}/{{$minPrices->unit}}</option>
                                    @else
                                    <option value="false">Below {{$minPrices->min}}/{{$minPrices->unit}}</option>
                                    @endif


                                    @foreach($pricesList as $p)
                                        @if($oldPriceID == $p->id)
                                        <option selected="selected" value="{{$p->id}}_{{$p->min}}_{{$p->max}}">{{$p->min}}/{{$p->unit}} - {{$p->max}}/{{$p->unit}}</option>
                                        @else
                                        <option value="{{$p->id}}_{{$p->min}}_{{$p->max}}">{{$p->min}}/{{$p->unit}} - {{$p->max}}/{{$p->unit}}</option>
                                        @endif
                                    @endforeach

                                    @if($oldPriceID == "true")    
                                    <option selected="selected" value="true">Higher than {{$maxPrices->max}}/{{$maxPrices->unit}}</option>
                                    @else
                                    <option value="true">Higher than {{$maxPrices->max}}/{{$maxPrices->unit}}</option>
                                    @endif
                                </select>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="form-group">
                            @if(Session::get('locale')=='vn')
                            <label class="control-label col-sm-3" for="colorProduct">Màu sắc</label>
                            <div class="col-sm-3">
                                <select class="form-control" id="colorProduct" name="colorProduct">
                                    <option value=""  id="#FFFFFF" style="background:#FFF">Tất cả</option>
                                    @foreach($colorList as $c)
                                        @if($c->id == $oldColorID)
                                        <option value="{{$c->id}}_{{$c->name}}" selected="selected" style="background:{{$c->code}}" class="option-color" id="{{$c->code}}"></option>
                                        @else
                                        <option value="{{$c->id}}_{{$c->name}}" style="background:{{$c->code}}" class="option-color" id="{{$c->code}}"></option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            @else
                            <label class="control-label col-sm-3" for="colorProduct">Color</label>
                            <div class="col-sm-3">
                                <select class="form-control" id="colorProduct" name="colorProduct">
                                    <option value=""  id="#FFFFFF" style="background:#FFF">All</option>
                                    @foreach($colorList as $c)
                                        @if($c->id == $oldColorID)
                                        <option value="{{$c->id}}_{{$c->name_en}}" selected="selected" style="background:{{$c->code}}" class="option-color" id="{{$c->code}}"></option>
                                        @else
                                        <option value="{{$c->id}}_{{$c->name_en}}" style="background:{{$c->code}}" class="option-color" id="{{$c->code}}"></option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            @endif
                            <div class="col-sm-6">
                                <input type="submit" value="Search" class="btn">
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <div class="col-md-12 no-padding-left-right">  
        <h3 class="mb20">{{$msgProduct}}</h3>
        <div class="row row-wrap" id="masonry" style="margin-top:0px">
            @if($productList)
                    @if(($total > 0 && $isSearch == "1") || ($total == 0 && $isSearch == "0"))
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
                @endif
        </div>
        @if($isSearch == "1" && $total > 9)
            {{$productList->appends(Request::all())->links();}}
        @endif
    </div>
</div>


<script>
    $(document).ready(function(){
        var oldColor = "{{$oldColorID}}";
        if(oldColor != ""){
            var code = $("#colorProduct").children(":selected").attr("id");
            $("select#colorProduct").css("background",code);
        }

        $("#colorProduct").on("change", function(){
            var id = $(this).children(":selected").attr("id");
            $("select#colorProduct").css("background",id);
        });
    });
</script>
@include('right_menu')
@endsection