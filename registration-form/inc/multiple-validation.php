<?php

if (!isset($_POST['terms'])) {
	$_POST['terms'] = '';
	$errors['terms'] = true;
}

if ($_POST['password'] != $_POST['confirmation']) {
    $_POST['confirmation'] = '';
    $errors['confirmation'] = true;
}

if (isset($_POST['dobday']) && isset($_POST['dobmonth']) && isset($_POST['dobyear'])) {
    try {
        $bdateString = sprintf('%02d-%02d-%4d', $_POST['dobday'], $_POST['dobmonth'], $_POST['dobyear']);
        $bdate = new DateTime($bdateString);
        $today =  new DateTime();
        $interval18 = new DateInterval('P18Y');
        $bdate18 = $today->sub($interval18);
        if ($bdate > $bdate18) {
            $errMsg = '<br><span class="warning">Must be at least 18 years old!</span>';
            $errors['dobyear'] = true;
        }
    } catch (Exception $e) {
        $errMsg = '<br><span class="warning">Please enter a valid date.</span>';
        $errors['dobyear'] = true;
        echo $e->getMessage();
        exit();
    }
}

$checkPattern = '/012|123|234|345|456|567|678|789|890|901/';

if (isset($_POST['password'])) {

	if (preg_match($checkPattern, $_POST['password'])) {
		$_POST['password'] = '';
		$errors['password'] = true; 
		$errPtrn = '<span class="warning">The password cannot contain 3 consecutive numbers.</span>';
	}
}

if (isset($_POST['email'])) {
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$_POST['email'] = '';
		$errors['email'] = true;
	}

}

?>