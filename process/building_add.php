<?php
session_start();

include_once('../config.php');

if(	$_POST['Company_Code']==""	AND	$_POST['Building_Code']==""	AND	$_POST['Building_Name']=="")
{
	echo "<script>alert('Please input data in fields.');window.history.back();</script>";
}
else
{
	$sql	=	"
				INSERT INTO [dbo].[Building] ([Company_Code],[Building_Code],[Building_Name],[Building_Status],[datecreate],[lastupdate])
				VALUES
				(
					'".$_POST['Company_Code']."',
					'".$_POST['Building_Code']."',
					'".$_POST['Building_Name']."',
					'Active',
					GETDATE(),
					GETDATE()
				);
				";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'insert Building','dbo.Building on '.$_POST['Building_Code'],'now is test');
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../config/building.php'</script>";
}
?>