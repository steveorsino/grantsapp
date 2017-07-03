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
}

$SQL = 
"INSERT INTO allGrant
(funder, website, description, grantType, dueDate, potentialProject, possibleAward, NumberAwardsGiven)
VALUES
('$funder', '$website', '$description', '$grantType', '$dueDate', '$potentialProject', '$possibleAward', '$NumberAwardsGiven');";
 $success = $db->exec($SQL);
      if ($success < 1) {
        echo '<h4 class="error">There was an error inserting the item</h4>';
      } else {
        //redirect to screen page if successful
        header('Location: ../index.php');
      }
?>