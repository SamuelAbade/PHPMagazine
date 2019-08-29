<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link href="estilo.css" rel="stylesheet">
        <meta charset="utf-8">
        <title>Esporte Diário</title>
    </head>
    <body>
        <div class="navbar">
            <a href="index.php">Inicio</a>
            <a href="registro.php">Registrar</a>
            <a href="login.php">Login</a>
        </div>

    <div class="main">
        <form method="post" action="autenticar.php">
            <input type="text" name="user" placeholder="Nome de usuario" class="textinput"><br>
            <input type="password" name="pass" placeholder="Senha" class="textinput"><br><br>
            <input type="submit" value="Logar" class="textinput button">
        </form>
    </div>
    </body>
</html>
