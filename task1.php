<?php
	
	$str = "[5] * 3 - ( 4 - 7 * [3-6])";
	
	function checkBrackets($str)
	{
		if(is_string($str)) {
			
			$str = preg_replace('#[^\[\]\(\)]#','',$str);  
			echo $str."<br>"; 
			
			$str = preg_replace(array('#\[\]#', '#\(\)#'),'',$str);  
			
			if(!empty($str)) {
				
				return false;
				
			} else {
			
				return true;
				
			}
			
		} else {
			
			return false;
			
		}
		
	}
	
	checkBrackets($str);
?>