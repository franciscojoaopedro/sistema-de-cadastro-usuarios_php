<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
</style>
<body>
    <a href="../../index.php"> Voltar</a>
    <div class="box">
       <form  action="../php/testeLogin.php" method="post">
       <div class="inputUser">
            <input type="email" name="email" id="email" placeholder="Email" required >
            
        </div>
        <div class="inputUser">
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
          
        </div>
        <input   type="submit" name="submit" id="submit-login" value="Entrar">
       </form>
    </div>
</body>
</html>