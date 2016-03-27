<div class="col-md-3 no-padding-left-right">
    <aside class="sidebar-left left-menu">
        <h3 class="mb20">Danh muc san pham</h3>
        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left main-ul">
            @foreach($menuList as $menu1)
            <li><a href="#"><i class="fa  fa-bars"></i>{{$menu1['name']}}</a>
                @if(isset($menu1['menucon']))
                <ul>
                    @foreach($menu1['menucon'] as $menu2)
                    <li><a href="#">{{$menu2['name']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul>
                            @foreach($menu2['menucon1'] as $menu3)
                            <li><a href="#">{{$menu3['name']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul>
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li><a href="#">{{$menu4['name']}}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
            <!-- <li class="close-all"><a href="#"><i class="fa fa-calendar"></i>Food & Drink</a>
                <ul>
                    <li><a href="#">Fashion</a>
                         <ul>
                            <li><a href="#">Fashion213</a>
                                <ul>
                                    <li><a href="#">Fashion</a></li>
                                    <li><a href="#">Fashion</a>
                                    <li><a href="#">Fashion</a>
                                    <li><a href="#">Fashion</a>
                                </ul>
                            </li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Fashion</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-calendar"></i>Events</a>
                <ul class="ul-child">
                    <li><a href="#"><i class="fa fa-umbrella"></i>Fashion</a></li>
                    <li><a href="#"><i class="fa fa-umbrella"></i>Fashion</a></li>
                    <li><a href="#"><i class="fa fa-umbrella"></i>Fashion</a></li>
                    <li><a href="#"><i class="fa fa-umbrella"></i>Fashion</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-female"></i>Beauty</a>
            </li>
            <li><a href="#"><i class="fa fa-bolt"></i>Fitness</a>
            </li>
            <li><a href="#"><i class="fa fa-headphones"></i>Electronics</a>
            </li>
            <li><a href="#"><i class="fa fa-image"></i>Furniture</a>
            </li>
            <li><a href="#"><i class="fa fa-umbrella"></i>Fashion</a>
            </li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i>Shopping</a>
            </li>
            <li><a href="#"><i class="fa fa-home"></i>Home & Graden</a>
            </li>
            <li><a href="#"><i class="fa fa-plane"></i>Travel</a>
            </li> -->
        </ul>

         <div class="sidebar-box">
            <h5>Recent Viewed</h5>
            <ul class="thumb-list">
                <li>
                    <a href="#">
                        <img src="img/70x70.png" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                    </a>
                    <div class="thumb-list-item-caption">
                        <h5 class="thumb-list-item-title"><a href="#">Best Camera</a></h5>
                        <p class="thumb-list-item-price">$384</p>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="img/70x70.png" alt="Image Alternative text" title="AMaze" />
                    </a>
                    <div class="thumb-list-item-caption">
                        <h5 class="thumb-list-item-title"><a href="#">New Glass Collection</a></h5>
                        <p class="thumb-list-item-price">$351</p>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="img/70x70.png" alt="Image Alternative text" title="waipio valley" />
                    </a>
                    <div class="thumb-list-item-caption">
                        <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                        <p class="thumb-list-item-price">$500</p>
                    </div>
                </li>
            </ul>
        </div>

        <div class="sidebar-box">
            <h5>Popular</h5>
            <ul class="thumb-list">
                <li>
                    <a href="#">
                        <img src="img/70x70.png" alt="Image Alternative text" title="Food is Pride" />
                    </a>
                    <div class="thumb-list-item-caption">
                        <h5 class="thumb-list-item-title"><a href="#">Best Pasta</a></h5>
                        <p class="thumb-list-item-price">$312</p>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="img/70x70.png" alt="Image Alternative text" title="Old No7" />
                    </a>
                    <div class="thumb-list-item-caption">
                        <h5 class="thumb-list-item-title"><a href="#">Jack Daniels Huge Pack</a></h5>
                        <p class="thumb-list-item-price">$447</p>
                    </div>
                </li>
                <li>
                    <a href="#">
                        <img src="img/70x70.png" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                    </a>
                    <div class="thumb-list-item-caption">
                        <h5 class="thumb-list-item-title"><a href="#">Beach Holidays</a></h5>
                        <p class="thumb-list-item-price">$195</p>
                    </div>
                </li>
            </ul>
        </div>

    </aside>


</div>
<script>
    /*$(document).ready(function(){
        $("ul.left-menu li").on("click", function(){
            if($(this).children("ul").hasClass("open")){
                $(this).children("ul").removeClass("open");
            }else{
                $(this).children("ul").addClass("open");
            }
            // alert(1);
            // $("ul.left-menu li ul").removeClass("open");


        });
    });*/

    $( document ).ready( function( ) {
        $( '.left-menu li' ).each( function() {
            if( $( this ).children( 'ul' ).length > 0 ) {
                $( this ).addClass( 'father' );     
            }
        });
     
        $( '.left-menu li.father > a' ).click( function( ) {
            $( this ).parent("li").toggleClass( 'active-cus' );
            $( this ).parent().children( 'ul' ).slideToggle( 'fast' );
        });


        //     $( '.tree li' ).each( function() {
        //         $( this ).toggleClass( 'active' );
        //         $( this ).children( 'ul' ).slideToggle( 'fast' );
        //     });
        // });
     
    });
</script>
