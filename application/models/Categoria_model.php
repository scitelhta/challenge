<?php

class Categoria_model extends CI_Model {

    public $curso_id;
    public $nombre;

    public function query()
    {
        $query = $this->db->get('Categoria');
        return $query->result();
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

}