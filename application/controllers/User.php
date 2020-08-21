<?php

class User extends CI_Controller{
    
    
    public function index(){
        
        #ciar um objeto Grocery CRUD
        $crud = new Grocery_CRUD();
        #setada a tabela usuário para ser renderizada pelo grocery crud
        $crud->set_table("usuario");
        #campos obrigatórios
        $crud->required_fields("nome","login","senha","confirma","tipo","data_nascimento");
        #campo login deve ser único
        $crud->unique_fields("login");
        #alterando o tipo de campo que era texto para password
        $crud->field_type("senha", "password");
        $crud->field_type("confirma", "password");
        #isto valeria para todos os cruds
        #$crud->fields("nome","login");
        
        #exibe todos os campos da tabela. A ordem de exibição pode ser alterada. Foi criado um campo novo==> "confirma".
        #este campo confirma não existia no banco e não vai ser 
        $crud->fields("nome","login","senha","confirma","tipo","data_nascimento");
        
        #mudar o texto que está no rótulo
        $crud->display_as("confirma","confirma a senha");
        
        #o campo corfirma, exibido como confirma senha deve ser igual ao campo senha. Tem que que ter no mínimo 4 caracteres
        $crud->set_rules("confirma", "confirma senha", "matches[senha]|min_length[4]");
        
        #foi criada uma função que remove a confirmação de senha antes de mandar para o banco
        $crud->callback_before_insert(array($this,"remove_confirma"));
        
        #Muda o que aparece em cima de Adicionar Registro para Adicionar Usuário
        $crud->set_subject("Usuário","Usuários");
        
        $form = $crud->render();    
       
        $this->template->load("template/template_restrito", "crud/index", $form);
    }
    
    public function remove_confirma($post_array){
        #remove o array o confirma
        unset($post_array['confirma']);
        #criptografa a senha
        $post_array["senha"] = md5($post_array["senha"]);
        #retorna o post sem o confirma e com o campo senha criptografado
        return $post_array;
    }
    
}
