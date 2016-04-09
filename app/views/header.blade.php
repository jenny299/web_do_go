<!-- <div class="top-main-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="{{Asset('/')}}" class="logo mt5">
                    <img src="img/logo-small-dark.png" alt="Image Alternative text" title="Image Title" />
                </a>
            </div>
            <div class="col-md-6 col-md-offset-4">
                <div class="pull-right">
                    <ul class="login-register">
                        <li><a href="#"><i class="fa fa-sign-in"></i>Vietnamese</a>
                        </li>
                        <li><a href="#"><i class="fa fa-edit"></i>English</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true" data-white-pagination="true" data-nav="false">
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="960" height="300">
        <param name="movie" value="{{Asset($banners_web[0]->flash)}}">
        <param name="quality" value="high">
        <param name="wmode" value="transparent"> 
        <embed src="{{Asset($banners_web[0]->flash)}}" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="960" height="300" title="Adobe Flash Player">
    </object>
</div>
<header class="main main-color" style="background-color: <?php echo $web_config->menu; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                @if(Session::get('locale')=='vn')
                <div class="flexnav-menu-button" id="flexnav-menu-button">Danh mục</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                        @foreach($menuMain as $mm)
                            @if($mm->id == 4)
                            <li id="{{$mm->link}}"><a href="{{Asset($mm->link)}}">{{$mm->title}}</a>
                                <ul id="top-menu-cus">
                                @foreach($menuList as $menu1)
                                <li><a  id="top-{{$menu1['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu1['slug']}}&level={{$menu1['cap']}}&id={{$menu1['id']}}">{{$menu1['name']}}</a>
                                    @if(isset($menu1['menucon']))
                                    <ul>
                                        @foreach($menu1['menucon'] as $menu2)
                                        <li><a id="top-{{$menu2['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu2['slug']}}&level={{$menu2['cap']}}&id={{$menu2['id']}}">{{$menu2['name']}}</a>
                                            @if(isset($menu2['menucon1']))
                                            <ul>
                                                @foreach($menu2['menucon1'] as $menu3)
                                                <li><a id="top-{{$menu3['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu3['slug']}}&level={{$menu3['cap']}}&id={{$menu3['id']}}">{{$menu3['name']}}</a>
                                                    @if(isset($menu3['menucon2']))
                                                    <ul>
                                                        @foreach($menu3['menucon2'] as $menu4)
                                                        <li><a id="top-{{$menu4['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu4['slug']}}&level={{$menu4['cap']}}&id={{$menu4['id']}}">{{$menu4['name']}}</a></li>
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
                            </li>
                            @else
                            <li id="{{$mm->link}}"><a href="{{Asset($mm->link)}}">{{$mm->title}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
                @elseif(Session::get('locale')=='en')
                <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                        @foreach($menuMain as $mm)
                            @if($mm->id == 4)
                            <li id="{{$mm->link}}"><a href="{{Asset($mm->link)}}">{{$mm->title_en}}</a>
                                <ul id="top-menu-cus">
                                @foreach($menuList as $menu1)
                                <li><a id="top-{{$menu1['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu1['slug']}}&level={{$menu1['cap']}}&id={{$menu1['id']}}">{{$menu1['name_en']}}</a>
                                    @if(isset($menu1['menucon']))
                                    <ul>
                                        @foreach($menu1['menucon'] as $menu2)
                                        <li><a id="top-{{$menu2['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu2['slug']}}&level={{$menu2['cap']}}&id={{$menu2['id']}}">{{$menu2['name_en']}}</a>
                                            @if(isset($menu2['menucon1']))
                                            <ul>
                                                @foreach($menu2['menucon1'] as $menu3)
                                                <li><a id="top-{{$menu3['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu3['slug']}}&level={{$menu3['cap']}}&id={{$menu3['id']}}">{{$menu3['name_en']}}</a>
                                                    @if(isset($menu3['menucon2']))
                                                    <ul>
                                                        @foreach($menu3['menucon2'] as $menu4)
                                                        <li><a id="top-{{$menu4['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu4['slug']}}&level={{$menu4['cap']}}&id={{$menu4['id']}}">{{$menu4['name_en']}}</a></li>
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
                            </li>
                            @else
                            <li id="{{$mm->link}}"><a href="{{Asset($mm->link)}}">{{$mm->title_en}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
                @else
                <div class="flexnav-menu-button" id="flexnav-menu-button">Danh mục</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                        @foreach($menuMain as $mm)
                            @if($mm->id == 4)
                            <li id="{{$mm->link}}"><a href="{{Asset($mm->link)}}">{{$mm->title}}</a>
                                <ul id="top-menu-cus">
                                @foreach($menuList as $menu1)
                                <li><a  id="top-{{$menu1['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu1['slug']}}&level={{$menu1['cap']}}&id={{$menu1['id']}}">{{$menu1['name']}}</a>
                                    @if(isset($menu1['menucon']))
                                    <ul>
                                        @foreach($menu1['menucon'] as $menu2)
                                        <li><a id="top-{{$menu2['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu2['slug']}}&level={{$menu2['cap']}}&id={{$menu2['id']}}">{{$menu2['name']}}</a>
                                            @if(isset($menu2['menucon1']))
                                            <ul>
                                                @foreach($menu2['menucon1'] as $menu3)
                                                <li><a id="top-{{$menu3['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu3['slug']}}&level={{$menu3['cap']}}&id={{$menu3['id']}}">{{$menu3['name']}}</a>
                                                    @if(isset($menu3['menucon2']))
                                                    <ul>
                                                        @foreach($menu3['menucon2'] as $menu4)
                                                        <li><a id="top-{{$menu4['slug']}}" href="{{Asset('/san-pham')}}?name={{$menu4['slug']}}&level={{$menu4['cap']}}&id={{$menu4['id']}}">{{$menu4['name']}}</a></li>
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
                            </li>
                            @else
                            <li id="{{$mm->link}}"><a href="{{Asset($mm->link)}}">{{$mm->title}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                </nav>
                @endif
            </div>
            <div class="col-md-2">
                <div class="language-menu">
                    <a href="{{Asset('/lang/vn')}}">VN</a>
                </div>
                <div class="language-menu">
                    <a href="{{Asset('/lang/en')}}">EN</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pull-right">
                    <form method="get" action="{{Asset('san-pham')}}?search=Input::get('search')">
                        <div class="header-search-bar">
                            @if(Session::get('locale')=='vn')
                                <label>Tìm</label>
                            @elseif(Session::get('locale')=='en') 
                                <label>Search</label>
                            @else
                                <label>Tìm</label>
                            @endif
                            
                                <!-- <input type="text" name="search-content" id="search-content" /> -->
                                {{ Form::text('search', Input::old('search')) }}
                                <button style="background: <?php echo $web_config->menu; ?>"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<input type="text" id="menuActive" value="{{$menuActive}}" style="display:none">
<script>
    $(document).ready(function(){
        $($("#menuActive").val()).addClass('active');

        $("ul:not('.list') li").on("click", function(){
            $("li").removeClass("active");
            $(this).addClass("active");
        });

        $( '#top-menu-cus li a' ).click( function( ) {
            var act = $(this).attr("id");
                act = act.substring(4,act.length);
                act = "left-" + act;
            localStorage.setItem("current_active", act);
        }); 
    });
</script>