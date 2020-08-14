<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<!--        <link rel="stylesheet" href="CSS/bootstrap.css" type="text/css">-->
        <!-- Bootstrap -->
        <link href="<?php echo base_url('bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    </head>
    <body>
        <h1><?php echo "$titulo"; ?></h1>
        <?php
            foreach ($usuarios as $usuario){ ?>
                
                <div class="card bg-light">
                    <?php echo "<img src='https://br.freepik.com/vetores-premium/fada-pequena-fada-voando_4450652.htm'>" ?>
                    <div class="container">
                        <h4><b><?php echo "Nome: $usuario->nome" ?></b></h4>
                        <p><?php echo "Login: $usuario->login" ?></p>
                        <?php echo "<a href='". site_url("usuario/excluir/$usuario->idusuario") ."'> Excluir </a> " ?>
<!--                        echo "<a href=". .">Atualizar</a>"-->
                     </div>
                    <hr>
                </div>
<!--//                        echo "Nome: $usuario->nome, Login: $usuario->login <br>";-->
        <?php }
        ?>

    </body>
</html>
