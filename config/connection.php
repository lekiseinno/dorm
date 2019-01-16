<?php
session_start();
date_default_timezone_set('asia/bangkok');

// FOR TEST //
$_SESSION['employees_name']	=	"Artit";


class srvsql
{
	public function connect()
	{
		$serverName			=	"119.59.96.60\MSSQLSERVER2016";
		$connectionInfo		=	array(
										"Database"					=>	"com12322_dorm",
										"UID"						=>	"dorm",
										"PWD"						=>	"Dzmw#126",
										"MultipleActiveResultSets"	=>	true,
										"CharacterSet"				=>	'UTF-8',
										'ReturnDatesAsStrings'		=>	true
									);
		$connect	=	sqlsrv_connect($serverName,$connectionInfo);
		if(!$connect) {
			echo "<h1>Connection could not be established.</h1><hr><br />";
			die( '<pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
		}
		else
		{
			return	$connect;
		}
	}
}



?>