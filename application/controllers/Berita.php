<?php

class Berita extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
    $this->load->Model('Auth_model' , 'am');
    $this->load->library('session');
	}

	public function index()
	{
      $data['getAllBerita']=$this->am->getAllBerita();
                        $this->load->view("landing/head");
                        $this->load->view("landing/navbar"); 
                        $this->load->view("berita/berita",$data);
                        $this->load->view("landing/footer");
                        $this->load->view("landing/js");
	}

  public function beri()
	{

                        $this->load->view("landing/head");
                        $this->load->view("landing/navbar"); 
                        $this->load->view("berita/detailberita2");
                        $this->load->view("landing/footer");
                        $this->load->view("landing/js");
	}
  public function beritahu()
	{

                        $this->load->view("landing/head");
                        $this->load->view("landing/navbar"); 
                        $this->load->view("berita/detailberita3");
                        $this->load->view("landing/footer");
                        $this->load->view("landing/js");
	}

  public function beritempat()
	{

                        $this->load->view("landing/head");
                        $this->load->view("landing/navbar"); 
                        $this->load->view("berita/detailberita4");
                        $this->load->view("landing/footer");
                        $this->load->view("landing/js");
	}

  public function detail($id_berita)
  {

    $data['beritaByid']= $this->am->beritaByid($id_berita);
    $this->load->view("landing/head");
    $this->load->view("landing/navbar"); 
    $this->load->view("berita/detailberita",$data);
    $this->load->view("landing/footer");
    $this->load->view("landing/js");
  }

  public function beritalima()
  {
    $this->load->view("landing/head");
    $this->load->view("landing/navbar"); 
    $this->load->view("berita/beritalima");
    $this->load->view("landing/footer");
    $this->load->view("landing/js");
  }

  public function beritaenam()
  {
    $this->load->view("landing/head");
    $this->load->view("landing/navbar"); 
    $this->load->view("berita/beritaenam");
    $this->load->view("landing/footer");
    $this->load->view("landing/js");
  }
  
}