<?php
$file = 'clicks_count.txt';
$count = file_exists($file) ? (int) file_get_contents($file) : 0;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas de Clicks</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #faf7f3;
            color: #1e1b18;
            text-align: center;
            padding: 50px 20px;
        }

        .card {
            background: #ffffff;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            display: inline-block;
            border: 1px solid #ece5dc;
        }

        h1 {
            font-size: 4rem;
            color: #e8523f;
            margin: 10px 0 0 0;
            line-height: 1;
        }

        p {
            font-size: 1.1rem;
            color: #6b645b;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="card">
        <p>Total de Clicks en Comprar</p>
        <h1>
            <?php echo number_format($count); ?>
        </h1>
    </div>
</body>

</html>