<!DOCTYPE html>
<html>
    <head>
      @yield('head')
        <title>Egresados</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
  <script>
              $(function () {
                $.datepicker.setDefaults($.datepicker.regional["es"]);
                $("#datepicker").datepicker ({
                      dateFormat: "yy-mm-dd",
                      monthNames: ["Enero", "Febrero",  "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                      defaultDate: "-26y"
                  });
              });
  </script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color: #c72020;
      opacity: 0.8;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}

    /* Set gray background color and 100% height */
    .sidenav {
      height: 100%;
    }

    .side {
      padding-top: 20px;
      padding-bottom: 30px;
      height: 100%;
    }

    .alinear{
      padding-top: 5px;
      text-align: right;
    }

    /* Set black background color, white text and some padding */
    footer {
      color: black;
    }

    img{
      max-width: 100%;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {

    }

      .container_registro {
    padding: 50px 20px 150px 20px;
    width: auto;
    height: auto;
      }

  </style>
</head>
<body>
  <header class="container text-center">
        <img src="{{ asset ('images/header.png') }}">
	</header>
<nav class="navbar">
</nav>

@yield('content')
<div class="container-fluid" align="center">

</div>

@yield('footer')
<footer class="container-fluid text-center">
  <hr style="height: 2px; width:100%; background-color: #555;">
        <p style="font: 14px/17px serif; margin-bottom: 20px; text-align: center;">
        <img src="{{ asset ('images/footer.png') }}">
        </p>
          <p style=" font-size: 10px; margin-bottom: 20px; text-align: center;">
        Av. Tecnológico s/n. Colonia Agrícola Buenavista<br>
        Metepec, Edo. De México, México C.P. 52149<br>
        Tel. (52) (722) 2 08 72 00
    </p>
   </footer>

</body>
</html>
