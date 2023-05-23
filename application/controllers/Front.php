<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
      function __construct()
      {
            parent::__construct();
            $this->load->model('FrontModel');
      }
      public function index()
      {
            $data = [
                  'title_page' => 'Berinovasi Mewujudkan Mimpi Bersama NaZMaLogy | Home',
                  'testimonials' => $this->FrontModel->get_data_testimony()
            ];
            $this->load->view('layout/front/style', $data);
            $this->load->view('layout/front/navbar');
            $this->load->view('layout/front/mobile_bar');
            $this->load->view('homepage');
            $this->load->view('layout/front/footer');
            $this->load->view('layout/front/script');
      }
      public function listClass()
      {
            $this->load->view('layout/front/style');
            $this->load->view('layout/front/navbar');
            $this->load->view('layout/front/mobile_bar');
            $this->load->view('listClass');
            $this->load->view('layout/front/footer');
            $this->load->view('layout/front/script');
      }
      public function support()
      {
            $this->load->view('layout/front/style');
            $this->load->view('layout/front/navbar');
            $this->load->view('layout/front/mobile_bar');
            $this->load->view('support');
            $this->load->view('layout/front/footer');
            $this->load->view('layout/front/script');
      }

      public function save_subscribe()
      {
            $email = $this->input->post('email');
            $data = array(
                  'email' => $email,
                  // dan seterusnya
            );
            $insert_id = $this->FrontModel->insert_data_subscribe($data);
            if ($insert_id) {
                  $this->session->set_flashdata('success', 'Email Terkirim');
                  redirect('front');
            } else {
                  $this->session->set_flashdata('error', 'Input Salah');
                  redirect('front');
            }
      }
}
