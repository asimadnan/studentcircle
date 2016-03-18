<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function getuserinfo($usrid)
     {
          $sql = "SELECT * FROM users WHERE u_id = '" . $usrid . "'";
          $query = $this->db->query($sql);
          $rowarray = $query->row_array();


         

          return $rowarray;
     }

     function changepassword($oldpassword , $newpassword, $userid){
          $sql = "SELECT password FROM users WHERE u_id = '".$userid ."' ";
          $query = $this->db->query($sql);
          $row = $query->row();
          if($oldpassword == md5($row->password)){
               //change password
               return true;
          }
          else {
               return false;
          }
     }

     function profilepic($userid,$picpath){
          $sql = "UPDATE users SET pic_path='".$picpath ."' WHERE u_id='".$userid ."'";
           $query = $this->db->query($sql);

     }

    
}?>