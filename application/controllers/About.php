<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

  public function biodata()
  {
    $this->load->view('about/biodata');
  }

  public function kharisma()
  {
    $this->load->view('about/tentang_kharisma');
  }

  public function web()
  {
    $this->load->view('about/dweb');
  }

  public function lists()
  {
    $this->load->view('about/list');
  }
}
