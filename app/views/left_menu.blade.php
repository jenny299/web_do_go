<div class="col-md-3 no-padding-left-right">
    <aside class="sidebar-left left-menu">
        @if(Session::get('locale')=='vn')
        <h3 class="mb20">Danh mục sản phẩm</h3>
        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left main-ul">
            @foreach($menuList as $menu1)
            <li><a class="first-li"><i class="fa  fa-bars"></i>{{$menu1['name']}}</a>
                @if(isset($menu1['menucon']))
                <ul>
                    @foreach($menu1['menucon'] as $menu2)
                    <li><i></i><a>{{$menu2['name']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul>
                            @foreach($menu2['menucon1'] as $menu3)
                            <li><i></i><a>{{$menu3['name']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul>
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li><i></i><a>{{$menu4['name']}}</a></li>
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
        </ul>
        @elseif(Session::get('locale')=='en') 
        <h3 class="mb20">Category List</h3>
        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left main-ul">
             @foreach($menuList as $menu1)
            <li><a class="first-li"><i class="fa  fa-bars"></i>{{$menu1['name_en']}}</a>
                @if(isset($menu1['menucon']))
                <ul>
                    @foreach($menu1['menucon'] as $menu2)
                    <li><i></i><a>{{$menu2['name_en']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul>
                            @foreach($menu2['menucon1'] as $menu3)
                            <li><i></i><a>{{$menu3['name_en']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul>
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li><i></i><a>{{$menu4['name_en']}}</a></li>
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
        </ul>
        @else
        <h3 class="mb20">Danh mục sản phẩm</h3>
        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left main-ul">
             @foreach($menuList as $menu1)
            <li><a class="first-li"><i class="fa  fa-bars"></i>{{$menu1['name']}}</a>
                @if(isset($menu1['menucon']))
                <ul>
                    @foreach($menu1['menucon'] as $menu2)
                    <li><i></i><a>{{$menu2['name']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul>
                            @foreach($menu2['menucon1'] as $menu3)
                            <li><i></i><a>{{$menu3['name']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul>
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li><i></i><a>{{$menu4['name']}}</a></li>
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
        </ul>
        @endif
       
            

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
                $( this ).children( 'i' ).addClass("fa fa-plus-square");     
            }
        });
     
        $( '.left-menu li.father > a.first-li' ).click( function( ) {
            $( this ).parent("li").toggleClass( 'active-cus' );
            $( this ).parent().children( 'ul' ).slideToggle( 'fast' );

/*            if($( this ).prev("i").hasClass('fa-plus-square')){
                $( this ).prev("i").removeClass( 'fa-plus-square' );
                $( this ).prev("i").addClass( 'fa-minus-square' );
            }
            else{
                $( this ).prev("i").removeClass( 'fa-minus-square' );
                $( this ).prev("i").addClass( 'fa-plus-square' );
            }*/
        });

        $( '.left-menu li.father > i' ).click( function( ) {
            $( this ).parent("li").toggleClass( 'active-cus' );
            $( this ).parent().children( 'ul' ).slideToggle( 'fast' );

            if($( this ).hasClass('fa-plus-square')){
                $( this ).removeClass( 'fa-plus-square' );
                $( this ).addClass( 'fa-minus-square' );
            }
            else{
                $( this ).removeClass( 'fa-minus-square' );
                $( this ).addClass( 'fa-plus-square' );
            }
        });


        //     $( '.tree li' ).each( function() {
        //         $( this ).toggleClass( 'active' );
        //         $( this ).children( 'ul' ).slideToggle( 'fast' );
        //     });
        // });
     
    });
</script>
