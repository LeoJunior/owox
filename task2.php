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
			
				$firstHalfArray = array_splice($array, $half);
				$secondHalfArray = array_splice($array, 0, $half);
				
				if(array_sum($firstHalfArray) == array_sum($secondHalfArray)) {
					
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