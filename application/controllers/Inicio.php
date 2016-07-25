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
                $this->load->model("intranet/plataforma_model");
                $data['registros'] = $this->plataforma_model->listado();
                $pagina = 'intranet/mantenedores/plataforma_view';
                break;
            case 'categoria':
                $title = 'Categoría';
                //$data['registros'] = array();
                $pagina = 'intranet/mantenedores/categoria_view';
                break;
            case 'juego':
                $title = 'Juego';
                //$data['registros'] = array();
                $pagina = 'intranet/mantenedores/juego_view';
                break;
            default:
                break;
        }
        $this->load->setTitle($title);
        $this->load->view($pagina, $data); // Aufruf einer normalen View.         
    }

    public function formplataforma($id, $mensaje = "") {
        $this->load->model("intranet/plataforma_model");
        if ($id != 0):
            $data['registro'] = $this->plataforma_model->obtener($id);
        else:
            $data['registro'] = array();
        endif;
        $data['mensaje'] = $mensaje;
        $this->load->setTitle('Plataforma');
        $this->load->view('intranet/mantenedores/formplataforma_view', $data);
    }

    public function guardar() {
        $data = $this->do_upload();
        if (!$data['rpta']) {
            $data = $data['mensaje'];
        } else {
            $data = '<script>message("Guardado correctamente", "s", "mensaje")</script>';
        }
        $this->formplataforma($this->input->post('id'), $data);
    }

    public function do_upload() {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        $new_name = time() . $_FILES["imagen"]['name'];
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('imagen')) {
            $data = array('rpta' => FALSE, 'mensaje' => '<script>message("' . $this->upload->display_errors() . '", "w", "mensaje")</script>');
            return $data;
        } else {
            $data = array('rpta' => TRUE);
            return $data;
        }
    }

}
