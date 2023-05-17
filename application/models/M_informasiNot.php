<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class M_informasi extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function get_informasi()  
        {  
           return $this->db->get('berita')->result();
            
        }  

     

}  
?>  