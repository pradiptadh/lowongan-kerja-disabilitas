<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

	public function job_vacancy()
	{
		return $this->db->query('SELECT * FROM user_job_vacancy WHERE status=1 ORDER by id DESC');
	}

	public function detail_job($id)
	{
		$this->db->where('id', $id);
		return $query = $this->db->get('user_job_vacancy');
	}

	public function add_data_pelamar($data)
	{
		$this->db->insert('data_pelamar', $data);
	}
}
