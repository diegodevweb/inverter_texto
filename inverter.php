<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Inverter Texto</title>
</head>
<body>
    <section>
        <pre>
            <?php
                $texto = "Texto Invertido";
                for ($i = strlen($texto); $i >= 0; $i--) {
                printf($texto[$i]);
                }
            ?>
        </pre>
        <a href="index.html">Voltar</a>
    </section>
</body>
</html>