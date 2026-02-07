function login() {
    $.ajax({
        url: "../backend/login.php",
        type: "POST",
        data: {
            email: $("#email").val(),
            password: $("#password").val()
        },
        success: function(res) {
            if (res === "success") {
                localStorage.setItem("loggedIn", "true");
                window.location = "profile.html";
            } else {
                alert("Invalid Login");
            }
        }
    });
}
