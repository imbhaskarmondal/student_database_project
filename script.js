function validateForm() {
    var name = document.getElementById("name").value;
    var roll_no = document.getElementById("roll_no").value;
    var mobile = document.getElementById("mobile").value;
    var email = document.getElementById("email").value;

    var mobilePattern = /^[6-9]\d{9}$/;
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (!mobile.match(mobilePattern)) {
        alert("Invalid Mobile Number! It should be 10 digits.");
        return false;
    }

    if (!email.match(emailPattern)) {
        alert("Invalid Email Address!");
        return false;
    }

    return true;
}
