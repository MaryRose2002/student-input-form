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

    <center>
    <h1><b>Student Input Form</b></h1>
    <form action="process.php" method="POST">
    <input type="hidden" name="userID" value="<?= $_SESSION['u_id'] ?>">
        
        <label
        for="first_name">First Name:</label>
        <input type="text" name="first" id="first_name"required><br><br>
        <label
        for="last_name">Last Name:</label>
        <input type="text" name="last" required><br><br>
        <label
        for="age">Year Level:</label>
        <input type="text"name="level" id="year_level"required><br><br>
        <label
        for="last_name">School:</label>
        <input type="text" name="school" required><br><br>
        <label
        for="course">Course:</label>
        <input type="text" name="course" id="course"required><br><br>
        <input type="submit"value="submit" name="create">
    </form>
</center>

</body>
</html>