<?php
include 'header.php';

if(isset($_POST['login'])){
    $email = $_POST['login_email'];
    $pass = $_POST['login_password'];

    $check = $conn->prepare("SELECT * FROM user_register WHERE email = ?");
    $check->execute([$email]);

    foreach($check as $value){
        if($value['email'] == $email && password_verify($pass, $value['password'])){
            $_SESSION['logged_in'] = true;
            $_SESSION['u_id'] = $value['id'];

            header("Location: index.php");
        }else{
            $msg = "Password incorrect!";
            header("Location: login.php?msg=$msg");
        }
    }
}

?>

    <header>
        <nav>   
            <div>
                <h1>sIF</h1>
            </div>
            <div>
                <a href="index.php">Home</a>
                <a href="student.php">Student</a>
                <a href="contact.php">Contacts</a>
                <a href="about.php">About</a>
            </div>
            <div>
                <a href="login.php" class="active">Login/Register</a>
            </div>
        </nav>
    </header>

    <section>   
        <div class="login">
            <div class="login_main">
                <?php if (isset($_GET['msg'])) { ?>

                <div class="message" role="alert">
                    <strong><?= $_GET['msg']; ?></strong>
                </div>

                <?php   } ?>
        
                <form method="POST" action="login.php">
                    <legend> SIGN IN</legend>
                    <input type="email" name="login_email" placeholder="Email">
                    <input type="password" name="login_password" placeholder="Password">
                    <button name="login">Sign In</button>
                    <h4 >Don't have an Account? <a href="register.php">Register Now!</a></h3>
                </form>
            </div>
        </div>
    </section>
</body>
</html>

