<?php
    session_start();
    include "db.php";

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $s_email = $_SESSION['email'];
        $s_password = $_SESSION['password'];

        $qry = "SELECT * FROM users WHERE email = '$email'";
        $res = mysqli_query($db_connection, $qry);
        $user = mysqli_fetch_assoc($res);
        $d_email = $user['email'];
        $d_pass = $user['password'];
        
        if ($email === $d_email && $password === $d_pass) {
            header("location:index.php");
        } else {
            echo "password do not match";
        }
    }

    include "./layout/header.php";
    include "./layout/navbar.php";
?>

<!-- login section starts -->
<div class="reglog-container login-container" id="login">
    <h1 class="heading">login here!</h1>

    <form action="./login.php" autocomplete="off" class="form" method="POST">
        <div class="email text-start">
            <label for="email" class="label">email</label><br>
            <input type="email" id="email" name="email">
        </div>

        <div class="password text-start">
            <label for="password" class="label">password</label><br>
            <input type="password" id="password" name="password">
        </div>

        <div class="submit d-flex align-items-center justify-content-between">
            <div class="ask text-start">
                <span class="span">Haven't Registered? <a href="./register.php">Register!</a></span>
            </div>

            <div class="sumbit-btn text-end"><button type="submit" name="submit" value="login" class="btn btn-primary">Login</button></div>
        </div>
    </form>
</div>
<!-- login section ends -->

<?php
    include "./layout/footer.php";
?>