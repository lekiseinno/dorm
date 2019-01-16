<script type="text/javascript" src="config/functions.js"></script>
<?php

include_once('config/connection.php');
include_once('config/functions.php');

//$path		=	'http://127.0.0.1:88/dorm';
$path		=	'http://127.0.0.1/dorm';
$srvsql		=	new	srvsql();
$connect	=	$srvsql->connect();
?>