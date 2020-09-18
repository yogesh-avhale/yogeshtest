
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller 
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('user_model');

	}

	public function user_form()
	{
		$data['user_details'] = $this->user_model->fetchData('tbl_user_details');
		$this->load->view('user_form',$data);
	}

	public function user_form_2()
	{
		$data['user_details'] = $this->user_model->fetchData('tbl_user_details');
		$this->load->view('table_view',$data);
	}

	public function save_user_form()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$sallary = $this->input->post('sallary');
		$data = array('user_name'=>$username,'user_sallary'=>$sallary);
		if(isset($id) && !empty($id) && ($id > 0))
		{
			$result = $this->user_model->update_details('tbl_user_details','user_id',$id,$data);
			if($result)
			{
				echo '<div class="alert modify alert-success"><strong>Well Done!</strong> User updated successfully!</div>';
			}
			else{
				echo '<div class="alert modify alert-danger"><strong>Sorry</strong> Uneble to update user details!</div>';
			}
		}
		else
		{
			$result = $this->user_model->addData('tbl_user_details',$data);
			if($result)
			{
				echo '<div class="alert modify alert-success"><strong>Well Done!</strong> User saved successfully!</div>';
			}
			else{
				echo '<div class="alert modify alert-danger"><strong>Sorry</strong> Uneble to save user details!</div>';
			}
		}
	}

	public function get_single_record()
	{
		$id = $this->input->post('id');
		$data['single_user']= $this->user_model->selectDetailsWhr('tbl_user_details','user_id',$id);
		echo json_encode($data['single_user']);
	}

	public function delete_record()
	{
		$id = $this->input->post('id');
		$data = array('display'=>'N');
		$result = $this->user_model->update_details('tbl_user_details','user_id',$id,$data);
		if ($result) 
		{
			echo '<div class="alert modify alert-success"><strong>Well Done!</strong> User deleted Successfully!</div>';
		}
		else
		{
			echo '<div class="alert modify alert-danger"><strong>Sorry</strong> Uneble to delete user details!</div>';
		}
	} 
}