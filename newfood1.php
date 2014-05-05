
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Retail Shop</title>
<meta name="keywords" content=", Retail shop,  CSS, HTML" />
<meta name="description" content="Retail Shop - " />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
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
        <div id="templatemo_shopping_cart">
       	    Shopping Cart <span>(<a href="#">3 items</a>)</span>      
        </div>

  </div>
    
    
<div align="center">
	<h1 align="center">Products</h1>
	<table border="0" cellpadding="2px" width="400px">
		<?php
                $host="localhost"; //yout host name
$username="root";  //yout user name
$password="ashwini";      // your password
$db_name="shopping";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection

mysql_select_db("$db_name")or die("can not select DB"); //select your db
			$result=mysql_query("select * from productsf where serial=2") or die("select * from productsf"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>
    	<tr>
        	<td><img src="<?php echo $row['picture']?>" /></td>
            <td>   	<b><?php echo $row['name']?></b><br />
                        Price:<big style="color:green">
                     	$<?php echo $row['price']?></big><br /><br />
                         <br>
                    </td>
                </tr>
        <?php } ?>
    </table>
</div>
          <div id="templatemo_footer_panel">
        <div id="footer_left">
            <img src="images/mastercard.gif" alt="Master Card" /><img src="images/visa.gif" alt="Visa Card" /><img src="images/paypal.gif" alt="PayPal" /><img src="images/verisignsecured.gif" alt="Verisign Secured" />
        </div>

        <div id="footer_right"></div>
</div>
</body>
</html>