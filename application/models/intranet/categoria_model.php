<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of categoria_model
 *
 * @author Vladimir
 */
class Categoria_model extends CI_Model {

    public function listado() {
        $sql = "CALL LISTAR_CATEGORIAS(0)";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $fila) :
                $data[] = $fila;
            endforeach;
        }else {
            $data = null;
        }
        return $data;
    }

    public function obtener($id) {
        $sql = "CALL LISTAR_CATEGORIAS(?)";
        $query = $this->db->query($sql, $id);
        return $query->row();
    }

}
