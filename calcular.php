<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="css/formulario.css">

	<!-- Latest compiled and minified CSS /*BOOTSTRAP*/-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

    <title>Binarios</title>


</head>
<body>
    <header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  			<div class="container-fluid">
  				<a class="navbar-brand" href="#"><img src=""></a>
  				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      				<span class="navbar-toggler-icon"></span>
    			</button>
    			<div class="collapse navbar-collapse" id="collapsibleNavbar">
      				<ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"><i class="fas fa-home"> Inicio</i></a>
                        </li>
        				<li class="nav-item">
          					<a class="nav-link" href="https://github.com/juandcc99/"><i class="fab fa-github"> GitHub</i></a>
        				</li> 
        				<li class="nav-item">
          					<a class="nav-link" href="#"><i class="fas fa-envelope"> Contactos</i></a>
        				</li> 
      				</ul>
    			</div>
  			</div>
		</nav>
    </header>
   <div class="margen">
       <div class="principal">
           <div class="contenido">
                <div class="summary">
                    <h1>
                        Resolucion
                    </h1>
                    <div class="fecha">11/02/2022</div>
                </div>
           <?php
                if (strlen($_POST['binario']) >= 1 && strlen($_POST['decimal']) >= 1){
                    $binario=$_POST['binario'];
                    $decimal=$_POST['decimal'];
                    $conversionDecimal = bindec($binario);
                    $conversionBinario = decbin($decimal);
                    echo "<p>Decimal a Binarios: ".$conversionBinario."</p>";
                    echo "<hr>";
                    echo "<p>Binarios a Decimal: ".$conversionDecimal."</p>";

                } else {
                    echo "Error";
                }
            ?>
           </div>
       </div>
   </div> 

    <footer class="text-center text-lg-start" style="background-color: #000000;">
        <div class="container-fluid">
            <div class="row">
                <section class="mb-4 text-center">
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.facebook.com/campusfp/">
                        <i class="fab fa-facebook-f"> </i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://twitter.com/Campus_FP">
                        <i class="fab fa-twitter"> </i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.linkedin.com/school/campus-fp/">
                        <i class="fab fa-linkedin"> </i>
                    </a>
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.instagram.com/campusfp_/?hl=es">
                        <i class="fab fa-instagram"></i>
                    </a>
                </section>
            </div>
        </div>
            <section class="footer-copyright text-center text-light">© 2022 Copyright:
                <a href="https://campusfp.es/">www.campusfp.es</a>
            </section>
    </footer>
    <!-- Latest compiled JavaScript /*BOOTSTRAP*/-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>