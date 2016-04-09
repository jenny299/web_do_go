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

    public function vn_str_filter ($str){
       $unicode = array(

           'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

           'd'=>'đ',

           'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

           'i'=>'í|ì|ỉ|ĩ|ị',

           'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

           'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

           'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

           'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

           'D'=>'Đ',

           'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

           'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

           'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

           'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

           'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

       );

      foreach($unicode as $nonUnicode=>$uni){

           $str = preg_replace("/($uni)/i", $nonUnicode, $str);

      }

      $str = strtolower($str);
      $str = str_replace(" ", "-", $str);
      $str = str_replace(".", "-", $str);

       return $str;
   }

    public function getmenu(){
        $menu = array();

        $menu_1 = danhmuccha::orderBy('thutu')->get();
        if(count($menu_1) > 0){
            foreach($menu_1 as $m1){
                $slug = $this->vn_str_filter($m1->name);

                $data = array(
                    'id' => $m1->id,
                    'id_dmcha' => $m1->id_dmcha,
                    'name' => $m1->name,
                    'name_en' => $m1->name_en,
                    'cap' => $m1->cap,
                    'thutu' => $m1->thutu,
                    'slug' => $slug,
                );

                $menu[$m1->id] = $data;

                $menu_2 = dmcon1::where('id_dmcha','=',$m1->id)->orderBy('thutu')->get();
                if(count($menu_2) > 0){
                    foreach ($menu_2 as $m2) {
                        $slug2 = $this->vn_str_filter($m2->name);
                        $data2 = array(
                            'id' => $m2->id,
                            'id_dmcha' => $m2->id_dmcha,
                            'name' => $m2->name,
                            'name_en' => $m2->name_en,
                            'cap' => $m2->cap,
                            'thutu' => $m2->thutu,
                            'slug' => $slug2,
                        );

                        // $menu[$m1->id]['id'] = $data1;
                        $menu[$m1->id]['menucon'][$m2->id]= $data2;
                        $menu_3 = dmcon2::where('id_dmcon1','=',$m2->id)->orderBy('thutu')->get();

                        if(count($menu_3) > 0){
                            foreach($menu_3 as $m3){
                                $slug3 = $this->vn_str_filter($m3->name);
                                $data3 = array(
                                    'id' => $m3->id,
                                    'id_dmcha' => $m3->id_dmcha,
                                    'name' => $m3->name,
                                    'name_en' => $m3->name_en,
                                    'cap' => $m3->cap,
                                    'thutu' => $m3->thutu,
                                    'slug' => $slug3,
                                );
                                // $menu[$m1->id]['id'] = $data1;
                                $menu[$m1->id]['menucon'][$m2->id]['menucon1'][$m3->id]= $data3;
                                $menu_4 = dmcon3::where('id_dmcon2','=',$m3->id)->orderBy('thutu')->get();

                                if(count($menu_4) > 0){
                                    foreach($menu_4 as $m4){
                                        $slug4 = $this->vn_str_filter($m4->name);
                                        $data4 = array(
                                            'id' => $m4->id,
                                            'id_dmcha' => $m4->id_dmcha,
                                            'name' => $m4->name,
                                            'name_en' => $m4->name_en,
                                            'cap' => $m4->cap,
                                            'thutu' => $m4->thutu,
                                            'slug' => $slug4,
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

    public function home(){
        $lang = $this->checkLanguage();
        $product = product::take(6)->orderBy('updated_at')->get();

        if($lang=="vn")
            $title = "Trang chủ";
        else
            $title = "Home";
       
        $data = array(
            'title' => $title,
            'menuActive' => '#trang-chu',
            'product' => $product,
        );
        return View::make('home', $data);
    }

    public function about(){
        $post = about::get()->first();

        $lang = $this->checkLanguage();
        if($lang=="vn")
            $title = "Giới thiệu";
        else
            $title = "About";
       
        $data = array(
            'title' => $title,
            'menuActive' => '#gioi-thieu',
            'post' => $post,
        );
        return View::make('about', $data);
    }

    public function services(){
        $post = service::get()->first();

        $lang = $this->checkLanguage();
        if($lang=="vn")
            $title = "Dịch vụ";
        else
            $title = "Services";
       
        $data = array(
            'title' => $title,
            'menuActive' => '#dich-vu',
            'post' => $post,
        );
        return View::make('services', $data);
    }

    public function contact(){

        $lang = $this->checkLanguage();
        if($lang=="vn"){
            $title = "Liên hệ";
        }
        else{
            $title = "Contact";
        }
       
        $data = array(
            'title' => $title,
            'menuActive' => '#lien-he',
        );
        return View::make('contact', $data);
    }

    public function products(){
        $content = Input::get("search");
        $name = Input::get("name");
        $level = Input::get("level");
        $id = Input::get("id");
        $lang = $this->checkLanguage();
        $isSearch = 0;
        $msg = "";

        if($content!="" && $name == "" && $level == "" && $id == ""){
            if($lang=="vn"){
                $title = "Sản phẩm";
                $productList = product::distinct('id')->where('name','LIKE','%'.$content.'%')->orWhere('mota','LIKE','%'.$content.'%')->groupBy('id')->paginate(9)->appends(['search' => $content]);

                if($productList->getTotal() > 0)
                    $msg = $productList->getTotal()." products were found.";
                else
                    $msg = "No products was found.";
            }
            else{
                $title = "Products";
                $productList = product::distinct('id')->where('name_en','LIKE','%'.$content.'%')->orWhere('mota_en','LIKE','%'.$content.'%')->groupBy('id')->paginate(9)->appends(['search' => $content]);

                if($productList->getTotal() > 0)
                    $msg = $productList->getTotal()." sản phẩm được tìm thấy.";
                else
                    $msg = "Khôg có sản phẩm nào được tìm thấy.";
                
            }
            $isSearch = 1;
        }
        else if($content== "" && $name != "" && $level != "" && $id != ""){
            if($level == 1){
                $productList = product::where('id_cha','=',$id)->paginate(9)->appends(['name' => $name, 'level' => $level, 'id' => $id]);
            }
            else if($level == 2){                
                $productList = product::where('id_con1','=',$id)->paginate(9)->appends(['name' => $name, 'level' => $level, 'id' => $id]);
                // var_dump($productList);exit();
            }
            else if($level == 3){
                $productList = product::where('id_con2','=',$id)->paginate(9)->appends(['name' => $name, 'level' => $level, 'id' => $id]);
            }
            else{
                $productList = product::where('id_con3','=',$id)->paginate(9)->appends(['name' => $name, 'level' => $level, 'id' => $id]);
            }

            if($lang=="vn"){
                if($productList->getTotal() <= 0)
                   $msg = "Sản phẩm đang được cập nhật.";
            }
            else{
                if($productList->getTotal() <= 0)
                   $msg = "Products is being updated.";
            }
            $isSearch = 2;
        }
        else{
            $productList = product::paginate(9);
            if($lang=="vn"){
                if($productList->getTotal() <= 0)
                   $msg = "Sản phẩm đang được cập nhật.";
            }
            else{
                if($productList->getTotal() <= 0)
                   $msg = "Products is being updated.";
            }
        }

        if($lang=="vn"){
            $title = "Sản phẩm";
        }
        else{
            $title = "Products";
        }

        $data = array(
            'title' => $title,
            'productList' => $productList,
            'menuActive' => '#san-pham',
            'isSearch' => $isSearch,
            'msgProduct' => $msg,
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

    public function categoryproduct($name_child, $level, $idchild){
        if(Input::get('name_child') != "")
            $name_child = Input::get('name_child');
        if(Input::get('level') != "")
            $level = Input::get('level');
        if(Input::get('idchild') != "")
            $idchild = Input::get('idchild');

        if($level == 1){
            $productList = product::where('id_cha','=',$idchild)->paginate(9)->appends(['name_child' => $name_child]);
        }
        else if($level == 2){
            $productList = product::where('id_cha','=',$idchild)->paginate(9)->appends(['name_child' => $name_child, 'level' => $level, 'idchild' => $idchild]);
        }
        else if($level == 3){
            $productList = product::where('id_con2','=',$idchild)->appends(array('name_child' => $name_child, 'level' => $level, 'idchild' => $idchild ));
        }
        else{
            $productList = product::where('id_con3','=',$idchild)->appends(array('name_child' => $name_child, 'level' => $level, 'idchild' => $idchild ));
        }

        $lang = $this->checkLanguage();
        $msg = "";

        if($lang=="vn"){
            $title = "Sản phẩm";
            if($productList->getTotal() > 0)
                $msg = $productList->getTotal()." sản phẩm được tìm thấy.";
            else
                $msg = "Khôg có sản phẩm nào được tìm thấy.";
        }
        else{
            $title = "Products";
            if($productList->getTotal() > 0)
                $msg = $productList->getTotal()." products were found.";
            else
                $msg = "No products was found.";
        }
/*
        $data = array(
            'title' => $title,
            'productList' => $productList,
            'menuActive' => '#san-pham',
            'isSearch' => "2",
            'msgProduct' => $msg,
        );
        return View::make('product', $data);*/
    }

    /*public function searchproduct(){
        // echo 1;
        $content = Input::get("search");
        $lang = $this->checkLanguage(); 

        if($lang=="vn"){
            $title = "Sản phẩm";
            $result = product::distinct('id')->where('name','LIKE','%'.$content.'%')->orWhere('mota','LIKE','%'.$content.'%')->groupBy('id')->paginate(9)->appends(['search' => $content]);
        }
        else{
            $title = "Products";
            $result = product::distinct('id')->where('name_en','LIKE','%'.$content.'%')->orWhere('mota_en','LIKE','%'.$content.'%')->groupBy('id')->paginate(9)->appends(['search' => $content]);        
        }

        $data = array(
            'title' => $title,
            'productList' => $result,
            'menuActive' => '#san-pham',
        );
        return View::make('product', $data);

    }*/

}
