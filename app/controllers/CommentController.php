<?php
class CommentController extends BaseController {
	public function show_comment(){
		$com = comment::orderBy('id','desc')->get();
		return View::make('admin.comment.index')->with('com',$com);
	}
	public function edit_comment($id){
		$id_com = comment::find($id);
		return View::make('admin.comment.edit')->with('id',$id_com);
	}
	public function post_edit_comment(){
		$input = Input::all();
		$id = Input::get('id');
		$admin = comment::find($id);
		$admin->status = $input['status'];
		$admin->duyet = $input['duyet'];
		$admin->save();
		return Redirect::to("admin/dashboard#comment");
	}
	public function delete_comment($id){
		$com = comment::find($id);
		$com->delete();
		return Redirect::to("admin/dashboard#comment");
	}
}
?>