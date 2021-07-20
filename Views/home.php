<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['tag_pages'] ?></title>
    <?php require_once('estilos.php'); ?>
</head>

<body>
    <h1 style="font-size: 4em;"><?= $data['pages_title'] ?></h1>
    <p style="font-size: 2em;"><?= $data['pages_name'] ?></p>

</body>
<?php require_once 'scripts.php' ?>

</html>