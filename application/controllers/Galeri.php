<?php

class Galeri extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
    $this->load->Model('Auth_model' , 'am');
    $this->load->library('session');
	}

	public function index()
	{
        $data['getAlldataGaleri']=$this->am->getAlldataGaleri();
        $this->load->view("landing/head");
        $this->load->view("landing/navbar"); 
        $this->load->view("galeri/galeri", $data);
        $this->load->view("landing/footer");
        $this->load->view("landing/js");
	}
}