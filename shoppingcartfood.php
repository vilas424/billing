<?php
	include("includes/db.php");
	include("includes/functions2.php");
	
	if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
		remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
		unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['productid'];
			$q=intval($_REQUEST['product'.$pid]);
			if($q>0 && $q<=999){
				$_SESSION['cart'][$i]['qty']=$q;
			}
			else{
				$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
			}
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>
<meta name="description" content="Retail Shop - " />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
			document.form1.pid.value=pid;
			document.form1.command.value='delete';
			document.form1.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
			document.form1.command.value='clear';
			document.form1.submit();
		}
	}
	function update_cart(){
		document.form1.command.value='update';
		document.form1.submit();
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
<form name="form1" method="post">
<input type="hidden" name="pid" />
<input type="hidden" name="command" />
<div id="templatemo_content">
	<div style="margin:0px auto; width:600px;" >
    <div style="padding-bottom:10px">
    	<h1 align="center">Your Shopping Cart</h1>
    <input type="button" value="Continue Shopping" onclick="window.location='productsf.php'" />
    </div>
    	<div style="color:#F00"><?php echo $msg ?></div>
    	<table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; background-color:#E1E1E1" width="100%">
    	<?php
        
			if(is_array($_SESSION['cart'])){
            	echo '<tr bgcolor="#be457c" style="font-weight:bold"><td>Serial</td><td>Name</td><td>Price</td><td>Qty</td><td>Amount</td><td>Options</td></tr>';
				$max=count($_SESSION['cart']);
				for($i=0;$i<$max;$i++){
					$pid=$_SESSION['cart'][$i]['productid'];
					$q=$_SESSION['cart'][$i]['qty'];
					$pname=get_product_name($pid);
					if($q==0) continue;
			?>
            		<tr bgcolor="#be457c"><td><?php echo $i+1?></td><td><?php echo $pname?></td>
                    <td>$ <?php echo get_price($pid)?></td>
                    <td><input type="text" name="product<?php echo $pid?>" value="<?php echo $q?>" maxlength="3" size="2" /></td>                    
                    <td>$ <?php echo get_price($pid)*$q?></td>
                    <td><a href="javascript:del(<?php echo $pid?>)">Remove</a></td></tr>
            <?php					
				}
			?>
				<tr bgcolor="#811044"><td><b>Order Total: $<?php echo get_order_total()?></b></td><td colspan="5" align="right"><input type="button" value="Clear Cart" onclick="clear_cart()"><input type="button" value="Update Cart" onclick="update_cart()"><input type="button" value="Place Order" onclick="window.location='billing2.php'"></td></tr>
			<?php
            }
			else{
				echo "<tr bgColor='#FFFFFF'><td>There are no items in your shopping cart!</td>";
			}
		?>
        </table>
        <h2> <a href="index.php"> BACK  </a></h2>
    </div>
    </div>
</form>
</body>
</html>