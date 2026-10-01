<?php
date_default_timezone_set('America/Sao_Paulo');
$resultado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $hora1 = strtotime("2000-01-01 " . $_POST['hora1']);
    $hora2 = strtotime("2000-01-01 " . $_POST['hora2']);
    $diferencaSegundos = abs($hora2 - $hora1);
    $resultado = "A diferença entre " . $_POST['hora1'] . " e " . $_POST['hora2'] . " é de " . $diferencaSegundos . " segundos.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
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
        <h2>Atividade 5</h2>
        <form method="POST">
            <label>Horário 1:</label>
            <input type="time" name="hora1" step="1">
            <label>Horário 2:</label>
            <input type="time" name="hora2" step="1">
            <input type="submit" value="Calcular">
        </form>

        <?php if ($resultado != "") {
            echo "<div class='resultado'>$resultado</div>";
        } ?>
        <a class="btn" href="index.php">Voltar</a>
    </div>
</body>
</html>