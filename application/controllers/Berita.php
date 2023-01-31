<?php

class Berita extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{

                        $this->load->view("landing/head");
                        $this->load->view("landing/navbar"); 
                        $this->load->view("berita/berita");
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

  public function detail()
  {
    $this->load->view("landing/head");
    $this->load->view("landing/navbar"); 
    $this->load->view("berita/detailberita");
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