<?php
class BackgroundController extends BaseController {
	public function background(){
		$back = configsite::get();
		return View::make('admin.setting.background.index')->with('back',$back);
	}
	public function edit_background($id){
		$back = configsite::find($id);
		return View::make('admin.setting.background.edit')->with('back',$back);
	}
	public function post_edit_background(){
		$input=Input::all();
		$id=Input::get('id');    

		$admin = configsite::find($id);
		$admin->maunen  = $input['color'];
		$admin->chon = $input['background'];

   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png'
		);
   		$validator = Validator::make($input, $rules);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#background/edit/'.$id)->withErrors($validator);
		}
		else{
			if (Input::hasFile('image')){
       			$image= Input::file('image');
  	    		$filename= $image->getClientOriginalName();
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename.".jpg");
  	    		Image::make($image->getRealPath())->save($destinationPath);
  	    		$admin->anhnen= $destinationPath;
  	    	}
	     	if($admin->save())
			{
			    return Redirect::to("admin/dashboard#background");
			}
		}
	}

	//Setting Email
	public function email(){
		$email = configsite::get();
		return View::make('admin.setting.email.index')->with('email',$email);
	}
	public function edit_email($id){
		$email = configsite::find($id);
		return View::make('admin.setting.email.edit')->with('email',$email);
	}
	public function post_edit_email(){
		$input = Input::all();
		$id=Input::get('id');     	
		$admin = configsite::find($id);
		$admin->email  = $input['email'];
		$admin->save();
		return Redirect::to("admin/dashboard#email_config");
	}
}
?>