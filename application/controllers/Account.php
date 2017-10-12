<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('User_model');
			$this->load->model('User_role_model');
			$this->load->model('Branch_model');
			$this->load->model('Sub_category_model');
	}
	public function index()
	{
		$input['where'] = array('id >' => 0);
		$message = $this->session->flashdata('message');
        $this->data['message'] = $message;		
		$this->data['listaccount'] = $this->User_model->get_list($input);
		$this->data['listbranch'] = $this->Branch_model->get_list($input);
		//var_dump($this->data['listbranch']);die;
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'account/index.php';
		$this->load->view('index',$this->data);
	}
	public function add(){
		$input['where'] = array('id >' => 0);
		$this->data['listbranch'] = $this->Branch_model->get_list($input);		     
		$this->data['group'] = $this->User_role_model->get_list($input);		     
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
			$data = array(
                    'id_branch'    => $this->input->post('id_branch'),
                    'name'       => $this->input->post('name'),					
                    'username'       => $this->input->post('username'),					
                    'password'       => md5($this->input->post('password')),					
                    'group_id' 	=> $this->input->post('group_id')				
                );
                //them moi vao csdl
                if($this->User_model->create($data)){
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('account'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'account/add.php';
		$this->load->view('index',$this->data);
	}
	public function edit($id){
		$input['where'] = array('id >' => 0);
		$this->data['listbranch'] = $this->Branch_model->get_list($input);	     
		$this->data['group'] = $this->User_role_model->get_list($input);	
		$input['where'] = array('id' => $id);
		$this->data['detail'] = $this->User_model->get_row($input);
		if($this->input->post())
        {
			$data = array(
                    'id_branch'    => $this->input->post('id_branch'),
                    'name'       => $this->input->post('name'),					
                    'username'       => $this->input->post('username'),					
                    'password'       => md5($this->input->post('password')),					
                    'group_id' 	=> $this->input->post('group_id')				
                );
                //them moi vao csdl
                if($this->User_model->update($id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'update dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('account'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'account/edit.php';
		$this->load->view('index',$this->data);
	}
	public function del($id){
		if($id>0){
		 $this->Project_model->_del($id);      
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa account thành công');
		 redirect(base_url('account'));
		}
	}
}
