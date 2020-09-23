

<?php
echo("<!DOCTYPE html>
<html lang='en'>

    <!-- Basic -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>   
   
    <!-- Mobile Metas -->
    <meta name='viewport' content='width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
 
     <!-- Site Metas -->
    <title>OSANI</title>  
    <meta name='keywords' content=''>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <!-- Site Icons -->
    <link rel='shortcut icon' href='../../images/logo3.png' type='image/x-icon' />
    <link rel='apple-touch-icon' href='../../images/logo3.png'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='../../css/bootstrap.min.css'>
    <!-- Site CSS -->
    <link rel='stylesheet' href='../../style.css'>
    <!-- Responsive CSS -->
    <link rel='stylesheet' href='../../css/responsive.css'>
    <!-- Custom CSS -->
    <link rel='stylesheet' href='../../css/custom.css'>
	<script src='../../js/modernizr.js'></script> <!-- Modernizr -->

    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
      <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
    <![endif]-->

</head>
<body id='page-top' class='politics_version'>

    <!-- LOADER -->
    <div id='preloader'>
        <div id='main-ld'>
			<div id='loader'></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class='navbar navbar-expand-lg navbar-dark fixed-top' id='mainNav'>
      <div class='container'>
        <a class='navbar-brand js-scroll-trigger' href='#page-top'>
			<img class='img-fluid' src='../../images/logo3.png' style='width: 160px; height: 90px;' alt='' />
		</a>
        <button class='navbar-toggler navbar-toggler-right' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
          Menu
          <i class='fa fa-bars'></i>
        </button>
        <div class='collapse navbar-collapse' id='navbarResponsive'>
          <ul class='navbar-nav text-uppercase ml-auto'>
            <li class='nav-item'>
              <a class='nav-link js-scroll-trigger' href='../../index.html'>Inicio</a>
            </li>
			<li class='nav-item'>
              <a class='nav-link js-scroll-trigger active' href='../proveedores.html'>Proveedores</a>
            </li>
			<li class='nav-item'>
              <a class='nav-link js-scroll-trigger' href='../clientes.html'>Clientes</a>
            </li>
			<li class='nav-item'>
              <a class='nav-link js-scroll-trigger' href='../reg_fam.html'>Familias</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
	<section id='home' class='main-banner parallaxie' style='background: url(\"../../uploads/fondo-3.jpg\")'>
		<div class='heading'><h1 style='position: absolute;top: 150px;left: 35%;'>  Se ha registrado el proveedor con exito   </h1 >	");

        
$nombre=$_POST["nombre"];
$empresa=$_POST["empresa"];
$producto=$_POST["producto"];
$cantidad=$_POST["cantidad"];
$tipo=$_POST["tipo"];
$tipo=($tipo=="donar")? 1:0;
$cnx=mysqli_connect("localhost","root","","osani") or die("No se pude accesar a la base de datos con la base de datos");
$query1=$cnx->query("INSERT INTO proveedores(nombre,empresa,donacion,cantidad,tipo) values ('$nombre','$empresa','$producto',$cantidad,$tipo)");


	echo("	</div>
	</section>
    <!--
    <div id='about' class='section wb'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-6'>
                    <div class='message-box'>                        
                        <h2>OSANI</h2>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>
						<p>Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.</p>

                       <!---- <a href='#' class='sim-btn hvr-bounce-to-top'><span></span></a>--
                    </div><!-- end messagebox --
                </div><!-- end col --

                <div class='col-md-6'>
                    <div class='right-box-pro wow fadeIn'>
                        <img src='../../uploads/about_04.jpg' alt='' class='img-fluid img-rounded'>
                    </div><!-- end media --
                </div><!-- end col --
            </div><!-- end row --
        </div><!-- end container --
    </div><!-- end section -->
	
	
	
    <div class='copyrights'>
        <div class='container'>
            <div class='footer-distributed'>
				<a href='#'><img src='../../images/logo3.png' style='width: 400px; height: 300px;' alt='' /></a>
                <div class='footer-center'>
                    <p class='footer-links'>
                       
                    </p>
                    <p class='footer-company-name'>Organización de salubridad nutricional internacional. &copy; 2020 <a href='#'>OSANI</a> Design By : 
					<a href=''>Osani Members</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href='#' id='scroll-to-top' class='dmtop global-radius'><i class='fa fa-angle-up'></i></a>

    <!-- ALL JS FILES -->
    <script src='../../js/all.js'></script>
	<!-- Camera Slider -->
	<script src='../../js/jquery.mobile.customized.min.js'></script>
	<script src='../../js/jquery.easing.1.3.js'></script> 
	<script src='../../js/parallaxie.js'></script>
	<script src='../../js/headline.js'></script>
	<!-- Contact form JavaScript -->
    <script src='../../js/jqBootstrapValidation.js'></script>
    <script src='../../js/contact_me.js'></script>
    <!-- ALL PLUGINS -->
    <script src='../../js/custom.js'></script>
    <script src='../../js/jquery.vide.js'></script>

</body>
</html>");
