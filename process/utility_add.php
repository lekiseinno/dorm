<?php
session_start();

include_once('../config.php');

if(	$_POST['Utilitys_Code']==""	AND	$_POST['Utilitys_Name']==""	AND	$_POST['Utilitys_Unit']==""	AND	$_POST['Utilitys_Price']=="")
{
	echo "<script>alert('Please input data in fields.');window.history.back();</script>";
}
else
{
	$sql	=	"
				INSERT INTO [dbo].[Utilitys] ([Utilitys_Code],[Utilitys_Name],[Utilitys_Unit],[Utilitys_Price],[Utilitys_Status],[Utilitys_Remark],[datecreate],[lastupdate])
				VALUES
				(
					'".$_POST['Utilitys_Code']."',
					'".$_POST['Utilitys_Name']."',
					'".$_POST['Utilitys_Unit']."',
					'".$_POST['Utilitys_Price']."',
					'Available',
					'".$_POST['Utilitys_Remark']."',
					GETDATE(),
					GETDATE()
				);
				";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'insert Utilitys','dbo.Utilitys on '.$_POST['Utilitys_Code'],'now is test');
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../config/utility.php'</script>";
}
?>