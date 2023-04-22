<?php
session_start();
include_once("../php/config.php");
if(!(isset($_SESSION['email'])==true) and (!(isset($_SESSION['senha']) ==true))){
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    header('Location:login.php');
}

    $logado= $_SESSION['email'];

    $sql="SELECT * FROM usuarios ORDER BY id_usuarios DESC";
    
    $result=mysqli_query($conexao,$sql);

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>

    <style>
        body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-image: linear-gradient(to right, rgb(20,147,220),rgb(17,54,71));
        text-align: center;
        color: #fff;
    }
    .sair_btn{
        position: absolute;
        top:0;
        background:#fff;
        color:red;
        
        border-radius: 10px;
        padding: 10px 15px;
        
    }
    .sair_btn a{
        color:red;
        font-size:18px
    }
    </style>
</head>
<body>

    <div class="sair_btn">
        <a href="../php/sair.php">Sair</a>
    </div>
    <h1>Acessou ao sistema</h1>

    <div>
        <h3>
            <?php echo "$logado"  ?>
        </h3>
    </div>

    <div>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Sexo</th>
                    <th>Data de Nascimento</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Endereço</th>
                    <th>......</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_data=mysqli_fetch_assoc($result)):
                    echo "<tr>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['telefone']."</td>";
                    echo "<td>".$user_data['sexo']."</td>";
                    echo "<td>".$user_data['data_nascimento']."</td>";
                    echo "<td>".$user_data['cidade']."</td>";
                    echo "<td>".$user_data['estado']."</td>";
                    echo "<td>".$user_data['endereco']."</td>";
                    echo "<td>acoes</td>";

                    echo "</tr>";
                endwhile;
                ?>
            </tbody>

        </table>
    </div>

</body>
</html>