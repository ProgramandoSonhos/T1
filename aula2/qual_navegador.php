<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qual navegador?</title>
</head>
<body>
    <?= $_SERVER['HTTP_USER_AGENT']; ?>

    <?php 
        $ingles = $_GET['ingles'] ?? null; 
        if($ingles && $ingles === "true") { 
          echo "<h1>Hello world</h1>";
        } else { 
          echo "<h1>Alo mundo</h1>";
        } 
    ?>
</body>
</html>
