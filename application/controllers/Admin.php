<?php

class Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->Model('Auth_model');
        $this->load->library('session');
	}

	public function index()
	{

    $this->load->view("admin/login");
    // $this->load->view("admin/menu/sidebar");
	}


   public function loginadmin(){
        $username =  $this->input->post('username');
        $password =  $this->input->post('password');
        
        if($this->Auth_model->login($username, $password)){
            $t = $this->Auth_model->login($username, $password);
            redirect(base_url('dashboard'));
            die(json_encode(['return' => 1, 'akses' => $t['akses'],'keterangan' => 'Login berhasil!']));
        }else{
            die(json_encode(['return' => 0, 'keterangan' => 'Username dan password salah!']));
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin'));
        exit;
    } 
  
  
}
?>