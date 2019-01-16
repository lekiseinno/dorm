<?php
function getdatetime($date)
{
	$d		=	explode(" ", $date);
	$date	=	explode("-", $d[0]);
	$time	=	explode(".", $d[1]);
	return	$date[2].'-'.$date[1].'-'.$date[0].' '.$time[0];
}
function gettimes($date)
{
	$d		=	explode(" ", $date);
	$time	=	explode(".", $d[1]);
	return	$time[0];
}
function getdates($date)
{
	$d		=	explode(" ", $date);
	$date	=	explode("-", $d[0]);
	return	$date[2].'-'.$date[1].'-'.$date[0];
}
function getnewcuscode()
{
	global	$connect;
	$sql	=	"
				SELECT	(COUNT(*)+1) as 'getcuscode'
				FROM	[dbo].[Customers]
				";
	$query	=	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	$row	=	sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC);
	return	'CUS'. sprintf("%04d",$row['getcuscode']);
}
function save_logtransection($who,$doing,$where,$note)
{
	global	$connect;
	$sql	=	"
				INSERT INTO [dbo].[Log_transections] ([Logs_datetime],[Logs_who],[Logs_doing],[Logs_where],[Logs_note]) VALUES
				(
					GETDATE(),
					'".$who."',
					'".$doing."',
					'".$where."',
					'".$note."'
				)
				";
	$query	=	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
}
?>


