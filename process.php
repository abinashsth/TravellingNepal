<?php
$conn = mysqli_connect("localhost", "root", "", "travelling");
if (!$conn) {
    echo "connection error";
}
$firstname = htmlspecialchars(trim($_POST['booking_first']));
$lastname = htmlspecialchars(trim($_POST['booking_first']));
$email = htmlspecialchars(trim($_POST['email']));
$emergencyname = htmlspecialchars(trim($_POST['emergency_full_name']));
$location = htmlspecialchars(trim($_POST['emergency_location']));
$contact = htmlspecialchars(trim($_POST['emergency_contact']));
$relation = htmlspecialchars(trim($_POST['emergency_relation']));

if (empty($firstname) || empty($lastname) || empty($email) || empty($emergencyname) || empty($location) || empty($contact) || empty($relation)) {
    echo '<div class="alert alert-success">please fill all required field</div>';
} else {
    // $sql = "insert into booking(username,email,password,mobile) values ('$name','$email','$pass','$mobile')";
    $sql = "INSERT INTO `booking`(`First Name`, `Last Name`, `Email Address`,  `Full Name`, `Location`, `Contact`, `Relationship`) VALUES 
                                ('$firstname', '$lastname', '$email' , '$emergencyname', '$location', '$contact', '$relation' )";

    if ($res = mysqli_query($conn, $sql)) {
        echo '<div class="alert alert-success">data successfully inserted</div>';
    } else {
        echo '<div class="alert alert-warning">data not inserted</div>';
    }
}