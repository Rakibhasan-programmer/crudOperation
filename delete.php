<?php

include "connect.php";
if(isset($_POST['deleteSend'])){
    $unique = $_POST['deleteSend'];

    $sql = "DELETE FROM crud WHERE id=$unique";
    $result = mysqli_query($con, $sql);
}

?>