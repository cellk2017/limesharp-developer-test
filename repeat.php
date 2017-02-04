<?php

	/**
	 * Creates a new Array out of the repeated values of the $arr array  
	 *
	 * @params Array $arr, Integer $maxRepeat
	 * return array | boolean
	 */
	function repeat($arr, $maxCount = 3) {

		if (empty($arr) || !is_array($arr) 
				|| !is_numeric($maxCount)) {
			return false;
		}

		$repeatArr = [];
		for($count = 0; $count < $maxCount; $count++) {
			foreach($arr as $val) {
				array_push($repeatArr, $val);
			}
		}
		return $repeatArr;
	}

	print_r(repeat(['34','45','67']));
?>