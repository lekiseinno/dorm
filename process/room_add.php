<?php
session_start();

include_once('../config.php');

if(	$_POST['Building_Code']==""	AND	$_POST['Rooms_Code']==""	AND	$_POST['Rooms_Name']==""	AND	$_POST['Rooms_Option']=="")
{
	echo "<script>alert('Please input data in fields.');window.history.back();</script>";
}
else
{
	$sql	=	"

				INSERT INTO [dbo].[Rooms]([Building_Code],[Rooms_Code],[Rooms_Name],[Rooms_Option],[Rooms_Price],[Rooms_Status],[datecreate],[lastupdate])
				VALUES
				(
					'".$_POST['Building_Code']."',
					'".$_POST['Rooms_Code']."',
					'".$_POST['Rooms_Name']."',
					'".$_POST['Rooms_Option']."',
					'".$_POST['Rooms_Price']."',
					'Available',
					GETDATE(),
					GETDATE()
				);

				";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'insert Room','dbo.Room on '.$_POST['Rooms_Code'],'now is test');
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../config/room.php'</script>";
}
?>