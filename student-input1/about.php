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
                <a href="about.php" class="active">About</a>
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
        <div class="aboutmain">
            <div class="about1">
                <div class="about1_img">
                    <img src="images/about.png">
                </div>
                <div class="about1_details">
                    <h1>ABOUT US</h1>
                    <p>Welcome to our Student Information System (SIS). The comprehensive solution for efficient management of student data. Our SIS is designed to streamline enhance communication, and empower educational institutions to make data-driven decisions.</p>
                </div>
            </div>
            <div class="about2">
                <div class="mission">
                    <h2>MISSION</h2>
                    <p>Our mission is to revolutionize the educational landscape by providing a cutting-edge Student Information System that streamlines data management, promotes transparency, and enhances collaboration. We are dedicated to supporting educational institutions in their quest for excellence by delivering an intuitive and comprehensive platform that simplifies administrative tasks, fosters data-driven decision-making, and ultimately contributes to the success of students and educators alike.</p>
                </div>
                <div class="vision">
                    <h2>VISSION</h2>
                    <p>We envision a future where educational institutions embrace a digital era of information management, leveraging our Student Information System as the cornerstone of this transformation. Our vision is to be the leading provider of innovative solutions that empower schools, colleges, and universities to create nurturing learning environments, where every student's journey is enriched through seamless access to accurate, real-time information. We aspire to be at the forefront of shaping a world where educational excellence is supported and enhanced by advanced information technologies.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>