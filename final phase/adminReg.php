<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="Style.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
<style type="text/css">
body,td,th {
	color: #000;
}
</style>
<head>
<title>Electro Store -Sign Up</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<?php
   require("sql_commands.class.php");
   
    $name = $_POST['fname'];
	$Lname = $_POST['lname'];
	$adminNo = $_POST['adminNo'];
	$email = $_POST['email'];
	$pass = $_POST['passwrd'];
	$rpass = $_POST['password'];
	$cell = $_POST['cellNo'];
	
	if(!$name  )
	{
		echo"  Name Field required  <br/>" ;
		}
		else if(!$Lname) {
			echo"  Surname Field required  <br/>" ;
			}
			else if(!$pass) {
			echo"  Password Field required  <br/>" ;
			}
			else if(!$rpass) {
			echo"  Password Field required  <br/>" ;
			}else if(!$adminNo) {
			echo"  admin number required  <br/>" ;
			}else if(!$email) {
			echo"  Email Field required  <br/>" ;
			}else if(!$cell) {
			echo" Cell number  Field required  <br/>" ;
			}else if($pass != $rpass)
			{
				echo "your password dont match ";
				}
		else if(!preg_match("/^[a-zA-Z0-9\_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\_]+$/",$email))
		{
			echo "wrong email format";
			
		}
		else if(!preg_match("/^\+27[786]{1}[0-9]{1}-[0-9]{3}-[0-9]{4}$/", $cell)) {
  			echo"Wrong number";
			}
			else if(!preg_match("/^([0-9]?\s?(.)?){4,8}+$/", $adminNo))
			{
				echo"wrong user name";
			}
			else if(!preg_match("/^[a-zA-Z]{3,}+$/", $name))
			{
				echo"wrong name format";
			}
			else if(!preg_match("/^[a-zA-Z0-9-_]{5,}+$/", $Lname))
			{
				echo"wrong lastname format";
			}
			else if( !preg_match("/^(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{4,20})$/", $pass))
			{
				echo"wrong password";
			}
		$obj=new sql_commands();
	$obj->addAdmin($name,$Lname,$adminNo,$email,$pass,$rpass,$cell);
	

?>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="languages"></div>
  </div>
  <div id="header">
    <div id="logo"> <a href=""><img src="images/logo.png" alt="" border="0" width="237" height="140" /></a> </div>
    <div class="oferte_content">
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
      <div class="oferta">
        <div class="oferta_content"> <img src="images/laptop.png" width="94" height="92" alt="" border="0" class="oferta_img" />
          <div class="oferta_details">
            <div class="oferta_title"></div>
          </div>
        </div>
      </div>
      <div class="top_divider"><img src="images/header_divider.png" alt="" width="1" height="164" /></div>
    </div>
    <!-- end of oferte_content-->
  </div>
  <div id="main_content">
    <div id="menu_tab">
      <div class="left_menu_corner"></div>
      <ul class="menu">
        <li><a href="index.php" class="nav1"> Home</a></li>
        <li class="divider"></li>
        <li><a href="Login.php" class="nav2">Login</a></li>
        <li class="divider"></li>
        <li><a href="signup.php" class="nav4">Sign Up</a></li>
        <li class="divider"></li>
        <li></li>
        <li class="divider"></li>
        <li></li>
        <li class="divider"></li>
        <li></li>
        <li class="divider"></li>
        <li><a href="contact.php" class="nav6">Contact Us</a></li>
        <li class="divider"></li>
        <li class="currencies"></li>
      </ul>
      <div class="right_menu_corner"></div>
    </div>
    <!-- end of menu tab -->
    <div class="crumb_navigation"></div>
    <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        <li class="odd"><a href="">Processors</a></li>
        <li class="even"><a href="">Motherboards</a></li>
        <li class="odd"><a href="">Desktops</a></li>
        <li class="even"><a href="">Laptops &amp; Notebooks</a></li>
        <li class="odd"><a href="">Hard Drive</a></li>
        <li class="even"><a href="">Web camera</a></li>
        <li class="odd"><a href="">Mouse</a></li>
        <li class="even"><a href="">Keyboard</a></li>
        <li class="odd"><a href="">Fan</a></li>
        <li class="even"><a href="">RAM</a></li>
        <li class="odd"><a href="">Monitor</a></li>
        <li class="even"><a href="">CPU</a></li>
      </ul>
      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title">Motorola 156 MX-VL</div>
        <div class="product_img"><a href=""><img src="images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="banner_adds"></div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar">Sign Up<span class="currencies">
        
      </span>As Admin</div>
      <div class="prod_box_big">
        <div class="top_prod_box_big"></div>
        <div class="center_prod_box_big">
          <div class="contact_form">
            <div class="form_row">
        <form id="form1" name="form1" method="post" action="">
        <label for="radio">User</label>
          <input type="radio" name="radio" id="radio" value="radio" onclick="location.href='signup.php'"/>
          <label for="radio2">Admin</label>
          <input type="radio" name="radio2" id="radio2" value="radio2" onclick="location.href='adminReg.php'" />
          <table width="322" >
            <tr>
              <td width="125" height="28">First Name</td>
              <td width="181"><label for="fname"></label>
              <input type="text" name="fname" id="fname" /></td>
            </tr>
            <tr>
              <td height="32">Last Name</td>
              <td><input type="text" name="lname" id="lname" /></td>
            </tr>
            <tr>
              <td height="36">Admin No</td>
              <td><input type="text" name="adminNo" id="adminNo" /></td>
            </tr>
            <tr>
              <td height="29">E-mail</td>
              <td><input type="text" name="email" id="email" /></td>
            </tr>
            <tr>
              <td height="26">Cell Number</td>
              <td><input type="text" name="cellNo" id="cellNo" /></td>
            </tr>
            <tr>
              <td height="31">Password</td>
              <td><input type="text" name="passwrd" id="passwrd" /></td>
            </tr>
            <tr>
              <td height="33">Verify Password</td>
              <td><input type="text" name="password" id="password" /></td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="submit" id="submit" value="Submit" /></td>
            </tr>
        </table>
          
<p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- end of center content -->
    <div class="right_content">
      <div class="title_box">What�s new</div>
      <div class="border_box">
        <div class="product_title">Motorola 156 MX-VL</div>
        <div class="product_img"><a href=""><img src="images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Manufacturers</div>
      <ul class="left_menu">
        <li class="odd"><a href="sony.php">Sony</a></li>
        <li class="even"><a href="samsung.php">Samsung</a></li>
        <li class="even"><a href="lg.php">LG</a></li>
        <li class="odd"><a href="apple.php">Apple</a></li>
        <li class="odd"><a href="philips.php">Phillips</a></li>
      </ul>
      <div class="banner_adds"> <a href=""><img src="images/bann1.jpg" alt="" border="0" /></a> </div>
    </div>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
  <div class="footer">
    <div class="left_footer"></div>
    <div class="center_footer"><br />
      <br />
      <img src="images/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="index.php">home</a> <a href="about.html">about</a><a href="contact.php">contact us</a> </div>
  </div>
</div>
<!-- end of main_container -->
<div align=center></div></body>
</html>
