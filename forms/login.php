<!DOCTYPE html>
<html>

<body>

<h2>Simple Login Form</h2>

<form method="POST">

<input type="text" name="username" placeholder="Username"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<input type="submit" value="Login">

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "1234"){

        echo "<h3>Login Successful</h3>";

    } else {

        echo "<h3>Invalid Credentials</h3>";
    }
}

?>

</body>
</html>