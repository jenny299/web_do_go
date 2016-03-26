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
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="960" height="300"><param name="movie" value="{{Asset('upload/image/960_300_top.swf')}}"><param name="quality" value="high"><param name="wmode" value="transparent"> <embed src="{{Asset('upload/image/960_300_top.swf')}}" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="960" height="300" title="Adobe Flash Player"></object>
</div>
<header class="main main-color">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if(Session::get('locale')=='vn')
                <div class="flexnav-menu-button" id="flexnav-menu-button">Danh mục</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                        @foreach($menuList as $menu1)
                        <li><a href="#">{{$menu1['name']}}</a>
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
                    </ul>
                </nav>
                @elseif(Session::get('locale')=='en')
                <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                        @foreach($menuList as $menu1)
                        <li><a href="#">{{$menu1['name_en']}}</a>
                            @if(isset($menu1['menucon']))
                            <ul>
                                @foreach($menu1['menucon'] as $menu2)
                                <li><a href="#">{{$menu2['name_en']}}</a>
                                    @if(isset($menu2['menucon1']))
                                    <ul>
                                        @foreach($menu2['menucon1'] as $menu3)
                                        <li><a href="#">{{$menu3['name_en']}}</a>
                                            @if(isset($menu3['menucon2']))
                                            <ul>
                                                @foreach($menu3['menucon2'] as $menu4)
                                                <li><a href="#">{{$menu4['name_en']}}</a></li>
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
                </nav>
                @else
                <div class="flexnav-menu-button" id="flexnav-menu-button">Danh mục</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                        @foreach($menuList as $menu1)
                        <li><a href="#">{{$menu1['name']}}</a>
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
                    </ul>
                </nav>
                @endif
            </div>
            <div class="col-md-3">
                <div class="language-menu">
                    <a href="{{Asset('/lang/vn')}}">Vietnamese</a>
                </div>
                <div class="language-menu">
                    <a href="{{Asset('/lang/en')}}">English</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="pull-right">
                    <div class="header-search-bar">
                        <label>Search</label>
                        <input type="text" placeholder="Glasses, Shoes, ect" />
                        <button><i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    $(document).ready(function(){
        $("li").on("click", function(){
            $("li").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>