<?php
	$d=file_get_contents('php://input');
	$dato=json_decode($d,true);
	echo '{"respuesta":400}'
?>