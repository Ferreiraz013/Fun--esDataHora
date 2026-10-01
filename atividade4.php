<?php
date_default_timezone_set('America/Sao_Paulo');
$resultado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data1 = strtotime($_POST['data1']);
    $data2 = strtotime($_POST['data2']);
    $diferencaDias = abs(($data2 - $data1) / 86400);
    $resultado = "A diferença entre " . date("d/m/Y", $data1) . " e " . date("d/m/Y", $data2) . " é de " . (int)$diferencaDias . " dias.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
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
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin: 20px 0;
        }
        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        .btn {
            display: inline-block;
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            margin-top: 10px;
        }
        .resultado {
            margin-top: 15px;
            font-weight: bold;
            color: #0f766e;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Atividade 4</h2>
        <form method="POST">
            <label>Data 1:</label>
            <input type="date" name="data1">
            <label>Data 2:</label>
            <input type="date" name="data2">
            <input type="submit" value="Calcular">
        </form>

        <?php if ($resultado != "") {
            echo "<div class='resultado'>$resultado</div>";
        } ?>
        <a class="btn" href="index.php">Voltar</a>
    </div>
</body>
</html>