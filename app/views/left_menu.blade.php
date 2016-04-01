<div class="col-md-3 no-padding-left-right">
    <aside class="sidebar-left left-menu">
        @if(Session::get('locale')=='vn')
        <h3 class="mb20">Danh mục sản phẩm</h3>
        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left main-ul">
            @foreach($menuList as $menu1)
            <li id="menu-{{$menu1['id']}}"><i class="fa i-first"></i><a class="first-li" href="{{Asset('/san-pham')}}?name={{$menu1['slug']}}&level={{$menu1['cap']}}&id={{$menu1['id']}}">{{$menu1['name']}}</a>
                @if(isset($menu1['menucon']))
                <ul id="menu-child-1">
                    @foreach($menu1['menucon'] as $menu2)
                    <li><i></i><a href="{{Asset('/san-pham')}}?name={{$menu2['slug']}}&level={{$menu2['cap']}}&id={{$menu2['id']}}">{{$menu2['name']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul id="menu-child-2">
                            @foreach($menu2['menucon1'] as $menu3)
                            <li><i></i><a href="{{Asset('/san-pham')}}?name={{$menu3['slug']}}&level={{$menu3['cap']}}&id={{$menu3['id']}}">{{$menu3['name']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul id="menu-child-3">
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li><i></i><a href="{{Asset('/san-pham')}}?name={{$menu4['slug']}}&level={{$menu4['cap']}}&id={{$menu4['id']}}">{{$menu4['name']}}</a></li>
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
            <li id="menu-{{$menu1['id']}}"><i class="fa i-first"></i><a class="first-li" href="{{Asset('/san-pham')}}?name={{$menu1['slug']}}&level={{$menu1['cap']}}&id={{$menu1['id']}}">{{$menu1['name_en']}}</a>
                @if(isset($menu1['menucon']))
                <ul>
                    @foreach($menu1['menucon'] as $menu2)
                    <li><i></i><a href="{{Asset('/san-pham')}}?name={{$menu2['slug']}}&level={{$menu2['cap']}}&id={{$menu2['id']}}">{{$menu2['name_en']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul>
                            @foreach($menu2['menucon1'] as $menu3)
                            <li><i></i><a href="{{Asset('/san-pham')}}?name={{$menu3['slug']}}&level={{$menu3['cap']}}&id={{$menu3['id']}}">{{$menu3['name_en']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul>
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li><i></i><a href="{{Asset('/san-pham')}}?name={{$menu4['slug']}}&level={{$menu4['cap']}}&id={{$menu4['id']}}">{{$menu4['name_en']}}</a></li>
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
            <li id="menu-{{$menu1['id']}}"><i class="fa i-first"></i><a class="first-li" href="{{Asset('/san-pham')}}?name={{$menu1['slug']}}&level={{$menu1['cap']}}&id={{$menu1['id']}}">{{$menu1['name']}}</a>
                @if(isset($menu1['menucon']))
                <ul>
                    @foreach($menu1['menucon'] as $menu2)
                    <li><i></i><a href="{{Asset('/san-pham')}}?name={{$menu2['slug']}}&level={{$menu2['cap']}}&id={{$menu2['id']}}">{{$menu2['name']}}</a>
                        @if(isset($menu2['menucon1']))
                        <ul>
                            @foreach($menu2['menucon1'] as $menu3)
                            <li><i></i><a href="{{Asset('/san-pham')}}?name={{$menu3['slug']}}&level={{$menu3['cap']}}&id={{$menu3['id']}}">{{$menu3['name']}}</a>
                                @if(isset($menu3['menucon2']))
                                <ul>
                                    @foreach($menu3['menucon2'] as $menu4)
                                    <li><i></i><a href="{{Asset('/san-pham')}}?name={{$menu4['slug']}}&level={{$menu4['cap']}}&id={{$menu4['id']}}">{{$menu4['name']}}</a></li>
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
                $( this ).children("i").addClass("fa fa-plus-square");     
            }
        });

        if (localStorage.getItem("current_active") !== "undefined") {
            // alert(1 + localStorage.getItem("current_active"));
            var set_active = "ul.main-ul li#" + localStorage.getItem("current_active");
            $(set_active).addClass("active");

            if( $( set_active ).children( 'ul' ).length > 0 ) {
                $( set_active ).children( 'ul' ).slideToggle( 'fast' );     
            }
        }
        else{
            // alert($("ul.main-ul li").first().attr('id'));
            $("ul.main-ul li").first().addClass("active");
            // $("ul.main-ul li:first-child").addClass("active");
        }

        $( '.left-menu li > a.first-li' ).click( function( ) {
            // alert($(this).parent("li").attr("id"));
            localStorage.setItem("current_active", $(this).parent("li").attr("id"));
        });

        $( ".left-menu li > a:not('.first-li')" ).click( function( ) {
            // alert($(this).parent("li").attr("id"));
            localStorage.setItem("current_active", $("ul.main-ul li.active").attr("id"));
            // localStorage.setItem("current_active", $("ul.main-ul li.active").attr("id"));
        });

        $( '.left-menu li.father > i' ).click( function( ) {
            if($("ul.main-ul li").hasClass("active")){
                // alert($(this).parent("li").attr("id"));
                localStorage.setItem("current_active", $(this).parent("li").attr("id"));
            }

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
     
    });
</script>
