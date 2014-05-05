<?php 
	session_start();
	
	if(!$_SESSION['admin']==0)
	{
		header("Location: index.php");
		}
		else
		{
			$msg = "Welcome Username ".$_SESSION['username'];
		}
	
		if($_REQUEST['logout']==1)
		{
			session_destroy();
			header("Location: index.php");
			die();
		}
?>
<?php
@ $db = new mysqli('localhost', 'project', 'project','electrostore');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }
  $query = "select * from register where username='".$_SESSION['username']."'";		
	$result = $db->query($query);
	$num_results = $result->num_rows;
	if($num_results>0)
		{
			for($a=0; $a<$num_results; $a++)
			{
				$rows=$result->fetch_assoc();
				$Fname=$rows['Fname'];
				$Lname=$rows['Lname'];
				$username=$rows['username'];
				$email=$rows['email'];
				$cellN=$rows['cellN'];
				
				echo $Fname;
			}
			
	}
	
	?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="Style.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
<head>
<title>Electronix Store - Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div class="top_bar"></div>
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
        <li><a href="catalog.php" class="nav4">Catalog</a></li>
        <li class="divider"></li>
        <li></li>
        <li class="divider"></li>
        <li><a href="products.php" class="nav5">products</a></li>
        <li class="divider"></li>
        <li><a href="login.php" class="nav5">Logout</a><a href="contact.php" class="nav6">Contact Us</a></li>
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
        <li class="odd"></li>
      </ul>
      <div class="title_box">Special Products</div>
      <div class="border_box">
        <div class="product_title">Motorola 156 MX-VL</div>
        <div class="product_img"><a href=""><img src="images/laptop.png" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="border_box"></div>
      <div class="banner_adds"></div>
    </div>
    <!-- end of left content -->
    <div class="center_content">
      <div class="center_title_bar"></div>
      <div class="prod_box_big">
        <div class="center_prod_box_big">
          <p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
            <p>&nbsp;</p>
              <?php  echo $msg ; ?>
            <table width="255" height="211" border="1">
              <tr>
                <td width="116">First Name</td>
                <td width="123"><?php echo $Fname; ?></td>
              </tr>
              <tr>
                <td>Last Name</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Username</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>E-mail</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Cell Number</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>Password</td>
                <td>&nbsp;</td>
              </tr>
            </table>
            <p>&nbsp;</p>
          </form>
          
        </div>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>
    <!-- end of center content -->
    <div class="right_content">
      <div class="title_box">What’s new</div>
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
        <li class="even"><a href="apple.php">Apple</a></li>
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
      <img src="images/payment.gif" alt="" /> </div>
    <div class="right_footer"> <a href="index.php">home</a> about<a href="contact.php">contact us</a> </div>
  </div>
</div>
<!-- end of main_container -->
<div align=center></div></body>
</html>
