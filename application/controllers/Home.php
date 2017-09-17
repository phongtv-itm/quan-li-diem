<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
      $this->data['content'] = 'home/index';
      $this->load->view('main', $this->data);
    }

}
