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
        
        <?php 
            foreach ($css_files as $css){
                echo "<link rel='stylesheet' href='$css' />";
            }
        ?>
    </head>
    <body>
        <?php
        #variável que vai renderizar o formulário
            echo $output;
        ?>
        
        <?php 
            foreach ($js_files as $js){
                echo "<script src='$js'></script>";
            }
        ?>
    </body>
</html>
