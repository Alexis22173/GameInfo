<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pllataforma_model
 *
 * @author Vladimir
 */
class Plataforma_model extends CI_Model {

    public function listado() {
        $sql = "CALL GET_ALLPLATAFORMAS(0)";
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
        $sql = "CALL GET_ALLPLATAFORMAS(?)";
        $query = $this->db->query($sql, $id);
        return $query->row();
    }

}
