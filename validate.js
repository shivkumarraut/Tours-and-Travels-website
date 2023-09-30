function Login() {
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;

	if (email == "" || pass == "") {
		document.getElementById("errorMsg").innerHTML = "Please fill the required fields"
		return false;
	}

	else if (password.length < 8) {
		document.getElementById("errorMsg").innerHTML = "Your password must include atleast 8 characters"
		return false;
	}
	else {
		alert("Successfully logged in");
		window.location = "https://www.campuslife.co.in";
	}
}

function Register() {
	var email = document.getElementById("email").value;
	var phone = document.getElementById("name").value;
	var cop = document.getElementById("cop").value;
    var conp = document.getElementById("conp").value;
	
	if (email == "" || phone == "" || cop == "" conp == "") {
		document.getElementById("errorMsg").innerHTML = "Please fill the required fields"
		return false;
	}

	else if (password.length < 8) {
		document.getElementById("errorMsg").innerHTML = "Your password must include atleast 8 characters"
		return false;
	}
	else {
		alert("Successfully signed up");
		window.location="";;
	}
}
