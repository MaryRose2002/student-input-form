<?php
include 'header.php';
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
                <a href="login.php">Login/Register</a>
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
        
                <form method="POST" action="process.php">
                    <legend> SIGN UP</legend>
                    <input type="text" name="full_name" placeholder="Fullname">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="confirm_pass" placeholder="Confirm Password">
                    <button name="register">Register</button>
                    <div class="back">
                        <a href="login.php">Back</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
</body>
</html>