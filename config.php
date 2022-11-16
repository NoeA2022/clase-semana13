<?php
	//---- Declaraciones ------
	define('MODULO_DEFECTO','moduloa');		// Módulo por defecto
	define('LAYOUT_DEFECTO','layout1.php');	 // Layout Amarillo
	define('LAYOUT_NARANJA','layout2.php');	 // Layout Naranja
	define('MODULO_PATH',realpath('./modulos/'));	 // Ruta de Módulos
	define('LAYOUT_PATH',realpath('./layouts/'));	 // Ruta de Layouts
	//---- Lista de Modulos --------------
$conf['moduloa']=array('archivo'=>'mod_a.php', //Configuración del Módulo A
			'titulo'=>'Título del Modulo A',
			'layout'=>LAYOUT_DEFECTO);
$conf['modulob']=array('archivo'=>'mod_b.php', //Configuración del Módulo B
			'titulo'=>'Título del Modulo B',
			'layout'=>LAYOUT_DEFECTO);
$conf['moduloc']=array('archivo'=>'mod_c.php',  // Configuración del Módulo C
			'titulo'=>'Título del Modulo C',
			'layout'=>LAYOUT_NARANJA);
$conf['modulod']=array('archivo'=>'mod_d.php',  // Configuración del Módulo D
			'titulo'=>'Título del Modulo D',
			'layout'=>LAYOUT_NARANJA);
?>



