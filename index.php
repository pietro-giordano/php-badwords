<!DOCTYPE html>
<?php
$paragrafo = "Finalmente questa cazzo di settimana è finita! Buon weekend!!!";
?>

<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>

      <p>
            <?php echo str_replace($_GET["censura"], "***", $paragrafo) ?>
      </p>

      <p>
            La lunghezza del paragrafo è di: <?php echo strlen($paragrafo) ?>
      </p>

      <form action="" method="GET">

            <input type="text" name="censura" placeholder="Scrivi la parola da censurare...">
            <button>Censura</button>

      </form>

</body>

</html>