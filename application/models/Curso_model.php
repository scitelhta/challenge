<?php

class Curso_model extends CI_Model {

    public $user_id;
    public $nombre;

    public function query()
    {
        $query = $this->db->get('Curso');
        return $query->result();
    }

    public function insert_entry()
    {
        $this->user_id    = $_REQUEST['user_id'];

        $this->db->insert('Curso', $this);
    }

    public function update_entry()
    {
        $this->user_id    = $_REQUEST['user_id'];



        $this->db->update('Curso', $this, array('id' => $_POST['id']));
    }

}