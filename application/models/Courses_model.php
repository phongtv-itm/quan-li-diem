<?php
class Courses_model extends CI_Model {
   public function __construct() {
        parent::__construct();
        $this->load->database();
    }
   public function getCoursesList()
   {
      $query = $this->db->query("select * from courses");
      return $query->result();
   }
   public function getSubjectsList()
   {
      $query = $this->db->query("select * from subject");
      return $query->result();
   }
}