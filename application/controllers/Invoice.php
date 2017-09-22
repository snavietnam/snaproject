<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Invoice extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('invoices_model');
			$this->load->model('Invoicecategory_model');
			$this->load->model('Invoicetype_model');
			$this->load->model('Project_model');
			$this->load->model('Expenses_type_model');
			$this->load->model('Daily_type_model');
	}
	public function index()
	{
		$this->data['listinvoice'] = $this->invoices_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'invoice/index.php';
		$this->load->view('index',$this->data);
	}
	public function add(){
		$this->data['category'] = $this->Invoicecategory_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'invoice/add.php';
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
			echo "<div class='radio' style='display: inline-block;margin: 0 10px;'><label><input type='radio' name='daily' id='optionsRadios1' value='".$row->id_inv_category."'>".$row->name."</label></div>";
			}
		}
	}
}