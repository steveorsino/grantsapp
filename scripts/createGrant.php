<?php
include('dbconnect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    $campus = filter_input(INPUT_POST, 'campus');
    $partners = filter_input(INPUT_POST, 'partners');
    $hearBackDate = filter_input(INPUT_POST, 'hearBackDate');
    $beginDate = filter_input(INPUT_POST, 'beginDate');
    $endDate = filter_input(INPUT_POST, 'endDate');
    $performanceMeasures = filter_input(INPUT_POST, 'performanceMeasures');
    $deliverables = filter_input(INPUT_POST, 'deliverables');
    $FYBudget = filter_input(INPUT_POST, 'FYBudget');
    $FYBeginDate = filter_input(INPUT_POST, 'FYBeginDate');
    $FYEndDate = filter_input(INPUT_POST, 'FYEndDate');
    $legalContractStatus = filter_input(INPUT_POST, 'legalContractStatus');
    $newOrContinuation = filter_input(INPUT_POST, 'newOrContinuation');
}

$SQL = 
"INSERT INTO allGrant
(funder, website, description, grantType, dueDate, potentialProject, possibleAward, NumberAwardsGiven, status, piorpd, 
projectOfficer, grantWriter, indirectPercentage, matchRequirement, associatedDepartment, campus, partners, hearBackDate,
beginDate, endDate, performanceMeasures, deliverables, FYBudget, FYBeginDate, FYEndDate, legalContractStatus, newOrContinuation)
VALUES
('$funder', '$website', '$description', '$grantType', '$dueDate', '$potentialProject', '$possibleAward', '$NumberAwardsGiven', '$status', '$piorpd', 
'$projectOfficer', '$grantWriter', '$indirectPercentage', '$matchRequirement', '$associatedDepartment', '$campus', '$partners', '$hearBackDate',
'$beginDate', '$endDate', '$performanceMeasures', '$deliverables', '$FYBudget', '$FYBeginDate', '$FYEndDate', '$legalContractStatus', '$newOrContinuation');";
 $success = $db->exec($SQL);
      if ($success < 1) {
        echo '<h4 class="error">There was an error inserting the item</h4>';
      } else {
        //redirect to screen page if successful
        header('Location: ../index.php');
      }
?>