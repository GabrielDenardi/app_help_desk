<?php

    session_start();

    $titulo = str_replace('#', '-',$_POST['titulo']);
        $categoria = str_replace('#', '-',$_POST['categoria']);
            $descricao = str_replace('#', '-',$_POST['descricao']);

    //$texto = implode(str_replace('#', '-', $_POST)) ;

        $texto = $_SESSION['id'] . '#' . $titulo . '#' .  $categoria . '#' . $descricao . PHP_EOL;



        $arquivo = fopen('arquivo.txt', 'a');

        fwrite($arquivo, $texto);

        fclose($arquivo);

        //echo $texto;

        header('Location: abrir_chamado.php');

?>