<?php
include('db.php'); // Include your database connection file

$email_error = $password_error = ''; // Define variables to avoid "Undefined variable" warnings

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $query = "SELECT * FROM login_dashboard WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

   

    mysqli_close($con);
}
?>
