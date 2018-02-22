<?php

class Materia_model extends CI_Model {

    public $curso_id;
    public $nombre;
    public $horas;
    public $ordinal;

    public function query()
    {

        $q = "SELECT m.id, m.nombre as Nombre, m.horas as Horas from Materia m left join Curso c on c.id=m.curso_id left join User u on u.id=c.user_id order by m.ordinal, m.id ";


        if ($this->input->post_get('usuario')) {
            $correo = $this->db->escape($this->input->post_get('usuario'));
            $q .= " WHERE u.correo = {$correo}";
        }

        $query = $this->db->query($q);
        return $query->result();

    }


    public function form($id)
    {
        $return = array();


        $query = $this->db->get('Curso');
        $cursos = $query->result();
        $return["cursos"] = $cursos;

        if (isset($id)&&($id )&&($id != 'undefined')) {
            $query = $this->db->get_where('Materia', array('id'=>$id));
            $materia = $query->result();
            if (count($materia)>0) $materia = $materia[0];
            $return ["materia"] = $materia;



        }
        else {
            $object = new stdClass();
            $object->id = 0;
            $object->nombre = '';
            $object->horas = 0;
            $object->ordinal = 0;
            $object->curso_id = 0;

            $return ["materia"] = $object;


        }


        return $return;
    }

    public function insert_entry()
    {
        $this->user_id    = $_POST['curso_id'];

        $this->db->insert('Materia', $this);
    }
    public function save()
    {
        //$this->user_id    = $_REQUEST['usuario'];

        if ($this->input->post_get('id')) {
            $this->db->where('id', $this->input->post_get('id'));
            $this->db->update('Materia', array('nombre' => $this->input->post_get('nombre'), 'horas'=> $this->input->post_get('horas'),
                'ordinal'=> $this->input->post_get('ordinal'), 'curso_id'=> $this->input->post_get('curso_id')));

        }
        else {

            $this->db->insert('Materia', array('nombre'=> $this->input->post_get('nombre'), 'horas'=> $this->input->post_get('horas'),
                'ordinal'=> $this->input->post_get('ordinal'), 'curso_id'=> $this->input->post_get('curso_id')));

        }



    }

}