<?php

class Dashboard extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->Model('Auth_model' , 'am');
        $this->load->library('session');
        $this->am->isLoggedInAdmin();	
		
	}

    public function messageAlert($type, $title) {
        $messageAlert = "
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
    
        Toast.fire({
            type: '".$type."',
            title: '".$title."'
        });
        ";
        return $messageAlert;
    }

	public function index()
	{

    $this->load->view("admin/dashboard");
    // $this->load->view("admin/menu/sidebar");
	}

    public function tambahBerita()
    {
     $this->load->view("admin/vTambahBerita");   
    }

    public function prosesTambahBerita()
    {
        $judul = $this->input->post('judul');
        $berita = $this->input->post('berita');
        $kategori = $this->input->post('kategori');
        $upload = $this->am->uploadDokumenBukti();

        
        if ($upload['result'] == "success") {
            $data = array(
                'judul' => $judul,
                'berita' => $berita,
                'kategori_berita' => $kategori,
                'foto' => $upload['file']['file_name']
            );
            $addDataBerita = $this->am->addDataBerita($data);
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal menambahkan Kegiatan'));
            redirect(base_url().'dashboard/tambahBerita');
        }
        $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil menambahkan Kegiatan'));
        redirect(base_url().'dashboard/berita');
    }

    public function berita()
    {
        $data['berita']=$this->am->berita();
        $this->load->view("admin/berita", $data);
    }

    public function unitBisnis()
    {
        $this->load->view("admin/unitBisnis");
    }

    public function galeri()
    {
        $this->load->view("admin/galeri");
    }
    public function masterUser()
    {
        $this->load->view("admin/masterUser");
    }
  
}
?>