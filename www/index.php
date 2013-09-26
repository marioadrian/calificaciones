<?php require "dinamico.php"; ?>
<?php $contenido = new Contenido; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js></script>
<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Experimentando con Boilerplate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <meta name="description" content="">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon_cal.ico"/>
        <link rel="apple-touch-icon-precomposed" sizes="114×114" href="/apple-touch-icon-114×114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72×72" href="/apple-touch-icon-72×72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="57×57" href="/apple-touch-icon-57×57-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/touch-icon-iphone-precomposed.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">        
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" type="text/css" media="print" href=".css/print.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="main-container" class="container">
	        <header>
	        	
	        	<div id="logo">
	        		<a href="http://alanturing.cucei.udg.mx/cc409/user101">
	        			<img src="img/logo-128.png" />
	        		</a>
	        	</div>
	            
	            <nav id="nav-bar">
	            	<h3>Principal</h3>
	            </nav>
	            
	             <div class="limpia"></div>
	           
	        </header>
	        <div class="navbar navbar-default">
		        <div class="navbar-header">
		          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle active" type="button">
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a href="#" class="navbar-brand">Calificaciones.com</a>
		        </div>
		        <div class="navbar-collapse collapse">
		          <ul class="nav navbar-nav">
		            <li><a href="previo/login.html">login</a></li>
		            <li class="dropdown">
		              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Panel <b class="caret"></b></a>
		              <ul class="dropdown-menu">
		                <li><a href="previo/panel-admin.html">Administrador</a></li>
		                <li><a href="previo/panel-prof.html">Profesor</a></li>
		                <li><a href="previo/panel-alumn.html">Alumno</a></li>
		              </ul>
		            </li>	            
		            <li><a href="#">Acerca de</a></li>
		            <li><a href="#">Contacto</a></li>
		          </ul>
		          
		        </div><!--/.nav-collapse -->
	      </div>
	        
	        <section id="contenido">
	        	<h2>
	                Contenido
	            </h2>
	            <p>
	            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin faucibus metus quis mi mattis, nec ullamcorper libero hendrerit. Aliquam vitae tempus nisl. Aliquam porttitor dui gravida auctor condimentum. Mauris metus elit, porta a tristique at, tempor vitae lorem. Curabitur vehicula sed mauris id molestie. Vestibulum vel enim nec lacus tincidunt placerat. Sed id felis mauris. Nam dignissim ut nisl imperdiet molestie. Nulla vulputate porttitor odio, ac pretium ante vestibulum vitae. Praesent faucibus dignissim lacus. Nam pretium leo ante. Integer laoreet erat ut augue fermentum euismod. Phasellus pellentesque suscipit diam. Maecenas eu felis mollis, suscipit sem vel, tristique lorem.
	
	            Morbi tempus tortor lorem, et euismod elit commodo at. Aliquam erat volutpat. Duis ipsum arcu, dictum nec lectus ut, pretium ultricies purus. Praesent tristique nunc egestas, sollicitudin magna quis, lobortis neque. Morbi lacus erat, molestie ut lorem nec, semper sollicitudin ipsum. Curabitur urna mauris, fermentum eget condimentum vel, condimentum eu erat. Vestibulum feugiat mauris hendrerit dapibus consequat. Cras feugiat ac felis in posuere. Aliquam dolor erat, facilisis ut nunc vel, aliquam ullamcorper dolor.
	
	
	        </p>
	        </section>
	        <div class="row">
		        <div class="col-md-4">
			        <aside id="menu-1" class="menu-inf span4">
			            <h2>
			                Menú inferior 1
			            </h2>
			            <p>
			            	<?php  //print $contenido->menuInf1(); ?>
			            </p>
			        </aside>
		        </div>
		        <div class="col-md-4">
			        <aside id="menu-2" class="menu-inf span4">
			        	<h2>
			        		Menú inferior 2
			        	</h2>	  
			        </aside>
			    </div>
		        <div class="col-md-4">
			         <aside id="menu-3" class="menu-inf">
			        	<h2>
			        		Menú inferior 3
			        	</h2>	  
			        </aside>
		        </div>
	        </div>
	        
	        <div class="limpia"></div>
	        <footer>
	            <h2>pie</h2>
	            <pre><?php print_r($_SERVER); ?></pre>
	        </footer>
	    </div>

        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
        <script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            /*var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));*/
        </script>
    </body>
</html>
