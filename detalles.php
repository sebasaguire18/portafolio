<?php   

    $id = $_GET['id'];

    if ($id == 1) {
        $title = 'Gestor de Pagos (Entidad prestadora de dinero)';
        $image = 6;
        $imagePrincipalipal = 'gestor';
		$descripcion = 'Está hecho con PHP puro y estructural para guardar las sesiones y registros mostrados, en la base de datos MySQL utilizada.';
		$descripcion2 = 'Plataforma que gestiona y puede registrar pagos y ver las deudas actuales de lo que deben los deudores al cual se puede acceder al siguiente sitio web (<a target="blank" href="http://gestorpagos.bltiendas.com">gestorpagos.bltiendas.com</a>).<br><br> A su vez tiene 3 roles de usuarios como: <br><br> <b> Usuario administrador:</b> admin@mail.com <br><b>contraseña:</b> 123 <br><br> En el apartado de usuarios puede crear o editar los usuarios que existen para saber cómo funciona la plataforma.';
    }elseif ($id == 2) {
        $title = 'Falur Consultoría';
        $image = 3;
        $imagePrincipalipal = 'falur';
		$descripcion = 'Landing page para una empresa de consultoría. Hecha en una sola página.';
		$descripcion2 = '';
    }elseif ($id == 3) {
        $title = 'Plataforma Para generar Certificados';
        $image = 6;
        $imagePrincipalipal = 'certificados';
		$descripcion = 'Está hecho con PHP puro y estructural para guardar las sesiones y registros mostrados, en la base de datos MySQL utilizada. (Single Page App).';
		$descripcion2 = 'Esta plataforma gestiona, organiza, almacena, ayuda y mejora la manera de generar y obtener un certificado online y digital.';
    }elseif ($id == 4) {
        $title = 'Bl Tienda Mini tienda virtual';
        $image = 7;
        $imagePrincipalipal = 'bltiendaMini';
		$descripcion = 'Está hecho con PHP puro y estructural para guardar las sesiones y registros mostrados, en la base de datos MySQL utilizada.';
		$descripcion2 = 'Tienda virtual para gestionar productos varios, tiene panel administrativo al cual se puede acceder al siguiente sitio web (<a target="blank" href="http://minishop.bltiendas.com">minishop.bltiendas.com</a>). <br><br> <b>usuario:</b> admin@mail.com <br> <b>contraseña:</b>  123';
    }else {
        header('location:index.html');
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- SITE TITLE -->
	<title>Sebastián Aguirre Vallejo - Portafolio</title>

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>
</head>
<body data-spy="scroll" data-target="#rock-navigation">

    <section id="work" class="tm-padding-top-bottom-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-4 text-center">
					<h2 class="title"><strong><?php echo $title; ?></strong></h2>						
				</div>
			</div>
			<div class="row justify-content-between">
				<div class="col-md-7 col-sm-7">
					<div class="work-wrapper">
						<!-- <i class="fa fa-flash"></i> -->
						<!-- <h3 class="text-uppercase tm-work-h3">Diseño Web</h3> -->
						<!-- <hr> -->
						<p><?php echo $descripcion; ?></p>
                        <?php if ($descripcion2 <> '') { ?>
                            <br><br><p><?php echo $descripcion2; ?></p>
                        <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
    
    <div class="iso-box-section">
        <div class="iso-box-wrapper col4-iso-box justify-content-center">
            <div style="width: 100%;" class="row justify-content-between">
                <div class="iso-box html responsive col-md-6 col-sm-6 col-xs-12 my-5">
                    <div class="portfolio-thumb">
                        <img src="images/<?php echo $imagePrincipalipal.'.png'; ?>" class="fluid-img" width="100%" height="300px">
                    </div>
                </div>
                <?php 
                    for ($i=1; $i <= $image; $i++) { 
                        ?>
                            <div class="iso-box html responsive col-md-6 col-sm-6 col-xs-12 my-5">
                                <div class="portfolio-thumb">
                                    <img src="images/<?php echo $imagePrincipalipal.'_'.$i.'.png'; ?>" class="fluid-img" width="100%" height="300px">
                                </div>
                            </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- END CONTACT -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>