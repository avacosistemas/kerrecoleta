<?php 


//require_once('Connections/kerhistoric.php');

    $cabeceras = "MIME-Version: 1.0\n";
	$cabeceras .= "Content-type: text/html; charset=iso-8859-1\n";
	$cabeceras .=  "From:info@kerhistoric.com.ar";
	$cabeceras .= "\n";


if($_POST['nombre']!=''){

$asunto="KER formulario web"; 



$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="100%" border="0">


  <tr>
    <td width="20%">Asunto</td>
    <td width="80%">'.$_POST['asunto'].'</td>
  </tr>
  <tr>
    <td width="20%">Nombre</td>
    <td width="80%">'.$_POST['nombre'].'</td>
  </tr>
  
  <tr>
    <td>Email</td>
    <td>'.$_POST['email'].'</td>
  </tr>
  
  <tr>
    <td>Telefono</td>
    <td>'.$_POST['tel'].'</td>
  </tr>
  
  <tr>
    <td>Respuesta</td>
    <td>'.$_POST['radioemail'].'<br>'.$_POST['radiocelular'].'</td>
  </tr>

  <tr>
    <td>Mensaje</td>
    <td>'.$_POST['mensaje'].'</td>
  </tr>
</table>

</body>
</html>
';	




if ((isset($_POST["email"])) && ($_POST["email"] != "")) {
/*	
$userIP = $_SERVER["REMOTE_ADDR"];
$recaptchaResponse = $_POST['g-recaptcha-response'];
$secretKey = "6LcbJ5cUAAAAAPmWWmwme_hsJRjLI9T2-9xIRPI8";
$request = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}&remoteip={$userIP}");
if(strstr($request, "true")){		
	
*/	

$hostname_kerhistoric = "localhost:3306";
$database_kerhistoric = "kerhistoric_2019";
$username_kerhistoric = "ker_2019";
$password_kerhistoric = "4&Qh0g3a";
$kerhistoric = mysqli_connect($hostname_kerhistoric, $username_kerhistoric, $password_kerhistoric);


$tipo = 'contacto';

if(isset($_POST['tipo']) && $_POST['tipo']!=''){
	$tipo = 	$_POST['tipo'];
}


   $insertSQL = sprintf("INSERT INTO contactos (fecha, tipo, asunto, nombre, telefono, email, tipo_respuesta, consulta) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString(date('Y-m-d'), "date"),
                       GetSQLValueString($tipo, "text"),
                       GetSQLValueString($_POST['asunto'], "text"),					   
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['tel'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['radioemail'], "text"),					   
                       GetSQLValueString($_POST['mensaje'], "text"));

  mysqli_select_db($kerhistoric, $database_kerhistoric);
  $Result1 = mysqli_query($kerhistoric, $insertSQL);




if($tipo == 'Halo reserva'){

	mail( 'aabbsantelmo@kerhoteles.com.ar', "Contacto - Halo Reserva", $html,  $cabeceras );	
	
} else if($tipo == 'Salones Cotizacion'){
	if(isset($_GET['salon'])) {$asunto = 'Contacto - Salones Cotizacion '.$_GET['salon'];}
	//mail( 'adrianfrassa@kerhoteles.com.ar', "Contacto - Salones Cotizacion", $html,  $cabeceras );
	mail( 'ventasker@kerhoteles.com.ar', $asunto, $html,  $cabeceras );

} else if($tipo == 'spa'){

	mail( 'recepcionrecoleta@kerhoteles.com.ar', "Contacto - SPA", $html,  $cabeceras );	

} else { 

	//mail( 'kerhoteles@kerhoteles.com.ar', $asunto, $html,  $cabeceras );
	mail( 'reservasrecoleta@kerhoteles.com.ar', $asunto, $html,  $cabeceras );
	mail( 'barbara.morello@kaser.com.ar', $asunto, $html,  $cabeceras );
	
}



}

header("Location: gracias.php");
//}
}



function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{


  //$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

?>