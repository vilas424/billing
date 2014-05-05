<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Retail Shop - free website template, HTML CSS</title>
<meta name="keywords" content=", Retail shop, website templates, CSS, HTML" />
<meta name="description" content="Retail Shop - " />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script>
    var data1;
    function jump(data1)
    {
        window.location.assign("new_dbPHP.php");
    }
    var delay=20;
var imgsize=5;
var arrsize=4;
var timeon;
var whoc = new Array(arrsize);
var wid;
var hei;
var i=0;
function zoom_out(p,q,which)
{  
   if(which.width <= p)
      which.width += imgsize;
   if(which.height <= q)
      which.height += imgsize;
   if(which.width <= p)
   {
      var tmp=which.id;
      timeon=eval("setTimeout('zoom_out("+p+","+q+","+tmp+")', delay)");
   }
   if(which.width > p)   
   {
      zoom_check(which.id);
      clearTimeout(timeon);
   }
}
function zoom_check(xx)
{
    for(var x=0; x<(whoc.length);x++)
    {
        if(whoc[x] != null && whoc[x] != xx)
        {
	    var ff = document.getElementById(whoc[x]);
            ff.width=wid;
	    ff.height=hei;
        }
    }
}
function zoom_in(r,s,asd)
{
  if(i<(whoc.length-1))
	i++;
  else
	i=0;
  whoc[i] = asd.id;
  if(asd.width >= r)
      asd.width -= imgsize;
  if(asd.height >= s)
      asd.height -= imgsize; 
  asd.width=r;
  asd.height=s;
  wid=asd.width;
  hei=asd.height;
}
function ctck()
{
var sds = document.getElementById("dum");
if(sds == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");}
var sdss = document.getElementById("dumdiv");
if(sdss == null){alert("You are using a free package.\n You are not allowed to remove the tag.\n");}
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
        <div id="templatemo_shopping_cart">
       	    <span>(<a href="shoppingcartd.php"> Shopping Cart</a>)</span>      
        </div>

  </div>
     
     <div id="templatemo_header">
     	<img src="images/templatemo_site_header.jpg" alt="Retail Shop" />
     </div>
     
     <div id="templatemo_banner">
         <a href="#"><img src="images/spl.jpg"  alt="Retail Shop " title="Retail Shop" border="0" /></a> 
        &nbsp;&nbsp;&nbsp;&nbsp;<img src="dress/d1.jpg"  alt="Retail Shop " title="Retail Shop" border="0" height="190" width="210"/>
     	<a href="#"><img src="dress/d1.jpg" alt="Retail Shop "  border="0" width="250" height="380"/></a>     </div>
     
<div id="templatemo_menu_panel">
        <ul>

            <li><a href="dress.php" class="current">Home</a></li>
            <li><a href="#" target="_parent">Features</a></li>
            <li><a href="#" target="_parent">Gallery</a></li>
            <li><a href="#">About Us</a></li> 
            <li><a href="#">Contact Us</a></li>                     
        </ul> 
    </div> <!-- end of menu -->

    
    <div id="templatemo_content">
    
    	<div id="templatemo_content_left">
        	<h1>Welcome to Our Retail Online Shopping Website</h1>
            <p>A sari or saree is a strip of unstitched cloth, worn by women, ranging from four to nine yards in length that is 
                draped over the body in various styles.
A dress (also known as a frock or a gown) is a garment consisting of a skirt with an attached bodice 
(or a matching bodice giving the effect of a one-piece garment).
In Western culture, dresses are usually considered to be items of women's and girls' apparel.
</p>

                        
             <div class="cleaner_with_height">&nbsp;</div>
             
             <h2>New Products</h2>
             <div class="product_box">
             	<h3>Chudi</h3>
                <img src="dress/d3.jpg" alt="image" width="170" height="170" onMouseover="zoom_out(190,200,this)" onMouseout="zoom_in(170,170,this)"/>
                <p>Nice Designer dress with Brown color rich work</p>
                <div class="price">PRICE:<span>1000.00 </span></div>                           
             	<div class="buynow"><a href="productsd.php">Buy Now</a></div><a href="new_dbPHP.php">Details</a>

             </div>
             <div class="product_box">
             	<h3>saree</h3>
                <img src="dress/d5.jpg" alt="image" width="170" height="170" onMouseover="zoom_out(190,200,this)" onMouseout="zoom_in(170,170,this)"/>
                <p>Nice Designer Saree with Pink color rich work</p>
                <div class="price">PRICE:<span>4000.0 </span></div>                           
             	<div class="buynow"><a href="productsd.php">Buy Now</a></div><a href="new_dbPHP1.php">Details</a>

             </div>
             <div class="product_box">
             	<h3>ghagra choli </h3>
                <img src="dress/d6.jpg" alt="image" width="170" height="170" onMouseover="zoom_out(240,250,this)" onMouseout="zoom_in(170,170,this)"/>
                <p>Nice Designer Ghagra choli with Brown color rich work </p>
                <div class="price">PRICE:<span>5000.00 </span></div>                           
             	<div class="buynow"><a href="productsd.php">Buy Now</a></div><a href="new_dbPHP2.php">Details</a>

             </div>
             <a href="moreDress.html">more...</a>
			<div class="cleaner_with_height">&nbsp;</div>
                        
        </div> 
        
        <div id="templatemo_content_right">
        	<div class="templatemo_right_section">
            	<h4>Search</h4>
                <div class="templatemo_right_section_content">
                    <form method="post" action="search2.php">

                            <input name="dress" type="text" id="keyword"/>
                            <input type="submit" name="submit" class="button" value="Search" />
                     </form>
                 </div>
            </div>
            
            <div class="templatemo_right_section">
            	<h4>Categories</h4>
                <div class="templatemo_right_section_content">

                    <ul>
                        <li><a href="index.php">Food items</a></li>
                        <li><a href="dress.php">Dresses</a></li>
                        <li><a href="gift.php">Gifts</a></li>
                        <li><a href="#">Send Gifts</a></li>
                        <li><a href="fruits.html">fruits</a></li>
                        <li><a href="veg.html">vegetables</a></li>
                    </ul>

                </div>
            </div>
        </div> 
        
        <div class="cleaner">&nbsp;</div>
    </div>
    
     <div id="templatemo_footer_panel">
        <div id="footer_left">
            <img src="images/mastercard.gif" alt="Master Card" /><img src="images/visa.gif" alt="Visa Card" /><img src="images/paypal.gif" alt="PayPal" /><img src="images/verisignsecured.gif" alt="Verisign Secured" />
        </div>

        <div id="footer_right">
            Copyright © 2024 <a href="#">BVBCET</a><br />
			
        </div>
        
        <div class="cleaner">&nbsp;</div>
    </div>

</div>
</html>