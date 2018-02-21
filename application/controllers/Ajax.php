<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function index()
    {
        $this->load->model('curso_model');
        $this->curso_model->insert_entry();
        $this->load->view('curso');
    }

    public function query($param) {
        $data = array();
        $this->load->model($param."_model");
        $fparam = $param."_model";
        $data[$param."s"] = $this->$fparam->query();
        //$data[$param] = array('uno','dos');
        $this->load->view('list_'.$param, $data);
    }
}
