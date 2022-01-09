<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <script src="res/jquery.js"></script>

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

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ee85bfbf65.js" crossorigin="anonymous"></script>
    <link href="res/extra.css" rel="stylesheet">

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
            background-color: #FFFFFF;
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="res/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
          Jardín Almendares
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Ofertas especiales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Biblioteca</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><span class="fa fa-facebook"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><span class="fa fa-whatsapp"></span></a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Busque un producto" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>

    <div class="w100d" style="box-shadow: inset 0px 0px 4px 2px rgba(34,36,38,.15); padding-left: 10px; line-height: 30px;">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
      </nav>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
