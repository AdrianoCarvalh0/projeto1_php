<?php

class Usuario extends CI_Controller{
    //put your code here
    
    #construtor da classe
    public function __construct() {
        parent::__construct();
        #carrega a model usuario.
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
    
    public function listar(){
        $resultado = $this->usuario_model->obterTodos();
        
        $vetor["usuarios"] = $resultado;
        $vetor["titulo"] = "Usuarios cadastrados";
        
        $this->load->view("usuario/lista", $vetor);
        
    }
    
    public function excluir($codigo){
        #chama a função delete do banco de dados passando o código do usuário
        $this->usuario_model->deletar($codigo);
        echo $this->db->last_query();
    }
}
