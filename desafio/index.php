<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O seu nome</title>
</head>
<body>
    <h1>Verifique se você pode dirigir:</h1>
    <form method="POST">
        <p>Digite sua idade:</p><input type="number" name="idade" placeholder="Digite aqui">
        <button type="submit">Verificar</button>
    </form>

    <?php
    $idade =($_POST['idade']);
        if ($idade >= 18){
            echo "<p>Pode dirigir</p>";
        } else {
            echo "<p>Não pode dirigir</p>";
        }
    ?>
</body>
</html>