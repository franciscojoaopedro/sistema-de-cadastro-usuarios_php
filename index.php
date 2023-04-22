<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-USER</title>
</head>
<style>
    body{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-image: linear-gradient(to right, rgb(20,147,220),rgb(17,54,71));
        text-align: center;
        color: #fff;
    }
    .box{
        position: absolute;
        top: 50%;left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0,0, 0.6);
        padding: 30px;
        border-radius: 15px;
    }
    a{
        text-decoration: none;
        color: #fff;
        border: 3px solid dodgerblue;
        border-radius: 10px;
        padding: 10px;
    }
    a:hover{
        background-color: dodgerblue;
    }
</style>
<body>
    <div id="page">
        <h2>Home</h2>
        <h3>Seja bem vindo ao sistema</h3>

        <div class="box">
            <a href="./src/pages/login.php">Login</a>
            <a href="./src/pages/formulario.php">Cadastrar-se</a>
        </div>
    </div>
</body>
</html>