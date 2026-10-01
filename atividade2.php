<?php
date_default_timezone_set('America/Sao_Paulo');
$dataAtual = strtotime("today");
$data25DiasAtras = strtotime("-25 day");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            width: 420px;
            background: #fff;
            border-radius: 12px;
            padding: 30px 25px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        }
        h2 {
            margin-top: 0;
            text-align: center;
            color: #1f2937;
        }
        p {
            font-size: 18px;
            margin: 12px 0;
        }
        .btn {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Atividade 2</h2>
        <?php
        echo "<p>Data atual: " . date("d/m/Y", $dataAtual) . "</p>";
        echo "<p>25 dias atrás: " . date("d/m/Y", $data25DiasAtras) . "</p>";
        ?>
        <a class="btn" href="index.php">Voltar</a>
    </div>
</body>
</html>