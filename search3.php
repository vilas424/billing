<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Food</title>
<meta name="keywords" content=", Retail shop, website templates, CSS, HTML" />
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
    </div>
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
     <div id="templatemo_content">
	<h1 align="center">Food Grains</h1>
	<table border="0" cellpadding="2px" width="600px">
		<?php
                $food=$_POST['food'];
                $db = mysql_connect("localhost", "root","ashwini");
if(!$db)
exit("Error! Could not connect.\n");
$sdb = mysql_select_db("shopping");
if(!$sdb)
exit("Error! Could not select the database.\n");
	$result=mysql_query("select * from productsf") or die("select * from productsf"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
                            if($row[4]==$food){
		?>
    	<tr>
        <td><img src="<?php echo $row['picture']?>" /></td>
            <td><b><?php echo $row['name']?></b><br />
            		 Price:<big style="color:green">
                    	$<?php echo $row['price']?></big><br /><br />
                    	</td>
		</tr>
        <tr><td colspan="2"><hr size="1" /></td>
        <?php } }?>
    </table>
        <a href="index.php"><h3> BACK </h3></a>
        <div id="templatemo_footer_panel">
        <div id="footer_left">
            <img src="images/mastercard.gif" alt="Master Card" /><img src="images/visa.gif" alt="Visa Card" /><img src="images/paypal.gif" alt="PayPal" /><img src="images/verisignsecured.gif" alt="Verisign Secured" />
        </div>

        <div id="footer_right">
           <a href="#">BVBCET</a><br />
			
        </div>
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
</div>
</body>
</html>