<?php

class Noticia extends CI_Controller{
    
    
    public function index(){
        
        #ciar um objeto Grocery CRUD
        $crud = new Grocery_CRUD();
        #setada a tabela noticia para ser renderizada pelo grocery crud
        $crud->set_table("noticia");
       
        $crud->set_subject("Notícia","Notícias");
        
        $crud->set_field_upload("foto", "assets/uploads/files");
        $crud->set_relation("categoria_idcategoria", "categoria", "nome");
        $crud->set_relation("usuario_idusuario", "usuario", "nome");
        
        $crud->display_as("categoria_idcategoria", "Categoria");
        
        $crud->display_as("usuario_idusuario", "Autor");
        
        $form = $crud->render();    
       
        $this->template->load("template/template_restrito", "crud/index", $form);
    }
    
       
}
