<?php
	
	$str = "[5] * 3 - ( 4 - 7 * [3-6])";
	
	function checkBrackets($str)
	{

		$str = preg_replace('#[^\[\]\(\)]#','',$str);  
		echo $str; 
		
		
		$brackets = array('(', '[',')', ']');
		$open_brackets = array('(', '[');
		$close_brackets = array(')', ']');

		$res = '';
		for($i = 0; $i < strlen($str); $i++) {
			if(in_array($str[$i], $open_brackets )) {
				$res[$i] = $str[$i];
			}
				
		}
		
		$res2 = '';
		for($i = 0; $i < strlen($str); $i++) {
			if(in_array($str[$i], $close_brackets)) {
				$res2[$i] = $str[$i];
			
			}
				
		}
		print_r($res);
		print_r($res2);
		
	}
	
	echo checkBrackets($str);
?>