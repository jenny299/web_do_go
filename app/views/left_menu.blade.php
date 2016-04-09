<div class="col-md-3 no-padding-left-right">
    <aside class="sidebar-left left-menu">
        @if(Session::get('locale')=='vn')
        <h3 class="mb20">Danh mục sản phẩm</h3>
        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left main-ul">
            @foreach($menuList as $menu1)
            <li id="left-menu-{{$menu1['id']}}"><i class="fa i-first"></i><a class="first-li" id="left-{{$menu1['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu1['slug']}}&level={{$menu1['cap']}}&id={{$menu1['id']}}">{{$menu1['name']}}</a>
                @if(isset($menu1['menucon']))
                <ul>
                    @foreach($menu1['menucon'] as $menu2)
                    <li class="child-fisrt-menu-{{$menu1['id']}}"><i></i><a href="{{Asset('/san-pham')}}?name={{$menu2['slug']}}&level={{$menu2['cap']}}&id={{$menu2['id']}}" id="left-{{$menu2['slug']}}">{{$menu2['name']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul id="menu-child-2">
                            @foreach($menu2['menucon1'] as $menu3)
                            <li class="child-sencond-menu-{{$menu1['id']}}"><i></i><a href="{{Asset('/san-pham')}}?name={{$menu3['slug']}}&level={{$menu3['cap']}}&id={{$menu3['id']}}" id="left-{{$menu3['slug']}}">{{$menu3['name']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul id="menu-child-3">
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li class="child-third-menu-{{$menu1['id']}}"><i></i><a href="{{Asset('/san-pham')}}?name={{$menu4['slug']}}&level={{$menu4['cap']}}&id={{$menu4['id']}}" id="left-{{$menu4['slug']}}">{{$menu4['name']}}</a></li>
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
            <li id="left-menu-{{$menu1['id']}}"><i class="fa i-first"></i><a class="first-li" id="left-{{$menu1['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu1['slug']}}&level={{$menu1['cap']}}&id={{$menu1['id']}}">{{$menu1['name_en']}}</a>
                @if(isset($menu1['menucon']))
                <ul>
                    @foreach($menu1['menucon'] as $menu2)
                    <li class="child-fisrt-menu-{{$menu1['id']}}"><i></i><a href="{{Asset('/san-pham')}}?name={{$menu2['slug']}}&level={{$menu2['cap']}}&id={{$menu2['id']}}" id="left-{{$menu2['slug']}}">{{$menu2['name_en']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul id="menu-child-2">
                            @foreach($menu2['menucon1'] as $menu3)
                            <li class="child-sencond-menu-{{$menu1['id']}}"><i></i><a href="{{Asset('/san-pham')}}?name={{$menu3['slug']}}&level={{$menu3['cap']}}&id={{$menu3['id']}}" id="left-{{$menu3['slug']}}">{{$menu3['name_en']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul id="menu-child-3">
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li class="child-third-menu-{{$menu1['id']}}"><i></i><a href="{{Asset('/san-pham')}}?name={{$menu4['slug']}}&level={{$menu4['cap']}}&id={{$menu4['id']}}" id="left-{{$menu4['slug']}}">{{$menu4['name_en']}}</a></li>
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
            <li id="left-menu-{{$menu1['id']}}"><i class="fa i-first"></i><a class="first-li" id="left-{{$menu1['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu1['slug']}}&level={{$menu1['cap']}}&id={{$menu1['id']}}">{{$menu1['name']}}</a>
                @if(isset($menu1['menucon']))
                <ul>
                    @foreach($menu1['menucon'] as $menu2)
                    <li class="child-fisrt-menu-{{$menu1['id']}}"><i></i><a href="{{Asset('/san-pham')}}?name={{$menu2['slug']}}&level={{$menu2['cap']}}&id={{$menu2['id']}}" id="left-{{$menu2['slug']}}">{{$menu2['name']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul id="menu-child-2">
                            @foreach($menu2['menucon1'] as $menu3)
                            <li class="child-sencond-menu-{{$menu1['id']}}"><i></i><a href="{{Asset('/san-pham')}}?name={{$menu3['slug']}}&level={{$menu3['cap']}}&id={{$menu3['id']}}" id="left-{{$menu3['slug']}}">{{$menu3['name']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul id="menu-child-3">
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li class="child-third-menu-{{$menu1['id']}}"><i></i><a href="{{Asset('/san-pham')}}?name={{$menu4['slug']}}&level={{$menu4['cap']}}&id={{$menu4['id']}}" id="left-{{$menu4['slug']}}">{{$menu4['name']}}</a></li>
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
            <h5>Visitors</h5>
            <img src="{{Asset('img/welcome.png')}}" alt="" style="margin-bottom: 10px">
<!-- Counter Code START --><a href="http://www.e-zeeinternet.com/" target="_blank"><img src="http://www.e-zeeinternet.com/count.php?page=1142321&style=LED&nbdigits=5" alt="HTML Hit Counter" border="0" ></a><!-- Counter Code END -->
        </div>

    </aside>


</div>
<script>
    $( document ).ready( function( ) {
        $( '.left-menu li' ).each( function() {
            if( $( this ).children( 'ul' ).length > 0 ) {
                $( this ).addClass( 'father' );     
                $( this ).children("i").addClass("fa fa-plus-square");     
            }
        });

        if (localStorage.getItem("current_active") !== "undefined") {
            var current = localStorage.getItem("current_active");
            $("#"+current + ":not('.first-li')").css("color","red");
            $("#"+current + ".first-li").css("background","<?php echo $web_config->menu; ?>");
            $("#"+current + ":before").css("background","<?php echo $web_config->menu; ?>");
            $("#"+current).parents('ul').css("display","block");
            $("#" + current).parents("li").addClass("active");
            $("#" + current).parent("li").children('i').addClass("no-open");


            $($("#" + current).parents("li")).each( function() {
                if( $( this ).children( 'i' ).length > 0 ) {
                    if($(this).children("i:not(.no-open)").hasClass('fa-plus-square')){
                         $(this).children("i").removeClass( 'fa-plus-square' );
                         $(this).children("i").addClass( 'fa-minus-square' );
                    }
                }
            });
        }

        $( '.left-menu li.father > i' ).click( function( ) {
            $( this ).parent().children( 'ul' ).slideToggle( 'fast' );

            if($( this).hasClass('fa-plus-square')){
                $( this ).removeClass( 'fa-plus-square' );
                $( this ).addClass( 'fa-minus-square' );
            }
            else{
                $( this ).removeClass( 'fa-minus-square' );
                $( this ).addClass( 'fa-plus-square' );
            }
        });

        $( '.left-menu li a' ).click( function( ) {
            // alert($(this).attr("id"));
            localStorage.setItem("current_active", $(this).attr("id"));
        }); 
     
    });
</script>
