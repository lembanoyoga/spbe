<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class M_materi extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
    function get_materi()  
    {  
        $data = $this->db->query("SELECT * from materi");
        return $data->result();
        
    }    
        // function get_materi()  
        // {  
        //    return $this->db->get('materi')->result();
            
        // }  

     

        function add_data_materi($judul_materi,$tanggal_materi){
           
          // $config['upload_path']          = './gambar/';
          // $config['allowed_types']        = 'gif|jpg|png';
          // $config['max_size']             = 100;
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;
          // $new_name = time().$_FILES["userfiles"]['name'];
          // $config['file_name'] = $new_name;
          // $this->load->library('upload', $config);
         
          // if ( ! $this->upload->do_upload('berkas')){
          //   $error = array('error' => $this->upload->display_errors());
          //   $this->load->view('v_upload', $error);
          // }else{
          //   $data = array('upload_data' => $this->upload->data());
          //   $this->load->view('v_upload_sukses', $data);
          // }
          $nama = $_FILES['isi_materi']['name'];
          $nama = str_replace(' ', '_', $nama);	
          // $nama3 = str_replace('.', '_', $nama2);
            $data = array(
              'judul_materi' => $judul_materi,
              'tanggal_materi' => $tanggal_materi,
              'isi_materi'=>$Path = "uploads/materi/".$nama
              // 'gambar_berita' =>  $ImagePath
       
             
           

            );
            $this->db->insert('materi',$data);
          }


          function hapus_data_materi($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function countRowMateri(){
          $data = $this->db->query("SELECT * from materi");
              // print_r($query->result());
              return $data->num_rows();
}  

function update_data_materi($judul_materi,$tanggal_materi,$id_materi){
           
          
  // }
  $nama = $_FILES['isi_materi']['name'];
  // $nama = str_replace('.', '_', $nama);	
  $nama1 = str_replace(' ', '_', $nama);	
  $pecah = explode(".",$nama1);
  $ekstensi1 = $pecah[0];
$ekstensi2 = $pecah[1];
$ekstensi3 = $pecah[2];

  $file_name = $_FILES['isi_materi']['name'];
  $imageFileType = strtolower(pathinfo($file_name ,PATHINFO_EXTENSION));
  // $nama = $_FILES['isi_materi']['name'];
  //         $nama = str_replace(' ', '_', $nama);	
  //         $nama = str_replace('.', '_', $nama);	
    $data = array(
      'judul_materi' => $judul_materi,
      'tanggal_materi' => $tanggal_materi,
      'isi_materi'=>$Path = "uploads/materi/".$ekstensi1.'_'.$ekstensi2.'_'.$ekstensi3.'.'.$imageFileType
      // 'gambar_berita' =>  $ImagePath

     
   

    );
    $this->db->where('id_materi', $id_materi);
    $this->db->update('materi',$data);
    // $this->db->insert('berita',$data);
  }


function hapus_data_berita($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
}
}

?>  