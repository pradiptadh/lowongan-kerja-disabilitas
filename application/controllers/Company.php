<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('m_company');
    }

    public function index()
    {

        $data['title'] = 'Company Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        // $this->load->view('company/profile', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('company/index', $data);
        $this->load->view('templates/footer');
    }

    public function job_vacancy()
    {

        $data['title'] = 'Company Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['job_vacancy'] = $this->m_company->job_vacancy();
        $this->load->view('company/job_vacancy', $data);
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
            'created_at' => $tgl

        );
        $this->m_company->add_job($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Lowongan Berhasil dibuat Silahkan tunggu Admin mengkonfirmasi </div>');
        redirect('company/lowongankerja');
    }

    public function detailbaru()
    {
        $id = $this->uri->segment(3);
        $isi = $this->m_company->detail_job($id);
        foreach ($isi->result() as $row) {
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
        // $this->load->view('company/detail', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('company/detailbaru', $data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $data['title'] = 'Edit Company Profile';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        //echo'selamat datang ' . $data['user']['name'];

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('company/edit', $data);
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
                    echo $this->upload->display_errors();
                }
            }


            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile has been updated! </div>');
            redirect('company');
        }
    }
    public function lowongankerja()
    {

        $data['title'] = 'Lowongan Kerja';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['job_vacancy'] = $this->m_company->job_vacancy();

        //echo'selamat datang ' . $data['user']['name'];
        //$this->load->view('user/jobvacancy', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('company/lowongankerja', $data);
        $this->load->view('templates/footer');
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
            $this->load->view('company/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');

            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong Current Password! </div>');
                redirect('company/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password! </div>');
                    redirect('company/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password Changed! </div>');
                    redirect('company/changepassword');
                }
            }
        }
    }

    public function datapelamar()
    {
        $id_perusahaan = $this->session->userdata('id');

        $id_pelamar = $this->uri->segment(3);
        $isi = $this->m_company->data_pelamar($id_pelamar);
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
        $data['datapelamar'] = $this->m_company->data_pelamar(['id_perusahaan' => $id_perusahaan])->result_array();
        // $data['datapelamar'] = $this->db->get(data_pelamar('id_pelamar'))->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('company/datapelamar', $data);
        $this->load->view('templates/footer');
    }
}
