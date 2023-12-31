<?php
session_start();
if (isset($_SESSION['Name']) && isset($_SESSION['Rank'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
        <title>The Office Doctor</title>
    </head>

    <body>

        <div class="container-fluid">
            <header>
                <div class="row flex-nonwrap justiy-content-between align-items-center bg-dark py-2 px-3">
                    <div class="col-4">
                        <h2 class="text-white"><a class="link-light link-underline link-underline-opacity-0"
                                href="index.php"> The Office Doctor </a>
                        </h2>
                    </div>

                    <div class="col-2 text-center">
                        <a href="doctors.php"
                            class="fs-5 link-opacity-100 link-opacity-100-hover link-offset-0 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Doctors</a>
                    </div>

                    <div class="col-2 text-center">
                        <a href="patients.php"
                            class="fs-5 link-opacity-100 link-opacity-100-hover link-offset-0 link-offset-1-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">Patients</a>
                    </div>

                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <button class="btn btn-outline-primary"><a
                                class="link-underline link-underline-opacity-0 text-white" href="login.php"> Log Out </a>
                        </button>
                        <h1 class="text-white">
                            <?php //echo $_SESSION['Rank'] ?>
                        </h1>
                    </div>
                </div>
            </header>
            <!-- nav bar -->

            <div class="row bg-primary px-2">
                <div class="col-6 text-center px-0 pb-3">
                    <h1 class="my-2">Upcoming Appointments</h1>
                    <?php include 'readappt.php'; ?>
                    <div class="col-12 border border-0 rounded-3 my-4">
                        <?php
                        $first = $result->fetch_assoc();
                        if ($first) {
                            $newdate = date_create($first["Date"]);
                            $newtime = date_create($first["Time"]);
                            ?>
                            <div class="col-6 card text-bg-dark mx-auto">
                                <div class="card-header">
                                    <h3>Next Appointment</h3>
                                </div>
                                <div class="card-body">
                                    <h4>
                                        <?= date_format($newdate, "D, d M Y") ?> at
                                        <?= date_format($newtime, "H:i") ?>
                                    </h4>
                                    <h4>
                                        <?= $first["Name"] ?>
                                        <?= $first["Surname"] ?>
                                    </h4>
                                    <h4> Dr.
                                        <?= $first["DName"] ?>
                                        <?= $first["DSurname"] ?>
                                    </h4>
                                </div>
                                <!-- <button class="btn btn-primary mb-2 mx-auto"> Submit </button> -->
                            </div>
                            <?php
                        } else {
                            echo '<h4>No upcoming appointments</h4>';
                        }
                        ?>
                    </div>
                    <!-- first appointment card -->

                    <div class="col-12">
                        <h2>Next Appointments</h2>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <?php
                            $second = $result->fetch_assoc();
                            if ($second) {
                                $newdate = date_create($second["Date"]);
                                $newtime = date_create($second["Time"]);
                                ?>
                                <div class="card text-bg-dark mx-auto">
                                    <div class="card-header">
                                        <h3>Next Appointment</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4>
                                            <?= date_format($newdate, "D, d M Y") ?> at
                                            <?= date_format($newtime, "H:i") ?>
                                        </h4>
                                        <h4>
                                            <?= $second["Name"] ?>
                                            <?= $second["Surname"] ?>
                                        </h4>
                                        <h4> Dr.
                                            <?= $second["DName"] ?>
                                            <?= $second["DSurname"] ?>
                                        </h4>
                                    </div>
                                </div>
                                <?php
                            } else {
                                echo '';
                            }
                            ?>
                        </div>
                        <!-- second appointment card -->

                        <div class="col-6">
                            <?php
                            $third = $result->fetch_assoc();
                            if ($third) {
                                $newdate = date_create($third["Date"]);
                                $newtime = date_create($third["Time"]);
                                ?>
                                <div class="card text-bg-dark mx-auto">
                                    <div class="card-header">
                                        <h3>Next Appointment</h3>
                                    </div>
                                    <div class="card-body">
                                        <h4>
                                            <?= date_format($newdate, "D, d M Y") ?> at
                                            <?= date_format($newtime, "H:i") ?>
                                        </h4>
                                        <h4>
                                            <?= $third["Name"] ?>
                                            <?= $third["Surname"] ?>
                                        </h4>
                                        <h4> Dr.
                                            <?= $third["DName"] ?>
                                            <?= $third["DSurname"] ?>
                                        </h4>
                                    </div>
                                </div>
                                <?php
                            } else {
                                echo '';
                            }
                            ?>
                        </div>
                        <!-- third appontment card -->
                    </div>
                </div>

                <div class="col-6 bg-subtle text-center">
                    <h1 class="my-2">Calendar</h1>

                    <div class="container-fluid mb-3">
                        <div class="row">
                            <h2>This Month</h2>
                        </div>
                        <table class="table rounded table-borderless table-hover table-light my-4">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Patient</th>
                                    <th>Dr</th>
                                    <th>
                                    <th>
                                </tr>
                            </thead>
                            <?php include 'readapptmnth.php'; ?>
                        </table>
                    </div>
                </div>
            </div>

            <!-- upcoming apt -->


            <div class="bg-light mt-1 rounded mb-3">
                <h3 class="text-center mt-3">Create a New Appointment</h3>

                <form class="row m-0" action="newappt.php" method="post">

                    <div class="col-2 mx-auto mb-2">
                        <label for="DateIn" class="form-label">Appt Date</label>
                        <input type="date" name="newdate" class="form-control">
                    </div>

                    <div class="col-2 mx-auto mb-2">
                        <label for="TimeIn" class="form-label">Appt Time</label>
                        <input type="time" name="newtime" class="form-control">
                    </div>

                    <div class="col-3 mb-2">
                        <label for="DrID" class="form-label">DoctorID</label>
                        <input type="text" name="newdocid" class="form-control" placeholder="Dr">
                    </div>

                    <div class="col-3 mb-2">
                        <label for="PatID" class="form-label"> PatientID</label>
                        <input type="text" name="newpatid" class="form-control" placeholder="Patient">
                    </div>

                    <div class="col-2 mb-2">
                        <label for="RecepID" class="form-label">ReceptionistID</label>
                        <input type="text" name="newrecid" class="form-control" placeholder="Recep">
                    </div>

                    <div class="col-auto mx-auto m-2">
                        <button class="btn btn-primary p-auto">Submit</button>
                    </div>

                </form>

            </div>
            <!-- new appt -->


            <?php
            if ($_SESSION['Rank'] === '2') {
                ?>
                <div class="col-12 bg-dark text-center text-primary my-3 rounded">
                    <h3 class="pt-2">Edit Receptionists</h3>
                    <table class="table table-borderless table-dark table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Rank</th>
                                <th>ID</th>
                            </tr>
                        </thead>
                        <?php
                        include 'read.php';
                        ?>
                    </table>
                </div>
                <!-- edit Receptionists -->

                <div class="bg-light mt-1 rounded mb-3 pb-2">
                    <h3 class="text-center mt-3">Add a Receptionist</h3>

                    <form class="row m-0" action="insert.php" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-3 mx-auto mb-2">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" name="newname" class="form-control">
                            </div>

                            <div class="col-3 mx-auto mb-2">
                                <label for="Surname" class="form-label">Surname</label>
                                <input type="text" name="newsurname" class="form-control">
                            </div>

                            <div class="col-2 mb-2">
                                <label for="Age" class="form-label">Age</label>
                                <input type="text" name="newage" class="form-control">
                            </div>

                            <div class="col-2 mb-2">
                                <label for="PatID" class="form-label">Gender</label>
                                <input type="text" name="newgender" class="form-control">
                            </div>

                            <div class="col-2 mb-2">
                                <label for="Email" class="form-label">Phone Nr</label>
                                <input type="text" name="newphone" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3 mx-auto mb-2">
                                <label for="Email" class="form-label">Email</label>
                                <input type="email" name="newmail" class="form-control">
                            </div>

                            <div class="col-3 mx-auto mb-2">
                                <label for="Password1" class="form-label">Password</label>
                                <input type="text" name="firstpass" class="form-control">
                            </div>

                            <div class="col-3 mb-2">
                                <label for="Password" class="form-label">Confirm Password</label>
                                <input type="password" name="newpass" class="form-control">
                            </div>

                            <div class="col-1 mb-2">
                                <label for="Rank" class="form-label">Rank</label>
                                <input type="text" name="newrank" class="form-control">
                            </div>

                            <div class="col-2 mb-2">
                                <label for="Image" class="form-label">Image</label>
                                <input type="file" name="newImage" class="form-control" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>

                        <div class="col-auto mx-auto m-2">
                            <button class="btn btn-primary p-auto">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- new receptionist -->

                <?php
            }
            ?>

        </div>

        </div>

    </body>

    </html>

    <?php
} else {
    header("Location: login.php");
    exit();
}
?>