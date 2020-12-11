<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_company extends CI_Model
{

	public function add_job($data)
	{
		$this->db->insert('user_job_vacancy', $data);
	}

	public function job_vacancy()
	{
		return $this->db->query('SELECT * FROM user_job_vacancy WHERE status=1 ORDER by id DESC');
	}

	public function detail_job($id)
	{
		$this->db->where('id', $id);
		return $query = $this->db->get('user_job_vacancy');
	}

	public function data_pelamar($id_perusahaan)
	{
		//$this->db->where('id_pelamar', $id_pelamar);
		return $this->db->get_where('data_pelamar', $id_perusahaan);
		//$query = $this->db->query('SELECT * FROM data_pelamar');
		//return $query->result_array();
	}
}
