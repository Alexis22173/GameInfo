<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->setLayout('layout/master_view'); // Auswahl der MasterPage.
    }

    public function index() {
        //$this->load->view('welcome_message');
        $this->load->setTitle('Test!');
        $this->load->view('inicio_view'); // Aufruf einer normalen View. 
    }

    public function abrirpagina($param) {
        switch ($param) {
            case 'plataforma':
                $title = 'Plataforma';
                $pagina = 'intranet/mantenedores/plataforma_view';
                break;
            case 'categoria':
                $title = 'Categoría';
                $pagina = 'intranet/mantenedores/categoria_view';
                break;
            case 'juego':
                $title = 'Juego';
                $pagina = 'intranet/mantenedores/juego_view';
                break;
            default:
                break;
        }
        $this->load->setTitle($title);
        $this->load->view($pagina); // Aufruf einer normalen View.         
    }

}
