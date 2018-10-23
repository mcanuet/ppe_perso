<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxime
 * Date: 22/10/2018
 * Time: 16:25
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Model {

    /**
     * @param $pseudo le nom de l'utilisateur
     * @param $mdp    mot de passe de l'utilisateur
     * @return mixed  un tableau qui correspond contenant les utilisateurs avec le couple pseudo/mdp correspondant
     */
    public function test($pseudo, $mdp){
        $co = $this->db->select('utilisateur_num, utilisateur_identifiant, utilisateur_admin, utilisateur_responssable, utilisateur_verr')
            ->from('utilisateur')
            ->where('utilisateur_identifiant',$pseudo)
            ->where('utilisateur_mdp',sha1($mdp))
            ->get()->result();
        return $co;
    }
}