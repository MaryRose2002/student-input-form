<?php
include 'header.php';
?>

    <header>
        <nav>   
            <div>
                <h1>sIF</h1>
            </div>
            <div>
                <a href="index.php" class="active">Home</a>
                <a href="student.php">Student</a>
                <a href="contact.php">Contacts</a>
                <a href="about.php">About</a>
            </div>
            <div>
            <?php 
            if (isset($_SESSION['logged_in'])) { ?>
                
                    <a href="editprofile.php?update&id=<?=$_SESSION['u_id']?> ">Edit Profile</a>
                    <a href="process.php?logout">Logout</a>
           <?php }else{ ?>
                <a href="login.php">Login/Register</a>
            <?php } ?>
           </div>
        </nav>
    </header>

    <section>
        <div class="main">
            <div class="index_img">
                <img src="images/homepage.png">
            </div>
            <div class="page_title">
                <div>
                    <h1>
                        STUDENT INFORMATION
                    </h1>
                </div>
            </div>
        </div>
    </section>

</body>
</html>