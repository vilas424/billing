<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script>
     var pri;
     var appi;
     var flag=0;
    function show(appi)
    {
     var mydata1=appi.value;
     if(mydata1=="www.retailshop.com")
         {
           window.location.assign("index.php");
         }
         else
             {
                 alert("Enter correct website");
                 document.forms[0].reset();
             }
        }    
    </script>
    </head>
    <!--<link href="templatemo_style.css" rel="stylesheet" type="text/css" />-->
    <body bgcolor="#c82c74">
  <!-- <body bgcolor="#811044">-->
    <!-- <body bgcolor="#ebbce5">-->
     <form id="one">
         <table align="center" width="350px" height="300px" bgcolor="#ebbce5">
             <br><br>
         <th><h1><i>Welcome To Login page</i> </h1></th>
         <tr>
         <td>
             <hr>
         <h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ENTER THE URL</h4></td></tr>
         <tr>
         <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" value="" name="ash"/></td></tr>
       <tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Go" name="ash2" onclick="show(ash)"/> <br><br></td> 
     </tr>
      </table>
     <br><br>
      <marquee behavior="alternate"> <img src="top2.jpeg" height="200" width="200"/>
      <img src="images/top.jpeg" height="200" width="200" />
      <img src="images/top2_1.jpeg" height="200" width="200"/>
      <img src="images/top4_1.jpeg" height="200" width="200"/>
       <img src="images/top3_1.jpeg" height="200" width="200"/></marquee>
     </form>    
    </body>
</html>
