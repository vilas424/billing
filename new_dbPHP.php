
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>


<body>
<div align="center">
	<h1 align="center">Products</h1>
	<table border="0" cellpadding="2px" width="400px">
		<?php
                $host="localhost"; //yout host name
$username="root";  //yout user name
$password="root";      // your password
$db_name="shopping";  // your database name
$con=mysql_connect("$host", "$username", "$password")or die("cannot connect"); //mysql connection

mysql_select_db("$db_name")or die("can not select DB"); //select your db
			$result=mysql_query("select * from productsd where serial=1") or die("select * from productsd"."<br/><br/>".mysql_error());
			while($row=mysql_fetch_array($result)){
		?>
    	<tr>
        	<td><img src="<?php echo $row['picture']?>" /></td>
            <td>   	<b><?php echo $row['name']?></b><br />
                        Price:<big style="color:green">
                     	$<?php echo $row['price']?></big><br /><br />
                         
                    </td>
                </tr>
       <?php } ?>
    </table>
</div>
</body>
</html>