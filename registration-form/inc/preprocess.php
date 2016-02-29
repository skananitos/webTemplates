<?php
$suspect = false;
$pattern ='/Content-Type:|Bcc:|Cc:/i';

function isSuspect($val, $pattern, &$suspect) {
	if (is_array($val)){
		foreach ($val as $item) {
			isSuspect($item, $pattern, $suspect);
		}
	} else {
		if (preg_match($pattern, $val)) {
			$suspect = true;
		}
	}
}

isSuspect($_POST, $pattern, $suspect);

if (!$suspect) {
	foreach ($_POST as $key => $value) {
		$temp = is_array($value) ? $value : trim ($value);
		if (empty ($temp) && in_array($key, $required)) {
			$missing[] = $key;
			$$key = '';
		} elseif (in_array($key, $expected)) {
			$$key = $temp;			
		}
	}

}

?>