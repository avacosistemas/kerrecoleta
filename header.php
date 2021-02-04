<?php require_once('Connections/kerhistoric.php'); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Ker Recoleta - Stay a While - Buenos Aires – Argentina</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="Favicon.jpg" type="image/x-icon">
		<link rel="icon" href="Favicon.jpg" type="image/x-icon">
		<meta name="description" content="Ker Recoleta se encuentra ubicado entre el barrio de Recoleta y el centro de Buenos Aires. Se puede llegar caminando a los principales centros comerciales, puntos turísticos y barrios más importantes de la ciudad, además de tener rápidos accesos a aeropuertos y terminales. Una variada oferta de servicios para que disfruten los huéspedes, 92 habitaciones y suites, combinando diseño, calidez, tecnología y confort.">
        <meta name="keywords" content="ker, recoleta hotel, buenos aires, caba, turismo, reserva, reservar, suites, habitaciones, salones, eventos, corporativos, sociales, hospedaje, estacionamiento, acceso, cerca, aeropuerto, hospedaje, habitaciones, citrino, spa">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://grandview.com.ar/css/lib/jquery-ui.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="js/nice-select.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-L8Y2FRHX35"></script>
		<script>
  		  window.dataLayer = window.dataLayer || [];
  		  function gtag(){dataLayer.push(arguments);}
  		  gtag('js', new Date());
  		  gtag('config', 'G-L8Y2FRHX35');
		</script>

	<!-- Global site tag (gtag.js) - Google Ads: 465890687 -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=AW-465890687"></script>
        	<script>
            	  window.dataLayer = window.dataLayer || [];
            	  function gtag(){dataLayer.push(arguments);}
            	  gtag('js', new Date());
            	  gtag('config', 'AW-465890687');
        	</script>
        
	<!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window,document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '823360734875729');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1"
                 src="https://www.facebook.com/tr?id=823360734875729&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

				<!-- estilo de Botón de Wsp -->
				<style>
        .btn-whatsapp {
			position: fixed;
   			width: 45px;
    		height: 45px;
    		line-height: 45px;
    		bottom: 30px;
    		left: 30px;
    		border-radius: 55px;
    		box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.2);
			z-index: 100;
		}

		.btn-whatsapp:hover {
  			text-decoration: none;
    		box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.4);
		}
    </style>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4TB4MZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

        
        <header>
	        <div class="iconomobile">
			        <div id="nav-icon1" class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					</div>
		        </div>
	        <div class="col-md-3 logo">
		        <a href="index.php"><img src="img_recoleta/LOGOS/Home_Ker_Recoleta_logo.png"></a>
	        </div>
	        <div class="col-md-6">
		        <div class="menu1">
		        <ul class="menu">
			        <li><a href="https://www.kerhoteles.com.ar/promociones.php">PROMOCIONES</a></li>
			        <!--<li><a href="experiencias.php">EXPERIENCIAS</a></li>-->
			        <li><a href="index.php#ubicacion">UBICACI&Oacute;N</a></li>
			        <li><a href="https://reservations.travelclick.com/73729?languageId=ES_ES&dateIn=&dateOut=#/guestsandrooms" target="_blank">RESERVAS</a></li>
			        <li><a href="contacto.php">CONTACTO</a></li>
		        </ul>
		        <ul class="menu">
			        <li class="linkhoteles"><a href="habitaciones.php">HABITACIONES</a>
			        	<div class="submenu" id="menuhoteles">
				        	<a href="habitaciones_classic.php">Classic</a>
				        	<a href="habitaciones_executive.php">Executive</a>
				        	<a href="habitaciones_family.php">Family</a>
				        	<a href="habitaciones_suite.php">Suite</a>
			        	</div>
			        </li>
			        <li><a href="citrino.php">CITRINO</a></li>
			        <li><a href="salones.php">EVENTOS</a></li>
			        <!--<li><a href="spa.php">SPA</a></li>-->
			        <li><a href="hoteles.php">HOTELES</a></li>
			        <li><a href="#">ES</a></li>
			        <li><a href="#">EN</a></li>
			        <a href="tel:08103456537" class="hidden-md hidden-lg linkmobile"><i class="fa fa-phone"></i> 0810-3456-537</a>
			        <a href="https://wa.me/5491130174497" target="_blank" class="hidden-md hidden-lg linkmobile"><i class="fa fa-whatsapp"></i> RESERVAS 11 3017-4497</a>
					<a href="https://wa.me/5491130174497" target="_blank" class="hidden-md hidden-lg linkmobile"><i class="fa fa-whatsapp"></i> CORPORATIVO 11 3046-5697</a>
					<div class="redesmobile hidden-md hidden-lg">
			        <li><a href="https://www.facebook.com/hotelesker/" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Facebook.svg"></a></li>
			        <li><a href="https://www.instagram.com/kerhoteles" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Instagram.svg"></a></li>
			        <li><a href="https://www.linkedin.com/company/ker-hoteles/" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Linkedin.svg"></a></li>
					</div>
		        </ul>
		        </div>
	        </div>
	        <div class="col-md-3 col3">
		        <ul class="redes">
			        <li><a href="https://www.facebook.com/hotelesker/" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Facebook.svg"></a></li>
			        <li><a href="https://www.instagram.com/kerhoteles" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Instagram.svg"></a></li>
			        <li><a href="https://www.linkedin.com/company/ker-hoteles/" target="_blank"><img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Icono_Linkedin.svg"></a></li>
		        </ul>
		        <a href="tel:08103456537" class="iconotel">0810-3456-537</a><br>
		        <a href="https://wa.me/5491130174497" class="iconowhat" target="_blank">RESERVAS 11 3017-4497</a>
		        <a href="https://wa.me/5491130465697" class="iconowhat2" target="_blank">CORPORATIVO 11 3046-5697</a>
	        </div>
        </header>