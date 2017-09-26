<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DailyType extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Daily_type_model');
			$this->load->model('Invoicecategory_model');
	}
	public function index()
	{
		$input['select'] = array('sna_invoicecategory.name' => 'category');
		$this->data['listdailytype'] = $this->Invoicecategory_model->get_list_form_more_table($input,'sna_daily_type','id_inv_category');
		//var_dump($this->data['listdailytype']);die;
		//$this->data['listdailytype'] = $this->Daily_type_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'daily_type/index.php';
		$this->load->view('index',$this->data);
	}
}