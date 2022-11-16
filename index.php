<?php
include('config.php');	// Carga archivo de configuración

//-------- Respecto al Módulo -----------------

if (!empty($_GET['id'])){	// Verificamos que haya solicitado un modulo
   $modulo = $_GET['id'];
}else{			// sino tomamos el módulo por defecto.
   $modulo = MODULO_DEFECTO;
}
if (empty($conf[$modulo])){	// vemos si el módulo solicitado existe 
       $modulo = MODULO_DEFECTO;	// sino, cargamos el módulo por defecto
}
//-------- Respecto al Layout ---------------------------
if (empty($conf[$modulo]['layout'])) {	// Si no existe Layout para el módulo solicitado
    $conf[$modulo]['layout'] = LAYOUT_DEFECTO; // Utilizamos el layout por defecto
}else{					// sino, utilizamos el que le corresponde
	$conf[$modulo]['layout'] = $conf[$modulo]['layout'];	
}
//-------- El título que le corresponde al módulo solicitado ----------
$titulo=$conf[$modulo]['titulo'];  // Lo pasamos a una variable
//-- Crea ruta de archivos solicitados (módulo y layout) e intenta cargarlos --------

$path_layout = LAYOUT_PATH.'/'.$conf[$modulo]['layout'];	// ruta para el Layout
$path_modulo = MODULO_PATH.'/'.$conf[$modulo]['archivo'];	// ruta para el Módulo

if (file_exists($path_layout)){		// Si existe el archivo de layout solicitado
	include($path_layout);		// lo carga
}else{						// sino, intenta cargar el archivo de módulo
	if (file_exists( $path_modulo )){  // ve si extiste el archivo de módulo solicitado
		include( $path_modulo );	  // si es así, lo carga.
	}else{					  // sino muestra un mensaje de error
        echo ('Error al cargar el módulo <b>'.$modulo.'</b>.');
        echo (' No existe el archivo');
	}
}
?>



