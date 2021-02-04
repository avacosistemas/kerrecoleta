<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
        <div class="cabcontacto"><img src="img_recoleta/CONTACTO/KER_RECOLETA_CONTACTO_banner01.jpg" alt="Banner_01"></div>
        
		
		<div class="botonreservar2 hidden-lg hidden-sm hidden-md">RESERVAR</div>
      				<div class="buscador2"><!--  -->
        <form action="https://reservations.travelclick.com/73729#/guestsandrooms" method="get" target="_blank">
	        <li class="item">
	        <select name="room">
		        <option>Tipo de habitación</option>
		        <option value="Classic Room">Classic</option>
		        <option value="Habitacion Superior">Superior</option>
		        <option value="Executive Room">Executive</option>
		        <option value="Habitacion Deluxe">Deluxe</option>
	        </select>
	        </li>
	        <li class="item"><input type="text" id="from" name="DateIn"/></li>
	        <li class="item"><input type="text" id="to" name="DateOut"/></li>
	        <li class="item">
	        <select name="Adults">
		        <option>Huespedes</option>
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
	        </select>
	        </li>
	        <li class="item"><input type="submit" value="RESERV&Aacute;"></li>
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div><!--  -->
        </div>

<?php include("protocolo_covid.php");?>  
        
       <div class="contacto_ker" id="contacto">
	       <div class="container">
	        <div class="col-md-6 col1">
		        <p>Marcelo T. de Alvear 1368,<br>
(C1058AAV) Recoleta<br>
Buenos Aires, Argentina<br>
(54 11) 5277 4600<br>
<a href="mailto:reservasrecoleta@kerhoteles.com.ar" style="color:#fff;">reservasrecoleta@kerhoteles.com.ar</a>

</p>
		 	<div class="" style="font-size:14px; color:#fff;">
			 	Localizado entre el barrio de Recoleta y el centro de Buenos Aires, se puede llegar caminando a los principales centros comerciales, puntos turísticos y barrios más importantes de la ciudad; además de tener rápidos accesos a aeropuertos y terminales.<br><br>

Está ubicado a tan sólo 5 cuadras del teatro Colón y a pocos metros de las principales avenidas de la Capital Federal: Avenida Santa Fé, con variadas tiendas de vestimenta y zapatos, 
Avenida Corrientes conocida por sus teatros y librerías, y Avenida 9 de Julio, famosa por ser
la más ancha del mundo.<br><br>

<strong>Distancias en automóvil desde el hotel a:</strong><br><br>
Cementerio de La Recoleta: 5 minutos (8 cuadras)<br>
Calle Florida (Peatonal): 5 minutos (8 cuadras)<br>
San Telmo: 15 minutos<br>
Puerto Madero: 10 minutos<br>
Buquebus: 8 minutos<br>
Aeropuerto Internacional Ministro Pistarini: 45 minutos<br>
Aeroparque Jorge Newbery: 20 minutos<br>
Estación de micros (Retiro): 10 minutos<br>


		 	</div>
	        </div>
	        <div class="col-md-6 col2">
		        <form action="enviar.php" method="post">
		        <h1><span>Contacto</span></h1>
		        <label>Asunto</label>
		        <input type="text" name="asunto" value="<?php echo $_GET['tipo']; ?> - <?php echo $_GET['salon']; ?>" style="text-transform:capitalize;">
		        <label>Nombre y apellido</label>
		        <input type="text" name="nombre" required>
		        <label>Email</label>
		        <input type="email" name="email" required>
		        <label>Teléfono</label>
		        <input type="text" name="tel">
		        <label>Tipo de respuesta</label>
		        <input type="radio" value="email" name="radioemail"> Email
		        <label>Tu mensaje</label>
		        <textarea name="mensaje" rows="6"></textarea>
		        <div class="left">Políticas de privacidad <a href="">click acá</a></div>
		        <div class="right"><input type="submit" value="ENVIAR"></div>
		        <div class="clear"></div>
                <?php if(isset($_REQUEST['tipo']) && $_REQUEST['tipo'] !=''){ ?>
						<input type="hidden" name="tipo" value="<?php echo $_REQUEST['tipo']; ?> <?php echo escape($_GET['salon']); ?>" />
				
                <?php } ?>
                
                </form>
	        </div>
	        <div class="clear"></div>
	        </div>
        </div> 
        
        <div class="hoteles">
	        
	        
	        <div class="col-md-4 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
		        <a href="https://kersantelmo.com.ar" target="_blank">
			    <img src="KER_BELGRANO_Website/LOGOS/Home_Ker_San_Telmo_logo.png">
		        
		        
		        </a>
	        </div>
	        
	        <div class="col-md-4 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
		        <a href="http://kerbelgrano.com.ar/" target="_blank">
			    <img src="KER_BELGRANO_Website/LOGOS/Home_Ker_Belgrano_logo.png">
		        
		        
		        </a>
	        </div>	        
	        
	        <div class="col-md-4 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <a href="http://kerurquiza.com.ar/" target="_blank">
			    <img src="KER_BELGRANO_Website/LOGOS/Home_Ker_Urquiza_logo.png">
		        
		        
		        </a>
	        </div>
	        
	        
	        
	        <div class="clear"></div>
        </div>
        <?php include("mensaje_whatsapp.php");?>
        <?php include("footer.php");?>
<script src="js/jquery.bxslider1/jquery.bxslider.js"></script>
		<link rel="stylesheet" href="js/jquery.bxslider1/jquery.bxslider.css">
        
		
		<script>
	            $(document).ready(function(){
    $('.bxslider2').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: true
  	});
});
    
    $(document).ready(function(){
    $('.bxslider').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});

$(document).ready(function(){
    $('.bxslider3').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});
</script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="screen">
<script>
		$(document).ready(function() {
		$('.carousel1').slick({
			
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});});
</script>
    </body>
</html>
