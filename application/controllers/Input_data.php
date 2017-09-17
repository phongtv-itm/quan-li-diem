<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Input_data extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->helper(array('form','url'));
        $this->load->model('courses_model');
        $this->load->library(array('PHPExcel/PHPExcel_IOFactory','TCVN2UNI','form_validation','upload'));
        
    }

    public function index() {
      $this->data['content']='input/point';
      $this->data['courses_list']=$this->courses_model->getCoursesList();
      $this->data['subjects_list']=$this->courses_model->getSubjectsList();
      $this->load->view("main",$this->data);
    }
    public function form_validate()
    {
         var_dump($this->upload->data());
    }
    public function readCourses($path='D:/bangma.xls')
    {
      $inputFileName = $path;
      try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
      } catch(Exception $e) {
        die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
      }


      echo '<hr />';
      echo "<pre>";
      $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

      //print_r($sheetData);
      /*
      foreach($sheetData as $rec)
      {

      print_r($rec);
      }*/
      echo "<table border='1' style='border-collapse: collapse;'>";
      foreach($sheetData as $rec)
      {
        echo "<tr>";
        foreach($rec as $col) 
          //if(strlen($col)>0)
            echo "<td>".(TCVN2UNI::convert($col))."</td>";
      }
      echo "</table>";
    }
    public function readPoint($path='')
    {

    }
}