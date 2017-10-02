<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Budget extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Salary_model');
			$this->load->model('Invoices_model');
	}
	public function index(){
		$salary;
		$expenses;
		if(isset($_GET) && $_GET != null){			
			if($_GET['dateselect'] != null){
				$input['where'] = array('sna_salary.date LIKE' => ''.$_GET['dateselect'].'-%');
				$salary = $this->Salary_model->get_list($input);
				//id_invoicetype = 3 is expensrs
				$input['where'] = array('id_invoicetype' => 3,'paymentdate LIKE' => ''.$_GET['dateselect'].'-%');
				$expenses = $this->Invoices_model->get_list($input);
				//var_dump($expenses);die;
			}
			else{
				$input['where'] = array('sna_salary.date LIKE' => ''.date("Y").'-%');
				$salary = $this->Salary_model->get_list($input);
				//id_invoicetype = 3 is expensrs
				$input['where'] = array('id_invoicetype' => 3,'paymentdate LIKE' => ''.date("Y").'-%');
				$expenses = $this->Invoices_model->get_list($input);
				$this->session->set_flashdata('message', 'Bạn chưa chọn ngày');
				$message = $this->session->flashdata('message');
				$this->data['message'] = $message;
			}
		}
		else{		
			$input['where'] = array('sna_salary.date LIKE' => ''.date("Y").'-%');
			$salary = $this->Salary_model->get_list($input);
			//id_invoicetype = 3 is expensrs
			$input['where'] = array('id_invoicetype' => 3,'paymentdate LIKE' => ''.date("Y").'-%');
			$expenses = $this->Invoices_model->get_list($input);
			//var_dump(date("Y"));die;			
		}
		for($i=1;$i<13;$i++){
				foreach($salary as $row){
					//get month from date string.	
					$tam = $this->_getMonth($row->date);
					if($tam == $i){
						$this->data['salary'][$i][] = $row->salary;
					}
				}
				//if does not exist salary[$i] will new salary[$i] = emptry
				if(!isset($this->data['salary'][$i]))
					$this->data['salary'][$i] = '';
				
				foreach($expenses as $row){
					//get month from date string.	
					$tam = $this->_getMonth($row->paymentdate);
					if($tam == $i){
						$this->data['expenses'][$i][] = $row->moneyafteravt;
					}
				}
				//if does not exist salary[$i] will new salary[$i] = emptry
				if(!isset($this->data['expenses'][$i]))
					$this->data['expenses'][$i] = '';
			}
		//var_dump($this->data['expenses']);die;
				$this->data['tempcon'] = 'budget/index.php';
				$this->data['temp'] = 'main.php';
				$this->load->view('index',$this->data);
	}
	private function _getMonth($str){
		
			$timestamp;
			if (($timestamp = strtotime($str)) !== false)
			{
			  $php_date = getdate($timestamp);
			  // or if you want to output a date in year/month/day format:
			  return date("m", $timestamp); // see the date manual page for format options      
			}
			else
			{
			  return '0';
			}
	}
}