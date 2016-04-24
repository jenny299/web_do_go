<?php
class ProductController extends BaseController {

	//DANH MỤC CHA
	public function dm_cha(){
		$dm_cha = danhmuccha::get();
		return View::make('admin.product.dmcha.index')->with('dm_cha',$dm_cha);
	}
	public function create_dm_cha(){
		return View::make('admin.product.dmcha.create');
	}
	public function post_create_dm_cha(){
		$input = Input::all();

		$create = danhmuccha::create(array(
			"name" => Input::get('name'),
			"name_en" => Input::get('name_en'),
			"cap" => Input::get('cap'),
			"thutu" => Input::get('thutu')
		));
		return Redirect::to('admin/dashboard#dm_cha');
	}
	public function edit_dm_cha($id){
		$id_cha = danhmuccha::find($id);
		return View::make('admin.product.dmcha.edit')->with('id',$id_cha);
	}
	public function post_edit_dm_cha(){
		$input = Input::all();
		$id = Input::get('id');
		$admin = danhmuccha::find($id);
		$admin->name = $input['name'];
		$admin->name_en = $input['name_en'];
		$admin->cap = $input['cap'];
		$admin->thutu = $input['thutu'];
		$admin->save();
		return Redirect::to('admin/dashboard#dm_cha');
	}
	public function delete_dm_cha($id){
		$id_cha = danhmuccha::find($id);
		$id_cha->delete();
		return Redirect::to('admin/dashboard#dm_cha');
	}
	//DANH MỤC CHA

	//DANH MỤC CON 1
	public function dm_con1($id){
		$dm_con1 = dmcon1::where('id_dmcha','=',$id)->get();
		return View::make('admin.product.dmcon1.index')->with('dm_con1',$dm_con1)->with('id',$id);
	}
	public function create_dm_con1($id){
		return View::make('admin.product.dmcon1.create')->with('id',$id);
	}
	public function post_create_dm_con1(){
		$input = Input::all();
		$id = Input::get('id');

		$create = dmcon1::create(array(
			"id_dmcha" => $id,
			"name" => Input::get('name'),
			"name_en" => Input::get('name_en'),
			"cap" => Input::get('cap'),
			"thutu" => Input::get('thutu')
		));
		return Redirect::to('admin/dashboard#dm_con1/'.$id);
	}
	public function edit_dm_con1($id){
		$id_con1 = dmcon1::find($id);
		return View::make('admin.product.dmcon1.edit')->with('id',$id_con1);
	}
	public function post_edit_dm_con1(){
		$input = Input::all();
		$id = Input::get('id');
		$id_cha = Input::get('id_cha');

		$admin = dmcon1::find($id);
		$admin->name = $input['name'];
		$admin->name_en = $input['name_en'];
		$admin->cap = $input['cap'];
		$admin->thutu = $input['thutu'];
		$admin->save();
		return Redirect::to('admin/dashboard#dm_con1/'.$id_cha);
	}
	public function delete_dm_con1($id){
		$id_con1 = dmcon1::find($id);
		$new = $id_con1->id_dmcha;
		$id_con1->delete();
		return Redirect::to('admin/dashboard#dm_con1/'.$new);
	}
	//DANH MỤC CON 1

	//DANH MỤC CON 2
	public function dm_con2($id){
		$dm_con2 = dmcon2::where('id_dmcon1','=',$id)->get();
		return View::make('admin.product.dmcon2.index')->with('dm_con2',$dm_con2)->with('id',$id);
	}
	public function create_dm_con2($id){
		return View::make('admin.product.dmcon2.create')->with('id',$id);
	}
	public function post_create_dm_con2(){
		$input = Input::all();
		$id = Input::get('id');

		$create = dmcon2::create(array(
			"id_dmcon1" => $id,
			"name" => Input::get('name'),
			"name_en" => Input::get('name_en'),
			"cap" => Input::get('cap'),
			"thutu" => Input::get('thutu')
		));
		return Redirect::to('admin/dashboard#dm_con2/'.$id);
	}
	public function edit_dm_con2($id){
		$id_con2 = dmcon2::find($id);
		return View::make('admin.product.dmcon2.edit')->with('id',$id_con2);
	}
	public function post_edit_dm_con2(){
		$input = Input::all();
		$id = Input::get('id');
		$id_con1 = Input::get('id_con1');

		$admin = dmcon2::find($id);
		$admin->name = $input['name'];
		$admin->name_en = $input['name_en'];
		$admin->cap = $input['cap'];
		$admin->thutu = $input['thutu'];
		$admin->save();
		return Redirect::to('admin/dashboard#dm_con2/'.$id_con1);
	}
	public function delete_dm_con2($id){
		$id_con2 = dmcon2::find($id);
		$new = $id_con2->id_dmcon1;
		$id_con2->delete();
		return Redirect::to('admin/dashboard#dm_con2/'.$new);
	}
	//DANH MỤC CON 2

	//DANH MỤC CON 3
	public function dm_con3($id){
		$dm_con3 = dmcon3::where('id_dmcon2','=',$id)->get();
		return View::make('admin.product.dmcon3.index')->with('dm_con3',$dm_con3)->with('id',$id);
	}
	public function create_dm_con3($id){
		return View::make('admin.product.dmcon3.create')->with('id',$id);
	}
	public function post_create_dm_con3(){
		$input = Input::all();
		$id = Input::get('id');

		$create = dmcon3::create(array(
			"id_dmcon2" => $id,
			"name" => Input::get('name'),
			"name_en" => Input::get('name_en'),
			"cap" => 0,
			"thutu" => Input::get('thutu')
		));
		return Redirect::to('admin/dashboard#dm_con3/'.$id);
	}
	public function edit_dm_con3($id){
		$id_con3 = dmcon3::find($id);
		return View::make('admin.product.dmcon3.edit')->with('id',$id_con3);
	}
	public function post_edit_dm_con3(){
		$input = Input::all();
		$id = Input::get('id');
		$id_con2 = Input::get('id_con2');

		$admin = dmcon3::find($id);
		$admin->name = $input['name'];
		$admin->name_en = $input['name_en'];
		$admin->thutu = $input['thutu'];
		$admin->save();
		return Redirect::to('admin/dashboard#dm_con3/'.$id_con2);
	}
	public function delete_dm_con3($id){
		$id_con3 = dmcon3::find($id);
		$new = $id_con3->id_dmcon2;
		$id_con3->delete();
		return Redirect::to('admin/dashboard#dm_con3/'.$new);
	}
	//DANH MỤC CON 3

	//SẢN PHẨM
	public function product($id,$id1){
		if($id == 0){
			$product = product::where('id_cha',"=",$id1)->get();
		}
		else if($id == 1){
			$product = product::where('id_con1',"=",$id1)->get();
		}
		else if($id == 2){
			$product = product::where('id_con2',"=",$id1)->get();
		}
		else if($id == 3){
			$product = product::where('id_con3',"=",$id1)->get();
		}
		return View::make('admin.product.sanpham.index')->with('product',$product)->with('id',$id)->with('id1',$id1);
	}
	public function create_product($id,$id1){
		return View::make('admin.product.sanpham.create')->with('id',$id)->with('id1',$id1);
	}
	public function post_create_product(){
		$input = Input::all();
		$id = Input::get('id');
		$id1 = Input::get('id1');

   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png'
		);
   		$validator = Validator::make($input, $rules);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#product/create')->withErrors($validator);
		}
		else{
			if (Input::hasFile('image')){
       			$image= Input::file('image');
  	    		$filename= $image->getClientOriginalName();
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename.".jpg");
  	    		Image::make($image->getRealPath())->save($destinationPath);

				if($id == 0){
					$create = product::create(array(
						"id_cha" => $id1,
						"id_con1" => 0,
						"id_con2" => 0,
						"id_con3" => 0,
						"name" => Input::get('name'),
						"name_en" => Input::get('name_en'),
						"image" => $destinationPath,
						"gia" => Input::get('gia'),
						"mota" => stripcslashes(Input::get('content1')),
						"mota_en" => stripcslashes(Input::get('content2')),
						"thongso" => stripcslashes(Input::get('content3')),
						"thongso_en" => stripcslashes(Input::get('content4'))
					));					
				}
				else if($id == 1){
					$create = product::create(array(
						"id_cha" => 0,
						"id_con1" => $id1,
						"id_con2" => 0,
						"id_con3" => 0,
						"name" => Input::get('name'),
						"name_en" => Input::get('name_en'),
						"image" => $destinationPath,
						"gia" => Input::get('gia'),
						"mota" => stripcslashes(Input::get('content1')),
						"mota_en" => stripcslashes(Input::get('content2')),
						"thongso" => stripcslashes(Input::get('content3')),
						"thongso_en" => stripcslashes(Input::get('content4'))
					));					
				}
				else if($id == 2){
					$create = product::create(array(
						"id_cha" => 0,
						"id_con1" => 0,
						"id_con2" => $id1,
						"id_con3" => 0,
						"name" => Input::get('name'),
						"name_en" => Input::get('name_en'),
						"image" => $destinationPath,
						"gia" => Input::get('gia'),
						"mota" => stripcslashes(Input::get('content1')),
						"mota_en" => stripcslashes(Input::get('content2')),
						"thongso" => stripcslashes(Input::get('content3')),
						"thongso_en" => stripcslashes(Input::get('content4'))
					));					
				}
				else if($id == 3){
					$create = product::create(array(
						"id_cha" => 0,
						"id_con1" => 0,
						"id_con2" => 0,
						"id_con3" => $id1,
						"name" => Input::get('name'),
						"name_en" => Input::get('name_en'),
						"image" => $destinationPath,
						"gia" => Input::get('gia'),
						"mota" => stripcslashes(Input::get('content1')),
						"mota_en" => stripcslashes(Input::get('content2')),
						"thongso" => stripcslashes(Input::get('content3')),
						"thongso_en" => stripcslashes(Input::get('content4'))
					));					
				}
			}
		}
		return Redirect::to('admin/dashboard#product/'.$id.'/'.$id1);
	}
	public function edit_product($id0,$id1,$id2){
		$product = product::find($id2);
		$color = colorProduct::orderBy('name')->get();
		return View::make('admin.product.sanpham.edit')->with('id',$product)->with('id0',$id0)->with('id1',$id1)->with("colorList", $color);
	}
	public function post_edit_product(){
		$input = Input::all();
		$id = Input::get('id');
		$id0 = Input::get('id0');
		$id1 = Input::get('id1');
		$admin = product::find($id);
		$admin->name = $input['name'];
		$admin->name_en = $input['name_en'];
		$admin->color = $input['color_product'];
		$admin->gia = $input['gia'];
		$admin->mota = stripcslashes($input['content1']);
		$admin->mota_en = stripcslashes($input['content2']);
		$admin->thongso = stripcslashes($input['content3']);
		$admin->thongso_en = stripcslashes($input['content4']);

   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png'
		);
   		$validator = Validator::make($input, $rules);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#product_edit/'.$id0."/".$id1."/".$id)->withErrors($validator);
		}
		else{
			if (Input::hasFile('image')){
       			$image= Input::file('image');
  	    		$filename= $image->getClientOriginalName();
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename.".jpg");
  	    		Image::make($image->getRealPath())->save($destinationPath);
  	    		$admin->image = $destinationPath;			
			}
	    	if($admin->save()){
				return Redirect::to("admin/dashboard#product/".$id0."/".$id1);
			}
		}
	}
	public function delete_product($id,$id1,$id2){
		$product = product::find($id2);
		$product->delete();
		return Redirect::to('admin/dashboard#product/'.$id.'/'.$id1);
	}
	//SẢN PHẨM
}
?>