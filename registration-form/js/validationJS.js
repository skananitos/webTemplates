// Form validation
var ageField = document.formRegistration.dobyear;
var pwField = document.formRegistration.password;
var confField = document.formRegistration.confirmation;

var errAge = document.getElementById('errAge');
var errPW = document.getElementById('errPW');
var errPWcf = document.getElementById('errPWcf');

ageField.onchange = function() {
	var d = new Date();
    var n = d.getFullYear();
    var limit = n - 18;

	if (document.getElementById('dobyear').value > limit) {
		errAge.innerHTML = "Must be over 18 years old!";
	}
	else {
		errAge.innerHTML = "";
	}
}

pwField.onchange = function() {
	var pattern = '/012|123|234|345|456|567|678|789|890|901/';
	var password = document.getElementById('password').value.trim();

	if (password.match(pattern)) {
		errPW.innerHTML = "The password cannot contain 3 consecutive numbers.";
	}
	else {
		errPW.innerHTML = "";
	}
}


confField.onchange = function() {
	
	if (document.getElementById('password').value.trim() !== document.getElementById('confirmation').value.trim()) {
		errPWcf.innerHTML = "Please confirm your password.";
	}
	else {
		errPWcf.innerHTML = "";
	}
}
