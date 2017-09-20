<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('customer_model');
	}
	public function index()
	{
		$message = $this->session->flashdata('message');
		// if($message != ''){
			// var_dump($message);die;
		// }
        $this->data['message'] = $message;
		$this->data['listcustomer'] = $this->customer_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'customer/index.php';
		$this->load->view('index',$this->data);
	}
	public function add(){  
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
			$data = array(                    
                    'name'       => $this->input->post('name'),				
                ); 
                //them moi vao csdl
                if($this->customer_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('customer'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'customer/add.php';
		$this->load->view('index',$this->data);
	}
	public function edit($id){
		$input['where'] = array('id' => $id);
		$this->data['customerdetail'] = $this->customer_model->get_row($input);
		if($this->input->post())
        {
			$data = array(                    
                    'name'       => $this->input->post('name'),				
                ); 
                //them moi vao csdl
                if($this->customer_model->update($id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'updates dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('customer'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'customer/edit.php';
		$this->load->view('index',$this->data);
	}
	public function del($id){
		 $this->customer_model->_del($id);      
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa tin tức thành công');
		 redirect(base_url('customer'));
	}
}
