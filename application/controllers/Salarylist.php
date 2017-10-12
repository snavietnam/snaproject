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
		if($this->data['idBranch'] != 0)
			$branch = $this->data['idBranch'];
		else
			$branch = '';
		if(isset($_GET) && $_GET != null){
			
			if($_GET['dateselect'] != null){
				switch($_GET['submit']){
				case 'select':
					$input['where'] = array('sna_staff.id_branch' => $branch,'sna_salary.date LIKE' => ''.$_GET["dateselect"].'-%');
					$this->data['liststaff'] = $this->Staff_model->get_list_form_more_table($input,'sna_salary','id_staff');
					$this->data['tempcon'] = 'staff/salarylist.php';
					break;
				case 'add':
					$input['where'] = array('sna_staff.id_branch' => $branch,'date LIKE' => ''.$_GET["dateselect"].'-%');
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
					$input['where'] = array('sna_staff.id_branch' => $branch,'sna_salary.date LIKE' => ''.$_GET["dateselect"].'-%');
					$this->data['liststaff'] = $this->Staff_model->get_list_form_more_table($input,'sna_salary','id_staff');
					$this->data['dateselect'] = $_GET["dateselect"];
					$this->data['tempcon'] = 'staff/editsalary.php';
				break;				
				}
			}
			else{
				 $input['where'] = array('sna_staff.id_branch' => $branch,'sna_salary.date LIKE' => ''.date("Y-m").'-%');
				 $this->data['liststaff'] = $this->Staff_model->get_list_form_more_table($input,'sna_salary','id_staff');
				 $this->session->set_flashdata('message', 'Bạn chưa chọn ngày');
				 $this->data['tempcon'] = 'staff/salarylist.php';
				 $message = $this->session->flashdata('message');
				 $this->data['message'] = $message;
			}
		}
		else{ 
			
			$input['where'] = array('sna_staff.id_branch' => $branch,'sna_salary.date LIKE' => ''.date("Y-m").'-%');
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
		if($this->Salary_model->muticreate($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Thêm mới dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('salarylist'));
	}
	public function edit(){
		 $data = array();
		for($i = 0;$i < count($_POST['name']);$i++){
			 $data[$i] = array(
				 'id' => $this->input->post('id')[$i],
				 'salary' => $this->input->post('name')[$i]
				 
			 );
		}
		if($this->Salary_model->mutiupdate($data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'update dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không thêm được');
                }
                //chuyen tới trang danh sách
                redirect(base_url('salarylist'));
	}
}
