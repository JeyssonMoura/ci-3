<?php


class Controller_escola extends CI_Controller{
    public function index(){
        $this->load->view('estrutura/cabPage');
        $this->load->view('corpo/escola_cad_corpo');
        $this->load->view('estrutura/rodapePage');
    }
    
    public function addEscola () {
        $this->load->Model('Model_escola');
        $dados = array (
            'esc_descricao' => $this->input->post('esc_descricao'),
            'esc_cep' => $this->input->post('esc_cep'),
            'esc_cidade' => $this->input->post('esc_cidade'),
            'esc_bairro' => $this->input->post('esc_bairro'),
            'esc_rua' => $this->input->post('esc_rua'),
            'esc_uf' => $this->input->post('esc_uf'),
            'esc_numero' => $this->input->post('esc_numero')
        );
        $r = $this->Model_escola->insert($dados);
        echo json_encode($r);
    }
}
