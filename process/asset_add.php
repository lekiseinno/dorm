<?php
session_start();

include_once('../config.php');

if(	$_POST['Assets_Code']==""	AND	$_POST['Assets_Type']==""	AND	$_POST['Assets_Name']==""	AND	$_POST['Assets_Where']==""	AND	$_POST['Assets_Remark']=="")
{
	echo "<script>alert('Please input data in fields.');window.history.back();</script>";
}
else
{
	$sql	=	"
				INSERT INTO [dbo].[Assets]([Assets_Code],[Assets_Type],[Assets_Name],[Assets_Where],[Assets_Status],[Assets_Remark],[datecreate],[lastupdate])
				VALUES
				(
					'".$_POST['Assets_Code']."',
					'".$_POST['Assets_Type']."',
					'".$_POST['Assets_Name']."',
					'".$_POST['Assets_Where']."',
					'Available',
					'".$_POST['Assets_Remark']."',
					GETDATE(),
					GETDATE()
				);
				";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'insert Assets','dbo.Assets on '.$_POST['Assets_Code'],'now is test');
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../config/asset.php'</script>";
}
?>