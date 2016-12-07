<?php
	$d=file_get_contents('php://input');
	$dato=json_decode($d,true);
	$db=mysql_connect('127.0.0.1','root','usbw');
	mysql_select_db('estudiante',$db);
	$rs=mysql_query('select nombre from estudiante',$db);
	$nr=mysql_num_rows($rs);
	if($nr>0){
		$reg=mysql_fetch_row($rs);
		echo '{"respuesta":"'.$reg[0].'"}';
	}
	mysql_close($db);
?>