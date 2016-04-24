<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
	Lang::setlocale(Session::get('locale'));
});

App::before(function($request)
{
	$profile= profile::where('user_id',"=",1)->get();
	View::share('profile',$profile);
		
	//menu
	$menu_1 = menu::find(1);
	View::share('menu_1',$menu_1);

	$menu_2 = menu::find(2);
	View::share('menu_2',$menu_2);

	$menu_3 = menu::find(3);
	View::share('menu_3',$menu_3);

	$menu_4 = menu::find(4);
	View::share('menu_4',$menu_4);

	$menu_5 = menu::find(5);
	View::share('menu_5',$menu_5); 

	$menu_6 = menu::find(6);
	View::share('menu_6',$menu_6); 

	$contact = contact::take(2)->get();
	View::share('footer',$contact); 
	View::share('lat',$contact[0]->maps_latitude); 
	View::share('log',$contact[0]->maps_longitude); 

	//List menu of product 
    $menuList = (new HomeController)->getmenu();
    View::share('menuList',$menuList); 

    //List menu top like home, product, about,...
    $menuMain = menu::where('status','=',1)->get();
    View::share('menuMain',$menuMain); 

    $web_config = configsite::get()->first();
    View::share('web_config', $web_config); 

    $background_config = $web_config->anhnen;
    if($web_config->chon==0){
	    $background_config = $web_config->maunen;
    }
    View::share('background_config', $background_config); 

    $banner = flash::all();
    View::share('banners_web',$banner); 

    App::singleton('minPrices', function(){
        $minPrices = prices::select('id','min','max','unit')->orderBy('min','asc')->first();
        return $minPrices;
    });

    App::singleton('maxPrices', function(){
        $maxPrices = prices::select('id','min','max','unit')->orderBy('max','desc')->first();
        return $maxPrices;
    });


    $colorList = colorProduct::all();
    $pricesList = prices::all();
    /*$maxPrices = prices::select('id','min','max','unit')->orderBy('max','desc')->first();
    $minPrices = prices::select('id','min','max','unit')->orderBy('min','asc')->first();*/

    View::share('minPrices', app('minPrices'));
    View::share('maxPrices', app('maxPrices'));


    View::share('colorList',$colorList);
    View::share('pricesList',$pricesList);
    /*View::share('maxPrices',$maxPrices);
    View::share('minPrices',$minPrices);*/
});


/*App::after(function($request, $response)
{
	//

});*/

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/
Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('login');
});
Route::filter('authAdmin', function()
{
    if (Auth::guest()) return Redirect::guest('login');
    if( Auth::user()->role != 1) return ('access is limited for guest');
});

Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
