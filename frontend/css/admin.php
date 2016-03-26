<?php
/**
*
*/
class Admin extends Admin_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('box_m');
	}
	public function index ( ){
	
		$this->data['boxes'] = $this->box_m->get_all();
		//load the subview
		$this->data['fields'] = array(
				'box_title' => 'Tiêu đề',
				'box_slug' => 'Slug',
			);
		$this->data['subview']= 'box/admin/index';
		$this->load->view('dashboard/_layout_main', $this->data);
	}
	public function edit ( $id = null){
		
		if ( $id ) {
			$this->data['box'] = $this->box_m->get( $id );
		}else{
			$this->data['box'] = $this->box_m->get_new();
		}
		$rules = $this->box_m->rules;
		$this->form_validation->set_rules($rules);
		
		if ($this->form_validation->run() == true) {
			$data = $this->box_m->array_from_post(
				array(
					'box_slug',
					'box_title',
					'box_title_en',
					'box_title_cn',
					'box_title_jp',
					'box_content',
					'box_content_en',
					'box_content_cn',
					'box_content_jp',
					'display',
				));
				if ($id) {
					//update
					$this->box_m->update( $id, $data );
				}else{
					//insert
					$this->box_m->insert( $data );
				}
				
			redirect('box/admin');
		}
				$this->data['subview']	=	'box/admin/edit';
		$this->load->view('dashboard/_layout_main', $this->data );
		
	}
	public function delete ( $id){
		if ($this->box_m->delete( $id )) {
			redirect('box/admin');
		}
		
	}
}