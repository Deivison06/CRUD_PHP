<?php
    //conexão
    require_once 'db_connect.php';
    if(isset($_POST['btn-cadastrar'])):
        $nome = mysqli_escape_string($connect, $_POST['nome']);
        $nome = mysqli_escape_string($connect, $_POST['sobrenome']);
        $nome = mysqli_escape_string($connect, $_POST['email']);
        $nome = mysqli_escape_string($connect, $_POST['idade']);

        $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) 
        VALUE ('$nome', '$sobrenome', '$email', '$idade')";

        if (mysqli_query($connect, $sql)):
            header('Location: ../index.php?sucesso');
        else:
            header('Location: ../index.php?erro');
        endif;
    endif;

?>