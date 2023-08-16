$(document).ready(function () {
  $("#firstname").on("input", function () {
    checkfirst();
  });
  $("#lastname").on("input", function () {
    checklast();
  });
  $("#email").on("input", function () {
    checkemail();
  });

  $("#Emergency_name").on("input", function () {
    checkemergencyname();
  });
  $("#location").on("input", function () {
    checklocation();
  });
  $("#Emergency_contact").on("input", function () {
    checkemergencycontact();
  });
  $("#relation").on("input", function () {
    checkrelation();
  });

  $("#submitbtn").click(function () {
    if (
      !checkfirst() &&
      !checklast() &&
      !checkemail() &&
      !checkemergencyname() &&
      !checklocation() &&
      !checkemergencycontact() &&
      !checkrelation()
    ) {
      console.log("er1");
      $("#message").html(
        `<div class="alert alert-warning">Please fill all required field</div>`
      );
    } else if (
      !checkfirst() ||
      !checklast() ||
      !checkemail() ||
      !checkemergencyname() ||
      !checklocation() ||
      !checkemergencycontact() ||
      !checkrelation()
    ) {
      $("#message").html(
        `<div class="alert alert-warning">Please fill all required field</div>`
      );
      console.log("er");
    } else {
      console.log("ok");
      $("#message").html("");
      var form = $("#myform")[0];
      var data = new FormData(form);
      $.ajax({
        type: "POST",
        url: "process.php",
        data: data,
        processData: false,
        contentType: false,
        cache: false,
        async: false,
        beforeSend: function () {
          $("#submitbtn").html('<i class="fa-solid fa-spinner fa-spin"></i>');
          $("#submitbtn").attr("disabled", true);
          $("#submitbtn").css({ "border-radius": "50%" });
        },

        success: function (data) {
          $("#message").html(data);
        },
        complete: function () {
          setTimeout(function () {
            $("#myform").trigger("reset");
            $("#submitbtn").html("Submit");
            $("#submitbtn").attr("disabled", false);
            $("#submitbtn").css({ "border-radius": "4px" });
          }, 50000);
        },
      });
    }
  });
});

function checkfirst() {
  var pattern = /^[A-Za-z0-9]+$/;
  var name = $("#firstname").val();
  var validname = pattern.test(name);
  if ($("#firstname").val().length < 2) {
    $("#firstname_err").html("firstname length is too short");
    return false;
  } else if (!validname) {
    $("#firstname_err").html("firstname should be a-z ,A-Z only");
    return false;
  } else {
    $("#firstname_err").html("");
    return true;
  }
}

function checklast() {
  var pattern = /^[A-Za-z0-9]+$/;
  var name = $("#lastname").val();
  var validname = pattern.test(name);
  if ($("#lastname").val().length < 2) {
    $("#lastname_err").html("lastname length is too short");
    return false;
  } else if (!validname) {
    $("#lastname_err").html("lastname should be a-z ,A-Z only");
    return false;
  } else {
    $("#lastname_err").html("");
    return true;
  }
}

function checkemail() {
  var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  var email = $("#email").val();
  var validemail = pattern1.test(email);
  if (email == "") {
    $("#email_err").html("required field");
    return false;
  } else if (!validemail) {
    $("#email_err").html("invalid email");
    return false;
  } else {
    $("#email_err").html("");
    return true;
  }
}

function checkemergencyname() {
  var pattern = /^[A-Za-z0-9]+$/;
  var name = $("#Emergency_name").val();
  var validname = pattern.test(name);
  if ($("#Emergency_name").val().length < 2) {
    $("#emergency_name_err").html("Name length is too short");
    return false;
  } else if (!validname) {
    $("#emergency_name_err").html("Name should be a-z ,A-Z only");
    return false;
  } else {
    $("#emergency_name_err").html("");
    return true;
  }
}

function checklocation() {
  var pattern = /^[A-Za-z0-9]+$/;
  var name = $("#location").val();
  var validname = pattern.test(name);
  if ($("#location").val().length < 2) {
    $("#location_err").html("Location must be required");
    return false;
  } else if (!validname) {
    $("#location_err").html("Name should be a-z ,A-Z only");
    return false;
  } else {
    $("#location_err").html("");
    return true;
  }
}

function checkemergencycontact() {
  if (!$.isNumeric($("#Emergency_contact").val())) {
    $("#Emergency_contact_err").html("only number is allowed");
    return false;
  } else if ($("#Emergency_contact").val().length != 10) {
    $("#Emergency_contact_err").html("10 digit required");
    return false;
  } else {
    $("#Emergency_contact_err").html("");
    return true;
  }
}

function checkrelation() {
  var pattern = /^[A-Za-z0-9]+$/;
  var name = $("#relation").val();
  var validname = pattern.test(name);
  if ($("#relation").val().length < 2) {
    $("#relation_err").html("Relation must be required");
    return false;
  } else if (!validname) {
    $("#relation_err").html("Relation should be a-z ,A-Z only");
    return false;
  } else {
    $("#relation_err").html("");
    return true;
  }
}

// function checkpass() {
//     console.log("sass");
//     var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
//     var pass = $('#password').val();
//     var validpass = pattern2.test(pass);

//     if (pass == "") {
//         $('#password_err').html('password can not be empty');
//         return false;
//     } else if (!validpass) {
//         $('#password_err').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
//         return false;

//     } else {
//         $('#password_err').html("");
//         return true;
//     }
// }
// function checkcpass() {
//     var pass = $('#password').val();
//     var cpass = $('#cpassword').val();
//     if (cpass == "") {
//         $('#cpassword_err').html('confirm password cannot be empty');
//         return false;
//     } else if (pass !== cpass) {
//         $('#cpassword_err').html('confirm password did not match');
//         return false;
//     } else {
//         $('#cpassword_err').html('');
//         return true;
//     }
// }

// function password_show_hide() {
//     console.log('ok');
//     var x = document.getElementById("password");
//     var show_eye = document.getElementById("show_eye");
//     var hide_eye = document.getElementById("hide_eye");
//     hide_eye.classList.remove("d-none");
//     if (x.type === "password") {
//         x.type = "text";
//         show_eye.style.display = "none";
//         hide_eye.style.display = "block";
//     } else {
//         x.type = "password";
//         show_eye.style.display = "block";
//         hide_eye.style.display = "none";
//     }
// }
