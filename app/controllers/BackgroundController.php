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
		$admin->menu = $input['color_menu'];
		$admin->content = $input['color_content'];
		$admin->footer_top = $input['color_footer_top'];
		$admin->footer_bottom = $input['color_footer_bottom'];

   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png'
		);

		$rules2 = array(
			'image_logo'   => 'mimes:jpeg,png'
		);
   		$validator = Validator::make($input, $rules);
   		$validator2 = Validator::make($input, $rules2);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#background/edit/'.$id)->withErrors($validator);
		}
		else if($validator2->fails()){
			return Redirect::to('admin/dashboard#background/edit/'.$id)->withErrors($validator2);
		}
		else{
			if (Input::hasFile('image')){
       			$image= Input::file('image');
  	    		$filename= $image->getClientOriginalName();
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename.".jpg");
  	    		Image::make($image->getRealPath())->save($destinationPath);
  	    		$admin->anhnen= $destinationPath;
  	    	}

  	    	if (Input::hasFile('image_logo')){
       			$image= Input::file('image_logo');
  	    		$filename= $image->getClientOriginalName();
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename.".jpg");
  	    		Image::make($image->getRealPath())->resize(40, 40)->save($destinationPath);
  	    		$admin->icon= $destinationPath;

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