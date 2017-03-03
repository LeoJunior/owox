<?php
	
	
	function checkBrackets($str)
	{
		if(is_string($str)) {
			
			$str = preg_replace('#[^\[\]\(\)]#','',$str);  
			
			for($i = 0; $i < strlen($str); $i++) {
				
				$str = str_replace(array('[]', '()'), array('', ''), $str); 
				
			}
			 
	
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