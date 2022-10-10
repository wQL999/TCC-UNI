<?php

    require('connect.php');
    extract($_POST);

    $busca = mysqli_query($con, "Select * from `tb_pessoafisica` where `email` = '$email'");
    var_dump($busca);



    if($busca-> num_rows == 1) {

        $usuario = mysqli_fetch_array($busca);
        $senha = md5($senha);

        if($usuario['senha'] == $senha) {
            @session_start();
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $usuario['nome'];
            header("location:../../Principal/index.php");
    
        } else {
            $msg = "<span class=error> Email e/ou Senha Incorretos </span>";
            header("location:login.php");
        }

    } else {
        $msg = "<span class=error> Email e/ou Senha Incorretos </span>";
        header("location:login.php");
    }

    @session_start();
    $_SESSION['msg'] = $msg;


?>