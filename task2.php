<?php
	
	function luckyTickets($k)
	{
		
		if(is_int($k) && $k > 0) {
			
			$count = strlen($k);
			
			if($count % 2 == 0) {
				
				$half = $count / 2;
				$k = (string)$k;
				
				
				for($i = 0;$i < strlen($k);$i++) {
					$array[] = $k[$i];
				}
			
				$first_half = array_splice($array, $half);
				$second_half = array_splice($array, 0, $half);
				
				if(array_sum($first_half) == array_sum($second_half)) {
					
					return true;
					
				} else {
					
					return false;
					
				}
			
			} else {
				
				return false;
				
			}
		} else {
			
			return false;
			
		}
	}

?>