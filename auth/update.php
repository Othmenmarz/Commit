<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
 

    require_once "conn.php";
 
    // connecting to db
    $conn = new DB_CONNECT();
    $cone = $conn -> con;
    
    //escpae the strings to be inserted to DB
    $escapedtitre = mysqli_real_escape_string($cone, $titre);
    $escapeddesc = mysqli_real_escape_string($cone, $description);
 
    
    // mysql update row with matched pid
    $sql = "UPDATE reclamation SET titre = '$escapedtitre', description = '$escapeddesc', updated_at=now() WHERE id = $id";
 
    // check if row inserted or not
    if (mysqli_query($cone, $sql)) {
        echo " updated successfully";
    } else {
        echo " update unsuccessfull";
    }
}
else {
    echo "Some field missing";
}

?>