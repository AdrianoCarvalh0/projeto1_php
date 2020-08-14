<?php

class Usuario extends CI_Controller{
    //put your code here
    
    #construtor da classe
    public function __construct() {
        parent::__construct();
        $this->load->model("usuario_model");
        
    }
    #carrega o formulário que está na view
    public function index(){
        $this->load->view("usuario/formulario");
    }
    
//    public function salvar(){
//        $nome = $this->input->post("nome");
//        $login = $this->input->post("login");
//        $senha = $this->input->post("senha");
//       
//        echo "Nome: $nome <br>";
//        echo "Login: $login <br>";
//        echo "Senha: $senha <br>";
//      
//        
//    }
    public function salvar(){
        $this->usuario_model->inserir();
    }
}
