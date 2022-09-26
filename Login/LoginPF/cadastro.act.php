<?php

extract($_POST);
extract($_FILES);

require('connect.php');

if(mysqli_query($con, "INSERT INTO `tb_pessoafisica` (`codigo`, `nome`, `email`, `codCPF`, `telefone`, `senha`)
 VALUES (NULL, '$nome', '$email', '$codCPF', '$telefone','$senha');")) {
     $msg = "<div class=alertaGreen> Incluído com sucesso </div>"; 
 } else { 
     $msg = "<div class=alertaRed> Erro ao incluir </div>";
 }
 
@session_start();
$_SESSION['msg'] = $msg;


?>