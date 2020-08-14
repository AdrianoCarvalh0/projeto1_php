<?php

class Usuario_model extends CI_Model {
    
    var $nome;
    var $login;
    var $senha;
    
    public function inserir(){
        $this->nome = $this->input->post("nome");
        $this->login = $this->input->post("login");
        $this->senha = $this->input->post("senha");
        #insere na tabela usuário os valores contidos em nome, login e senha
        $this->db->insert("usuario", $this);      
                
    }
}
