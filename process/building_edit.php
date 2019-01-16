<?php
session_start();

include_once('../config.php');

$sql	=	"

			UPDATE [dbo].[Building]
			SET	[Building_Code]		=	'".$_POST['Building_Code_'.$_GET['building_id']]."',
				[Building_Name]		=	'".$_POST['Building_Name_'.$_GET['building_id']]."',
				[Building_Status]	=	'".$_POST['Building_status_'.$_GET['building_id']]."',
				[lastupdate]		=	GETDATE()
			WHERE [Building_ID]		=	'".$_GET['building_id']."'
			";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'insert Building','dbo.Building on '.$_POST['Building_Code'],'now is test');
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../config/building.php'</script>";

?>