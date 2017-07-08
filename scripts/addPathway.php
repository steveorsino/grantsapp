<?php
include('dbconnect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pathwayName = filter_input(INPUT_POST, 'pathwayName');
    $grantID = filter_input(INPUT_POST, 'grantID');
    //$grantID = $_SERVER['grantID'];
    $SQL = "
        INSERT INTO Pathway
        (pathwayName, grantID)
        VALUES
        ('$pathwayName', '$grantID');
    ";
    
    $success = $db->exec($SQL);
    
    if ($success) 
    setcookie('message', 'Update Successful', strtotime('+3 seconds'), '/');
    
    header('Location: ../UpdateGrant.php?grantID=' . "$grantID");
    
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $pathwayID = filter_input(INPUT_GET, 'pathwayID');
    $grantID = filter_input(INPUT_GET, 'grantID');
    
    $SQL = "
        DELETE FROM Pathway
        WHERE
        pathwayID = '$pathwayID';
    ";
    
    $success = $db->exec($SQL);
    
    if ($success) 
    setcookie('message', 'Update Successful', strtotime('+3 seconds'), '/');
    
    header('Location: ../UpdateGrant.php?grantID=' . "$grantID");
}   else {
    header('Location: ../index.php');
}
    
?>