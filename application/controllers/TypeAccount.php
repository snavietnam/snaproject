<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TypeAccount extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('User_model');
			$this->load->model('User_role_model');
			$this->load->model('Branch_model');
			$this->load->model('Sub_category_model');
			$this->load->model('Permisstion_model');
			$this->load->model('Permisstion_tool_model');
	}
	public function index()
	{
		$message = $this->session->flashdata('message');
        $this->data['message'] = $message;
		$input['where'] = array('id >' => 0);
		$this->data['listaccount'] = $this->User_role_model->get_list($input);
		//var_dump($this->data['listbranch']);die;
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'type_account/index.php';
		$this->load->view('index',$this->data);
	}
	public function add(){
		$input['order'] = array('id','ASC');
		$this->data['tool'] = $this->Permisstion_tool_model->get_list($input);		
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
			$data = array(
                    'name'    => $this->input->post('name')			
                );
                //them moi vao csdl
                if($this->User_role_model->create($data)){
					$input['order'] = array('id','DESC');
					$row = $this->User_role_model->get_row($input);
					$catalog = $this->Sub_category_model->get_list();
					
					$data1 = array();
					if($row != null){		 
						foreach($catalog as $row1){
							if($this->input->post($row1->id) != null){
								foreach($this->input->post($row1->id) as $row2){
									foreach($this->data['tool'] as $row3){
										if($row3->alias == $row2){
											$data1[] = array(
												 'id_role' => $row->id,
												 'id_tool' => $row3->id,
												 'id_sub_category' => $row1->id,
												 'permisstion' => $row1->alias.'/'.$row3->alias,
											 );
											 break;
										}
									}
								}
							}
						}
					}
					if($this->Permisstion_model->muticreate($data1)){
						//tạo ra nội dung thông báo
						$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
					}else{
                    $this->session->set_flashdata('message', 'select check box không đúng');
					}
                }else{
                    $this->session->set_flashdata('message', 'cố lỗi ở thêm name');
					}
                //chuyen tới trang danh sách
                redirect(base_url('typeaccount'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'type_account/add.php';
		$this->load->view('index',$this->data);
	}
	public function edit($id){
		$input['where'] = array('id' => $id);
		$this->data['detail'] = $this->User_role_model->get_row($input);
		$input1['where'] = array('id_role' => $this->data['detail']->id);
		$this->data['selectbox'] = $this->Permisstion_model->get_list($input1);
		$input3['order'] = array('id','ASC');
		$this->data['tool'] = $this->Permisstion_tool_model->get_list($input3);
		if($this->input->post())
        {
			$data = array(
                    'name'    => $this->input->post('name')			
                );
                //them moi vao csdl
                if($this->User_role_model->update($id,$data)){
					$input1['where'] = array('id_role' => $id);
					if($this->Permisstion_model->del_rule($input1)){
					$input['order'] = array('id','DESC');
					$row = $this->User_role_model->get_row($input);
					$catalog = $this->Sub_category_model->get_list();
					$data1 = array();
					if($row != null){		 
						foreach($catalog as $row1){
							if($this->input->post($row1->id) != null){
								foreach($this->input->post($row1->id) as $row2){
									foreach($this->data['tool'] as $row3){
										if($row3->alias == $row2){
											$data1[] = array(
												 'id_role' => $row->id,
												 'id_tool' => $row3->id,
												 'id_sub_category' => $row1->id,
												 'permisstion' => $row1->alias.'/'.$row3->alias,
											 );
											 break;
										}
									}
								}
							}
						}
					}					
						//var_dump($data1);die;
						if($this->Permisstion_model->muticreate($data1)){
							//tạo ra nội dung thông báo
							$this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
						}else{
						$this->session->set_flashdata('message', 'select check box không đúng');
						}
					}
				}else{
                    $this->session->set_flashdata('message', 'cố lỗi ở thêm name');
				}
					
                //chuyen tới trang danh sách
                redirect(base_url('typeaccount'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'type_account/edit.php';
		$this->load->view('index',$this->data);
	}
	public function del($id){
		 $this->Project_model->_del($id);      
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa account thành công');
		 redirect(base_url('account'));
	}
}
