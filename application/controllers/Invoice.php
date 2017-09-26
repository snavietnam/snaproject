<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invoice extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Invoices_model');
			$this->load->model('Invoicecategory_model');
			$this->load->model('Invoicetype_model');
			$this->load->model('Project_model');
			$this->load->model('Expenses_type_model');
			$this->load->model('Daily_type_model');
			$this->load->model('Vat_model');
			$this->load->model('Paymentmethod_model');
			
	}
	public function index()
	{
		$this->data['listinvoice'] = $this->Invoices_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'invoice/index.php';
		$this->load->view('index',$this->data);
	}
	public function add(){
		$this->data['category'] = $this->Invoicecategory_model->get_list();
		$this->data['vat'] = $this->Vat_model->get_list();
		$this->data['method'] = $this->Paymentmethod_model->get_list();
		//neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
			$data = array(
                    'id_invoicecategory'    => $this->input->post('id_invoicecategory'),
                    'id_invoicetype'       => $this->input->post('id_invoicetype'),
                    'id_daily_type'      => $this->input->post('id_daily_type'),
                    'id_detail'      => $this->input->post('id_detail'),
                    'address'      => $this->input->post('address'),
                    'paymentdate' => $this->input->post('paymentdate'),
                    'invoicedate' 	 => $this->input->post('invoicedate'),					
                    'receiveddate'=> $this->input->post('receiveddate'),					
                    'name' 	=> $this->input->post('name'),	
					'money' 	=> $this->input->post('money'),					
					'phone' 	=> $this->input->post('phone'),					
                    'paymentmethod' 	=> $this->input->post('paymentmethod'),					
                    'vat' 	=> $this->input->post('vat'),					
                    'tax_code' 	=> $this->input->post('tax_code'),					
                    'description' 	=> $this->input->post('description') 
                ); 
                //them moi vao csdl
                if($this->Invoices_model->create($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('invoice'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'invoice/add.php';
		$this->load->view('index',$this->data);
	}
	public function edit($id){
		$input['where'] = array('id' => $id);
		$this->data['detail'] = $this->Invoices_model->get_row($input);
		$this->data['category'] = $this->Invoicecategory_model->get_list();
		$this->data['method'] = $this->Paymentmethod_model->get_list();
		$input['where'] = array('id_category' => $this->data['detail']->id_invoicecategory);
		$this->data['type'] = $this->Invoicetype_model->get_list($input);
		if($this->data['detail']->id_invoicetype == 1 || $this->data['detail']->id_invoicetype == 2)
				$this->data['detail_log'] = $this->Project_model->get_list();
			else
				$this->data['detail_log'] = $this->Expenses_type_model->get_list();
		$input['where'] = array('id_inv_category' => $this->data['detail']->id_invoicecategory);
		$this->data['daily'] = $this->Daily_type_model->get_list($input);
		$this->data['vat'] = $this->Vat_model->get_list();
		//neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
			$data = array(
                    'id_invoicecategory'    => $this->input->post('id_invoicecategory'),
                    'id_invoicetype'       => $this->input->post('id_invoicetype'),
                    'id_daily_type'      => $this->input->post('id_daily_type'),
                    'id_detail'      => $this->input->post('id_detail'),
                    'address'      => $this->input->post('address'),
                    'paymentdate' => $this->input->post('paymentdate'),
                    'invoicedate' 	 => $this->input->post('invoicedate'),					
                    'receiveddate'=> $this->input->post('receiveddate'),					
                    'name' 	=> $this->input->post('name'),	
					'money' 	=> $this->input->post('money'),					
					'phone' 	=> $this->input->post('phone'),					
                    'paymentmethod' 	=> $this->input->post('paymentmethod'),					
                    'vat' 	=> $this->input->post('vat'),					
                    'tax_code' 	=> $this->input->post('tax_code'),					
                    'description' 	=> $this->input->post('description')  
                ); 
				//var_dump($data);die;
                //them moi vao csdl
                if($this->Invoices_model->update($id,$data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'update dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('invoice'));
		}
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'invoice/edit.php';
		$this->load->view('index',$this->data);
	}
	public function ajaxload(){
		if($_POST['category'] != ''){
			$input['where'] = array('id_category' => $_POST['category']);
			$type = $this->Invoicetype_model->get_list($input);
			echo '<option value="">Select...</option>';
			foreach($type as $row){
			echo '<option value="'.$row->id.'">'.$row->name.'</option>';
			}
		}
	}
	public function last(){
		if($_POST['category'] != ''){
			if($_POST['category'] == 1 || $_POST['category'] == 2)
				$type = $this->Project_model->get_list();
			else
				$type = $this->Expenses_type_model->get_list();
			echo '<option value="">Select...</option>';
			foreach($type as $row){
			echo '<option value="'.$row->id.'">'.$row->name.'</option>';
			}
		}
	}
	public function dailyType(){
		if($_POST['category'] != ''){
			$input['where'] = array('id_inv_category' => $_POST['category']);
			$type = $this->Daily_type_model->get_list($input);
			foreach($type as $row){
			echo "<div class='radio' style='display: inline-block;margin: 0 10px;'><label><input type='radio' name='id_daily_type' id='optionsRadios1' value='".$row->id_inv_category."'>".$row->name."</label></div>";
			}
		}
	}
}