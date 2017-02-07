<?php
	
	
	function checkBrackets($str)
	{
		if(is_string($str)) {
			
			$str = preg_replace('#[^\[\]\(\)]#','',$str);  
			
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
	
?>