<?php


class Primeiro_controller extends CI_Controller{
    
    #como é chamada: http://localhost/projeto1/index.php/primeiro_controller/
    #o index é o primeiro local que é exibido pelo site
    public function index(){
        echo "Você está acessando pelo index";
    }
    
    #como é chamada: http://localhost/projeto1/index.php/primeiro_controller/ola
    #função sem parâmetro
    public function ola(){
        echo "Acessando uma função pelo controlador";
    }
    
    #como é chamada: http://localhost/projeto1/index.php/primeiro_controller/digaola/Maria/chocolate
    #exemplo de função com dois parâmetros. Tem que colocar os dois parâmetros, senão não funciona
    public function digaOla($nome, $alimento){
        echo "Olá $nome, seja bem-vindo, você gosta de: $alimento";
    }
}
