<?php

class Controler_inicio extends CI_Controller {
    public function index() {
        //$this->load->view('index');
    }

    public function st() {
        $dados['dado'] = $this->uri->segment(2);
        $dados['dado_2'] = "Segundo Dado";
        $this->load->view('segunda_tela', $dados);
    }
}
