<?php 

    if(strcasecmp('formulario-ajax', $_POST['metodo']) == 0) {

        $html = 'Nome: ' .$_POST['nome'];
        $html .= "\n";
        $html .= 'email: ' .$_POST['email'];
        $html .= "\n\n Dados enviada com sucesso";



        

        echo $html;


    }
?>