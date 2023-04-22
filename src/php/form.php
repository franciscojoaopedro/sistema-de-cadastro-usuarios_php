<?php

include_once('config.php');

if(isset($_POST['submit'])):
    $nome_completo=$_POST['nome'];
    $senha=$_POST['senha'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $sexo=$_POST['genero'];
    $data_nascimento=$_POST['data_nascimento'];
    $cidade=$_POST['cidade'];
    $estado=$_POST['estado'];
    $endereco=$_POST['endereco'];

    $sql=" INSERT INTO usuarios 
    (nome,senha,email,telefone,sexo,data_nascimento,cidade,estado,endereco) 
        VALUES 
    ('$nome_completo', '$senha', '$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco')";
    
    $result=mysqli_query($conexao,$sql);
    header("Location:../pages/login.php");

endif;
?>