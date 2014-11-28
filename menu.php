
  <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
					 <?php 
                    if (!(isset($_SESSION['usuario']))){
                ?>
                <ul class="nav navbar-nav">
                    <li><a href="registro.php">Registrate</a></li>
                    <li><a href="login.php">Iniciar Sesion</a></li>
                </ul>
            </div> 
            <?php 
            }else{
            ?>
            <nav id="mainmenu" class="mainmenu">
	        <ul>
	        <li class="has-submenu">
							<a href="#"><?php echo($_SESSION['usuario']);?></a>
							<div class="mainmenu-submenu">
								<div class="mainmenu-submenu-inner">
										<ul>
											<li><a href="perfil.php">Mi Perfil</a></li>
					                        <li><a href="reg_producto.php">Crear Venta</a></li>
					                        <li><a href="cerrarsesion.php">Cerrar Sesion</a></li>
										</ul>	
								</div>	
							</div>	
						</li>
			</ul>
			</nav>
	  <?php } ?>
				</div>
		    </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/mPurpose-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li class="active">
							<a href="index.php">Inicio</a>
						</li>
						<li class="has-submenu">
							<a href="#">Categorias +</a>
							<div class="mainmenu-submenu">
								<div class="mainmenu-submenu-inner">
										<ul>
											<li><a href="categorias.php?id=1">Accesorios</a></li>
					                        <li><a href="categorias.php?id=2">Arte</a></li>
					                        <li><a href="categorias.php?id=3">Deportes</a></li>
					                        <li><a href="categorias.php?id=4">Electronica</a></li>
					                        <li><a href="categorias.php?id=5">Libros</a></li>
					                        <li><a href="categorias.php?id=6">Mascotas</a></li>
					                        <li><a href="categorias.php?id=7">Ropa</a></li>
										</ul>	
								</div>	
							</div>	
						</li>
						<li><a href="">Acerca de BaratilloPillo</a></li>		
					</ul>
				</nav>
			</div>
		</div>

