<?php

    include 'db.php';

    $Name = $_POST['newname'];
    $Surname = $_POST['newsurname'];
    $Age = $_POST['newage'];
    $Phone = $_POST['newphone'];
    $Email = $_POST['newmail'];
    $Gender = $_POST['newgender'];
    $Pass = $_POST['newpass'];
    $Rank = $_POST['newrank']; 
    $Image = $_POST['newimage'];


    $sql = "INSERT INTO Receptionists (DName, DSurname, Age, Gender, PhoneNr, Email, Password, Specialisation, RoomNr) VALUES ('$Name', '$Surname', 
    '$Age', '$Gender', '$Phone', '$Email', '$Pass', '$Rank', '$Image' )";

    $conn->query($sql);

    $conn->close();
    header("location: index.php");

?>