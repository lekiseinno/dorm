<?php
session_start();

include_once('../config.php');

if(	$_POST['updatestartus']=="")
{
	echo "<script>alert('Please input data in fields.');window.history.back();</script>";
}
else
{
	$sql	=	"
				UPDATE	[dbo].[Rooms]	SET
					[Rooms_Status]	=	'".$_POST['updatestartus']."',
					[lastupdate]	=	GETDATE()
				WHERE	[Rooms_ID]	=	'".$_GET['room_id']."'
				";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'Update Status Room','dbo.Room on '.$_GET['room_id'],'now is test');
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../config/room.php'</script>";
}
?>