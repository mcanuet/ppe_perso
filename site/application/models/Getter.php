<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxime
 * Date: 23/10/2018
 * Time: 15:38
 */

class Getter extends CI_Model
{
    /**
     * @return mixed retourne la liste des salles
     */
    public function AllSalles(){
        return $this->db->select('*')->from('salle')->get()->result();
    }
}