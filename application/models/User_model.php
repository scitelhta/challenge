<?php

class User_model extends CI_Model {

    public $nombres;
    public $apellidos;
    public $correo;
    public $password;

    public function query()
    {
        $query = $this->db->get('User');
        return $query->result();
    }

    public function insert_entry()
    {
        $this->nombres    = $_POST['nombres'];
        $this->apellidos  = $_POST['apellidos'];
        $this->correo  = $_POST['correo'];
        $this->password  = $_POST['password'];

        $this->db->insert('User', $this);
    }

    public function update_entry()
    {
        $this->nombres    = $_POST['nombres'];
        $this->apellidos  = $_POST['apellidos'];


        $this->db->update('User', $this, array('id' => $_POST['id']));
    }

}