<?php include("header.php");
	
	$query_menues = "SELECT * FROM menues WHERE Id = 1";
$menues = mysqli_query($kerhistoric, $query_menues ) or die(mysqli_error());
$row_menues = mysqli_fetch_assoc($menues);
$totalRows_menues = mysqli_num_rows($menues);
?>
        
        
      				
      				
      				
      				
        
        
       <div class="halo">
	       <img src="img_recoleta/CITRINO/KER_RECOLETA_CITRINO_banner01.jpg" alt="KER_Halo_banner" class="img-responsive" />
	       <h1 style="background-color:#043B5D;">Delight yourself</h1>
	       
	       <div class="item">
		       <img src="img_recoleta/CITRINO/KER_RECOLETA_CITRINO_foto01.jpg" alt="KER_Halo_img_01" class="img-responsive" />
		       <div class="botones">
			       <a href="HTTPS://WWW.THEFORK.COM.AR/RESTAURANTE/CITRINO-R491081">RESERVA</a>
			       <?php if($row_menues['menu']!=''){?><a href="img_menues/<?php echo $row_menues['menu']; ?>" target="_blank">VER MEN&Uacute;</a><?php } ?>
		       </div>
	       </div>
	       
	       <div class="item">
		       <img src="img_recoleta/CITRINO/KER_RECOLETA_CITRINO_foto02.jpg" alt="KER_Halo_img_01" class="img-responsive" />
		       <div class="titulo">MEN&Uacute; EJECUTIVO</div>
		       <div class="botones">
			       <a href="contacto.php?tipo=Halo reserva#contacto">RESERVA</a>
			       <?php if($row_menues['menu_ejecutivo']!=''){?><a href="img_menues/<?php echo $row_menues['menu_ejecutivo']; ?>" target="_blank">VER MEN&Uacute;</a><?php } ?>
		       </div>
	       </div>
	       
	       <div class="item">
		       <img src="img_recoleta/CITRINO/KER_RECOLETA_CITRINO_foto03.jpg" alt="KER_Halo_img_01" class="img-responsive" />		       
	       </div>
	       
	       <div class="fondocitrino">
		       <div class="container">
		       <p>Citrino es sin dudas una excelente opción para disfrutar de gastronomía local e internacional.<br>
Su nombre se originó de un cristal con propiedades energéticas especiales,cuyas cualidades se reflejan en el Restaurant, que se caracteriza por su calidez y armonía, perfecta para disfrutar de un deliciosa comida.<br>
Ofrecemos Desayuno Buffet Americano, almuerzos, cenas, cocktails & bar, meriendas, té, brunchs.</p>
</div>
<div class="clear"></div>
	       </div>
	       
	       <div class="item">
		       <img src="img_recoleta/CITRINO/KER_RECOLETA_CITRINO_foto04.jpg" alt="KER_Halo_img_01" class="img-responsive" />
		       <div class="titulo">CAFETER&Iacute;A</div>
		       <div class="botones">
			       <?php if($row_menues['menu_cafeteria']!=''){?><a href="img_menues/<?php echo $row_menues['menu_cafeteria']; ?>" target="_blank">VER MEN&Uacute;</a><?php } ?>
		       </div>
	       </div>
       </div>
        
        
        
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
