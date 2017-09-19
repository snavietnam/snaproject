<?php
Class MY_Controller extends CI_Controller
{
	public $data = array();
	public $access_controller = array();
	public $name_url_controller= '';
	public $info_permissions = '';
	function __construct(){
		parent::__construct();
		$controller = $this->uri->segment(1);
		switch($controller){
			case 'admin':
			{
				$this->load->helper('admin');
				$this->_check_login();
				$adminInfoSession = $this->session->userdata('adminInfoSession');
				// pre($adminInfoSession,true);
				$this->name_url_controller = $this->uri->rsegment('1');
				// echo $id;die;
				
				break;
			}
			default:
			{

			}
		}
	}
	/*
	* Kiểm tra trạng thái đăng nhập của admin
	*/
	private function _check_login(){
		$controller = $this->uri->rsegment(1);
		$controller = strtolower($controller);
		
		$login = $this->session->userdata('login');
		//echo $login;
		if(!$login && $controller != 'login'){
			
			redirect(admin_url('login'));
		}
		if($login && $controller == 'login'){
			$this->load->model('admin_model');
			redirect(admin_url('home'));
			
		}
	}

}