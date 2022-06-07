<?php
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['num_ligne']) && isset($_POST['adresse']) && isset($_POST['password'])){
    // Include the necessary files
    require_once "conn.php";
    require_once "validate.php";
    // Call validate, pass form data as parameter and store the returned value
    $nom = validate($_POST['nom']);
    $prenom = validate($_POST['prenom']);
    $num_ligne = validate($_POST['num_ligne']);
    $adresse = validate($_POST['adresse']);
    $password = validate($_POST['password']);
    // Create the SQL query string. We'll use md5() function for data security. It calculates and returns the MD5 hash of a string
    $sql = "INSERT INTO client VALUES ('','$nom','$prenom','$num_ligne','$adresse', '$password')";
    // Execute the query. Print "success" on a successful execution, otherwise "failure".
    if(!$conn->query($sql)){
        echo "failure"; 
    }else{
        echo "success";   
    }
}
 else{
     echo "invalid";
 }
?>