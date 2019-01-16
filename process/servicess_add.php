<?php
session_start();

include_once('../config.php');

if(	$_POST['Servicess_Code']==""	AND	$_POST['Servicess_Type']==""	AND	$_POST['Servicess_Name']==""	AND	$_POST['Servicess_Unit']==""	AND	$_POST['Servicess_Price']=="")
{
	echo "<script>alert('Please input data in fields.');window.history.back();</script>";
}
else
{
	$sql	=	"
				INSERT INTO [dbo].[Servicess]([Servicess_Code],[Servicess_Type],[Servicess_Name],[Servicess_Unit],[Servicess_Price],[Servicess_Remark],[datecreate],[lastupdate])
				VALUES
				(
					'".$_POST['Servicess_Code']."',
					'".$_POST['Servicess_Type']."',
					'".$_POST['Servicess_Name']."',
					'".$_POST['Servicess_Unit']."',
					'".$_POST['Servicess_Price']."',
					'".$_POST['Servicess_Remark']."',
					GETDATE(),
					GETDATE()
				);
				";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'insert Servicess','dbo.Servicess on '.$_POST['Servicess_Code'],'now is test');
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../config/services.php'</script>";
}
?>