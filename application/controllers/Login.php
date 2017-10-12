<?php
class Login extends MY_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');	
		if($this->input->post()){
			$this->form_validation->set_rules('login','Login','callback_check_login');
			if($this->form_validation->run()){
				$this->session->set_userdata('login',true);
				//echo $this->session->userdata('login');die;
				redirect(base_url('home'));
			}
			
		}
		$this->load->view('login/index');
	}
	function check_login(){
		$this->load->model('User_model');
		$username = filter_var($this->input->post('username'),FILTER_SANITIZE_STRING);
		$password = filter_var($this->input->post('password'),FILTER_SANITIZE_STRING);
		$password = md5($password);
		$where = array('username' => $username, 'password' => $password);
		if($this->User_model->check_exists($where)){
			$where['where'] = array('username' => $username, 'password' => $password);
			$field = 'username,name,group_id,id,id_branch';
			$adminInfo = $this->User_model->get_info_rule($where,$field);
			// if($adminInfo->id != 1){
				// $this->ghilog_library->ghiLog($adminInfo->id,'Đăng nhập','Trang Admin','Đăng nhập trang admin');
			// }		
			//pre($adminInfo,true);
			 // $this->session->sess_destroy();
			$this->session->sess_expiration = '32140800'; //~ one year
			$this->session->sess_expire_on_close = 'false';					
			$this->session->set_userdata('adminInfoSession',$adminInfo);	
			// pre($this->session,true);
			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'Không đăng nhập thành công');
		return false;
	}
}
