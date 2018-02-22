<?php

class Curso_model extends CI_Model {

    public $user_id;
    public $nombre;

    public function query()
    {


        $q = "SELECT c.id, c.nombre as Nombre, concat(u.nombres, ' ', u.apellidos) as Usuario, count(m.id) as Materias, sum(m.horas) as Horas from
        Curso c left join User u on c.user_id=u.id left join Materia m on m.curso_id=c.id";


        if ($this->input->post_get('usuario') && ($this->input->post_get('usuario')!='undefined')) {
            $correo = $this->db->escape($this->input->post_get('usuario'));
            $q .= " WHERE u.correo = {$correo}";
        }

        $q .= " group by c.id"  ;

        $query = $this->db->query($q);
        return $query->result();
    }


    public function form($id)
    {
        $return = array();

        $query = $this->db->get('Categoria');
        $categorias = $query->result();
        $return["categorias"] = $categorias;

        $curso = 0;
        if ($id) {
            $query = $this->db->get_where('Curso', array('id'=>$id));
            $curso = $query->result();
            if ($curso) $curso = $curso[0];
        }
        if (!$curso) {
            $curso = new stdClass();
            $curso->id = 0;
            $curso->nombre = '';
            $curso->categoria_id = 0;

        }
        $return ["curso"] = $curso;
        file_put_contents("/tmp/cat", json_encode(array($categorias, $return)));

        return $return;
    }

    public function insert_entry()
    {
        $this->user_id    = $_REQUEST['user_id'];

        $this->db->insert('Curso', $this);
    }

    public function save()
    {
        //$this->user_id    = $_REQUEST['usuario'];

        if ($this->input->post_get('id')) {
            $this->db->where('id', $this->input->post_get('id'));
            $this->db->update('Curso', array('nombre' => $this->input->post_get('nombre')
            , 'categoria_id' => $this->input->post_get('categoria_id')
            ));

        }
        else {
            $req = $this->db->get_where('User', array('correo'=>$this->input->post_get('usuario')));
            $r = $req->row_array();
            file_put_contents("/tmp/pr", json_encode(array($r, $req,  array('correo'=>$this->input->post_get('usuario')))));
            if ((!$req)||(!$r)) return "Usuario incorrecto";
            $this->db->insert('Curso', array('nombre'=> $this->input->post_get('nombre'), 'user_id'=>$r['id'], 'categoria_id' => $this->input->post_get('categoria_id')));

        }



    }

}