<?php
class SaleoffController extends BaseController {
	public function saleoff(){
		$sale = sale::get();
		return View::make('admin.saleoff.index')->with('sale',$sale);
	}
	public function edit_saleoff($id){
		$id = sale::find($id);
		return View::make('admin.saleoff.edit')->with('id',$id);		
	}
	public function post_edit_saleoff(){
		$input=Input::all();
		$id=Input::get('id');     	
		$admin = sale::find($id);
		$admin->content  = stripcslashes($input['content']);
		$admin->content_en = stripcslashes($input['content1']);
		$admin->save();
		return Redirect::to("admin/dashboard#saleoff");
	}
}
?>