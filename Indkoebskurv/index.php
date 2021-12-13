<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tilpas dit produkt</title>
</head>

<body >
    <form method="post">
        <input type="submit" name="tilpasProduktet" value="Tilpas dit produkt" />
    </form>
    <form method="post">
        <input type="submit" name="RetEllerSlet" value="Se min vare" />
    </form>
    <br>
    <hr>
    <?php
    include("../Indkoebskurv/Functions.php");
    include("../Indkoebskurv/Controller.php");
    ?>
    <hr>

    <pre>
    <?php
    ?>
    </pre>

</body>

</html>