<html>
    <head>
        <script type="text/javascript" src="lib/alertify.js"></script>
        <link rel="stylesheet" href="themes/alertify.core.css" />
        <link rel="stylesheet" href="themes/alertify.default.css" />
        <title>EJEMPLO - ALERTIFY.JS</title>
        <script>
            /*
             --------------------------------------------------------------------------------
             | EJEMPLO Y SCRIPT ADAPTADO AL ESPAÑOL POR http://blog.reaccionestudio.com/    |
             --------------------------------------------------------------------------------
             |	VISÍTANOS !!!                                                              |
             --------------------------------------------------------------------------------
             */
            function alerta() {
                //un alert
                alertify.alert("<b>Blog Reaccion Estudio</b> probando Alertify", function() {
                    //aqui introducimos lo que haremos tras cerrar la alerta.
                    //por ejemplo -->  location.href = 'http://www.google.es/';  <-- Redireccionamos a GOOGLE.
                });
            }

            function confirmar() {
                //un confirm
                alertify.confirm("<p>Aquí confirmamos algo.<br><br><b>ENTER</b> y <b>ESC</b> corresponden a <b>Aceptar</b> o <b>Cancelar</b></p>", function(e) {
                    if (e) {
                        alertify.success("Has pulsado '" + alertify.labels.ok + "'");
                    } else {
                        alertify.error("Has pulsado '" + alertify.labels.cancel + "'");
                    }
                });
                return false
            }

            function datos() {
                //un prompt
                alertify.prompt("Esto es un <b>prompt</b>, introduce un valor:", function(e, str) {
                    if (e) {
                        alertify.success("Has pulsado '" + alertify.labels.ok + "'' e introducido: " + str);
                    } else {
                        alertify.error("Has pulsado '" + alertify.labels.cancel + "'");
                    }
                });
                return false;
            }

            function notificacion() {
                alertify.log("Esto es una notificación cualquiera.");
                return false;
            }

            function ok() {
                alertify.success("Visita nuestro <a href=\"http://blog.reaccionestudio.com/\" style=\"color:white;\" target=\"_blank\"><b>BLOG.</b></a>");
                return false;
            }

            function error() {
                alertify.error("Usuario o constraseña incorrecto/a.");
                return false;
            }
        </script>
    </head>
    <body>
        <p align="center">
            <br />
            <input type="button" value="Alerta" onClick="alerta()" /> <br />
            <input type="button" value="Confirm" onClick="confirmar()" /> <br />
            <input type="button" value="Prompt" onClick="datos()" /> <br />
            <input type="button" value="Notificacion normal" onClick="notificacion()" /> <br />
            <input type="button" value="Notificacion correcta" onClick="ok()" /> <br />
            <input type="button" value="Notificacion error" onClick="error()" /><br /><br />
            <a href="http://blog.reaccionestudio.com/" target="_blank">BLOG REACCI&Oacute;N ESTUDIO</a>
        </p>
    </body>
</html>