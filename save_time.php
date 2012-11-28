<?php

	mysql_connect('sqluare.crhallberg.com', 'kan0a', 'uvoomiqu');
	mysql_select_db('longlists');
	
	session_start();
	
	if(!isset($_SESSION['id'])) $_SESSION['id'] = -1;
	
	$json = json_encode($_POST['data']);
	
	$query = 'INSERT INTO times (type, data, participant)  VALUES (' . $_POST['type']	. ",'" . $json . "', " . $_SESSION['id'] . ')';
	mysql_query($query) or die(print_r($_POST)."\n".$query."\n".mysql_error());
	
	mysql_close();
?>