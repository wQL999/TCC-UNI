<?php

if(!$con = mysqli_connect('localhost','root','','bduni')){
    echo "Erro ao se conectar com o banco de dados";
}


mysqli_query($con, "SET NAMES utf8");


?>