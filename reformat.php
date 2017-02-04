<?php 
	/**
	 * Returns Capitalised lowercased string of $sentence without vowels
	 * 
	 * @params string $sentence
	 * return string | boolean
	 */
	function reformat($sentence) {
		if (empty($sentence) || !is_string($sentence)) {
			return false;
		}
		$formattedSentence = preg_replace('/\[a|e|i|o|u]/i','',$sentence);
		return ucfirst(strtolower($formattedSentence));
	}

	print reformat('liMeSHArp DeveLoper TEST');
?>