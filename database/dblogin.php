<!DOCTYPE html>
<html>

    <body>

        <h2>Database Login Form</h2>

        <form method="POST">

            <input type="text" name="username" placeholder="Username"><br><br>

            <input type="password" name="password" placeholder="Password"><br><br>

            <input type="submit" value="Login">

        </form>

        <?php

        $conn = mysqli_connect("localhost","phpuser","password123","php");

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users
                    WHERE username='$username'
                    AND password='$password'";

            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){

                echo "<h3>Login Successful</h3>";

            } else {

                echo "<h3>Invalid Credentials</h3>";
            }
        }

        ?>

    </body>
</html>