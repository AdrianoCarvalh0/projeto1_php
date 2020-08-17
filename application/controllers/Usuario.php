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
    public function adicionar(){
        $this->load->view("usuario/formulario");        
    }
    
    public function salvar(){
        $this->usuario_model->inserir();
        redirect(site_url("usuario/index"));
    }
    
    public function index(){
        
        #consulta do tipo select * from usuarios
        $resultado = $this->usuario_model->obterTodos();
        
        #cria um vetor de usuários, posição 1: usuarios, posição 2: titulo
        $vetor["usuarios"] = $resultado;
        #isso aqui é só para mostrar o título
        $vetor["titulo"] = "Usuarios cadastrados";
        
        #carrega a view lista, passando o vetor
        $this->load->view("usuario/lista", $vetor);        
    }
    
    public function excluir($codigo){
        #chama a função delete do banco de dados passando o código do usuário
        $this->usuario_model->deletar($codigo);
        
        #redireciona para o index
        redirect(site_url("usuario/index"));
        #escreve a última consulta que houve no banco
//        echo $this->db->last_query();
    }
    
    public function form_edit($codigo){
        #chama o pegar usuário por id, passando o código
        $vetor["usuario"] = $this->usuario_model->pegarUsuarioPorId($codigo);
        #chama a view de edição de formulário passando o vetor
        $this->load->view("usuario/form_edit", $vetor);        
    }
    
    public function atualizar(){
        $this->usuario_model->update();
        redirect(site_url("usuario/index"));
    }
}
