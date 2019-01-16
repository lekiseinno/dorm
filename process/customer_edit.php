<?php
session_start();

include_once('../config.php');

$sql	=	"
				UPDATE	[dbo].[Customers]	SET
						[Customers_Code]		=	'".$_POST['Customers_Code_'.$_GET['customer_id']]."',
						[Customers_FullName]	=	'".$_POST['Customers_FullName_'.$_GET['customer_id']]."',
						[Customers_type]		=	'".$_POST['Customers_type_'.$_GET['customer_id']]."',
						[Customers_lvl]			=	'".$_POST['Customers_lvl_'.$_GET['customer_id']]."',
						[Customers_datestart]	=	'".$_POST['Customers_datestart_'.$_GET['customer_id']]."',
						[Customers_status]		=	'".$_POST['Customers_status_'.$_GET['customer_id']]."',
						[Customers_remark]		=	'".$_POST['Customers_remark_'.$_GET['customer_id']]."',
						[lastupdate]			=	GETDATE()
				WHERE	[Customers_ID]			=	'".$_GET['customer_id']."'
				";
	sqlsrv_query($connect,$sql) or die( 'SQL Error = '.$sql.'<hr><pre>'. print_r( sqlsrv_errors(), true) . '</pre>');
	save_logtransection($_SESSION['employees_name'],'Update Customers','dbo.Customers on '.$_POST['Customers_Code'],'now is test');
	echo "<script>alert('บันทึกข้อมูลเรียบร้อย ');window.location.href='../customers.php'</script>";

?>