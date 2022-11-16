<!DOCTYPE html>

<head>
<title> <?php echo $titulo;?> </title>
<meta	http-equiv ="Content-Type" content ="text/html;	charset=utf-8" />
<link rel="stylesheet" type="text/css" href="hojaestilo.css" />
<!-- Enlazamos hoja de estilos -->
 </head>
 <body>  
	<div id="" class="cont-ppal">	<!--  Contenedor Principal -->
		<div  class="header1">	<!-- Este es el Header de la página -->
			Este sería el header con un Logo de la Empresa
		</div>	
		<div  class="modulo1"> <!-- Aquí se cargará el módulo solicitado -->
			<?php
				if (file_exists($path_modulo)){	
// si extiste el archivo de módulo solicitado
					include($path_modulo);	// lo carga
				}else{
				echo ('Error al cargar el módulo <b>'.$modulo.'</b>. No existe el archivo');
				}
			?>
		</div>
		<div  class="menu1">	<!-- Este es el Menú de la Página -->
			<a href="?id=moduloa">Ver Módulo A</a><br />
			<a href="?id=modulob">Ver Módulo B</a><br />
			<a href="?id=moduloc">Ver Módulo C</a><br />
			<a href="?id=modulod">Ver Módulo D</a>
		</div>
		<div  class="footer1">	<!-- Este es el Footer de la Página -->
			Aqui el Footer – Proyecto de Aplicaciones Web 2022
		</div>
	</div>
 </body>
</html>


