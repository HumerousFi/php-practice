<!DOCTYPE html>
<html>
    <body>
        <h2>POST Method Example</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="submit">
        </form>

        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = htmlspecialchars($_POST['username']);
            echo "<h3>Hello $username</h3>";
        }
        ?>
        
    </body>
</html>