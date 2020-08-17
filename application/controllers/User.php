<?php

class User extends CI_Controller{
    
    
    public function index(){
        
        #ciar um objeto Grocery CRUD
        $crud = new Grocery_CRUD();
        
        $crud->set_table("usuario");
        $form = $crud->render();
        
        $this->load->view("crud/index", $form);   
        
    }
    
    
}
