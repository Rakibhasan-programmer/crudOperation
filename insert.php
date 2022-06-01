<?php

include "connect.php";

extract($_POST);
if(isset($_POST["sendName"]) && isset($_POST["sendEmail"]) && isset($_POST["sendMobile"]) && isset($_POST["sendPlace"])){

    $sql = "INSERT INTO crud (name, email, mobile, place)
    VALUES ('$sendName', '$sendEmail', '$sendMobile', '$sendPlace')";
    $result = mysqli_query($con, $sql);
}


?>