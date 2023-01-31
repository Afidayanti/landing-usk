<?php

class Bisnis extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        $this->load->view("landing/head");
        $this->load->view("landing/navbar");
        $this->load->view("bisnis/bisnis");
        $this->load->view("landing/footer");
        $this->load->view("landing/js");
	}

        public function detailunit()
	{
        $this->load->view("landing/head");
        $this->load->view("landing/navbar");
        $this->load->view("bisnis/bisnissatu");
        $this->load->view("landing/footer");
        $this->load->view("landing/js");
	}

        public function detailunitdua()
	{
        $this->load->view("landing/head");
        $this->load->view("landing/navbar");
        $this->load->view("bisnis/bisnisdua");
        $this->load->view("landing/footer");
        $this->load->view("landing/js");
	}

        public function detailunittiga()
	{
        $this->load->view("landing/head");
        $this->load->view("landing/navbar"); 
        $this->load->view("bisnis/bisnistiga");
        $this->load->view("landing/footer");
        $this->load->view("landing/js");
	}

        public function detailunitempat()
	{
        $this->load->view("landing/head");
        $this->load->view("landing/navbar");
        $this->load->view("bisnis/bisnisempat");
        $this->load->view("landing/footer");
        $this->load->view("landing/js");
	}
        public function detailunitlima()
	{
        $this->load->view("landing/head");
        $this->load->view("landing/navbar");
        $this->load->view("bisnis/bisnislima");
        $this->load->view("landing/footer");
        $this->load->view("landing/js");
	}
}
