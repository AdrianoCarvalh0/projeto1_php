<?php

class Site extends CI_Controller{
    
    
    public function index(){
        
        $this->template->load("template/template_site", "site/home");
//        $this->template->load("template/template_restrito", "site/home");
    }
}
