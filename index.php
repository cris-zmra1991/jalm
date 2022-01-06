<?php require 'res/base.php'; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jardín Almendares</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tienda de plantas ornamentales, especialmente cactus y suculentas. Biblioteca de informacion sobre cuidado de las plantas">
    
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Jardín Almendares" />
    <meta property="og:description" content="Tienda de plantas ornamentales, especialmente cactus y suculentas. Biblioteca de informacion sobre cuidado de las plantas." />
    <meta property="og:url" content="https://jardin-almendares.herokuapp.com/" />
    <meta property="og:site_name" content="Jardín Almendares - ES" />
    
          <meta property="article:tag" content="Plantas">
          <meta property="article:tag" content="Parques">
          <meta property="article:tag" content="Jardin">
          <meta property="article:tag" content="Jardin Almendares">
          <meta property="article:tag" content="La Habana">
          <meta property="article:tag" content="Cuba">
    
    <link href="res/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="res/jquery.js"></script>
  </head>
  <body>
    <!-- Loading CSS -->
    <style>
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: 1s all;
            opacity: 0;
        }
        .loading.show {
            opacity: 1;
        }
        .loading .spin {
            border: 3px solid hsla(185, 100%, 62%, 0.2);
            border-top-color: #3cefff;
            border-radius: 50%;
            width: 3em;
            height: 3em;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
          to {
            transform: rotate(360deg);
          }
        }
    </style>

    <!-- Loading HTML -->
    <div id="loading" class="loading show">
        <div class="spin"></div>
    </div>

    <!-- Loading Javascript -->
    <script>
      $(document).ready(function() {
        $('#loading').css("display", "none");
      });
    </script>
    <div class="topb">
      <nav class="navbar">
        <div class="container">
          <div class="d-flex mb-2 flex-column align-items-center justify-content-center w-100 flex-md-row">
            <div class="ocultar"><img src="res/logo.png" height="80"></div>
            <div class="justify-content-center align-items-center">
              <div class="d-flex justify-content-center align-items-center">
              <div class="ocultar1"><img src="res/logo.png" height="40"></div>&nbsp;<span class="title">Jardín Almendares</span></div>
              
              <span class="subtitle ocultar">Plantas ornamentales</span>
            </div>
            <div class="ms-md-auto p-1">
              <form class="d-flex">
                <input class="search-input" type="text" placeholder="Search">
                <label class="search-btn"><span class="fa fa-search search-icon"></span></label>
              </form>
              <span class="d-flex container-fluid mt-3 justify-content-center"><i class="fab fa-facebook icon"></i> &nbsp; &nbsp; &nbsp; <i class="fab fa-whatsapp icon"></i> &nbsp; &nbsp; &nbsp; <i class="fa fa-phone icon"></i> &nbsp; &nbsp; &nbsp; <i class="fa fa-user icon"></i></span>
            </div>
          </div>
        </div>
      </nav>
    </div>
  <br>
  <br>

  </body>
</html>

