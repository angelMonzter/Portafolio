<?php 

	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	
	mail('angelmonztr2000@hotmail.com', $nombre, $asunto, $mensaje);
	
 ?>
<body>
		<script type="text/javascript">
		window.location="../contacto.html";
		</script>
</body>

	<?php


 ?>