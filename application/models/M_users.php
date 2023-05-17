<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class M_users extends CI_Model {  
  
    function __construct()  
    {  
        //call model constructor  
        parent::__construct();  
    }     


          
        // function get_users()  
        // {  
        //    return $this->db->get('users')->result();
            
        // }  

        function get_users()  
        {  
            $data = $this->db->query("SELECT * from users");
            return $data->result();
            
        }  

        function add_data($email,$username,$password){
            $data = array(
              'email' => $email,
              'username' => $username,
              'password' => password_hash($password,PASSWORD_DEFAULT),
            );
            $this->db->insert('users',$data);
          }


        function hapus_data_users($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
        }

        public function countRowUser(){
            $query =  $this->db->query("SELECT * FROM users ");
                // print_r($query->result());
          
                return $query->num_rows();
}  

// function check_email($email){
//     $this->db->select('email');
//     $this->db->where('email',$email);		
//     $query =$this->db->get('users');
//     $row = $query->row();
//     if ($query->num_rows > 0){
//           return $row->email; 
//     }else{
//           return "";
//    }
//  }
}
?>  