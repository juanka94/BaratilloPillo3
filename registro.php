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
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
        <?php 
       	include('menu.php'); 
            $pr_nombre = (isset($_POST['nombre'])) ? trim($_POST['nombre']) : '';
            $pr_apellidos = (isset($_POST['apellidos'])) ? trim($_POST['apellidos']) : '';
            $pr_direccion = (isset($_POST['direccion'])) ? trim($_POST['direccion']) : '';
            $pr_telefono = (isset($_POST['telefono'])) ? trim($_POST['telefono']) : '';
            $pr_email = (isset($_POST['email'])) ? trim($_POST['email']) : '';
            $pr_password = (isset($_POST['password'])) ? trim($_POST['password']) : '';


            if(isset($_POST['btnregistrar'])){
                include('funciones.php');
                $usuario_class =  new venta();
                $response = $usuario_class->registrar($pr_nombre,$pr_apellidos,$pr_direccion,$pr_telefono,$pr_email,$pr_password);

                if($response['done']){
                    $pr_nombre='';
                    $pr_apellidos='';
                    $pr_direccion='';
                    $pr_telefono='';
                    $pr_email='';
                    $pr_password='';

                    header('location:login.php');
                }

            }
        ?>
        
        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Register</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<div class="basic-login">
							<form action"" method="POST" role="form"><?php
		                        if(isset($response))
		                            if(is_array($response)){
		                                ?>
		                                <div class="alert alert-<?php echo(($response['done']) ? 'success' : 'danger') ?>">
		                                    <?php echo($response['msg']); ?>
		                                </div>  
		                           	<?php   
		                            }
		            				?>
								<div class="form-group col-sm-6">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Nombre(s)</b></label>
									<input class="form-control" id="register-username" type="text" placeholder="Nombre" name="nombre">
								</div>
								<div class="form-group col-sm-6">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Apellidos</b></label>
									<input class="form-control" id="register-username" type="text" placeholder="Apellidos" name="apellidos">
								</div>
								<div class="form-group col-sm-8">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Direccion</b></label>
									<input class="form-control" id="register-username" type="text" placeholder="Direccion" name="direccion">
								</div>
								<div class="form-group col-sm-4">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Telefono</b></label>
									<input class="form-control" id="register-username" type="text" placeholder="Telefono" name="telefono">
								</div>
								<div class="form-group col-sm-12">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Email</b></label>
									<input class="form-control" id="register-username" type="text" placeholder="Correo Electronico" name="email">
								</div>
								<div class="form-group col-sm-6">
		        				 	<label for="register-password"><i class="icon-lock"></i> <b>Password</b></label>
									<input class="form-control" id="register-password" type="password" placeholder="Contraseña" name="password">
								</div>
								<div class="form-group col-sm-6">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Re-enter Password</b></label>
									<input class="form-control" id="register-password2" type="password" placeholder="Confirme Contraseña" name="password">
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right" name="btnregistrar">Register</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-4 col-sm-offset-1 social-login">
						<p>You can use your Facebook or Twitter for registration</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Use Facebook</a>
							<a href="#" class="btn-twitter-login">Use Twitter</a>
						</div>
					</div>
				</div>
			</div>
		</div>

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