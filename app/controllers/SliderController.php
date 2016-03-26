<?php
class SliderController extends BaseController {
	//Slider
	public function slider(){
		$slider = slider::get();
		return View::make('admin.home.slider.index')->with('slider',$slider);
	}
	public function create_slider(){
		return View::make('admin.home.slider.create');
	}
	public function post_create_slider(){
		$input=Input::all();

   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png'
		);
   		$validator = Validator::make($input, $rules);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#slider/create')->withErrors($validator);
		}
		else{
			if (Input::hasFile('image')){
       			$image= Input::file('image');
  	    		$filename= $image->getClientOriginalName();
   	   			$destinationPath = ('upload/image/'.str_random(12).$filename.".jpg");
  	    		Image::make($image->getRealPath())->save($destinationPath);

				$create = slider::create(array(
						"thutu" => Input::get('thutu'),
						"image" => $destinationPath
		 		));
			}
		}
		return Redirect::to('admin/dashboard#slider');
	}
	public function edit_slider($id){
		$id_slider = slider::find($id);
		return View::make('admin.home.slider.edit')->with('id',$id_slider);
	}
	public function post_edit_slider(){
		$input = Input::all();
		$id = Input::get('id');
		$admin = slider::find($id);
		$admin->thutu = $input['thutu'];
	
   		$rules = array(
			'image'   => 'mimes:jpeg,bmp,png'
		);
   		$validator = Validator::make($input, $rules);

		$destinationPath = '';
   		$filename = '';

   		if($validator->fails()){
			return Redirect::to('admin/dashboard#slider/edit')->withErrors($validator);
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
				return Redirect::to("admin/dashboard#slider");
			}
		}
	}
	public function delete_slider($id){
		$com = slider::find($id);
		$com->delete();
		return Redirect::to("admin/dashboard#slider");
	}

	//Flash
	public function flash(){
		$flash = flash::get();
		return View::make('admin.home.flash.index')->with('flash',$flash);
	}
	public function edit_flash($id){
		$id_flash = flash::find($id);
		return View::make('admin.home.flash.edit')->with('id',$id_flash);
	}
	public function post_edit_flash(){
		$input=Input::all();
		$id=Input::get('id');
		$admin = flash::find($id);
		
		if (Input::hasFile('pdf1')){
			File::delete($admin->flash);
           	$file = Input::file('pdf1');
           	$destinationPath = 'upload/image/';
           	$filename = $file->getClientOriginalName();
           	$uploadSuccess = $file->move($destinationPath,$filename);
            $admin->flash = $destinationPath.$filename;
       	}
       	$admin ->save();
		return Redirect::to('admin/dashboard#flash');
	}
}
?>