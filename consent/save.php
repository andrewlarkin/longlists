<?php

	mysql_connect('sqluare.crhallberg.com', 'kan0a', 'uvoomiqu');
	mysql_select_db('longlists');

	if(!isset($_POST['legalname']))  $_POST['legalname']  = '';
	if(!isset($_POST['legalemail'])) $_POST['legalemail'] = '';
	mysql_query('INSERT INTO consent (name, email, legalname, legalemail)  VALUES ("'.$_POST['name'].'","'.$_POST['email'].'","'.$_POST['legalname'].'","'.$_POST['legalemail'].'")') or die(mysql_error());
	
	session_start();
	$_SESSION['id'] = mysql_insert_id();
	
	mysql_close();
	
	header('Location:../test.php');
?>