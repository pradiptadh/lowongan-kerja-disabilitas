<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{

	public function add_job($data)
	{
		$this->db->insert('user_job_vacancy', $data);
	}
	public function add_data_pelamar($data)
	{
		$this->db->insert('data_pelamar', $data);
	}

	public function data_pelamar($id_perusahaan)
	{
		
		return $this->db->get_where('data_pelamar', $id_perusahaan);
		
	}
	public function jobvacancy()
	{
		return $this->db->query('SELECT * FROM user_job_vacancy WHERE status = 1 ORDER by id DESC');
	}
	public function list_jobvacancy()
	{
		return $this->db->query('SELECT * FROM user_job_vacancy WHERE status = 0 ORDER by id DESC');
	}

	public function detail_job($id)
	{
		$this->db->where('id', $id);
		return $query = $this->db->get('user_job_vacancy');
	}
	public function approve($id)
	{
		$this->db->query("UPDATE user_job_vacancy set status=1 WHERE id='$id'");
	}
	public function revoke($id)
	{
		$this->db->query("DELETE from user_job_vacancy WHERE id='$id'");
	}

	public function count()
	{
		$sql = "SELECT count(role_id) as role_id  FROM user WHERE role_id = 2";
		$result = $this->db->query($sql);
		return $result->row()->role_id;
	}
	public function countPerusahaan()
	{
		$sql = "SELECT count(role_id) as role_id  FROM user WHERE role_id = 3";
		$result = $this->db->query($sql);
		return $result->row()->role_id;
	}
	public function hitungLowonganKerja()
	{
		$sql = "SELECT count(status) as status  FROM user_job_vacancy WHERE status = 1";
		$result = $this->db->query($sql);
		return $result->row()->status;
	}
	public function CountPending()
	{
		$sql = "SELECT count(status) as status  FROM user_job_vacancy WHERE status = 0";
		$result = $this->db->query($sql);
		return $result->row()->status;
	}
	public function chartpieJumlahUser()
	{
		$query = $this->db->query("SELECT count(role_id) as role_id  FROM user WHERE role_id = 2 or role_id=3");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartpieLowonganKerja()
	{
		$query = $this->db->query("SELECT count(status) as status  FROM user_job_vacancy WHERE status = 1");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartpieLowonganKerjaDitunda()
	{
		$query = $this->db->query("SELECT count(status) as status  FROM user_job_vacancy WHERE status = 0");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2019()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2019 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2020()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2020 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2021()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2021 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2022()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2022 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2023()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2023 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2024()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2024 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2025()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2025 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2026()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2026 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2027()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2027 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2028()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2028 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2029()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2029 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
	public function chartLine2030()
	{
		$query = $this->db->query("SELECT COUNT(id) as id from user_job_vacancy where created_at = 2030 ");

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;
		}
	}
}
