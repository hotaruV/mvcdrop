<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= Utils::dbard() ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= Utils::dbard() ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?= $data['tag_tag'] ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= Utils::dbard() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= Utils::dbard() ?>assets/css/now-ui-dashboard.css?v=1.6.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= Utils::dbard() ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class=" sidebar-mini ">
  <div class="wrapper ">
    <?php Utils::menu() ?>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <?php Utils::navbar($data) ?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title"><?= $data['pages_title'] ?></h5>
                <p class="category">Despliegue de gráficas del sistema<a href="./dashboard"> Inicio</a></p>
              </div>