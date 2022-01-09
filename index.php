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

    

  </body>
</html>
