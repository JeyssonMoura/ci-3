<?php

class Controler_inicio extends CI_Controller {
    public function index() {
        $this->load->view('estrutura/cadPage');
        $this->load->view('estrutura/rodapePage');
    }
}