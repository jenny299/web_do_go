<?php
class ServiceController extends BaseController {
	public function service(){
		$service = service::get();
		return View::make('admin.service.index')->with('service',$service);
	}
	public function edit_service($id){
		$id = service::find($id);
		return View::make('admin.service.edit')->with('id',$id);		
	}
	public function post_edit_service(){
		$input=Input::all();
		$id=Input::get('id');     	
		$admin = service::find($id);
		$admin->content  = stripcslashes($input['content']);
		$admin->content_en  = stripcslashes($input['content1']);
		$admin->save();
		return Redirect::to("admin/dashboard#service");
	}
}
?>