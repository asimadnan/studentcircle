<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     // function get_user_details($usr, $pwd)
     // {
     //      $sql = "select username , email from tbl_usrs where username = '" . $usr . "' ";
     //      $query = $this->db->query($sql);
     //      return $query;
     // }
}?>