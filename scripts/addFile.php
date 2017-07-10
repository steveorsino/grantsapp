<?php
include('dbconnect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $grantID = filter_input(INPUT_POST, 'grantID');
    $role = filter_input(INPUT_POST, 'role');
    $fileName = $_FILES['newFile']['name'];
    
    if ($fileName != null){
        
        $tmp_name = $_FILES['newFile']['tmp_name'];
        $path = getcwd() . DIRECTORY_SEPARATOR . '..'. DIRECTORY_SEPARATOR . 'files';
        $name = $path . DIRECTORY_SEPARATOR . $_FILES['newFile']['name'];
        $success = move_uploaded_file($tmp_name, $name);
        
        $SQL = "
        INSERT INTO Files
        (grantID, role, fileName)
        VALUES
        ('$grantID', '$role', '$fileName');
        ";
        
        $success = $db->exec($SQL);
        
        if ($success) 
            setcookie('message', 'Update Successful', strtotime('+3 seconds'), '/');
    } else {
        setcookie('message', 'There was a problem updating your Grant', strtotime('+3 seconds'), '/');
    }
    
    header('Location: ../UpdateGrant.php?grantID=' . $grantID);
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $fileID = filter_input(INPUT_GET, 'fileID');
    $grantID = filter_input(INPUT_GET, 'grantID');
    
    $SQL = "
        DELETE FROM Files
        WHERE
        fileID = '$fileID';
    ";
    
    $success = $db->exec($SQL);
    
    if ($success) 
    setcookie('message', 'Update Successful', strtotime('+3 seconds'), '/');
    
    header('Location: ../UpdateGrant.php?grantID=' . "$grantID");
}   else {
    header('Location: ../index.php');
}


?>