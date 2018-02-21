<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vista extends CI_Controller {


    public function get($param) {



        $this->load->view($param);
    }
}
