<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controler_inicio
 *
 * @author Herlon
 */
class Controler_inicio extends CI_Controller {
    public function index(){
        $this->load->view('estrutura/cabPage');
        $this->load->view('corpo/index_corpo');
        $this->load->view('estrutura/rodapePage');
    }
  
}
