<?php 
    include 'header.php';
    if(!isset($_SESSION['logged_in'])){
        header("location: login.php");
    }
?>

    <header>
        <nav>   
            <div>
                <h1>sIF</h1>
            </div>
            <div>
                <a href="index.php">Home</a>
                <a href="student.php" class="active">Student</a>
                <a href="contact.php">Contacts</a>
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
    <div class="search_main">
        <div class="student_search">
                <form action="" method="POST">
                    <legend>Search Student</legend>
                    <input type="text" name="NameSearch" value="<?php echo isset($_POST['NameSearch']) ? $_POST['NameSearch'] : '' ?>" placeholder="Search Name">
                    <input type="submit" name="search">
                </form>
            <?php
                include 'search.php'
                ?>
            </div>
        </div>

<div class="container-fluid d-flex justify-content-center">
    <div class="tab-content d-flex my-5 justify-content-center align-items-center" id="v-pills-tabContent" style="height: 300px;">

        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
            <div class="px-2 position-relative" style="font-size: 1rem;">

                <table class="table">
                    <thead align="center">
                        <tr>
                            <th scope="col" class="text-start px-md-4">First</th>
                            <th scope="col" class="px-md-4">Last</th>
                            <th scope="col" class="px-md-4">Year Level</th>
                            <th scope="col" class="px-md-4">School</th>
                            <th scope="col" class="px-md-4">Course</th>
                            <th scope="col" class="px-md-4">Action</th>
                        </tr>
                    </thead>
                    <tbody align="center">

                        <?php
                        $userID = $_SESSION['u_id'];

                        $select = $conn->prepare("SELECT * FROM users WHERE users_id = ?");
                        $select->execute([$userID]);

                        foreach ($select as $selects) { ?>
                            <tr>
                                <td class="px-md-4"><?= $selects['first_name'] ?></td>
                                <td class="px-md-4"><?= $selects['last_name'] ?></td>
                                <td class="px-md-4"><?= $selects['year_level'] ?></td>
                                <td class="px-md-4"><?= $selects['school'] ?></td>
                                <td class="px-md-4"><?= $selects['course'] ?></td>
                                <td class="px-md-1">
                                    <a class="text-decoration-none " href="edit.php?id=<?= $selects['id'] ?>" class="text-decoration-none">✏</a>
                                    |
                                    <a class="text-decoration-none" href="process.php?delete&id=<?= $selects['id'] ?>" class="text-decoration-none">❌</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="mb-3 form-check card-body text-center">
                <a href="create.php" type="button" class="btn btn-success text-white">Add</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>