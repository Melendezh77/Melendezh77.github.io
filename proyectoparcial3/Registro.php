<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de autos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.js"></script>
</head>
<body>

	<nav class="navbar navbar-default" class="col-xs-12">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="imagenes/lambo_icon.jpg" style="width: 80px; height: 40px;"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">MODELOS  <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="index2.html"> URUS</a></li>
            <li class="divider"></li>
            <li><a href="index3.html">HURACAN</a></li>
            <li class="divider"></li>
            <li><a href="index4.html">AVENTADOR</a></li>
            <li class="divider"></li>
            <li><a href="index5.html">TERZO MILLENNIO</a></li>
            <li class="divider"></li>
          </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> MARCA <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="">PERSONAS</a></li>
            <li class="divider"></li>
            <li><a href="">HISTORIA</a></li>
            <li class="divider"></li>
            <li><a href="">OBRAS MAESTRAS</a></li>
            <li class="divider"></li>
            <li><a href="">DISEÑO</a></li>
            <li class="divider"></li>
             <li><a href="">INNOVACIÓN Y EXCELENCIA</a></li>
            <li class="divider"></li>
          </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SERVICIOS AL CLIENTE <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="">LOCALIZADOR</a></li>
            <li class="divider"></li>
            <li><a href="">SEGUNDA MANO</a></li>
            <li class="divider"></li>
            <li><a href="">ACCESORI ORIGINALI</a></li>
            <li class="divider"></li>
            <li><a href="">REPUESTOS ORIGINALES</a></li>
            <li class="divider"></li>
              <li><a href="">SERVICIOS</a></li>
            <li class="divider"></li>
              <li><a href="">POLO STORICO</a></li>
            <li class="divider"></li>
              <li><a href="">FINANCIAL SERVICES</a></li>
            <li class="divider"></li>
          </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> EXPERIENCIA <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="">NOTICIAS</a></li>
            <li class="divider"></li>
            <li><a href="">EVENTOS</a></li>
            <li class="divider"></li>
             <li><a href="">MUSEO</a></li>
            <li class="divider"></li>
             <li><a href="">ACADEMIA</a></li>
            <li class="divider"></li>
             <li><a href="">EXPERIENCIA</a></li>
            <li class="divider"></li>
             <li><a href="">LAMBORGHINI LOUNGE</a></li>
            <li class="divider"></li>
             <li><a href="">APP MOVIL</a></li>
            <li class="divider"></li>
          </ul>
        </li>
      </ul>
        <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="https://www.lamborghini.com/es-en/motorsport"target="none"> MOTORSPORT</a>
        </li>
      </ul>

        <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="https://www.lamborghinistore.com/eu/?utm_source=www_corp&utm_medium=%20internal_traffic"target="none"> STORE </a>
      
        </li>
      </ul>

       <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> BD <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="http://localhost/lamborghini/consultarAutos.php">CONSULTAR</a></li>
            <li class="divider"></li>
            <li><a href="http://localhost/lamborghini/Registro.php">REGISTRAR</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-left">
      <li class="dropdown">
          <i class="fa fa-cog"></i>
    
      </ul>
       </li>
      <ul class="nav navbar-nav navbar-left">
      <li class="dropdown">
          <i class="fa fa-share-alt"></i>
    
      </ul>
       </li>
      <ul class="nav navbar-nav navbar-left">
      <li class="dropdown">
          <i class="fa fa-search"></i>
    
      </ul>
    </li>


      </ul>
    </div>
  </div>
</nav>




	<div class="container">
		<div class="row well">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardar.php" method="POST">
					<div class="form-group">
						<label for="modelo">MODELO:</label>
						<input type="text" name="modelo" class="form-control">
					</div>
					<div class="form-group">
						<label for="hp">PRECIO</label>
						<input type="text" name="hp" class="form-control">
					</div>
					<div class="form-group">
						<label for="precio">HP</label>
						<input type="text" name="precio" class="form-control">
					</div>
					</div>
					<div class="form-group text-center">
						<input type="submit" class="btn btn-primary" value="Registrar">
					</div>
				</form>
			</div>
		</div>
	</div>
  <script src="js/bootstrap.js"></script>
</body>
</html>