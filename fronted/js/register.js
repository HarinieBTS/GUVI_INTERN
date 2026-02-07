function register() {
    $.ajax({
        url: "../backend/register.php",
        type: "POST",
        data: {
            email: $("#email").val(),
            password: $("#password").val()
        },
        success: function(res) {
            if (res === "success") {
                alert("Registered Successfully");
                window.location = "login.html";
            } else {
                alert("Registration Failed");
            }
        }
    });
}
