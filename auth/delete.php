<?php
 

 
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $id = $_POST['id'];
 

    require_once "conn.php";
 
    // connecting to db
    $conn = new DB_CONNECT();
    $cone = $conn -> conn;
 
    // mysql update row with matched pid
    $sql = "DELETE FROM reclamation WHERE id = $id";
 
    // check if row inserted or not
    if (mysqli_query($cone, $sql)) {
        echo " deleted successfully";
    } else {
        echo " deleted unsuccessfull";
    }
}
else {
    echo " id missing";
}

?>