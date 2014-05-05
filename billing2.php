<?php
	include("includes/db.php");
	include("includes/functions2.php");
	
        
	if($_REQUEST['command']=='update'){
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$address=$_REQUEST['address'];
		$phone=$_REQUEST['phone'];
		
		$result=mysql_query("insert into customers values('','$name','$email','$address','$phone')");
		$customerid=mysql_insert_id();
		$date=date('Y-m-d');
		$result=mysql_query("insert into orders values('','$date','$customerid')");
		$orderid=mysql_insert_id();
		
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price=get_price($pid);
			mysql_query("insert into order_detail values ($orderid,$pid,$q,$price)");
		}
		die('Thank You! your order has been placed!');
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing Info</title>
<meta name="description" content="Retail Shop - " />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
 <script language="javascript">
	function validate(){
		var f=document.form1;
		if(f.name.value==''){
			alert('Your name is required');
			f.name.focus();
			return false;
		}
		f.command.value='update';
		f.submit();
	}
</script>
</head>


<body>
    <div id="templatemo_container">
<div id="templatemo_top_panel">
    	<div id="templatemo_language_section">
<a href="#"><img src="images/templatemo_flag_01.gif" alt="flag 1" /></a>
            <a href="#"><img src="images/templatemo_flag_02.gif" alt="flag 2" /></a>
            <a href="#"><img src="images/templatemo_flag_03.gif" alt="flag 3" /></a>
            <a href="#"><img src="images/templatemo_flag_04.gif" alt="flag 4" /></a>
            <a href="#"><img src="images/templatemo_flag_05.gif" alt="flag 5" /></a>
        </div>
    </div>
<form name="form1" onsubmit="return validate()">
    <input type="hidden" name="command" />
	<div align="center">
        <h1 align="center">Billing Info</h1>
        <table border="0" cellpadding="2px">
        	<tr bgcolor="#be457c"><td>Order Total:</td><td><?php echo get_order_total()?></td></tr>
            <tr bgcolor="#be457c"><td>Your Name:</td><td><input type="text" name="name" /></td></tr>
            <tr bgcolor="#be457c"><td>Address:</td><td><input type="text" name="address" /></td></tr>
            <tr bgcolor="#be457c"><td>Email:</td><td><input type="text" name="email" /></td></tr>
            <tr bgcolor="#be457c"><td>Phone:</td><td><input type="text" name="phone" /></td></tr>
            <tr bgcolor="#be457c"><td>&nbsp;</td><td><input type="submit" value="Place Order" /></td></tr>
        </table>
	</div>
    <a href="index.php"><h2> BACK </h2></a>
    </div>
</form>
</body>
</html>