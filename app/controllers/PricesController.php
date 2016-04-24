<?php
class PricesController extends BaseController {
	public function prices(){
		$prices = prices::all();
		return View::make('admin.prices.index')->with('prices',$prices);
	}
	public function edit_prices($id){
		$id = prices::find($id);
		return View::make('admin.prices.edit')->with('id',$id);		
	}
	public function post_edit_prices(){
		$input=Input::all();
		$id=Input::get('id');     	
		$admin = prices::find($id);
		$admin->min  = (float) $input['min'];
		$admin->max  = (float) $input['max'];
		$admin->unit  = $input['unit'];
		$admin->save();
		return Redirect::to("admin/dashboard#prices");
	}
	public function create(){
		return View::make('admin.prices.create');		
	}
	public function post_new_prices(){
		$input=Input::all();
		$admin = new prices;
		$admin->min  = (float) $input['min'];
		$admin->max  = (float) $input['max'];
		$admin->unit  = $input['unit'];
		$admin->save();
		return Redirect::to("admin/dashboard#prices");
	}
	public function delete_prices($id){
		$id = prices::find($id);
		$id->delete();

		return Redirect::to("admin/dashboard#prices");
	}

}
?>