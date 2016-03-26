<?php
class ContactController extends BaseController {
	public function contact(){
		$contact = contact::get();
		return View::make('admin.contact.index')->with('contact',$contact);
	}
	public function edit_contact($id){
		$id = contact::find($id);
		return View::make('admin.contact.edit')->with('id',$id);		
	}
	public function post_edit_contact(){
		$input=Input::all();
		$id=Input::get('id');     	
		$admin = contact::find($id);
		$admin->tencty = $input['tencty'];
		$admin->diachi = $input['diachi'];
		$admin->diachi = $input['diachi'];
		$admin->dienthoai = $input['dienthoai'];
		$admin->fax = $input['fax'];
		$admin->email = $input['email'];
		$admin->maps_latitude = $input['maps_latitude'];
		$admin->maps_longitude = $input['maps_longitude'];
		$admin->maps_label = $input['maps_label'];
		$admin->maps_address = $input['maps_address'];
		$admin->save();
		return Redirect::to("admin/dashboard#contact");
	}
}
?>