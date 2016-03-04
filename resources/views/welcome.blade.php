<!DOCTYPE html>
<html>
    <head>
        <title>Egresados</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    .side {
      padding-top: 20px;
      padding-bottom: 30px;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    img{
      max-width: 100%;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {

    }

      .container {
    padding: 40px 120px;
      }

      .container2 {
    padding: 10px 120px;
      }

      .person {
      border: 20px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.8;
    }
  .person:hover {
      border-color: #F0DFBC;
    }
  </style>
</head>
<body>
  <header class="container-fluid text-center">
        <img src="{{ asset ('images/header.png') }}">
	</header>
<nav class="navbar">
</nav>

<div class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-2 side">
      <div class="row">
        <div class="col-xs-12 text-center">
            <div class="panel panel-danger text-center ">
              <div class="panel-heading">Login</div>
              <div class="panel-body">
              <div class="form-group">
                 <label for="usr">Usuario (Correo):</label>
                 <input type="text" class="form-control" id="usr" placeholder="Ingresar Usuario">
              </div>
              <div class="form-group">
                <label for="pwd">Contraseña: </label>
                 <input type="password" class="form-control" id="pwd" placeholder="Ingresar Contraseña">
              </div>
              <div class="form-group">
                  <br>
                  <input type="button" value="Iniciar Sesión" id="login" class="btn btn-default btn-md">
              </div>
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        <hr style="height: 2px; width:75%; background-color: #c72020;">
      </div>
      <div class="row">
        <h4 style="font-family: Raleway;">¿ Aún no tienes
          <br> cuenta ?</h4>
          <!-- Trigger the modal with a button -->
    <a type="button" class="btn btn-danger btn-md"  href="/registro_egresado">Registrate</a>
      </div>

      <div class="row">
        <hr style="height: 2px; width:75%; background-color: #c72020;">
      </div>
      <div class="row">
        <h3 style="font-family: Raleway;">CONTACTO</h3>
        <h4>Ing. José de Jesús
          <br>Millán Fuentes</h4>
          <h5> (722) 208-7200
          <br>Ext. 2214 </h5>
          <h6>egresados.bolsadetrabajo@gmail.com</h6>
      </div>
    </div>
    <div class="col-sm-8 text-left" style="padding-top: 25px;">

      <!-- Inicio del Carousel -->
         <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
       <!-- Indicators -->
       <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
         <li data-target="#myCarousel" data-slide-to="3"></li>
       </ol>

       <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
         <div class="item active">
           <img src="{{ asset ('images/slide1.jpg') }}"  alt="Chicago" width="600" height="200" style="border: 2px transparent; border-radius: 20px;">
         </div>

         <div class="item">
           <img src="{{ asset ('images/slide2.jpg') }}"  alt="Alabama" width="600" height="200" style="border: 2px transparent; border-radius: 20px;">
         </div>

         <div class="item">
           <img src="{{ asset ('images/slide3.jpg') }}"  alt="Cabo" width="600" height="200" style="border: 2px transparent; border-radius: 20px;">
         </div>

         <div class="item">
           <img src="{{ asset ('images/slide4.jpg') }}"  alt="London" width="600" height="200" style="border: 2px transparent; border-radius: 20px;">
         </div>
       </div>
     </div>
    <hr>

      <h2>Bienvenido</h2>
      <p>Tenemos el compromiso de forjar ingeniros preparados bla bla bla</p>
      <hr>

    </div>

    <!-- Side derecho -->
    <div class="col-sm-2 sidenav">
      <div class="row">
        <div class="col-xs-12">
          <img src="{{ asset ('images/indice.png') }}" class="img-circle person" alt="Random Name" width="255" height="255">
          <p class="text-center"><strong>Curriculum</strong></p><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <img src="{{ asset ('images/indice2.png') }}" class="img-circle person" alt="Random Name" width="255" height="255">
          <p class="text-center"><strong>Empresas</strong></p><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <img src="{{ asset ('images/indice3.png') }}" class="img-circle person" alt="Random Name" width="255" height="255">
          <p class="text-center"><strong>Bolsa de Trabajo</strong></p><br>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
        <p style="font: 14px/17px serif; margin-bottom: 20px; text-align: center;">
        <img src="{{ asset ('images/footer.png') }}">
        </p>
          <p style="font: 14px/17px serif; margin-bottom: 20px; text-align: center;">
        Av. Tecnológico s/n. Colonia Agrícola Buenavista<br>
        Metepec, Edo. De México, México C.P. 52149<br>
        Tel. (52) (722) 2 08 72 00
    </p>
   </footer>

</body>
</html>
