<!DOCTYPE html>

<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link href="estilo.css" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Esporte Diário</title>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</head>

<body>
    <div class="navbar">
        <a href="index2.php">Inicio</a>
        <a href="materia.php">Compor</a>
        <a href="index.php">Logout</a>
    </div>

    <div class="main">
        <center>
            <h1>Poste seu conteúdo aqui:</h1></center>
        <form action="processomat.php" method="post">
           <input type="text" name="titulo" placeholder="Titulo da matéria" size="50" class="textinput">
            </p>
            <p>
            <textarea name="mat" class="textinput textarea"></textarea>
            </p>
            <input type="submit" value="Enviar" class="textinput button">
        </form>
    </div>
</body>

</html>
