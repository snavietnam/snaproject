<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ExpensesCategory extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Expenses_category_model');
	}
	public function index()
	{
		$message = $this->session->flashdata('message');
		// if($message != ''){
			// var_dump($message);die;
		// }
        $this->data['message'] = $message;
		$this->data['listexpensescategory'] = $this->Expenses_category_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'expensescategory/index.php';
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
                if($this->Expenses_category_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('expensescategory'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'expensescategory/add.php';
		$this->load->view('index',$this->data);
	}
	public function edit($id){
		$input['where'] = array('id' => $id);
		$this->data['categorydetail'] = $this->Expenses_category_model->get_row($input);
		if($this->input->post())
        {
			$data = array(                    
                    'name'       => $this->input->post('name'),				
                ); 
                //them moi vao csdl
                if($this->Expenses_category_model->update($id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'updates dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('expensescategory'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'expensescategory/edit.php';
		$this->load->view('index',$this->data);
	}
	public function del($id){
		 $this->Expenses_category_model->_del($id);      
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa tin tức thành công');
		 redirect(base_url('expensescategory'));
	}
}
