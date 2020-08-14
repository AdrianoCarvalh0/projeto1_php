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
    public function obterTodos(){
        #retorna os resultados que foram pegos da tabela usuário
        return $this->db->get("usuario")->result();        
    }
    
    public function deletar($codigo){
        #pega a id do usuário onde o código passado por parametro é igual
        $this->db->where("idusuario", $codigo);
        #deleta do banco o usuário
        $this->db->delete("usuario");
    }
}
