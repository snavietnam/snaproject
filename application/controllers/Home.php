<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
			parent::__construct();
	}
	public function index()
	{
		$this->data['temp'] = 'main.php';
		$this->data['tempcon'] = 'home/index.php';
		$this->load->view('index',$this->data);
	}
}
