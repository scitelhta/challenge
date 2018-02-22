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
        $this->load->model($param."_model", '',TRUE);
        $fparam = $param."_model";
        $data[$param."s"] = $this->$fparam->query();

        //$data[$param] = array('uno','dos');
        $this->load->view('list_'.$param, $data);
    }
    public function alogin($param) {



        $fparam = $param."_model";
        $this->load->model($fparam, '', TRUE);
        $result=$this->$fparam->alogin();


        echo $result;
    }


    public function form($param) {

            $p = explode("_", $param);
            $pp = '';
            if (count($p)>1) $pp = $p[1];
            $data = array();
            $this->load->model($p[0]."_model", '',TRUE);
            $fparam = $p[0]."_model";
            $data[$p[0]."s"] = $this->$fparam->form($pp);


            //$data[$param] = array('uno','dos');
            $this->load->view('form_'.$p[0], $data);
    }

    public function create($param) {

        $fparam = $param."_model";
        $this->load->model($fparam, '', TRUE);
        $result=$this->$fparam->create();


        echo $result;
    }

    public function save($param) {

        $fparam = $param."_model";
        $this->load->model($fparam, '', TRUE);
        $result=$this->$fparam->save();


        echo $result;
    }
}
