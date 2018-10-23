<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxime
 * Date: 22/10/2018
 * Time: 11:00
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Selfcare extends CI_Controller {

    public function index(){
        $this->load->view('base/head');
        $this->load->view('connexion');
        $this->load->view('base/foot');
    }

    public function connexion(){
        $this->load->model('Connexion');
        $data = $this->Connexion->test($_POST['pseudo'], $_POST['pwd']);
        if ($data[0]){
            $this->session->user = array(
                'Id' => $data[0]->utilisateur_num,
                'Pseudo' => $data[0]->utilisateur_identifiant,
                'IsAdmin' => ($data[0]->utilisateur_admin == '0') ? 0 : 1,
                'IsResponssable' => ($data[0]->utilisateur_responssable == '0') ? 0 : 1
                );
            redirect(site_url('selfcare/AllSalles'));
        }
        else{
            redirect(site_url('/'));
        }
    }

    public function AllSalles(){
        if (!isset($this->session->user)){redirect(site_url('/'));}
        $this->load->model('Getter');
        $data['salles'] = $this->Getter->AllSalles();
        $this->load->view('base/head');
        $this->load->view('base/menu');
        $this->load->view('selfcare/listing', $data);
        $this->load->view('base/foot');
    }
}
