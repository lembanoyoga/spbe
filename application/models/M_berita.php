<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class M_berita extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function get_berita()  
        {  
           return $this->db->get('berita')->result();
            
        }  

     

        function add_data_berita($judul,$isi,$tanggal){
           
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
          $nama = $_FILES['gambar_berita']['name'];
          $nama = str_replace(' ', '_', $nama);	
            $data = array(
              'judul_berita' => $judul,
              'isi_berita' => $isi,
              'tanggal_terbit' => $tanggal,
              'gambar_berita'=>$Path = "gambar/".$nama
              // 'gambar_berita' =>  $ImagePath
       
             
           

            );
            $this->db->insert('berita',$data);
          }

          function update_data_berita($judul,$isi,$tanggal,$id_berita){
           
          
            // }
            $nama = $_FILES['gambar_berita']['name'];
            $nama = str_replace(' ', '_', $nama);	
              $data = array(
                'judul_berita' => $judul,
                'isi_berita' => $isi,
                'tanggal_terbit' => $tanggal,
                'gambar_berita'=>$Path = "gambar/".$nama
                // 'gambar_berita' =>  $ImagePath
         
               
             
  
              );
              $this->db->where('id_berita', $id_berita);
              $this->db->update('berita',$data);
              // $this->db->insert('berita',$data);
            }
				

          function hapus_data_berita($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
        public function countRowBerita(){
          $data = $this->db->query("SELECT * from berita");
              // print_r($query->result());
              return $data->num_rows();

}  
function detail($id_berita)  
        {  
          return $this->db->get_where('berita', ['id_berita' => $id_berita])->result(); 

        }  
}
?>  