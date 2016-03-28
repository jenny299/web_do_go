<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//login - logout
Route::get('login', array('uses' => 'AdminController@showLogin'));
Route::post('login', array('uses' => 'AdminController@doLogin'));
Route::get('logout', array('uses' => 'AdminController@doLogout'));

Route::get('/','HomeController@home');


//// Sản Phẩm
Route::get('sanpham',array('as' => 'sanpham' , 'uses' =>'HomeController@sanpham'));
Route::get('chitietsanpham/{id}',array('as' => 'chitietsanpham' , 'uses' =>'HomeController@chitietsanpham'));


Route::get('gioithieu',array('as' => 'gioithieu' , 'uses' =>'HomeController@gioithieu'));
Route::get('ajax/gioithieu/{id}',array('as' => 'ajax/gioithieu/' , 'uses' =>'HomeController@ajax_tongquan'));

Route::get('congtrinh-chitiet/{id}',array('as' => 'congtrinh-chitiet' , 'uses' =>'HomeController@congtrinh_chitiet'));
Route::get('ajax/congtrinh/{id}',array('as' => 'ajax/congtrinh/' , 'uses' =>'HomeController@ajax_congtrinhmoi'));


Route::get('chinhsachbanhang',array('as' => 'chinhsachbanhang' , 'uses' =>'HomeController@chinhsachbanhang'));
Route::get('tintuc',array('as' => 'tintuc' , 'uses' =>'HomeController@tintuc'));
Route::get('chitiet_tintuc/{id}',array('as' => 'chitiet_tintuc' , 'uses' =>'HomeController@chitiet_tintuc'));
Route::get('phongtrungbay',array('as' => 'phongtrungbay' , 'uses' =>'HomeController@getShowrooms'));
Route::get('phongtrungbay/{id}',array('as' => 'phongtrungbay.show' , 'uses' =>'HomeController@getShowroomShow'));

Route::get('baogiathicong',array('as' => 'baogiathicong' , 'uses' =>'HomeController@baogiathicong'));
Route::get('lienlac',array('as' => 'lienlac' , 'uses' =>'HomeController@lienlac'));


Route::post('sendmail',array('as' => 'sendmail' , 'uses' =>'HomeController@sendmail'));

Route::post('search',array('as' => 'search' , 'uses' =>'HomeController@post_search'));


//TUYET CODE
Route::get('lang/{v}',array('as' => 'lang' , 'uses' =>'HomeController@lang'));
Route::get('trang-chu',array('as' => 'trang-chu' , 'uses' =>'HomeController@home'));
Route::get('gioi-thieu',array('as' => 'gioi-thieu' , 'uses' =>'HomeController@about'));
Route::get('dich-vu',array('as' => 'dich-vu' , 'uses' =>'HomeController@services'));
Route::get('khuyen-mai',array('as' => 'khuyen-mai' , 'uses' =>'HomeController@sale'));
Route::get('san-pham',array('as' => 'san-pham' , 'uses' =>'HomeController@products'));
Route::get('lien-he',array('as' => 'lien-he' , 'uses' =>'HomeController@contact'));
Route::post('lien-he',array('as' => 'lien-he' , 'uses' =>'HomeController@sendcontact'));
// Route::get('loai-sp/{name_child}/{level}/{idchild}',array('as' => 'loai-sp/{name_child}/{level}/{idchild}' , 'uses' =>'HomeController@categoryproduct'));
// Route::get('tim-kiem',array('as' => 'tim-kiem' , 'uses' =>'HomeController@searchproduct'));

//admincontroller
Route::group(array('prefix' =>'admin','before' =>'authAdmin'),function()
{		
		//dashboard
		Route::get('dashboard',array( 'as'=>'admin.dashboard','uses'=>'AdminController@admin'));
    	Route::get('dashboard/index',array( 'as'=>'admin.dashboard','uses'=>'AdminController@index'));

    	/****************************************************************************/

    	//category
    	Route::get('category',array( 'as'=>'category','uses'=>'AdminController@category'));
    	Route::get('category/edit/{id}',array('as' => 'edit_category', 'uses' =>'AdminController@edit_category'));
		Route::post('post_edit_category',array('as' => 'post_edit_category' , 'uses' =>'AdminController@post_edit_category'));
		
		/****************************************************************************/

		//users
		Route::get('user',array( 'as'=>'admin.user', 'uses'=>'AdminController@user'));
		Route::get('user/edit/{id}',array( 'as'=>'edit_user', 'uses'=>'AdminController@edit_user'));
		Route::post('post_edit_user',array( 'as'=>'post_edit_user', 'uses'=>'AdminController@post_edit_user'));
		
		/****************************************************************************/

		//background & email
		Route::get('background',array( 'as'=>'background', 'uses'=>'BackgroundController@background'));
		Route::get('background/edit/{id}',array( 'as'=>'edit_background', 'uses'=>'BackgroundController@edit_background'));
		Route::post('post_edit_background',array( 'as'=>'post_edit_background', 'uses'=>'BackgroundController@post_edit_background'));
		Route::get('email_config',array( 'as'=>'email', 'uses'=>'BackgroundController@email'));
		Route::get('email/edit/{id}',array( 'as'=>'edit_email', 'uses'=>'BackgroundController@edit_email'));
		Route::post('post_edit_email',array( 'as'=>'post_edit_email', 'uses'=>'BackgroundController@post_edit_email'));

		/****************************************************************************/

		//about
		Route::get('about',array( 'as'=>'about', 'uses'=>'AboutController@about'));
		Route::get('about/edit/{id}',array( 'as'=>'edit_about', 'uses'=>'AboutController@edit_about'));
		Route::post('post_edit_about',array( 'as'=>'post_edit_about', 'uses'=>'AboutController@post_edit_about'));

		/****************************************************************************/

		//Service
		Route::get('service',array( 'as'=>'about', 'uses'=>'ServiceController@service'));
		Route::get('service/edit/{id}',array( 'as'=>'edit_service', 'uses'=>'ServiceController@edit_service'));
		Route::post('post_edit_service',array( 'as'=>'post_edit_service', 'uses'=>'ServiceController@post_edit_service'));

		/****************************************************************************/

		//Sale off
		Route::get('saleoff',array( 'as'=>'saleoff', 'uses'=>'SaleoffController@saleoff'));
		Route::get('saleoff/edit/{id}',array( 'as'=>'edit_saleoff', 'uses'=>'SaleoffController@edit_saleoff'));
		Route::post('post_edit_saleoff',array( 'as'=>'post_edit_saleoff', 'uses'=>'SaleoffController@post_edit_saleoff'));

		/****************************************************************************/

		//Contact
		Route::get('contact',array( 'as'=>'contact', 'uses'=>'ContactController@contact'));
		Route::get('contact/edit/{id}',array( 'as'=>'edit_contact', 'uses'=>'ContactController@edit_contact'));
		Route::post('post_edit_contact',array( 'as'=>'post_edit_contact', 'uses'=>'ContactController@post_edit_contact'));

		/****************************************************************************/

		//Comment
		Route::get('comment',array( 'as'=>'comment', 'uses'=>'CommentController@show_comment'));
		Route::get('comment/edit/{id}',array( 'as'=>'edit_comment', 'uses'=>'CommentController@edit_comment'));
		Route::post('post_edit_comment',array( 'as'=>'post_edit_comment', 'uses'=>'CommentController@post_edit_comment'));
		Route::get('comment/delete/{id}',array( 'as'=>'delete_comment', 'uses'=>'CommentController@delete_comment'));

		/****************************************************************************/

		//Slider
		Route::get('slider',array( 'as'=>'slider', 'uses'=>'SliderController@slider'));
		Route::get('slider/create',array( 'as'=>'slider.create', 'uses'=>'SliderController@create_slider'));
		Route::post('post_create_slider',array( 'as'=>'post_create_slider', 'uses'=>'SliderController@post_create_slider'));
		Route::get('slider/edit/{id}',array( 'as'=>'edit_slider', 'uses'=>'SliderController@edit_slider'));
		Route::post('post_edit_slider',array( 'as'=>'post_edit_slider', 'uses'=>'SliderController@post_edit_slider'));
		Route::get('slider/delete/{id}',array( 'as'=>'delete_slider', 'uses'=>'SliderController@delete_slider'));

		/****************************************************************************/

		//danh mục cha
		Route::get('dm_cha',array( 'as'=>'dm_cha', 'uses'=>'ProductController@dm_cha'));
		Route::get('dm_cha/create',array( 'as'=>'dm_cha.create', 'uses'=>'ProductController@create_dm_cha'));
		Route::post('post_create_dm_cha',array( 'as'=>'post_create_dm_cha', 'uses'=>'ProductController@post_create_dm_cha'));
		Route::get('dm_cha/edit/{id}',array( 'as'=>'edit_dm_cha', 'uses'=>'ProductController@edit_dm_cha'));
		Route::post('post_edit_dm_cha',array( 'as'=>'post_edit_dm_cha', 'uses'=>'ProductController@post_edit_dm_cha'));
		Route::get('dm_cha/delete/{id}',array( 'as'=>'delete_dm_cha', 'uses'=>'ProductController@delete_dm_cha'));

		//danh mục con 1
		Route::get('dm_con1/{id}',array( 'as'=>'dm_con1', 'uses'=>'ProductController@dm_con1'));
		Route::get('dm_con1/create/{id}',array( 'as'=>'dm_con1.create', 'uses'=>'ProductController@create_dm_con1'));
		Route::post('post_create_dm_con1',array( 'as'=>'post_create_dm_con1', 'uses'=>'ProductController@post_create_dm_con1'));
		Route::get('dm_con1/edit/{id}',array( 'as'=>'edit_dm_con1', 'uses'=>'ProductController@edit_dm_con1'));
		Route::post('post_edit_dm_con1',array( 'as'=>'post_edit_dm_con1', 'uses'=>'ProductController@post_edit_dm_con1'));
		Route::get('dm_con1/delete/{id}',array( 'as'=>'delete_dm_con1', 'uses'=>'ProductController@delete_dm_con1'));

		//danh mục con 2
		Route::get('dm_con2/{id}',array( 'as'=>'dm_con2', 'uses'=>'ProductController@dm_con2'));
		Route::get('dm_con2/create/{id}',array( 'as'=>'dm_con2.create', 'uses'=>'ProductController@create_dm_con2'));
		Route::post('post_create_dm_con2',array( 'as'=>'post_create_dm_con2', 'uses'=>'ProductController@post_create_dm_con2'));
		Route::get('dm_con2/edit/{id}',array( 'as'=>'edit_dm_con2', 'uses'=>'ProductController@edit_dm_con2'));
		Route::post('post_edit_dm_con2',array( 'as'=>'post_edit_dm_con2', 'uses'=>'ProductController@post_edit_dm_con2'));
		Route::get('dm_con2/delete/{id}',array( 'as'=>'delete_dm_con2', 'uses'=>'ProductController@delete_dm_con2'));

		//danh mục con 3
		Route::get('dm_con3/{id}',array( 'as'=>'dm_con3', 'uses'=>'ProductController@dm_con3'));
		Route::get('dm_con3/create/{id}',array( 'as'=>'dm_con3.create', 'uses'=>'ProductController@create_dm_con3'));
		Route::post('post_create_dm_con3',array( 'as'=>'post_create_dm_con3', 'uses'=>'ProductController@post_create_dm_con3'));
		Route::get('dm_con3/edit/{id}',array( 'as'=>'edit_dm_con3', 'uses'=>'ProductController@edit_dm_con3'));
		Route::post('post_edit_dm_con3',array( 'as'=>'post_edit_dm_con3', 'uses'=>'ProductController@post_edit_dm_con3'));
		Route::get('dm_con3/delete/{id}',array( 'as'=>'delete_dm_con3', 'uses'=>'ProductController@delete_dm_con3'));

		//sản phẩm
		Route::get('product/{id}/{id1}',array( 'as'=>'product', 'uses'=>'ProductController@product'));
		Route::get('product/create/{id}/{id1}',array( 'as'=>'product.create', 'uses'=>'ProductController@create_product'));
		Route::post('post_create_product',array( 'as'=>'post_create_product', 'uses'=>'ProductController@post_create_product'));
		Route::get('product_edit/{id}/{id1}/{id2}',array( 'as'=>'edit_product', 'uses'=>'ProductController@edit_product'));
		Route::post('post_edit_product',array( 'as'=>'post_edit_product', 'uses'=>'ProductController@post_edit_product'));
		Route::get('product/delete/{id}/{id1}/{id2}',array( 'as'=>'delete_product', 'uses'=>'ProductController@delete_product'));

		/****************************************************************************/

		//Flash
		Route::get('flash',array( 'as'=>'flash', 'uses'=>'SliderController@flash'));
		Route::get('flash/edit/{id}',array( 'as'=>'edit_flash', 'uses'=>'SliderController@edit_flash'));
		Route::post('post_edit_flash',array( 'as'=>'post_edit_flash', 'uses'=>'SliderController@post_edit_flash'));
});
?>