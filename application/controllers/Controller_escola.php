<?php


class Controller_escola extends CI_Controller{
    public function index(){
        $this->load->view('estrutura/cabPage');
        $this->load->view('corpo/escola_cad_corpo');
        $this->load->view('estrutura/rodapePage');
    }
}
