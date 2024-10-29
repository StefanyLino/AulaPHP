<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O seu nome</title>
</head>
<body>
    <h1>Digite o seu nome</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Digite o seu nome" require>
        <button type="submit">Enviar</button>
    </form>

    <?php
    // O isset mostra que mesmo sem nome não haverá erro
        if (isset($_POST['nome'])){
            $nome = $_POST['nome'];
        echo "<p> Olá, $nome!</p>";
        }

        
    ?>
</body>
</html>