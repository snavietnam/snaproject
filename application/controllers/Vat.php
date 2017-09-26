<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vat extends MY_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('Vat_model');			
	}
	public function index()
	{
		$this->data['listvat'] = $this->Vat_model->get_list();
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'vat/index.php';
		$this->load->view('index',$this->data);
	}
}