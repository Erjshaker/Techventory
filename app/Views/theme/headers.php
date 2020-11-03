<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/style.css">
    <title><?= SYSTEM_TITLE ?></title>
  </head>
  <body style="background-color: #b8d2ff;">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #042b4f;">
      <a class="navbar-brand" href="#"><img class="img-fluid" id="header-logo" src="http://localhost/TIS/public/img/logo.png"><?= SYSTEM_NAME ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <?php user_primary_links($_SESSION['userPermmissions']) ?>
          <li class="nav-item">
            <a class="nav-link" onclick="confirmLogout(<?= base_url()?>logout)" href="<?php echo base_url() ?>"><i class="fas fa-power-off"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <br>
    <div class="container-fluid"  id="main-column-container">
      <div class="row">
        <div class="col-md-12" style="background-color: #b8d2ff;">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
