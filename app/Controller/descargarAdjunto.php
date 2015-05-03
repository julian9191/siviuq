<?php

    if(isset($_GET['accion']) && $_GET['accion'] == 4 &&
            isset($_GET['idAdjunto']) && $_GET['idAdjunto'] != null){
            $adjunto = getAdjunto($conexion, $_GET['idAdjunto']);
            $array = explode( '.', $adjunto['nombreArchivo'] );
            
            $extension = $array[sizeof($array)-1];
            //echo $extension;
            header("content-type: ".$extension);
            echo $adjunto['archivo'];
            
    }



?>