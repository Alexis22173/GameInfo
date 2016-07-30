<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of publico
 *
 * @author Vladimir
 */
class Publico extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->setLayout('layout/publicmsater_view'); // Auswahl der MasterPage.
    }

    public function index() {
        //$this->load->view('welcome_message');
        $this->load->setTitle('Test!');
        $this->load->view('inicio_view'); // Aufruf einer normalen View. 
    }

}
