<html>
    
<header>
<?php
$servicio = $_POST['ser'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$telefono = $_POST['tel'];
$mensaje = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Su Nombre es: " . $nombre . " \r\n";
$mensaje .= "Su Apellido es: " . $apellido . " \r\n";
$mensaje .= "Su Servicio es: " . $servicio. " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su Telefono es: " . $telefono . " \r\n";
$mensaje .= "Mensaje: " . $mensaje  . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'rosa.basualto@bp-consultores.cl';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BY-CONSULTORES</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<link rel="apple-touch-icon" href="apple-touch-icon.png">-->
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Flaticons css -->
    <link rel="stylesheet" href="css/flaticon.css">

    <!-- nivo slider CSS
        ============================================ -->
    <link rel="stylesheet" href="inc/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="inc/custom-slider/css/preview.css" type="text/css" media="screen" />

    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- CSS Color Plate -->
    <link rel="stylesheet" href="multicolor-css/skype-color.css">
    <link rel="stylesheet" href="multicolor-css/red-color.css">
    <link rel="stylesheet" href="multicolor-css/green-color.css">
    <link rel="stylesheet" href="multicolor-css/blue-color.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Google Analytics JS -->
    <!--<script src="http://www.digitalcenturysf.com/google_analytics.js"></script>-->
    
    <!-- Global site tag (gtag.js) - Google Ads: 590810023 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-590810023"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-590810023');
</script>


<!-- Event snippet for Enviar formulario de clientes potenciales conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-590810023/IvMYCKiMpN4BEKeX3JkC'});
</script>


</head>
</header>
<body>
     
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <br><br><br><br><br><br><br><br><br>
                <h1>MENSAJE ENVIADO</h1>
                 <a href="index.html" class="botton-area">Volver al sitio web</a>
                </div> </div>
                 </div> 
                  
    
</body>
</html>