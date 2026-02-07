$(document).ready(function () {
    $.get("../backend/getProfile.php", function (data) {
        if (data) {
            let user = JSON.parse(data);
            $("#age").val(user.age);
            $("#dob").val(user.dob);
            $("#contact").val(user.contact);
        }
    });
});

function updateProfile() {
    $.ajax({
        url: "../backend/updateProfile.php",
        type: "POST",
        data: {
            age: $("#age").val(),
            dob: $("#dob").val(),
            contact: $("#contact").val()
        },
        success: function () {
            alert("Profile Updated");
        }
    });
}
