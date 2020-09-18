
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

	public function addData($tblname,$data)
	{
		$res = $this->db->insert($tblname,$data);
		if ($res) {
			return true;
		}
		else
		{
			return false;
		}

	}

	public function fetchData($tblname)
	{
		/*$this->db->select_max('user_sallary', 'Sallary');
		$sub_query = $this->db->get($tblname);
		$q = $sub_query->result() ;
		print_r($q);
		//echo $query;
		die;*/
		
		//$sub_query = $this->db->get_compiled_select($tblname); //printing only query doesn return any value
		//echo $sql;
		//echo $this->db->count_all_results($tblname);
		//die;

		$this->db->where('display','Y');
		$this->db->order_by('user_id','DESC');
		$sub_query = $this->db->get($tblname);
		if($sub_query->num_rows() > 0)
		{
			foreach ($sub_query->result() as $key ) {
				$data[] = $key;
			}
			return $data;
		}
		else
		{
			return false;
		}
	}

	public function update_details($tblname,$where,$condition,$data)
	{
		$this->db->where($where,$condition);
		$query = $this->db->update($tblname,$data);
		return $query;
	}

	public function selectDetailsWhr($tblname,$where,$condition)
	{
		$this->db->where($where, $condition);
        $query = $this->db->get($tblname);
        //echo $this->db->last_query();die;
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
	}
 
}