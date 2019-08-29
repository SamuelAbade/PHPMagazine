<!DOCTYPE html>
<?php
	include 'conexao.php';
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script language="javascript">
            function sucesso(){
                setTimeout("window.location='index2.php'", 4000);
            }
            function failed(){
                setTimeout("window.location='login.php'", 4000);
            }
        </script>
    </head>
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];

            $consulta = mysqli_query($conexao,"SELECT * FROM login WHERE nickname = '$user' AND senha = '$pass'") or die (mysqli_error($conexao));
            $linhas = mysqli_num_rows($consulta);

            if($linhas == 0){
                echo"O login falhou. Voc� ser� redirecionado para a p�gina de login.";
                echo"<script language='javascript'>failed()</script>";
            } else {
                $_SESSION["usuario"]=$_POST["user"];
                $_SESSION["senha"]=$_POST["pass"];
                echo"Voc� foi logado com sucesso. Redirecionando em 4 segundos.";
                echo"<script language='javascript'>sucesso()</script";
            }
        ?>
    </body>
</html>
