<?php

class Materia_model extends CI_Model {

    public $curso_id;
    public $nombre;
    public $horas;
    public $ordinal;

    public function query()
    {
        $query = $this->db->get('Materia');
        return $query->result();
    }

    public function insert_entry()
    {
        $this->user_id    = $_POST['curso_id'];

        $this->db->insert('Materia', $this);
    }

    public function update_entry()
    {
        $this->user_id    = $_POST['curso_id'];



        $this->db->update('Materia', $this, array('id' => $_POST['id']));
    }

}