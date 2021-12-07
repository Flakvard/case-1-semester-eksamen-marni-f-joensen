<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deep(pink)Notes</title>
</head>

<body bgcolor="#ff1493">

    <form method="post">
        <input type="submit" name="tilpasProduktet" value="Tilpass dit produkt" />
    </form>
    <br>
    <?php
    include("./Functions.php");
    include("./Controller.php");
    ?>


    <pre>
    <?php
    print_r(getFromFile());
    ?>
    </pre>

</body>

</html>