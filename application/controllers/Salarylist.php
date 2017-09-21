<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Salarylist extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Staff_model');
			$this->load->model('Salary_model');
	}
	public function index()
	{
		
		if(isset($_GET) && $_GET != null){
			
			if($_GET['dateselect'] != null){
				switch($_GET['submit']){
				case 'select':
					$input['where'] = array('sna_salary.date LIKE' => ''.$_GET["dateselect"].'-%');
					$this->data['liststaff'] = $this->Staff_model->get_list_form_more_table($input,'sna_salary','id_staff');
					$this->data['tempcon'] = 'staff/salarylist.php';
					break;
				case 'add':
					$input['where'] = array('date LIKE' => ''.$_GET["dateselect"].'-%');
					$total = $this->Salary_model->get_total($input);
					if($total >= 1){
						$this->session->set_flashdata('message', 'lương tháng này đả được thêm');
						$this->data['tempcon'] = 'staff/salarylist.php';
						$message = $this->session->flashdata('message');
						$this->data['message'] = $message;
						 $this->data['liststaff'] = $this->Staff_model->get_list_form_more_table($input,'sna_salary','id_staff');
					}
					else{
					$this->data['liststaff'] = $this->Staff_model->get_list();
					$this->data['dateselect'] = $_GET["dateselect"];
					$this->data['tempcon'] = 'staff/addsalary.php';
					}
				break;
				case 'edit':
					$input['where'] = array('sna_salary.date LIKE' => ''.$_GET["dateselect"].'-%');
					$this->data['liststaff'] = $this->Staff_model->get_list_form_more_table($input,'sna_salary','id_staff');
					$this->data['dateselect'] = $_GET["dateselect"];
					$this->data['tempcon'] = 'staff/editsalary.php';
				break;				
				}
			}
			else{
				 $input['where'] = array('sna_salary.date LIKE' => ''.date("Y-m").'-%');
				 $this->data['liststaff'] = $this->Staff_model->get_list_form_more_table($input,'sna_salary','id_staff');
				 $this->session->set_flashdata('message', 'Bạn chưa chọn ngày');
				 $this->data['tempcon'] = 'staff/salarylist.php';
				 $message = $this->session->flashdata('message');
				 $this->data['message'] = $message;
			}
		}
		else{
			
			$input['where'] = array('sna_salary.date LIKE' => ''.date("Y-m").'-%');
			$this->data['liststaff'] = $this->Staff_model->get_list_form_more_table($input,'sna_salary','id_staff');
			$this->data['tempcon'] = 'staff/salarylist.php';
		}
				$this->data['temp'] = 'main.php';
				$this->load->view('index',$this->data);
	}
	public function add($date){
		 $data = array();
		for($i = 0;$i < count($_POST['name']);$i++){
			 $data[$i] = array(
				 'id_staff' => $this->input->post('id')[$i],
				 'salary' => $this->input->post('name')[$i],
				 'date' => $date.'-00'
				 
			 );
		}
		$this->Salary_model->muticreate($data);
	}
	public function edit($date){
		
	}
}
