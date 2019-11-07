<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="icon" type="image/vnd.microsoft.icon" href="imagenes/balance.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../public/resources/css/bootstrap.css">
    <script type="text/javascript" src="../public/resources/js/bootstrap.js"></script>
    <title>Homebanking</title>

  </head>
  <body>

    <form action="forms.php" method="POST">

        <p>
            Su nombre: <input type="text" name="nombre" required>
        </p>

        <p>
            Su edad: <input type="number" name="edad" required>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>


  </body>
</html>