<?php

class Categoria_model extends CI_Model {

    public $curso_id;
    public $nombre;

    public function query()
    {
        $query = $this->db->get('Categoria');
        return $query->result();
    }

    public function form($id)
    {
        $return = array();


        $categoria = 0;
        if ($id) {
            $query = $this->db->get_where('Categoria', array('id'=>$id));
            $categoria = $query->result();
            if ($categoria) $categoria = $categoria[0];
        }
        if (!$categoria) {
            $categoria = new stdClass();
            $categoria->id = 0;
            $categoria->nombre = '';



        }
        $return ["categoria"] = $categoria;

        return $return;
    }




    public function insert_entry()
    {
        $this->user_id    = $_POST['curso_id'];

        $this->db->insert('Categoria', $this);
    }

    public function update_entry()
    {
        $this->user_id    = $_POST['curso_id'];



        $this->db->update('Categoria', $this, array('id' => $_POST['id']));
    }


    public function save()
    {
        //$this->user_id    = $_REQUEST['usuario'];

        if ($this->input->post_get('id')) {
            $this->db->where('id', $this->input->post_get('id'));
            $this->db->update('Categoria', array('nombre' => $this->input->post_get('nombre')));

        }
        else {

            //print_r(array('nombre'=> $this->input->post_get('nombre')));

            $this->db->insert('Categoria', array('nombre'=> $this->input->post_get('nombre')));

        }



    }

}