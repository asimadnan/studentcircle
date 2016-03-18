<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Circle_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get circle info from database
     function getcircledata($circleid){
          
          $sql = "SELECT c_id,c_name,c_about,c_picpath FROM circle WHERE c_id = '" . $circleid . "'";

          $query = $this->db->query($sql);
          $rowarray = $query->row_array();
          return $rowarray;

     }

     function getCircleposts($page,$perpage,$circleid){

         // $sql = "SELECT `p_id`, `c_id`, `u_id`, `filepath`, `ptext`, `time_stamp` FROM `posts` WHERE `c_id` = '" . $circleid . "' LIMIT '" . $page . "','" . $perpage . "'";
          
         
          $query =  $this->db->get_where('posts', array('c_id' => $circleid), $perpage, $page);
          $result = $query->result();
          return $result;


     }

     function getNumofPosts($circleid){
           $sql = "SELECT  p_id FROM posts WHERE c_id = '" . $circleid . "'";
          $query = $this->db->query($sql);
          
          return $query->num_rows(); 
     }

     function getCircleMembers($circleid){
          $sql = "SELECT u_id FROM members WHERE c_id = '" . $circleid . "'";
          $query = $this->db->query($sql);
          $rowarray = $query->row_array();
          return $rowarray;


     }

     function getPostComments($postid){
          $sql = "SELECT c_id, p_id, u_id, text FROM comments WHERE c_id = '" . $postid . "'";
          $query = $this->db->query($sql);
          $rowarray = $query->row_array();
          return $rowarray;

     }

     function getPostBuzz($postid){
          $sql = "SELECT COUNT(b_id) FROM buzz WHERE p_id = '" . $postid . "'";
          $query = $this->db->query($sql);
          $rowarray = $query->row_array();
          return $rowarray;

     }

     function removeMembercircle($userid,$circleid){
          $sql = "DELETE FROM members WHERE c_id = '" . $circleid . "' AND u_is = '" . $userid . "'";
          $query = $this->db->query($sql);
         

     }

     function addpost(){

     }


}?>