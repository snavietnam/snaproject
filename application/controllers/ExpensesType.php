<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ExpensesType extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Expenses_type_model');
			$this->load->model('Expenses_category_model');
	}
	public function index()
	{
		$message = $this->session->flashdata('message');
		// if($message != ''){
			// var_dump($message);die;
		// }
        $this->data['message'] = $message;
		$this->data['listexpensestype'] = $this->Expenses_type_model->get_list();
		$this->data['listexpensescategory'] = $this->Expenses_category_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'expensestype/index.php';
		$this->load->view('index',$this->data);
	}
	public function add(){
		$this->data['listexpensescategory'] = $this->Expenses_category_model->get_list();
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
			$data = array(                    
                    'id_category'=> $this->input->post('id_category'),		
                    'name'       => $this->input->post('name')		
                ); 
                //them moi vao csdl
                if($this->Expenses_type_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('expensestype'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'expensestype/add.php';
		$this->load->view('index',$this->data);
	}
	public function edit($id){
		$this->data['listexpensescategory'] = $this->Expenses_category_model->get_list();
		$input['where'] = array('id' => $id);
		$this->data['typedetail'] = $this->Expenses_type_model->get_row($input);
		if($this->input->post())
        {
			$data = array(                    
                    'id_category'=> $this->input->post('id_category'),		
                    'name'       => $this->input->post('name')				
                ); 
                //them moi vao csdl
                if($this->Expenses_type_model->update($id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'updates dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('expensestype'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'expensestype/edit.php';
		$this->load->view('index',$this->data);
	}
	public function del($id){
		 $this->Expenses_type_model->_del($id);      
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa tin tức thành công');
		 redirect(base_url('expensestype'));
	}
}
