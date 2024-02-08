<?php
    include("conn.php");

//add user
if (isset($_POST['create'])) {
    $userID = $_POST['userID'];
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $level = $_POST['level'];
    $school = $_POST['school'];
    $course = $_POST['course'];

    $insert_student = $conn->prepare("INSERT INTO users(users_id, first_name,last_name,year_level,school,course) VALUES(?, ?, ?, ?, ?, ?)");
    $insert_student->execute([
        $userID,
        $fname,
        $lname,
        $level,
        $school,
        $course
    ]);

    $msg = "User Created!";
    header("Location: student.php?msg=$msg");
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $level = $_POST['level'];
    $school = $_POST['school'];
    $course = $_POST['course'];

    $updateStudent = $conn->prepare("UPDATE users SET first_name=?, last_name=?, year_level=?, school=?, course=? WHERE id = ?");
    $updateStudent->execute([$fname, $lname, $level, $school, $course, $id]);

    $msg = 'Successfully Updated!';
    header("Location: student.php?msg=$msg");
}

if (isset($_GET['delete'])) {
    $id = $_GET['id'];

    $delete = $conn->prepare("DELETE FROM users WHERE id=?");
    $delete->execute([$id]);

    header("Location: student.php");
    exit();
}

// register
if (isset($_POST['register'])) {
    $full_name = $_POST['full_name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['confirm_pass'];

    if ($password === $password2) {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $insertUser = $conn->prepare("INSERT INTO user_register(full_name, email, password) VALUES(?, ?, ?)");
        $insertUser->execute([
            $full_name,
            $email,
            $hash

        ]);

        $msg = "SignUp Complete!";
        header("location: register.php?msg=$msg");
    }else{
        $msg = "Incorrect Password";
        header("location: register.php?msg=$msg");
    }
}


// Logout
if(isset($_GET['logout'])){
    session_start();
    unset($_SESSION['logged_in']);
    unset($_SESSION['u_id']);

    header("location: login.php");
}

// Update User Profile
if (isset($_POST['updateProfile'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];


    $updateStudent = $conn->prepare("UPDATE user_register SET full_name=?, email=? WHERE id = ?");
    $updateStudent->execute([$fname, $email, $id]);

    $msg = 'Successfully Updated!';
    header("Location: index.php?msg=$msg");
    }

// Search Function
// if(isset($_POST['search'])) {
//     $name = $_POST['NameSearch'];
//     $user_name = $conn->prepare("SELECT * FROM users WHERE id = ?");
//     $user_name

    

// }
?>