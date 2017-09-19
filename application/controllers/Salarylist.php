<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Salarylist extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Staff_model');
	}
	public function index()
	{
		if(isset($_POST['dateselect'])){
			$input['where'] = array('sna_salary.date LIKE' => ''.$_POST["dateselect"].'-%');
		}
		else
			$input['where'] = array('sna_salary.date LIKE' => ''.date("Y-m").'-%');
		$this->data['liststaff'] = $this->Staff_model->get_list_form_more_table($input,'sna_salary','id_staff');
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'staff/salarylist.php';
		$this->load->view('index',$this->data);
	}
}
