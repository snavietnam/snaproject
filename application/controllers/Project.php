<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Customer_model');
			$this->load->model('Project_model');
	}
	public function index()
	{
		$message = $this->session->flashdata('message');
		// if($message != ''){
			// var_dump($message);die;
		// }
        $this->data['message'] = $message;
		$this->data['listcustomer'] = $this->Project_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'project/index.php';
		$this->load->view('index',$this->data);
	}
	public function add(){
		$this->data['customerlist'] = $this->Customer_model->get_list();
		     
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
			$data = array(
                    'id_customer'    => $this->input->post('id_customer'),
                    'name'       => $this->input->post('name'),					
                    'product'       => $this->input->post('product'),					
                    'paymentdate'       => $this->input->post('paymentdate'),					
                    'startdate' 	=> $this->input->post('startdate'),					
                    'enddate' 	=> $this->input->post('enddate'),					
                    'description' 	=> $this->input->post('description')				
                ); 
                //them moi vao csdl
                if($this->Project_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('project'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'project/add.php';
		$this->load->view('index',$this->data);
	}
	public function edit($id){
		$input['where'] = array('id' => $id);
		$this->data['projectdetail'] = $this->Project_model->get_row($input);
		$this->data['customerlist'] = $this->Customer_model->get_list();
		if($this->input->post())
        {
			$data = array(
                    'id_customer'    => $this->input->post('id_customer'),
                    'name'       => $this->input->post('name'),
					'product'       => $this->input->post('product'),					
                    'paymentdate'       => $this->input->post('paymentdate'),						
                    'startdate' 	=> $this->input->post('startdate'),					
                    'enddate' 	=> $this->input->post('enddate'),					
                    'description' 	=> $this->input->post('description')				
                ); 
                //them moi vao csdl
                if($this->Project_model->update($id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'update dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('project'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'project/edit.php';
		$this->load->view('index',$this->data);
	}
	public function del($id){
		 $this->Project_model->_del($id);      
        //tạo ra nội dung thông báo
        $this->session->set_flashdata('message', 'Xóa tin tức thành công');
		 redirect(base_url('project'));
	}
}
