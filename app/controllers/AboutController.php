<?php
class AboutController extends BaseController {
	public function about(){
		$about = about::get();
		return View::make('admin.about.index')->with('about',$about);
	}
	public function edit_about($id){
		$id = about::find($id);
		return View::make('admin.about.edit')->with('id',$id);		
	}
	public function post_edit_about(){
		$input=Input::all();
		$id=Input::get('id');     	
		$admin = about::find($id);
		$admin->about  = stripcslashes($input['content']);
		$admin->about_en  = stripcslashes($input['content1']);
		$admin->save();
		return Redirect::to("admin/dashboard#about");
	}
}
?>