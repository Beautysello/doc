<?php
require("sql_scripts.class.php");
class admin extends sql_commands
{
	
	function check($username,$password)
	{
		$id;
		if(isset($username)&&isset($password))
		{
			$id= sql_commands::login($username,$password);
		}
		
		return $id;
	}


}
?>