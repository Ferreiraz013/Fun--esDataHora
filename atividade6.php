<?php
date_default_timezone_set('America/Sao_Paulo');
$hoje = strtotime("today");
$resultado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vencimento = strtotime($_POST['vencimento']);

    if ($vencimento < $hoje) {
        $diasAtrasados = floor(($hoje - $vencimento) / 86400);
        $resultado = "Data atual: " . date("d/m/Y", $hoje) . "<br>";
        $resultado .= "Data de vencimento: " . date("d/m/Y", $vencimento) . "<br>";
        $resultado .= "O prazo já venceu. Está atrasado há " . $diasAtrasados . " dias.";
    } elseif ($vencimento > $hoje) {
        $diasRestantes = floor(($vencimento - $hoje) / 86400);
        $resultado = "Data atual: " . date("d/m/Y", $hoje) . "<br>";
        $resultado .= "Data de vencimento: " . date("d/m/Y", $vencimento) . "<br>";
        $resultado .= "Ainda não venceu. Faltam " . $diasRestantes . " dias para o vencimento.";
    } else {
        $resultado = "Data atual: " . date("d/m/Y", $hoje) . "<br>";
        $resultado .= "Data de vencimento: " . date("d/m/Y", $vencimento) . "<br>";
        $resultado .= "O prazo vence hoje.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
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
            line-height: 1.6;
            color: #0f172a;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Atividade 6</h2>
        <form method="POST">
            <label>Data de vencimento:</label>
            <input type="date" name="vencimento">
            <input type="submit" value="Verificar">
        </form>

        <?php if ($resultado != "") {
            echo "<div class='resultado'>$resultado</div>";
        } ?>
        <a class="btn" href="index.php">Voltar</a>
    </div>
</body>
</html>