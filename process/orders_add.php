<?php
session_start();

include_once('../config.php');

if(	$_POST['Customers_Code']==""	AND	$_POST['Rooms_Code']==""	AND	$_POST['Orders_start']==""	AND	$_POST['Orders_type']==""	AND	$_POST['Orders_Price']=="")
{
	echo "<script>alert('Please input data in fields.');window.history.back();</script>";
}
else
{

	$asci			=	array(",", ".", "/", "*", "+", "-");
	$Orders_Price	=	str_replace($asci, "", $_POST['Orders_Price']);
	$sql			=	"
						INSERT INTO [dbo].[Orders] ([Customers_Code],[Rooms_Code],[Orders_Datestart],[Orders_Type],[Orders_Price],[Orders_Remark],[datecreate],[lastupdate])
						VALUES
						(
							'".$_POST['Customers_Code']."',
							'".$_POST['Rooms_Code']."',
							'".$_POST['Orders_start']."',
							'".$_POST['Orders_type']."',
							'".$Orders_Price."',
							'".$_POST['Orders_Remark']."',
							GETDATE(),
							GETDATE()
						);
						";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'insert Orders','dbo.Orders on Test','now is test');


	$sql	=	"
				UPDATE	[dbo].[Rooms]	SET
					[Rooms_Status]		=	'Busy',
					[lastupdate]		=	GETDATE()
				WHERE	[Rooms_Code]	=	'".$_POST['Rooms_Code']."'
				";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'Update Status Room','dbo.Room on '.$_POST['Rooms_Code'],'now is test');




	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../orders.php'</script>";
}
?>