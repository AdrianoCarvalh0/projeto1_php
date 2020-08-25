<?php

class Noticia extends CI_Controller{
    
    
    public function index(){
        
        #ciar um objeto Grocery CRUD
        $crud = new Grocery_CRUD();
        #setada a tabela noticia para ser renderizada pelo grocery crud
        $crud->set_table("noticia");
       
        $crud->set_subject("Notícia","Notícias");
        
        $form = $crud->render();    
       
        $this->template->load("template/template_restrito", "crud/index", $form);
    }
    
       
}
