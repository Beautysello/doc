<?php
require("sql_commands.class.php");
class shopping_cart extends sql_commands
{
	private $total;
	private $obj;
	function cart($session)
	{
		$cart_info="";
		$this->obj=new sql_commands();
		foreach($session as $name =>$value)
		{
			if($value>0)
			{
				if(substr($name,0,5)=="cart_")
				{
					$id=substr($name,5,(strlen($name)-5));
					$cart_info.=$this->obj->shopping_cart($id)."<td>".$value."</td></tr>";					
					$this->total+= $this->obj->total_cost($id,$value);
		
				}
				
			}
		
	
		}
		return $cart_info;	
	}
	function total_cost_to_psy()
	{
		
		return ": R".$this->total;	
	}
	//return amount due
	function cost()
	{
		return $this->total;	
	}
	
	//invokes a method that captures the current order
	function order($id,$total_cost,$total)
	{
		return $this->obj->captureOrder($id,$total_cost,$total);
	}
	
	function order_items($id,$session)
	{
		$this->obj->order_item($id,$session);
	}
	
}





?>