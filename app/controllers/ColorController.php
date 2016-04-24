<?php
class ColorController extends BaseController {
	public function color(){
		$color = colorProduct::all();
		return View::make('admin.color.index')->with('color',$color);
	}
	public function edit_color($id){
		$id = colorProduct::find($id);
		return View::make('admin.color.edit')->with('id',$id);		
	}
	public function post_edit_color(){
		$input=Input::all();
		$id=Input::get('id');     	
		$admin = colorProduct::find($id);
		$admin->name  = stripcslashes($input['title']);
		$admin->name_en  = stripcslashes($input['title_en']);
		$admin->code  = $input['color'];
		$admin->save();
		return Redirect::to("admin/dashboard#color");
	}
	public function create(){
		return View::make('admin.color.create');		
	}
	public function post_new_color(){
		$input=Input::all();
		$admin = new colorProduct;
		$admin->name  = stripcslashes($input['title']);
		$admin->name_en  = stripcslashes($input['title_en']);
		$admin->code  = $input['color'];
		$admin->save();
		return Redirect::to("admin/dashboard#color");
	}

	public function delete_color($id){
		$id = colorProduct::find($id);
		$msg = "";
		$product = product::where('color','=',$id->id)->get();

// dd(DB::getQueryLog());
		if($product){
			foreach ($product as $value) {
				$p = product::find($value->id);
				$p->color = 0;
				$p->save();
			}
			$id->delete();

		}

		return Redirect::to("admin/dashboard#color");
	}
}
?>