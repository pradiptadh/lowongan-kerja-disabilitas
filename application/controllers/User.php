<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_user');
    }

    public function index()
    {

        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        //echo'selamat datang ' . $data['user']['name'];
        //  $this->load->view('user/profile', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function job()
    {

        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['job_vacancy'] = $this->m_user->job_vacancy();

        //echo'selamat datang ' . $data['user']['name'];
        $this->load->view('user/jobvacancy', $data);
    }
    public function lowongankerja()
    {

        $data['title'] = 'Lowongan Kerja';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['job_vacancy'] = $this->m_user->job_vacancy();

        //echo'selamat datang ' . $data['user']['name'];
        //$this->load->view('user/jobvacancy', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lowongankerja', $data);
        $this->load->view('templates/footer');
    }

    public function detailbaru()
    {
        $id = $this->uri->segment(3);
        $isi = $this->m_user->detail_job($id);
        foreach ($isi->result() as $row) {
            $data['id_perusahaan'] = $row->id_perusahaan;
            $data['company_name'] = $row->company_name;
            $data['image'] = $row->image;
            $data['job_vacancy'] = $row->job_vacancy;
            $data['requirement'] = $row->requirement;
            $data['special_requirements'] = $row->special_requirements;
            $data['note'] = $row->note;
            $data['address'] = $row->address;
        }
        $data['title'] = 'User Job Vacancy';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('user/detail', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detailbaru', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        //echo'selamat datang ' . $data['user']['name'];

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            //cek gambar yg diupload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload - display_errors();
                }
            }


            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile has been updated! </div>');
            redirect('user');
        }
    }

    public function changePassword()
    {

        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong Current Password! </div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password! </div>');
                    redirect('user/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed! </div>');
                    redirect('user/changepassword');
                }
            }
        }
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
        $data = array(
            'id_perusahaan' => $this->input->post('idPerusahaan'),
            'nama' => $this->input->post('namaPelamar'),
            'tempat' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('ttl'),
            'jenis_kelamin' => $this->input->post('jenisKelamin'),
            'Pendidikan_Terakhir' => $this->input->post('pendidikanTerakhir'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('noHp'),
            'foto' => $foto['fotoPelamar'],
            'jenis_disabilitas' => $this->input->post('jenisDisabilitas'),
            'kompetensi' => $this->input->post('kompetensi'),
            'created_at' => $tgl

        );
        $this->m_user->add_data_pelamar($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Lamaran Terkirim ! </div>');
        redirect('user/lowongankerja');
    }
}
