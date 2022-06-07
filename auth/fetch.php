<?php

require_once "conn.php";


$sth = mysqli_query($conn,"SELECT * FROM reclamation");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
   $rows[] = $r;
}
print json_encode($rows);
?>