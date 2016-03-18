<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function get_user($usr, $pwd)
     {
          $sql = "SELECT * FROM users WHERE u_name = '" . $usr . "' AND password = '" . md5($pwd) . "'";
          $query = $this->db->query($sql);
          $row = $query->row();
      
          return $query->num_rows();
     }

     function login($username, $password)
    {
        $match = array(
            'u_name'=>$username,
            'password' => md5($password),
        );
        
        $this->db->select()->from('users')->where($match);
        $query = $this->db->get();
        return $query->first_row('array');
    }

     function getuserid ($username){
          $sql = "SELECT u_id FROM users WHERE u_name = '".$username."'";
          $query = $this->db->query($sql);
          $row = $query->row();
          $userid = $row->u_id;

          return $userid;
     }

     function gethomepagedata ($userid){

     }

    
}?>