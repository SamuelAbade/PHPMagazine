<!DOCTYPE HTML>

<?php
	include 'conexao.php';

	$query = "SELECT * FROM materia";
	$listar = mysqli_query($conexao,$query);

?>

    <html>

    <head>
        <link href="estilo.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Esporte Diário</title>
    </head>

    <body>

        <div class="navbar">
            <a href="index.php">Inicio</a>
            <a href="registro.php">Registrar</a>
            <a href="login.php">Login</a>
        </div>

        <div class="main">
            <?php while($dados = mysqli_fetch_array($listar)){ ?>
                <table border="1">
                    <tr>
                        <th>
                            <?php echo $dados['titulo'];?>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $dados['texto'];?>
                        </td>
                    </tr>
				</table>
			<?php } ?>
        </div>

    </body>

    </html>
