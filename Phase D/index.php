<?php
require("adminInterface.class.php");
$obj=new admin();
$dis_prod=$obj->select_for_components();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Electro Store -Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">
  <div class="top_bar">
    <div class="languages"></div>
  </div>
  <div id="header">
    <div id="logo"> <a href=""><img src="images/logo.png" alt="" border="0" width="213" height="140" /></a> </div>
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
        <li><a href="catalog.php" class="nav4">Catalog</a></li>
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
        <li class="odd"></li>
      </ul>
      <div class="title_box">Search</div>
      <div class="border_box">
        <div class="product_title"></div>
        <div class="product_img">
          <p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="search.php">
            <table width="200" border="0">
              <tr>
                <td><p>Search Type </p>
                <p>
                  <label for="type"></label>
                  <select name="type" id="select">
                    <option>pro_name</option>
                    <option>pro_id</option>
                    <option>pro_price</option>
                    <option>pro_cat</option>
                  </select>
                </p></td>
              </tr>
              <tr>
                <td><p>Search Term </p>
                <p>
                  <label for="textfield"></label>
                  <input type="text" name="term" id="textfield" />
                </p></td>
              </tr>
              <tr>
                <td><input name="Submit" type="submit" id="Submit" value="Search " /></td>
              </tr>
            </table>
          </form>
<p>&nbsp;</p>
        </div>
        <div class="prod_price"></div>
      </div>
      <div class="banner_adds">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>
    <!-- end of left content -->
    
    <div class="center_content">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
<div class="center_title_bar">Latest Products</div>
      <div class="prod_box">
        <p>&nbsp;</p>
        <p><?php echo $dis_prod;?></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>
    s
    <!-- end of center content -->
    <div class="right_content">
      <div class="title_box">What’s new</div>
      <div class="border_box">
        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
        <div class="product_img"><a href="details.html"><img src="images/p2.gif" alt="" border="0" /></a></div>
        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
      </div>
      <div class="title_box">Manufacturers</div>
      <ul class="left_menu">
        <li class="odd"><a href="sony.php">Sony</a></li>
        <li class="even"><a href="samsung.php">Samsung</a></li>
        <li class="odd"><a href="lg.php">LG</a></li>
        <li class="even"><a href="apple.php">Apple</a></li>
        <li class="odd"><a href="">Phillips</a></li>
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
    <div class="right_footer"> <a href="index.php">home</a> <a href="">about</a><a href="contact.php">contacst us</a> </div>
  </div>
</div>
<!-- end of main_container -->
<div align=center></div></body>
</html>
