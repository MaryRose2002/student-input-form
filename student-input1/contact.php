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
                <a href="contact.php" class="active">Contacts</a>
                <a href="about.php">About</a>
            </div>
            <div>
            <?php 
            if (isset($_SESSION['logged_in'])) { ?>
                
                    <a href="editprofile.php">Edit Profile</a>
                    <a href="process.php?logout">Logout</a>
           <?php }else{ ?>
                <a href="login.php">Login/Register</a>
            <?php } ?>
           </div>
        </nav>
    </header>

    <section>
        <div class="conmain">
            <div class="conimage">
                <img src="images/contactimage.png" alt="">
            </div>
            <div class="condetails">
                <div>
                    <h1>Contact Us:</h1>
                </div>
                <div>
                    <p><i class='bx bxs-envelope' ></i>studentinputform@gmail.com</p>
                </div>
                <div>
                    <p><i class='bx bxs-phone'></i>09098190851</p>
                </div>
                <div>
                   <p><i class='bx bxs-map'></i>CPSU Main, Brgy. Camingawan, Kabankalan City, Negros Occidental</p>
                </div>
            </div>
        </div>
    </section>


</body>
</html>