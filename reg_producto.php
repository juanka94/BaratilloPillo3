<?php
    session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BaratilloPillo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/leaflet.ie.css" />
        <![endif]-->
        <link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
	<body>
	<?php include('menu.php'); 
            if (!(isset($_SESSION['usuario']))){
                header('Location:login.php');
            }
    ?>
	<!-- Page Content -->
    <div class="container">
    	<?php  
    
            $pr_nombre = (isset($_POST['nombre'])) ? trim($_POST['nombre']) : '';
            $pr_descripcion = (isset($_POST['descripcion'])) ? trim($_POST['descripcion']) : '';
            $pr_precio = (isset($_POST['precio'])) ? trim($_POST['precio']) : '';
            $pr_cantidad = (isset($_POST['cantidad'])) ? trim($_POST['cantidad']) : '';
            $pr_estado = (isset($_POST['estado'])) ? trim($_POST['estado']) : '';
            $pr_categoria = (isset($_POST['categoria'])) ? trim($_POST['categoria']) : '';


            if(isset($_POST['btnregistrar'])){
                include('funciones.php');
                $usuario_class =  new venta();
                $response = $usuario_class->registrar2($pr_nombre,$pr_descripcion,$pr_precio,$pr_cantidad,$pr_estado,
                    $pr_categoria);

                if($response['done']){
                    $pr_nombre='';
                    $pr_apellidos='';
                    $pr_direccion='';
                    $pr_telefono='';
                    header('location:index.php');
                }

            }
        ?>
 <!-- Page Title -->
        <div class="section section-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Crear Venta</h1>
                    </div>
                </div>
            </div>
        </div>

<div class="container">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 panel panel-default">
        <form role="form" method="post">
            <h2>Registro de un producto</h2>
            <hr class="colorgraph">
            <div class="row">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control input-lg" placeholder="Nombre" >
                    </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select name="estado" class="form-control input-lg">
                        	<option value="">--Estado--</option>
                        	<option value="1">Nuevo</option>
                        	<option value="2">Usado</option>}
                        </select>
                    </div>
                </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <select name="categoria" class="form-control input-lg">
                        	<option value="">--Categoria--</option>
                        	<option value="1">Accesorios</option>
                        	<option value="2">Arte</option>
                        	<option value="3">Deportes</option>
                        	<option value="4">Electronica</option>
                        	<option value="5">Libros</option>
                        	<option value="6">Mascotas</option>
                        	<option value="7">Ropa</opcion>
                        </select>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="precio"  class="form-control input-lg" placeholder="Precio" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="cantidad"  class="form-control input-lg" placeholder="Cantidad">
                    </div>
                </div>
            </div>
            <div class="row col-centered ">
                <center><textarea name="descripcion" class="form-control input-lg" placeholder="Breve descripcion del producto" rows="5" cols="50"></textarea></center>
            </div>   
            <hr class="colorgraph">
            <div class="row">
                <div class="col-xs-12 col-md-6"><input type="submit" value="Empezar a vender" class="btn btn-primary btn-block btn-lg" name="btnregistrar"></div>
            </div>
        </form>
    </div>
</div>
</div>

    </div>
    <!-- /.container -->
     <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-footer col-md-3 col-xs-6">
                        <h3>Our Latest Work</h3>
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="page-portfolio-item.html"><img src="img/portfolio6.jpg" alt="Project Name"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-footer col-md-3 col-xs-6">
                        <h3>Navigate</h3>
                        <ul class="no-list-style footer-navigate-section">
                            <li><a href="page-blog-posts.html">Blog</a></li>
                            <li><a href="page-portfolio-3-columns-2.html">Portfolio</a></li>
                            <li><a href="page-products-3-columns.html">eShop</a></li>
                            <li><a href="page-services-3-columns.html">Services</a></li>
                            <li><a href="page-pricing.html">Pricing</a></li>
                            <li><a href="page-faq.html">FAQ</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-footer col-md-4 col-xs-6">
                        <h3>Contacts</h3>
                        <p class="contact-us-details">
                            <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom<br/>
                            <b>Phone:</b> +44 123 654321<br/>
                            <b>Fax:</b> +44 123 654321<br/>
                            <b>Email:</b> <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
                        </p>
                    </div>
                    <div class="col-footer col-md-2 col-xs-6">
                        <h3>Stay Connected</h3>
                        <ul class="footer-stay-connected no-list-style">
                            <li><a href="#" class="facebook"></a></li>
                            <li><a href="#" class="twitter"></a></li>
                            <li><a href="#" class="googleplus"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright">&copy; 2013 mPurpose. All rights reserved.</div>
                    </div>
                </div>
            </div>
        </div>
	 <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>   
	</body>    
</html>