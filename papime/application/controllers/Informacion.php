<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Informacion extends CI_Controller {

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
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('header');
        $this->load->view('saludo');   
        $this->load->view('footer');
    }
    public function arduino() {
        $this->load->view('header');
        $this->load->view('infoModelo1');   
        $this->load->view('footer');
    }
    public function bobina() {
        $this->load->view('header');
        $this->load->view('infoModelo2');   
        $this->load->view('footer');
    }
    public function capacitor() {
        $this->load->view('header');
        $this->load->view('infoModelo3');   
        $this->load->view('footer');
    }
    public function celdaSolar() {
        $this->load->view('header');
        $this->load->view('infoModelo4');   
        $this->load->view('footer');
    }
    public function celular() {
        $this->load->view('header');
        $this->load->view('infoModelo5');   
        $this->load->view('footer');
    }
    public function control1() {
        $this->load->view('header');
        $this->load->view('infoModelo6');   
        $this->load->view('footer');
    }
    public function control2() {
        $this->load->view('header');
        $this->load->view('infoModelo7');   
        $this->load->view('footer');
    }
    public function dron() {
        $this->load->view('header');
        $this->load->view('infoModelo8');   
        $this->load->view('footer');
    }
    public function microprocesador() {
        $this->load->view('header');
        $this->load->view('infoModelo9');   
        $this->load->view('footer');
    }
    public function osciloscopio() {
        $this->load->view('header');
        $this->load->view('infoModelo10');   
        $this->load->view('footer');
    }
    public function raspberry() {
        $this->load->view('header');
        $this->load->view('infoModelo11');   
        $this->load->view('footer');
    }


    // public function informacion_Modelos() {
    //     // $this->load->helper('url');
    //     $this->load->view('header');
    //     $this->load->view('infoModelos');
    //     $this->load->view('footer');
    //     // $this->load->library('javascript');
    // }     

    // public function catalogo_RA() {
    //     // $this->load->helper('url');
    //     $this->load->view('header');
    //     $this->load->view('catRA');
    //     $this->load->view('footer');
    //     // $this->load->library('javascript');
    // } 

    // public function catalogo_RV() {
    //     // $this->load->helper('url');
    //     $this->load->view('header');
    //     $this->load->view('catRV');
    //     $this->load->view('footer');
    //     // $this->load->library('javascript');
    // }

    // public function catalogo_Modelos() {
    //     // $this->load->helper('url');
    //     $this->load->view('header');
    //     $this->load->view('catModelos');
    //     $this->load->view('footer');
    //     // $this->load->library('javascript');
    // }  

    // public function horario_cursos() {
    //     // $this->load->helper('url');
    //     $this->load->view('header');
    //     $this->load->view('cursos');
    //     $this->load->view('footer');
    //     // $this->load->library('javascript');
    // }

    // public function horario_eventos() {
    //     // $this->load->helper('url');
    //     $this->load->view('header');
    //     $this->load->view('eventos');
    //     $this->load->view('footer');
    //     // $this->load->library('javascript');
    // }    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */