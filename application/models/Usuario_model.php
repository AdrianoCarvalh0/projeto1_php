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
    
    public function pegarUsuarioPorId($id){
        #pega no banco a id do usuario onde for igual
        $this->db->where("idusuario", $id);
        
        #retorna um usuário apenas
        return $this->db->get("usuario")->row();
    }
    
    public function update(){
        #no post tem que pegar todos os dados existentes do usuário
        $this->nome = $this->input->post("nome");
        $this->login = $this->input->post("login");
        $this->senha = $this->input->post("senha");
        
        #criou-se uma variável que recebe o que está dentro do campo com valor codigo no formulário de edição
        $idusuario = $this->input->post("codigo");
        #passa a variável por parâmetro e verifica onde tem uma id igual
        $this->db->where("idusuario", $idusuario);
        #faz a update no banco
        $this->db->update("usuario", $this); 
    }
}
