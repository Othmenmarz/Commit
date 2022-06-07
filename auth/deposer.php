<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $titre = $_POST['titre'];
    $description = $_POST['description'];
  


    require_once 'conn.php';

    $sql = "INSERT INTO reclamation (titre,description) VALUES ('$titre', '$description')";

    if ( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

     
        mysqli_close($conn);

    } else {

        $result["success"] = "1";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}

?>