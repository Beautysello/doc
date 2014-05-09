<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$searchtype=$_POST['type'];
$searchterm=$_POST['term'];

if(!$searchtype || !$searchterm)
{
	 echo 'fill all required fields';
	 exit;
	}
	
//$conn=new MySQLi('localhost','web1','nunu','scout_db');	

@ $conn=new MySQLi('localhost','project','project','electrostore');	
if(!$conn)
{
	 echo 'connection failed';
	 exit;
}

$query="select * from products where ".$searchtype." like '%".$searchterm."%'";
//echo $query;
$results=$conn->query($query);
if(!$results)
{
	 echo 'query submission failled';
	 exit;
}
$num=$results->num_rows;
for($y=0; $y<$num; $y++)
{
	 $rows=$results->fetch_assoc();
	 echo $y+1;
	 echo 'ID:'.$rows['pro_id']."<br />";
	 echo 'Name:'." ".$rows['pro_name']."<br/>";
	 echo 'Price:'." ".$rows['pro_price']."<br/>";
	 echo 'Details:'." ".$rows['pro_details']."<br/>";
	 echo 'Category:'." " .$rows['pro_cat']."<br/>";
	echo '=========='."<br/>";
	 
}

?>
	 


</body>
</html>