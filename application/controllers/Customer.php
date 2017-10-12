<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Customer extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Customer_model');
			$this->load->model('Customer_type_model');
	}
	public function index()
	{
		$message = $this->session->flashdata('message');
        $this->data['message'] = $message;
		/* set id_branch for object */
		if($this->data['idBranch'] != 0)
			$input['where'] = array('id_branch' => $this->data['idBranch']);
		else
			$input['where'] = array();
		$this->data['listcustomer'] = $this->Customer_model->get_list($input);
		$this->data['customertype'] = $this->Customer_type_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'customer/index.php';
		$this->load->view('index',$this->data);
	}
	public function add(){  
        //neu ma co du lieu post len thi kiem tra
		$this->data['customertype'] = $this->Customer_type_model->get_list();
        if($this->input->post())
        {
			$data = array(                    
                    'name'       => $this->input->post('name'),				
                    'id_type'    => $this->input->post('id_type'),				
                    'address'    => $this->input->post('address'),				
                    'tax_code'   => $this->input->post('tax_code'),				
                    'tel'        => $this->input->post('tel'),				
                    'id_branch'        => $this->data['idBranch'],				
                ); 
                //them moi vao csdl
                if($this->Customer_model->create($data))
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
		$this->data['customerdetail'] = $this->Customer_model->get_row($input);
		$this->data['customertype'] = $this->Customer_type_model->get_list();
		if($this->input->post())
        {
			$data = array(                    
                    'name'       => $this->input->post('name'),
					'id_type'    => $this->input->post('id_type'),
					'address'    => $this->input->post('address'),				
                    'tax_code'   => $this->input->post('tax_code'),				
                    'tel'        => $this->input->post('tel'),
					'id_branch'  => $this->data['idBranch'],
                ); 
                //them moi vao csdl
                if($this->Customer_model->update($id,$data))
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
		 $this->Customer_model->_del($id);      
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa tin tức thành công');
		 redirect(base_url('customer'));
	}
}
