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
        $data['bisnis']=$this->am->bisnis();
        $this->load->view("admin/unitBisnis",$data);
    }

    public function tambahBisnis()
    {
     $this->load->view("admin/vTambahBisnis");   
    }

    public function prosesTambahBisnis()
    {
        $nama = $this->input->post('nama');
        $jenis_usaha = $this->input->post('jenis_usaha');
        $lokasi = $this->input->post('lokasi');
        $kategori = $this->input->post('kategori');
        $upload = $this->am->uploadDokumenBukti();

        
        if ($upload['result'] == "success") {
            $data = array(
                'nama_unit' => $nama,
                'jenis_usaha' => $jenis_usaha,
                'lokasi' => $lokasi,
                'kategori' => $kategori,
                'foto_unit' => $upload['file']['file_name']
            );
            $addDataUnitBisnis = $this->am->addDataUnitBisnis($data);
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal menambahkan '));
            redirect(base_url().'dashboard/tambahBisnis');
        }
        $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil menambahkan '));
        redirect(base_url().'dashboard/unitBisnis');
    }

    public function galeri()
    {
        $data['galeri']=$this->am->galeri();
        $this->load->view("admin/galeri",$data);
    }

    public function tambahGaleri()
    {
     $this->load->view("admin/vTambahGaleri");   
    }

    public function prosesTambahGaleri()
    {
        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');
        $upload = $this->am->uploadDokumenBukti();

        
        if ($upload['result'] == "success") {
            $data = array(
                'judul_galeri' => $judul,
                'keterangan_galeri' => $keterangan,
                'kategori_galeri' => $kategori,
                'foto_galeri' => $upload['file']['file_name']
            );
            $addDataGaleri = $this->am->addDataGaleri($data);
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal menambahkan'));
            redirect(base_url().'dashboard/tambahGaleri');
        }
        $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil menambahkan'));
        redirect(base_url().'dashboard/galeri');
    }
    public function masterUser()
    {
        $data['user']=$this->am->user();
        $this->load->view("admin/masterUser",$data);
    }
  
}
?>