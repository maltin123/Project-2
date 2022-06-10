<?php
    session_start();
    include "db.php";
    
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $con_password = $_POST['con-password'];
        $con_password = md5($con_password);

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['con-password'] = $con_password;

        $qry ="INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        $res =mysqli_query($db_connection , $qry);
        if ($res) {
            header("location:login.php");
        }else {
            echo " register donot exict";
        };
    };

    include "./layout/header.php";
    include "./layout/navbar.php";
?>

<!-- register section starts -->
<div class="reglog-container" id="register">
    <h1 class="heading">register here!</h1>

    <form action="./register.php" autocomplete="off" class="form" method="post">
        <div class="name text-start">
            <label for="name" class="label">Name</label><br>
            <input type="text" id="name" name="name">
        </div>

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
                <span class="span">Already Registered? <a href="./login.php">Login</a></span>
            </div>

            <div class="sumbit-btn text-end">
                <button type="submit" name="submit" value="register" class="btn btn-primary">Register</button>
            </div>
        </div>
    </form>
</div>
<!-- register section ends -->

<?php
    include "./layout/footer.php";
?>