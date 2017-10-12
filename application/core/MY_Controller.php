<?php
Class MY_Controller extends CI_Controller
{
	public $data = array();
	public $idBranch;
	function __construct(){
		parent::__construct();
		//$this->session->sess_destroy();
				$this->data['idBranch'] = $this->session->userdata('adminInfoSession')[0]['id_branch'];
				$this->_check_login();
				$this->menu();
	}
	/*
	* Kiểm tra trạng thái đăng nhập của admin
	*/
	public function _check_login(){
		$controller = $this->uri->rsegment(1);
		$controller = strtolower($controller);
		//$this->session->sess_destroy();
		$login = $this->session->userdata('login');
		/*nếu chưa login thì về trang login*/
		if(!$login && $controller != 'login'){
			redirect(base_url('login'));
		}
		/*nếu link là trang login nhưng đả login thì vê trang chủ */
		if($login && $controller == 'login'){
				redirect(base_url('home'));
			
		}elseif($login && $controller != 'login'){ /*link là trang bat kỳ nhưng đã login */
			$url = $this->uri->uri_string();
			//var_dump($_SERVER['QUERY_STRING']);die;
			//check user có đủ quyền truy cập vào link này không
			if(!$this->check_permission($url)){
				if($controller != 'home')
					redirect(base_url('home'));
			}
		}
	}
	
	public function check_permission($url){	
		$this->load->model('Permisstion_model');
		$this->load->model('User_role_model');
		$user = $this->session->userdata('adminInfoSession');
		$input['where'] = array('id_role' => $user[0]['group_id']);	
		$list_permisstion = $this->Permisstion_model->get_list($input);
		
		foreach($list_permisstion as $row){	
			//if(substr($row->permisstion,count($row->permisstion)-1,1) =='/')
				$row->permisstion = rtrim($row->permisstion,'/');
				$arurl = explode ( '/' , $url);
				$str;
				if(count($arurl) == 1)
					$str = $arurl[0];
				if(count($arurl) > 1)
					$str = $arurl[0].'/'.$arurl[1];
			if($row->permisstion == $str || $row->permisstion == 'all'){
				return true;
			}
		}
		return false;
	}
	public function menu(){
		$this->load->model('Category_model');
		$this->load->model('Sub_category_model');
		$input['where'] = array('status' => 1);
		$input['order'] = array('id','ASC');
		$this->data['menu'] = $this->Category_model->get_list($input);
		foreach($this->data['menu'] as $row){
			$input['where'] = array('id_category' => $row->id,'status' => 1);
            $cap2 = $this->Sub_category_model->get_list($input);
			$row->submenu = $cap2 ;
		}
	}
}