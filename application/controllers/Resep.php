<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep extends CI_Controller
{
  public function index()
  {
    $this->load->view('about/list');
  }

  public function pallubasa()
  {
    $this->load->view('resep/pallubasa');
  }

  public function ayamlodho()
  {
    $this->load->view('resep/ayamlodho');
  }

  public function pempek()
  {
    $this->load->view('resep/pempek');
  }

  public function seblak()
  {
    $this->load->view('resep/seblak');
  }

  public function tahutek()
  {
    $this->load->view('resep/tahutek');
  }
}
