<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
      public function index()
      {
            $this->load->view('layout/front/style');
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
}