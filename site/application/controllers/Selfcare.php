<?php
/**
 * Created by IntelliJ IDEA.
 * User: maxime
 * Date: 22/10/2018
 * Time: 11:00
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Selfcare extends CI_Controller {

    public function index()
    {
        $this->load->view('base/head');
        $this->load->view('connexion');
        $this->load->view('base/foot');
    }
}