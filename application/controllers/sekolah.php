<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sekolah extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('sekolah_model');
        $this->load->helper('captcha_helper');
        $this->load->model('tugas_model');
        $this->load->model('registrasi_model');
        session_start();
    }

    public function index() {
        if (isset($_SESSION['status']) && $_SESSION['status'] != 'guest' && $_SESSION['status'] != '') {
            $data = array();
            $query = $this->tugas_model->select_tugas();
            $data = array();

            if ($query) {
                $data['rows'] = $query;
            }
            $this->load->view('header_sekolah_view');
            $this->load->view('content_sekolah_view', $data);
            $this->load->view('footer_sekolah_view');
        } else {
            $_SESSION['page'] = "";
            $this->load->view('header_view');
            $this->load->view('error_403_view');
        }
    }

    public function detailtugasjumat() {
        if ($_SESSION['status'] != 'guest') {
            $id_tugas = $this->security->xss_clean($this->uri->segment(3));
            $tugas = $this->tugas_model->select_one_tugas($id_tugas);
            if ($tugas == null)
                $this->index();
            else {
                $data = array();
                $data['tugas'] = $tugas;

                $jawaban = $this->sekolah_model->select_jawaban_tugas($_SESSION['username'], $tugas->id_tugas);
                $data['jawaban'] = $jawaban;


                $this->load->view('detail_tugas_jumat_view', $data);
            }
        } else {
            $_SESSION['page'] = "";
            $this->load->view('header_view');
            $this->load->view('error_403_view');
        }
    }

    public function createjawaban() {
        if ($_SESSION['status'] != 'guest') {
            if ($this->input->post('save')) {
                $jawaban = array(
                    'id_jawaban' => '',
                    'tugas_id' => $this->input->post('tugas_id'),
                    'username' => $this->session->userdata('user')->username,
                    'jawaban' => $this->input->post('jawaban'),
                    'lastedit' => date("Y-m-d H:i:s"),
                    'datecreate' => date("Y-m-d H:i:s"),
                    'parent' => 0,
                );
                $this->sekolah_model->add_jawab($jawaban);
                redirect(base_url() . "sekolah/detailtugasjumat/" . $this->input->post('tugas_id'));
            } else if ($this->input->post('update')) {
                $this->updatejawaban();
            } else {
                $_SESSION['page'] = "";
                $this->load->view('header_view');
                $this->load->view('error_403_view');
            }
        } else {
            $_SESSION['page'] = "";
            $this->load->view('header_view');
            $this->load->view('error_403_view');
        }
    }

    public function updatejawaban() {
        if ($_SESSION['status'] != 'guest') {
            $jawaban = $this->sekolah_model->select_jawaban_tugas($this->session->userdata('user')->username, $this->input->post('tugas_id'));
            $jawaban->jawaban = $this->input->post('jawaban');
            $jawaban->lastedit = date("Y-m-d H:i:s");
            $this->sekolah_model->update_jawab($jawaban->id_jawaban, $jawaban);
            redirect(base_url() . "sekolah/detailtugasjumat/" . $jawaban->tugas_id);
        } else {
            $_SESSION['page'] = "";
            $this->load->view('header_view');
            $this->load->view('error_403_view');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */