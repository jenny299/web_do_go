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
            // $home = home::get();
           Session::set('locale',$v);
           return Redirect::back();
           // return Redirect::back()->with('home',$home);
        }elseif($v=="vn"){
            // $home = home::get();
           Session::set('locale',$v);
           return Redirect::back();
           // return Redirect::back()->with('home',$home);
        }else{
           // $home = home::get();
           Session::set('locale',$v);
           return Redirect::back();
           // return Redirect::back()->with('home',$home);
        }
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

      /* foreach($menu as $menu1){
        echo $menu1['id'];
       }

       echo "<pre>";
       print_r($menu);
       echo "</pre>";*/
    }

    public function getindex(){
        $menuList = $this->getmenu();
      /*  echo "<pre>";
        print_r($menuList);
        echo "</pre>";exit();*/
       /* foreach($menuList as $menu1){
            echo $menu1['name']."<br>";
            if(isset($menu1['menucon'])){
                foreach($menu1['menucon'] as $menu2){
                    echo "----".$menu2['name']."<br>";

                    if(isset($menu2['menucon1'])){
                        foreach($menu2['menucon1'] as $menu3){
                             echo "----------".$menu3['name']."<br>";
                            if(isset($menu3['menucon2'])){
                                foreach($menu3['menucon2'] as $menu4){
                                    echo "--------------".$menu4['name']."<br>";
                                }
                            }
                        }
                    }
                }
                echo "<hr>";
            }
        }
        exit();*/

       
        $data = array(
            'title' => 'Home',
            'menu' => 'home',
            'menuList' => $menuList
        );
        return View::make('home', $data);
    }

}
