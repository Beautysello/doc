<?php
require("connect_to_mysql.class.php");
class sql_commands extends Connect
{
		private $db;
	//admin login	
	function login($adminNo,$password)		
	{
		$this->db=Connect::connect();
		
		$id=0;
		
		$query="select * from adminreg where adminNo='".$adminNo."' and passwrd='".$password."' LIMIT 1";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row==1)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$id=$rows['id'];
			}
			 if($id <0)
             {
				  echo'<p align="center"><br />You have entered the wrong password please re-enter</a>';
               
               }
              else
              {
	            echo'<p align="center">you have logged in successfully,</p>';	 
              
 
                 echo'<a href="indexAdmin.php">Welcome Admin! click to perfom some changes</a>';
	               
              }	
		}
		return $id;
	}
	//registering admin
	function addAdmin($name,$Lname,$adminNo,$email,$pass,$rpass,$cell)
	{
		$info;
		
		if(isset($name) && isset($Lname) && isset($adminNo) && isset($email) && isset($pass) && isset($rpass) && isset($cell))
		{
		    $this->db=Connect::connect();
			$query="insert into adminreg values(null,'$name','$Lname','$adminNo','$email','$pass','$rpass','$cell')";
		    $result=$this->db->query($query);
		    $msg=mysqli_insert_id($this->db);
			
		}
	}
	//registering user
	function addUser($name,$Lname,$username,$email,$pass,$rpass,$cell)
	{
		$info;
		
		if(isset($name) && isset($Lname) && isset($username) && isset($email) && isset($pass) && isset($rpass) && isset($cell))
		{
		    $this->db=Connect::connect();
			$query="insert into register values(null,'$name','$Lname','$username','$email','$pass','$rpass','$cell')";
		    $result=$this->db->query($query);
		    $msg=mysqli_insert_id($this->db);
			
		}
	}
	//user login
	
	function userlogin($username,$password)		
	{
		$this->db=Connect::connect();
		
		$id=0;
		
		$query="select * from register where username='".$username."' and password='".$password."' LIMIT 1";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row==1)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$id=$rows['id'];
			}
			 if($id <0)
             {
				  echo'<p align="center"><br />You have entered the wrong password please re-enter</a>';
               
               }
              else
              {
	            echo'<p align="center">you have logged in successfully,</p>';	 
              
 
                 echo'<a href="myAcc.php">view account </a>';
	               
              }	
			
		}
		return $id;
	}
	
	//adding products
	function shopping_cart($id)
	{
		$this->db=Connect::connect();
		$output="";
		$query="select * from products where pro_id=$id";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$product=$rows['pro_name'];
				$price=$rows['pro_price'];
				$details=$rows['pro_details'];
				$category=$rows['pro_cat'];
				//$subcategory=$rows['subcategory']; 
				
				$output.="<tr>";
				$output.="<td><a href=./product.php?id=$id>$product</a><br/><img src=\"images/$id.jpg\" alt=\"$product\" width=\"40\" height=\"52\" border=\"1\" </td>";
				$output.="<td>".$product."</td>";
				$output.="<td>".$price."</td>";
				$output.="<td>".$details."</td>";
				$output.="<td>".$category."</td>";
						
				
			}
		}
		return $output;
	}
	function total_cost($id,$value)
	{
		$this->db=Connect::connect();
		$output="";
		$subtotal="";
		$total="";
		$query="select * from products where pro_id=$id";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$price=$rows['pro_price'];
				$subtotal=$value*$price;
				
				 if($subtotal < 10000)
 {
	$discount = 0; 
 }
 else
 {
    $discount = $subtotal/100 * 0.1;	 
 }
 $netTotal = $subtotal - $discount;
 
 $netTotal = $netTotal *1.14; 
				
			}
			
		}
		return $netTotal;
	}


}


?>