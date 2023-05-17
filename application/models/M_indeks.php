<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class M_indeks extends CI_Model {  
    private $tb_indeks = "indeks";
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     
          
        function get_indeks()  
        {  
            $this->db->from($this->tb_indeks);
$this->db->order_by("tahun_indeks", "asc");
$query = $this->db->get(); 
return $query->result();

            // $data = $this->db->query("SELECT * from indeks");
            // $data = $this->db->query("SELECT * from indeks");
            // return $data->result();
            
        }  

        function add_data_indeks($nilai,$tahun){
            $data = array(
              'nilai_indeks' => $nilai,
              'tahun_indeks' => $tahun,
              

            );
            $this->db->insert('indeks',$data);
          }


          function hapus_data_indeks($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

   
}  
?>  