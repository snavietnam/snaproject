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
			$this->load->model('Expenses_category_model');
			$this->load->model('Daily_type_model');
			$this->load->model('Vat_model');
			$this->load->model('Paymentmethod_model');
			$this->load->model('Customer_model');
			$this->load->model('Customer_type_model');
			
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
		$this->data['customer'] = $this->Customer_model->get_list();
		$this->data['customer_type'] = $this->Customer_type_model->get_list();
		
		//var_dump($this->data['customer']);die;
		//neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
			$data = array(
                    'id_invoicecategory'    => $this->input->post('id_invoicecategory'),
                    'id_invoicetype'       => $this->input->post('id_invoicetype'),
                    'id_daily_type'      => $this->input->post('id_daily_type'),
                    'id_detail'      => $this->input->post('id_detail'),
                    'id_company'      => $this->input->post('id_company'),
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
		$this->data['customer'] = $this->Customer_model->get_list();
		$this->data['customer_type'] = $this->Customer_type_model->get_list();
		
		$input['where'] = array('id_category' => $this->data['detail']->id_invoicecategory);
		$this->data['type'] = $this->Invoicetype_model->get_list($input);
		if($this->data['detail']->id_invoicetype == 1 || $this->data['detail']->id_invoicetype == 2){
				$this->data['detail_log'] = $this->Project_model->get_list();
				$this->data['expensescategory'] = $this->Customer_model->get_list();
		}
		else{
				$this->data['detail_log'] = $this->Expenses_type_model->get_list();
				$this->data['expensescategory'] = $this->Expenses_category_model->get_list();
		}
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
					'id_company'      => $this->input->post('id_company'),
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
	//select in or out put select
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
	//show value of select(expenses or project) from select to ajax load.
	public function last(){
		if($_POST['category'] != ''){
			echo '<option value="">Select...</option>';
			if($_POST['category'] == 1 || $_POST['category'] == 2){
				$type = $this->Project_model->get_list();
				$input['where'] = array('id_type' =>1);
				$category = $this->Customer_model->get_list($input);
			}else{
				$type = $this->Expenses_type_model->get_list();
				$category = $this->Expenses_category_model->get_list();
				
			}
			foreach($category as  $row){
					echo '<optgroup label="'.$row->name.'">';
					foreach($type as $row1){
						if($row->id == $row1->id_category){
							echo '<option value="'.$row1->id.'">'.$row1->name.'</option>';
						}
					}
					echo '</optgroup>';
				}
			
		}
	}
	//show daily type từ check box to ajax load.
	public function dailyType(){
		if($_POST['category'] != ''){
			$input['where'] = array('id_inv_category' => $_POST['category']);
			$type = $this->Daily_type_model->get_list($input);
			foreach($type as $row){
			echo "<div class='radio' style='display: inline-block;margin: 0 10px;'><label><input type='radio' name='id_daily_type' id='optionsRadios1' value='".$row->id_inv_category."'>".$row->name."</label></div>";
			}
		}
	}
	//get tex code từ select box company to ajax load.
	public function companyTexCode(){
		$input['where'] = array('id' => $_POST['id']);
		$row = $this->Customer_model->get_row($input);
		echo json_encode($row);
	}
}