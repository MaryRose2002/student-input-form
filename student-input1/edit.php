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

<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 600px">
    <div class="tab-pane fade show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0" style="width: 400px; height: 310px; font-size: .8rem;">
        <div class="shadow p-4 rounded-3">

            <?php
            $id = $_GET['id'];

            $getData = $conn->prepare("SELECT * FROM users WHERE id = ?");
            $getData->execute([$id]);
            foreach ($getData as $selects) { ?>
                <form method="POST" action="process.php">
                    <div id="inputs">
                        <div class="position-relative mb-3">
                            <div class="mb-1 row">
                                <div class="col-5 py-1">
                                    <label for="first" class="form-label "><b>First Name:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="hidden" class="form-control" name="id" value="<?= $selects['id'] ?>">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="first" name="first" value="<?= $selects['first_name'] ?>">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col-5 py-1">
                                    <label for="last" class="form-label "><b>Last Name:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="last" name="last" value="<?= $selects['last_name'] ?>">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col-5 py-1">
                                    <label for="course" class="form-label "><b>Year Level:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="course" name="level" value="<?= $selects['year_level'] ?>">
                                </div>
                            </div>
                            <div class="mb-1 row" id="input">
                                <div class="col-5 py-1">
                                    <label for="section" class="form-label "><b>School:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="section" name="school" value="<?= $selects['school'] ?>">
                                </div>
                            </div>
                            <div class="mb-1 row" id="input">
                                <div class="col-5 py-1">
                                    <label for="section" class="form-label "><b>Course:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="section" name="course" value="<?= $selects['course'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 form-check card-body text-center">
                        <button type="submit" class="btn btn-warning text-white" name="update">Update</button>
                    </div>
                </form>
            <?php } ?>

        </div>
    </div>
</div>

            </body>
            </html>