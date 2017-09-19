<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stafflist extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Staff_model');
			$this->load->model('Staff_type_model');
	}
	public function index()
	{
		$message = $this->session->flashdata('message');
		// if($message != ''){
			// var_dump($message);die;
		// }
        $this->data['message'] = $message;
		$this->data['liststaff'] = $this->Staff_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'staff/stafflist.php';
		$this->load->view('index',$this->data);
	}
	public function add(){
		$this->data['stafftype'] = $this->Staff_type_model->get_list();
		     
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
			$data = array(
                    'id_type'    => $this->input->post('id_type'),
                    'name'       => $this->input->post('name'),
                    'email'      => $this->input->post('email'),
                    'birth'      => $this->input->post('birth'),
                    'startworkingdate' => $this->input->post('startworkingdate'),
                    'position' 	 => $this->input->post('position'),					
                    'startingsalary'=> $this->input->post('startingsalary'),					
                    'description' 	=> $this->input->post('description'),					
                ); 
                //them moi vao csdl
                if($this->Staff_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('stafflist'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'staff/add.php';
		$this->load->view('index',$this->data);
	}
	public function edit($id){
		$input['where'] = array('id' => $id);
		$this->data['staffdetail'] = $this->Staff_model->get_row($input);
		$this->data['stafftype'] = $this->Staff_type_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'staff/edit.php';
		$this->load->view('index',$this->data);
	}
	public function del($id){
		 $this->Staff_model->_del($id);      
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa tin tức thành công');
		 redirect(base_url('stafflist'));
	}
}
