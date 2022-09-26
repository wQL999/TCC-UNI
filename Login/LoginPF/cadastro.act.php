<?php
    
extract($_POST);
require('connect.php');

$senha = md5($senha);

$busca = mysqli_query($con, "Select * from `tb_pessoafisica` where `email` = '$email';");

if($busca->num_rows != 0) {
    $msg = "Email já utilizado";
    header("location:index.html");

}else {

    if(mysqli_query($con, "INSERT INTO `tb_pessoafisica` (`idPF`, `nome`, `email`, `codCPF`, `telefone`, `senha`) VALUES (NULL, '$nome', '$email', '$codCPF', '$telefone', '$senha');")) {

        $msg = "<div class=alertaGreen> Incluído com sucesso </div>"; 
    } else {

        $msg = "<div class=alertaRed> Erro ao incluir </div>";
    }
    header("location:../../Principal/index.php");
}

@session_start();
$_SESSION['msg'] = $msg;


?>