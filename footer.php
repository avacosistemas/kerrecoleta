<footer>
	        <div class="col-md-3 col1">
		        <p>Marcelo T. de Alvear 1368,<br>
(C1058AAV) Recoleta<br>
Buenos Aires, Argentina<br></p>
		        <a href="tel:0810-3456-537">0810-3456-537</a> / <a href="tel:5277-4600">(54 11) 5277 4600</a><br>
		        <a href="https://wa.me/5491130174497">Reservas: 11 3017-4497</a><br>
		        <a href="https://wa.me/5491130465697">Corporativo: 11 3046-5697</a><br>
		        <a href="mailto:reservasrecoleta@kerhoteles.com.ar">reservasrecoleta@kerhoteles.com.ar</a><br>
		        <a href="http://qr.afip.gob.ar/?qr=10L8kzpxnozv8A8DJocJLg,," target="_F960AFIPInfo"><img src="https://www.afip.gob.ar/images/f960/DATAWEB.jpg" border="0" width="31" style="margin:10px 0 10px 0;"></a>
	        </div>
	        <div class="col-md-3 col2">
		        <ul>
			        <li><a href="promociones.php">PROMOCIONES</a></li>
			        <li><a href="experiencias.php">EXPERIENCIAS</a></li>
			        <li><a href="#">UBICACI&Oacute;N</a></li>	        
			        <li><a href="https://reservations.travelclick.com/73729#/guestsandrooms" target="_blank">RESERVAS</a></li>
			        <li><a href="contacto.php">CONTACTO</a></li>
		        </ul>
	        </div>
	        <div class="col-md-3 col3">
		        <ul>
			        <li><a href="habitaciones.php">HABITACIONES</a></li>
			        <li><a href="citrino.php">CITRINO</a></li>
			        <li><a href="salones.php">EVENTOS</a></li>
			        <li><a href="spa.php">SPA</a></li>
			        <li><a href="hoteles.php">HOTELES</a></li>
		        </ul>
	        </div>
	        <div class="col-md-3 col4"><img src="img_recoleta/LOGOS/Home_Ker_Recoleta_logo.png"></div>
	        <div class="clear"></div>
        </footer>
        
        <div class="copy">
	        <a href="http://kaser.com.ar" target="_blank"><img src="img/Ker_Historic_SanTelmo_BsAs_Desarrolado-Kaser.svg" width="200"></a>
        </div>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
		<script src="js/jquery.nice-select.js"></script>
    
		<script type="text/javascript" src="https://grandview.com.ar/js/lib/jquery-ui.min.js"></script>
		<script src="js/wow/dist/wow.min.js"></script>
		<link rel="stylesheet" href="js/animate.css">
<script>
 new WOW().init();
</script>
    
    <script>
	$(".volumen").click( function (){
    if( $("video").prop('muted') ) {
          $("video").prop('muted', false);
          $(".vol2").show();
          $(".vol1").hide();
          //$(".vol2").element.style.display = 'block';
    } else {
      $("video").prop('muted', true);
      $(".vol1").show();
      $(".vol2").hide();
      //$(".vol1").style.display = 'none';
          //$(".vol2").style.display = 'block';
    }
  });
</script>
<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script>
	$(function() {
		var monthShortNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
  "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
];

  $('#fecha1, #fecha2').daterangepicker({
	  "locale": {
        
        "applyLabel": "Aplicar",
        "cancelLabel": "Cancelar",
        "fromLabel": "Desde",
        "toLabel": "Hasta",
        "daysOfWeek": [
            "Do",
            "Lu",
            "Ma",
            "Mi",
            "Ju",
            "Vi",
            "Sa"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ],
        "firstDay": 1
    },
    opens: 'right'
  }, function(start, end, label) {


//alert(start.format('MM'));

let meses = ["0", "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
		

	  $('#fecha1').html(start.format('DD'));
	  $('#fecha2').html(end.format('DD'));
	  var m = parseInt(start.format('MM'));
	  $('#mes1').html(meses[m]);
	  $('#mes2').html(meses[parseInt(end.format('MM'))]);	  
	  $('#desde2').val(start.format('MM/DD/YYYY'));
	  $('#hasta2').val(end.format('MM/DD/YYYY'));
      //console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
<script>
	function stopDefAction(evt) {
	evt.preventDefault();
	$(location).attr('href',"arrepentimiento.php");
	}
</script>
    </body>
</html>