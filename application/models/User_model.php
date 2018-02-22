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


    public function form()
    {

        return array();
    }


    public function create()
    {
        $this->nombres    = $_REQUEST['nombres'];
        $this->apellidos  = $_REQUEST['apellidos'];
        $this->correo  = $_REQUEST['correo'];
        $this->password  = $_REQUEST['password'];

        $this->db->insert('User', $this);
        $message = ($this->db->error());
        if ($message)
        return $message["message"];
    }

    public function alogin()
    {


        $d = array('correo'=>$this->input->post_get('correo', TRUE), 'password'=>$this->input->post_get('password', TRUE));
        $u = $this->db->get_where("User", $d);

        if ((!$u)||(!$u->row_array())) return "Usuario o password incorrecto";
        $message = ($this->db->error());

        if ($message)
            return $message["message"];
    }
    public function update_entry()
    {
        $this->nombres    = $_POST['nombres'];
        $this->apellidos  = $_POST['apellidos'];


        $this->db->update('User', $this, array('id' => $_POST['id']));
    }

}