<?php
session_start();

include_once('../config.php');

if(	$_POST['Customers_FullName']==""	AND	$_POST['Customers_type']==""	AND	$_POST['Customers_remark']=="")
{
	echo "<script>alert('Please input data in fields.');window.history.back();</script>";
}
else
{
	$sql	=	"
				INSERT INTO [dbo].[Customers] ([Customers_Code],[Customers_FullName],[Customers_type],[Customers_lvl],[Customers_datestart],[Customers_status],[Customers_remark],[datecreate],[lastupdate])
				VALUES
				(
					'".$_POST['Customers_Code']."',
					'".$_POST['Customers_FullName']."',
					'".$_POST['Customers_type']."',
					'0',
					GETDATE(),
					'Active',
					'".$_POST['Customers_remark']."',
					GETDATE(),
					GETDATE()
				);
				";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'insert Customers','dbo.Customers on '.$_POST['Customers_Code'],'now is test');
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../customers.php'</script>";
}
?>