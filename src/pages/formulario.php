<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style_formulario.css">
    <title>Formularios Usuarios</title>
</head>
<body>
<a href="../../index.php"> Voltar</a>
    <div class="box">
        <form  action="../php/form.php" method="post">
            <fieldset><legend><b>Fórmulario de Clientes</b></legend>
            <br>
            
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput" >Nome Completo</label>
            </div>
            <br><br>
            
            <div class="inputBox">
                <input type="password" name="senha" id="senha" class="inputUser" required>
                <label for="senha" class="labelInput" >Senha</label>
            </div>
            <br><br>


            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput" >Email</label>
                
            </div>
            <br><br>

            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone"  class="labelInput">Telefone</label>
            </div>
            <br>

            <p>Sexo:</p>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
           
            <br><br>
            <label for="data_nascimento" ><b>Data de nascimento</b></label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
            <br><br>
            
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput" >Cidade</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput" >Estado</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco"  class="labelInput" >Endereço</label>
            </div>
            <br><br>
            <input type="submit" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>