<?php
include('dbconnect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $grantID = filter_input(INPUT_POST, 'grantID');
    $funder = filter_input(INPUT_POST, 'funder');
    $website = filter_input(INPUT_POST, 'website');
    $description = filter_input(INPUT_POST, 'description');
    $grantType = filter_input(INPUT_POST, 'grantType');
    $dueDate = filter_input(INPUT_POST, 'dueDate');
   // $pathway = filter_input(INPUT_POST, 'pathway'); NEED TO FIGURE THIS OUT
    $potentialProject = filter_input(INPUT_POST, 'potentialProject');
    $possibleAward = filter_input(INPUT_POST, 'possibleAward');
    $numberAwardsGiven = filter_input(INPUT_POST, 'numberAwardsGiven');
    $status = filter_input(INPUT_POST, 'status');
    $piorpd = filter_input(INPUT_POST, 'piorpd');
    $projectOfficer = filter_input(INPUT_POST, 'projectOfficer');
    $grantWriter = filter_input(INPUT_POST, 'grantWriter');
    $indirectPercentage = filter_input(INPUT_POST, 'indirectPercentage');
    $matchRequirement = filter_input(INPUT_POST, 'matchRequirement');
    $associatedDepartment = filter_input(INPUT_POST, 'associatedDepartment');
    
    $SQL = 
    "UPDATE allGrant
    SET 
    funder = '$funder',
    website = '$website',
    description = '$description',
    grantType = '$grantType',
    dueDate = '$dueDate',
    potentialProject = '$potentialProject',
    possibleAward = '$possibleAward',
    numberAwardsGiven = '$numberAwardsGiven',
    status = '$status',
    piorpd = '$piorpd',
    projectOfficer = '$projectOfficer',
    grantWriter = '$grantWriter',
    indirectPercentage = '$indirectPercentage',
    matchRequirement = '$matchRequirement',
    associatedDepartment = '$associatedDepartment'
    WHERE
    grantID = '$grantID';
    ";
    $success = $db->exec($SQL);
    
    if ($success) 
    setcookie('message', 'Update Successful', strtotime('+3 seconds'), '/');
    
    header('Location: ../UpdateGrant.php?grantID=' . "$grantID");
    
}


?>