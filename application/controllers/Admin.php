<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('m_admin');
  }


  public function index()
  {

    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //echo'selamat datang ' . $data['user']['name'];
    //  $this->load->view('admin/dashboard', $data);
    $data['count'] = $this->m_admin->count();
    $data['countPerusahaan'] = $this->m_admin->countPerusahaan();
    $data['hitungLowonganKerja'] = $this->m_admin->hitungLowonganKerja();
    $data['CountPending'] = $this->m_admin->CountPending();
    $data['chartpieJumlahUser'] = $this->m_admin->chartpieJumlahUser();
    $data['chartpieLowonganKerja'] = $this->m_admin->chartpieLowonganKerja();
    $data['chartpieLowonganKerjaDitunda'] = $this->m_admin->chartpieLowonganKerjaDitunda();
    $data['chartLine2019'] = $this->m_admin->chartLine2019();
    $data['chartLine2020'] = $this->m_admin->chartLine2020();
    $data['chartLine2021'] = $this->m_admin->chartLine2021();
    $data['chartLine2022'] = $this->m_admin->chartLine2022();
    $data['chartLine2023'] = $this->m_admin->chartLine2023();
    $data['chartLine2024'] = $this->m_admin->chartLine2024();
    $data['chartLine2025'] = $this->m_admin->chartLine2025();
    $data['chartLine2026'] = $this->m_admin->chartLine2026();
    $data['chartLine2027'] = $this->m_admin->chartLine2027();
    $data['chartLine2028'] = $this->m_admin->chartLine2028();
    $data['chartLine2029'] = $this->m_admin->chartLine2029();
    $data['chartLine2030'] = $this->m_admin->chartLine2030();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }

  public function list_jobvacancy()
  {

    $data['title'] = 'List Job Vacancy';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //echo'selamat datang ' . $data['user']['name'];
    $data['list_jobvacancy'] = $this->m_admin->list_jobvacancy();
    $this->load->view('admin/list_job_vacancy', $data);
  }

  public function lowongantunda()
  {
    $data['title'] = 'Lowongan Ditunda';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //echo'selamat datang ' . $data['user']['name'];
    $data['list_jobvacancy'] = $this->m_admin->list_jobvacancy();
    //$this->load->view('admin/list_job_vacancy', $data);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/lowongantunda', $data);
    $this->load->view('templates/footer');
  }

  public function jobvacancy()
  {

    $data['title'] = 'Job Vacancy';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //cari data
    if ($this->input->post('submit')) {
      $data['keyword'] = $this->input->post('keyword');
    } else {
      $data['keyword'] = null;
    }
    //echo'selamat datang ' . $data['user']['name'];
    $data['jobvacancy'] = $this->m_admin->jobvacancy();
    $this->load->view('admin/jobvacancy', $data);
  }

  public function lowongankerjaadmin()
  {
    $data['title'] = 'Lowongan Kerja Admin';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //cari data
    if ($this->input->post('submit')) {
      $data['keyword'] = $this->input->post('keyword');
    } else {
      $data['keyword'] = null;
    }
    //echo'selamat datang ' . $data['user']['name'];
    $data['jobvacancy'] = $this->m_admin->jobvacancy();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/lowongankerjaadmin', $data);
    $this->load->view('templates/footer');
  }

  public function detailbaru()
  {
    $id = $this->uri->segment(3);
    $isi = $this->m_admin->detail_job($id);
    foreach ($isi->result() as $row) {
      $data['id'] = $row->id;
      $data['company_name'] = $row->company_name;
      $data['image'] = $row->image;
      $data['job_vacancy'] = $row->job_vacancy;
      $data['requirement'] = $row->requirement;
      $data['special_requirements'] = $row->special_requirements;
      $data['note'] = $row->note;
      $data['address'] = $row->address;
    }
    $data['title'] = '';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    // $this->load->view('admin/detail', $data);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/detailbaru', $data);
    $this->load->view('templates/footer');
  }
  public function detailbaru2()
  {
    $id = $this->uri->segment(3);
    $isi = $this->m_admin->detail_job($id);
    foreach ($isi->result() as $row) {
      $data['id'] = $row->id;
      $data['company_name'] = $row->company_name;
      $data['image'] = $row->image;
      $data['job_vacancy'] = $row->job_vacancy;
      $data['requirement'] = $row->requirement;
      $data['special_requirements'] = $row->special_requirements;
      $data['note'] = $row->note;
      $data['address'] = $row->address;
    }
    $data['title'] = 'Admin Detail';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //$this->load->view('admin/detail2', $data);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/detailbaru2', $data);
    $this->load->view('templates/footer');
  }

  public function approve()
  {
    $id = $this->input->post('id');
    $this->m_admin->approve($id);
    redirect('admin/lowongantunda');
  }
  public function revoke()
  {
    $id = $this->input->post('id');
    $this->m_admin->revoke($id);
    redirect('admin/lowongantunda');
  }

  public function add_job()
  {
    $config['upload_path'] = './berkas/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['max_size'] = '2048';
    $config['max_width']  = '3000';
    $config['max_height']  = '3000';

    $this->load->library('upload', $config);
    $this->upload->do_upload('imageCompany');
    $foto['imageCompany'] = $this->upload->file_name;
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date("Y");
    $data = array(
      'id_perusahaan' => $this->input->post('companyId'),
      'company_name' => $this->input->post('companyName'),
      'image' => $foto['imageCompany'],
      'job_vacancy' => $this->input->post('jobVacancy'),
      'requirement' => $this->input->post('requirement'),
      'special_requirements' => $this->input->post('special_requirement'),
      'note' => $this->input->post('note'),
      'address' => $this->input->post('address'),
      'status' => 1,
      'created_at' => $tgl

    );
    $this->m_admin->add_job($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Lowongan Berhasil dibuat! </div>');
    redirect('admin/lowongankerjaadmin');
  }

  public function add_data_pelamar()
  {
    $config['upload_path'] = './berkas_pelamar/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['max_size'] = '2048';
    $config['max_width']  = '3000';
    $config['max_height']  = '3000';

    $this->load->library('upload', $config);
    $this->upload->do_upload('fotoPelamar');
    $foto['fotoPelamar'] = $this->upload->file_name;
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date("Y");
    // if( ){

    //}

    $data = array(
      'id_perusahaan' => $this->input->post('idPerusahaan'),
      'nama' => $this->input->post('namaPelamar'),
      'tempat_tanggal_lahir' => $this->input->post('ttl'),
      'jenis_kelamin' => $this->input->post('jenisKelamin'),
      'Pendidikan_Terakhir' => $this->input->post('pendidikanTerakhir'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $this->input->post('noHp'),
      'foto' => $foto['fotoPelamar'],
      'jenis_disabilitas' => $this->input->post('jenisDisabilitas'),
      'kompetensi' => $this->input->post('kompetensi'),
      'created_at' => $tgl

    );
    $this->m_admin->add_data_pelamar($data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Lamaran Terkirim ! </div>');
    redirect('admin/lowongankerjaadmin');
  }



  public function role()
  {

    $data['title'] = 'Role';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //echo'selamat datang ' . $data['user']['name'];

    $data['role'] = $this->db->get('user_role')->result_array();

    $this->form_validation->set_rules('role', 'Role', 'required');
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('admin/role', $data);
      $this->load->view('templates/footer');
    } else {
      $this->db->insert('user_role', ['role' => $this->input->post('role')]);
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success" role="alert">New Role Added!</div>'
      );
      redirect('admin/role');
    }
  }

  public function roleAccess($role_id)
  {

    $data['title'] = 'Role';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //echo'selamat datang ' . $data['user']['name'];

    $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    $this->db->where('id !=', 1);
    $data['menu'] = $this->db->get('user_menu')->result_array();


    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/role-access', $data);
    $this->load->view('templates/footer');
  }

  public function changeAccess()
  {

    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
      'role_id' => $role_id,
      'menu_id' => $menu_id

    ];

    $result = $this->db->get_where('user_access_menu', $data);

    if ($result->num_rows() < 1) {
      $this->db->insert('user_access_menu', $data);
    } else {
      $this->db->delete('user_access_menu', $data);
    }
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Access Changed! </div>');
  }
  public function deleteRole($id)
  {
    $this->load->model('Menu_model');
    $this->Menu_model->deleteRole($id);
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Deleted!</div>'
    );
    redirect('admin/role');
  }
  public function editRole()
  {
    $this->load->model('Menu_model');
    $this->Menu_model->ubahRoleData();
    $this->session->set_flashdata(
      'message',
      '<div class="alert alert-success" role="alert">Data Has Been Updated!</div>'
    );
    redirect('admin/role');
  }

  public function countuser()
  {
    $this->load->model('m_admin');
    $data['count'] = $this->m_admin->count();
  }
  public function datapelamar()
  {
    $id_perusahaan = $this->session->userdata('id');

    $id_pelamar = $this->uri->segment(3);
    $isi = $this->m_admin->data_pelamar($id_pelamar);
    foreach ($isi->result() as $row) {
      $data['id_pelamar'] = $row->id_pelamar;
      $data['nama'] = $row->nama;
      $data['tempat'] = $row->tempat;
      $data['tanggal_lahir'] = $row->tanggal_lahir;
      $data['jenis_kelamin'] = $row->jenis_kelamin;
      $data['Pendidikan_Terakhir'] = $row->Pendidikan_Terakhir;
      $data['alamat'] = $row->alamat;
      $data['no_hp'] = $row->no_hp;
      $data['foto'] = $row->foto;
      $data['jenis_disabilitas'] = $row->jenis_disabilitas;
      $data['kompetensi'] = $row->kompetensi;
    }
    // $data['isi'] = $this->m_admin->data_pelamar($id_pelamar)->result_array();
    $data['title'] = 'Data Pelamar';
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    //$this->load->view('admin/detail2', $data);
    $data['datapelamar'] = $this->m_admin->data_pelamar(['id_perusahaan' => $id_perusahaan])->result_array();
    // $data['datapelamar'] = $this->db->get(data_pelamar('id_pelamar'))->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/datapelamar', $data);
    $this->load->view('templates/footer');
  }
}
