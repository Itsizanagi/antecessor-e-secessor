<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        $n = $_REQUEST["num"] ?? 0;
        $a = $n - 1;
        $s = $n + 1;
        echo "<br>O numero escolhido foi $n \n";

        echo "O Sucessor foi $s \n";

        echo " O antecessor foi $a \n"
        ?>
  
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>
