<?php
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function lang($v){
        if($v=="en"){
           Session::set('locale',$v);
           return Redirect::back();
        }elseif($v=="vn"){
           Session::set('locale',$v);
           return Redirect::back();
        }else{
           Session::set('locale',$v);
           return Redirect::back();
        }
    }

    public function checkLanguage(){
        if(Session::get('locale') != "vn" && Session::get('locale')!="en"){
            Session::set('locale',"vn");
        }
        return Session::get('locale');
    }

    public function getmenu(){
        $menu = array();

        $menu_1 = danhmuccha::orderBy('thutu')->get();
        if(count($menu_1) > 0){
            foreach($menu_1 as $m1){
                $data = array(
                    'id' => $m1->id,
                    'id_dmcha' => $m1->id_dmcha,
                    'name' => $m1->name,
                    'name_en' => $m1->name_en,
                    'cap' => $m1->cap,
                    'thutu' => $m1->thutu
                );
                $menu[$m1->id] = $data;

                $menu_2 = dmcon1::where('id_dmcha','=',$m1->id)->orderBy('thutu')->get();
                if(count($menu_2) > 0){
                    foreach ($menu_2 as $m2) {
                        $data2 = array(
                            'id' => $m2->id,
                            'id_dmcha' => $m2->id_dmcha,
                            'name' => $m2->name,
                            'name_en' => $m2->name_en,
                            'cap' => $m2->cap,
                            'thutu' => $m2->thutu
                        );
                        // $menu[$m1->id]['id'] = $data1;
                        $menu[$m1->id]['menucon'][$m2->id]= $data2;
                        $menu_3 = dmcon2::where('id_dmcon1','=',$m2->id)->orderBy('thutu')->get();

                        if(count($menu_3) > 0){
                            foreach($menu_3 as $m3){
                                $data3 = array(
                                    'id' => $m3->id,
                                    'id_dmcha' => $m3->id_dmcha,
                                    'name' => $m3->name,
                                    'name_en' => $m3->name_en,
                                    'cap' => $m3->cap,
                                    'thutu' => $m3->thutu
                                );
                                // $menu[$m1->id]['id'] = $data1;
                                $menu[$m1->id]['menucon'][$m2->id]['menucon1'][$m3->id]= $data3;
                                $menu_4 = dmcon3::where('id_dmcon2','=',$m3->id)->orderBy('thutu')->get();

                                if(count($menu_4) > 0){
                                    foreach($menu_4 as $m4){
                                        $data4 = array(
                                            'id' => $m4->id,
                                            'id_dmcha' => $m4->id_dmcha,
                                            'name' => $m4->name,
                                            'name_en' => $m4->name_en,
                                            'cap' => $m4->cap,
                                            'thutu' => $m4->thutu
                                        );
                                        $menu[$m1->id]['menucon'][$m2->id]['menucon1'][$m3->id]['menucon2'][$m4->id]= $data4;
                                    }
                                }
                            }
                        }
 
                    }
                }
             
           }
       }
       return $menu;
    }

    public function getFooter(){
        $footer = contact::take(2)->get();
        return $footer;
    }

    public function getindex(){
        $menuMain = menu::where('status','=',1)->get();
        $menuList = $this->getmenu();
        $footer = $this->getFooter();

        $lang = $this->checkLanguage();
        if($lang=="vn")
            $title = "Trang chủ";
        else
            $title = "Home";
       
        $data = array(
            'title' => $title,
            'menuList' => $menuList,
            'menuMain' => $menuMain,
            'menuActive' => '#trang-chu',
            'footer' => $footer,
        );
        return View::make('home', $data);
    }

    public function home(){
        $menuMain = menu::where('status','=',1)->get();
        $menuList = $this->getmenu();
        $footer = $this->getFooter();

        $lang = $this->checkLanguage();
        if($lang=="vn")
            $title = "Trang chủ";
        else
            $title = "Home";
       
        $data = array(
            'title' => $title,
            'menuList' => $menuList,
            'menuMain' => $menuMain,
            'menuActive' => '#trang-chu',
            'footer' => $footer,
        );
        return View::make('home', $data);
    }

    public function about(){
        $menuMain = menu::where('status','=',1)->get();
        $menuList = $this->getmenu();
        $post = about::get()->first();
        $footer = $this->getFooter();

        $lang = $this->checkLanguage();
        if($lang=="vn")
            $title = "Giới thiệu";
        else
            $title = "About";
       
        $data = array(
            'title' => $title,
            'menuList' => $menuList,
            'menuMain' => $menuMain,
            'menuActive' => '#gioi-thieu',
            'post' => $post,
            'footer' => $footer,
        );
        return View::make('about', $data);
    }

    public function services(){
        $menuMain = menu::where('status','=',1)->get();
        $menuList = $this->getmenu();
        $post = service::get()->first();
        $footer = $this->getFooter();

        $lang = $this->checkLanguage();
        if($lang=="vn")
            $title = "Dịch vụ";
        else
            $title = "Services";
       
        $data = array(
            'title' => $title,
            'menuList' => $menuList,
            'menuMain' => $menuMain,
            'menuActive' => '#dich-vu',
            'post' => $post,
            'footer' => $footer,
        );
        return View::make('services', $data);
    }

    public function contact(){
        $menuMain = menu::where('status','=',1)->get();
        $menuList = $this->getmenu();
        $footer = $this->getFooter();

        $lang = $this->checkLanguage();
        if($lang=="vn"){
            $title = "Liên hệ";
            $lat = $footer[0]->maps_latitude;
            $log = $footer[0]->maps_longitude;
        }
        else{
            $title = "Contact";
            $lat = $footer[0]->maps_latitude;
            $log = $footer[0]->maps_longitude;
        }
       
        $data = array(
            'title' => $title,
            'menuList' => $menuList,
            'menuMain' => $menuMain,
            'menuActive' => '#lien-he',
            'footer' => $footer,
            'lat' => $lat,
            'log' => $log,
        );
        return View::make('contact', $data);
    }

    public function products(){
        $menuMain = menu::where('status','=',1)->get();
        $menuList = $this->getmenu();
        $footer = $this->getFooter();
        $productList = product::all();

        $lang = $this->checkLanguage();
        if($lang=="vn")
            $title = "Sản phẩm";
        else
            $title = "Products";
       
        $data = array(
            'title' => $title,
            'menuList' => $menuList,
            'menuMain' => $menuMain,
            'menuActive' => '#san-pham',
            'footer' => $footer,
        );
        return View::make('product', $data);
    }

     public function sendcontact(){
        // echo 1;
        $companyEmail = "anhtuyet299@gmail.com";
        $mail = "mailserver9563@gmail.com";
        $dataEmail = array(
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'messages' => Input::get('message'),
            'companyEmail' => $companyEmail,
            'mailSend' => $mail,
        );
        Mail::send('template_send_mail',$dataEmail,function($mess) use ($dataEmail){
            $mess->from($dataEmail['mailSend'],$dataEmail['email']);
            $mess->to($dataEmail['companyEmail']);
            $mess->subject("Liên hệ từ khách hàng");
        });

        echo "sent";
    
    }

}
