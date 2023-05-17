<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class M_web extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function get_web()  
        {  
           return $this->db->get('web')->result();
            
        }  

        function add_data_web($nama,$link,$status){
            $data = array(
              'nama_web' => $nama,
              'link' => $link,
              'status' => $status,

            );
            $this->db->insert('web',$data);
          }


          function hapus_data_web($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }
}  
?>  