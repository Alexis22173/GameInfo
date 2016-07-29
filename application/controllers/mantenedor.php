<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mantenedor extends CI_Controller {

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
        $this->load->view('intranet/intranet_view'); // Aufruf einer normalen View. 
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
                $this->load->model("intranet/categoria_model");
                $data['registros'] = $this->categoria_model->listado();
                $pagina = 'intranet/mantenedores/categoria_view';
                break;
            case 'juego':
                $title = 'Juego';
                $data['registros'] = array();
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
        if ($id != 0) {
            $data['registro'] = $this->plataforma_model->obtener($id);
        }
        $data['mensaje'] = $mensaje;
        $this->load->setTitle('Plataforma');
        $this->load->view('intranet/mantenedores/formplataforma_view', $data);
    }

    public function formcategoria($id, $mensaje = "") {
        $this->load->model("intranet/categoria_model");
        if ($id != 0) {
            $data['registro'] = $this->categoria_model->obtener($id);
        }
        $data['mensaje'] = $mensaje;
        $this->load->setTitle('Categoría');
        $this->load->view('intranet/mantenedores/formcategoria_view', $data);
    }

    public function guardar_plataforma() {
        $id = $this->input->post('id');
        $imagenname = $this->input->post('namefile');
        if ($_FILES["imagen"]['name'] == "") {
            $data = array('rpta' => TRUE, 'nombre' => $imagenname);
        } else {
            $data = $this->do_upload();
        }
        if (!$data['rpta']) {
            $data = $data['mensaje'];
            $newid = $id;
        } else {
            $this->load->model("intranet/plataforma_model");
            $parametros = array(
                $this->input->post('titulo'),
                $this->input->post('descripcion'),
                $data["nombre"],
                $this->input->post('estado')
            );
            $newid = $this->plataforma_model->guardar($parametros, $id);
            if ($newid != 0) {
                $data = '<script>message("Guardado correctamente", "s", "mensaje")</script>';
            } else {
                $data = '<script>message("Hubo un error al momento de guardar", "e", "mensaje")</script>';
            }
        }
        $this->formplataforma($newid, $data);
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
            $data = array('rpta' => TRUE, 'nombre' => $new_name);
            return $data;
        }
    }

}
