<?php 
$title = 'Update a Grant';
include('header.php');
?>
<div class="container">
    <div class="page-header">
      <h1>Update an existing grant</h1>
    </div>
    
  <?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
    $grantID = filter_input(INPUT_GET, 'grantID');
    $SQL = 
    "SELECT * FROM allGrant
    WHERE grantID = '$grantID';";
    $theGrant = $db->query($SQL);
    
    foreach ($theGrant as $grant) { ?>
    
      <?php if ($grant['status'] == 'Prospect' || $grant['status'] == null) { ?>
      
        <h4>Grant number: <?php echo $grant['grantID'];?> </h4>
        <form action="scripts/updateGrant.php" method="post"target="_self">
        <p>Funder: <input type="text" name="funder" value="<?php echo  $grant['funder']; ?>"></p>
        <p>Website: <input type="text" name="website" value="<?php echo $grant['website'];?>"></p>
        <p>Description: <input type="text" name="description" value="<?php echo $grant['description'];?>"></p>
        <p>Grant Type: 
          <select name="grantType">
            <option value="Federal" <?php if ($grant['grantType'] == 'Federal') echo 'selected'; ?>>Federal</option>
            <option value="State" <?php if ($grant['grantType'] == 'State') echo 'selected'; ?>>State</option>
            <option value="Foundation" <?php if ($grant['grantType'] == 'Foundation') echo 'selected'; ?>>Foundation</option>
            <option value="Other" <?php if ($grant['grantType'] == 'Other') echo 'selected'; ?>>Other</option>
          </select></p>
        <p>Due Date: <input type="date" name="dueDate" value="<?php echo $grant['dueDate'];?>"></p>
        <p>Potential Project: <input type="text" name="potentialProject" value="<?php echo $grant['potentialProject']; ?>"></p>
        <p>Possible Award: <input type="number" name="possibleAward" value="<?php echo $grant['possibleAward']; ?>"></p>
        <p>Total Awards Given: <input type="number" name="numberAwardsGiven" value="<?php echo $grant['numberAwardsGiven']; ?>"></p>
        <p>Grant status
          <select name="status">
            <option value="Prospect" <?php if ($grant['status'] == 'Prospect') echo 'selected'; ?>>Prospect</option>
            <option value="Development" <?php if ($grant['status'] == 'Development') echo 'selected'; ?>>Development</option>
            <option value="Pending" <?php if ($grant['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="Post Award" <?php if ($grant['status'] == 'Post Award') echo 'selected'; ?>>Post Award</option>
            <option value="Denied" <?php if ($grant['status'] == 'Denied') echo 'selected'; ?>>Denied</option>
            <option value="Closed" <?php if ($grant['status'] == 'Closed') echo 'selected'; ?>>Closed</option>
          </select>
        </p>
        <input type="hidden" name="grantID" value="<?php echo $grant['grantID'];?>">
        <input type="submit" value="Update">
        </form>
      <?php if ($_COOKIE['message'] != null) {
        $message = $_COOKIE['message']; ?>
        <h4 class="success"><?php echo $message; ?></h4>
      <?php } else {
        echo '<h4>   </h4>';
      }
      ?>
      <?php } else if ($grant['status'] == 'Development') { ?>
      
       <h4>Grant number: <?php echo $grant['grantID'];?> </h4>
        <form action="scripts/updateGrant.php" method="post"target="_self">
        <p>Funder: <input type="text" name="funder" value="<?php echo  $grant['funder']; ?>"></p>
        <p>Website: <input type="text" name="website" value="<?php echo $grant['website'];?>"></p>
        <p>Description: <input type="text" name="description" value="<?php echo $grant['description'];?>"></p>
        <p>Grant Type: 
          <select name="grantType">
            <option value="Federal" <?php if ($grant['grantType'] == 'Federal') echo 'selected'; ?>>Federal</option>
            <option value="State" <?php if ($grant['grantType'] == 'State') echo 'selected'; ?>>State</option>
            <option value="Foundation" <?php if ($grant['grantType'] == 'Foundation') echo 'selected'; ?>>Foundation</option>
            <option value="Other" <?php if ($grant['grantType'] == 'Other') echo 'selected'; ?>>Other</option>
          </select></p>
        <p>Due Date: <input type="date" name="dueDate" value="<?php echo $grant['dueDate'];?>"></p>
        <p>Potential Project: <input type="text" name="potentialProject" value="<?php echo $grant['potentialProject']; ?>"></p>
        <p>Possible Award: <input type="number" name="possibleAward" value="<?php echo $grant['possibleAward']; ?>"></p>
        <p>Total Awards Given: <input type="number" name="numberAwardsGiven" value="<?php echo $grant['numberAwardsGiven']; ?>"></p>
        <p>Grant status
          <select name="status">
            <option value="Prospect" <?php if ($grant['status'] == 'Prospect') echo 'selected'; ?>>Prospect</option>
            <option value="Development" <?php if ($grant['status'] == 'Development') echo 'selected'; ?>>Development</option>
            <option value="Pending" <?php if ($grant['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="Post Award" <?php if ($grant['status'] == 'Post Award') echo 'selected'; ?>>Post Award</option>
            <option value="Denied" <?php if ($grant['status'] == 'Denied') echo 'selected'; ?>>Denied</option>
            <option value="Closed" <?php if ($grant['status'] == 'Closed') echo 'selected'; ?>>Closed</option>
          </select>
        </p>
        <p>PI or PD Information: <input type="text" name="piorpd" value="<?php echo $grant['piorpd']; ?>"></p>
        <p>Project Officer: <input type="text" name="projectOfficer" value="<?php echo $grant['projectOfficer']; ?>"></p>
        <p>Grant Writer: <input type="text" name="grantWriter" value="<?php echo $grant['grantWriter']; ?>"></p>
        <p>Indirect Percentage: <input type="number" name="indirectPercentage" value="<?php echo $grant['indirectPercentage']; ?>"></p>
        <p>Match Requirement: <input type="number" name="matchRequirement" value="<?php echo $grant['matchRequirement']; ?>"></p>
        <p>Associated Department: <input type="text" name="associatedDepartment" value="<?php echo $grant['associatedDepartment']; ?>"></p>
        <input type="hidden" name="grantID" value="<?php echo $grant['grantID'];?>">
        <input type="submit" value="Update">
        </form>
      <?php if ($_COOKIE['message'] != null) {
        $message = $_COOKIE['message']; ?>
        <h4 class="success"><?php echo $message; ?></h4>
      <?php } else {
        echo '<h4>   </h4>';
      }
      ?>
      
      <?php } else if ($grant['status'] == 'Pending') { ?>
      
      <h4>Grant number: <?php echo $grant['grantID'];?> </h4>
        <form action="scripts/updateGrant.php" method="post"target="_self">
        <p>Funder: <input type="text" name="funder" value="<?php echo  $grant['funder']; ?>"></p>
        <p>Website: <input type="text" name="website" value="<?php echo $grant['website'];?>"></p>
        <p>Description: <input type="text" name="description" value="<?php echo $grant['description'];?>"></p>
        <p>Grant Type: 
          <select name="grantType">
            <option value="Federal" <?php if ($grant['grantType'] == 'Federal') echo 'selected'; ?>>Federal</option>
            <option value="State" <?php if ($grant['grantType'] == 'State') echo 'selected'; ?>>State</option>
            <option value="Foundation" <?php if ($grant['grantType'] == 'Foundation') echo 'selected'; ?>>Foundation</option>
            <option value="Other" <?php if ($grant['grantType'] == 'Other') echo 'selected'; ?>>Other</option>
          </select></p>
        <p>Due Date: <input type="date" name="dueDate" value="<?php echo $grant['dueDate'];?>"></p>
        <p>Potential Project: <input type="text" name="potentialProject" value="<?php echo $grant['potentialProject']; ?>"></p>
        <p>Possible Award: <input type="number" name="possibleAward" value="<?php echo $grant['possibleAward']; ?>"></p>
        <p>Total Awards Given: <input type="number" name="numberAwardsGiven" value="<?php echo $grant['numberAwardsGiven']; ?>"></p>
        <p>Grant status
          <select name="status">
            <option value="Prospect" <?php if ($grant['status'] == 'Prospect') echo 'selected'; ?>>Prospect</option>
            <option value="Development" <?php if ($grant['status'] == 'Development') echo 'selected'; ?>>Development</option>
            <option value="Pending" <?php if ($grant['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="Post Award" <?php if ($grant['status'] == 'Post Award') echo 'selected'; ?>>Post Award</option>
            <option value="Denied" <?php if ($grant['status'] == 'Denied') echo 'selected'; ?>>Denied</option>
            <option value="Closed" <?php if ($grant['status'] == 'Closed') echo 'selected'; ?>>Closed</option>
          </select>
        </p>
        <p>PI or PD Information: <input type="text" name="piorpd" value="<?php echo $grant['piorpd']; ?>"></p>
        <p>Project Officer: <input type="text" name="projectOfficer" value="<?php echo $grant['projectOfficer']; ?>"></p>
        <p>Grant Writer: <input type="text" name="grantWriter" value="<?php echo $grant['grantWriter']; ?>"></p>
        <p>Indirect Percentage: <input type="number" name="indirectPercentage" value="<?php echo $grant['indirectPercentage']; ?>"></p>
        <p>Match Requirement: <input type="number" name="matchRequirement" value="<?php echo $grant['matchRequirement']; ?>"></p>
        <p>Associated Department: <input type="text" name="associatedDepartment" value="<?php echo $grant['associatedDepartment']; ?>"></p>
        <p>Campus
          <select name="campus">
            <option value="North" <?php if ($grant['campus'] == 'North') echo 'selected'; ?>>North</option>
            <option value="South" <?php if ($grant['campus'] == 'South') echo 'selected'; ?>>South</option>
            <option value="Central" <?php if ($grant['campus'] == 'Central') echo 'selected'; ?>>Central</option>
            <option value="Post Award" <?php if ($grant['campus'] == 'Downtown') echo 'selected'; ?>>Downtown</option>
          </select>
        </p>
        <p>Partners: <input type="text" name="partners" value="<?php echo $grant['partners']; ?>"></p>
        <p>Date to hear back: <input type="date" name="hearBackDate" value="<?php echo $grant['hearBackDate']; ?>"/></p>
        <input type="hidden" name="grantID" value="<?php echo $grant['grantID'];?>">
        <input type="submit" value="Update">
        </form>
      <?php if ($_COOKIE['message'] != null) {
        $message = $_COOKIE['message']; ?>
        <h4 class="success"><?php echo $message; ?></h4>
      <?php } else {
        echo '<h4>   </h4>';
      }
      ?>
      
      <?php } else if ($grant['status'] == 'Post Award') {?>
      
      <h4>Grant number: <?php echo $grant['grantID'];?> </h4>
        <form action="scripts/updateGrant.php" method="post"target="_self">
        <p>Funder: <input type="text" name="funder" value="<?php echo  $grant['funder']; ?>"></p>
        <p>Website: <input type="text" name="website" value="<?php echo $grant['website'];?>"></p>
        <p>Description: <input type="text" name="description" value="<?php echo $grant['description'];?>"></p>
        <p>Grant Type: 
          <select name="grantType">
            <option value="Federal" <?php if ($grant['grantType'] == 'Federal') echo 'selected'; ?>>Federal</option>
            <option value="State" <?php if ($grant['grantType'] == 'State') echo 'selected'; ?>>State</option>
            <option value="Foundation" <?php if ($grant['grantType'] == 'Foundation') echo 'selected'; ?>>Foundation</option>
            <option value="Other" <?php if ($grant['grantType'] == 'Other') echo 'selected'; ?>>Other</option>
          </select></p>
        <p>Begin Date: <input type="date" name="beginDate" value="<?php echo $grant['beginDate']; ?>"/></p>
        <p>End Date: <input type="date" name="endDate" value="<?php echo $grant['endDate'];?>"></p>
        <p>Potential Project: <input type="text" name="potentialProject" value="<?php echo $grant['potentialProject']; ?>"></p>
        <p>Possible Award: <input type="number" name="possibleAward" value="<?php echo $grant['possibleAward']; ?>"></p>
        <p>Total Awards Given: <input type="number" name="numberAwardsGiven" value="<?php echo $grant['numberAwardsGiven']; ?>"></p>
        <p>Grant status
          <select name="status">
            <option value="Prospect" <?php if ($grant['status'] == 'Prospect') echo 'selected'; ?>>Prospect</option>
            <option value="Development" <?php if ($grant['status'] == 'Development') echo 'selected'; ?>>Development</option>
            <option value="Pending" <?php if ($grant['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="Post Award" <?php if ($grant['status'] == 'Post Award') echo 'selected'; ?>>Post Award</option>
            <option value="Denied" <?php if ($grant['status'] == 'Denied') echo 'selected'; ?>>Denied</option>
            <option value="Closed" <?php if ($grant['status'] == 'Closed') echo 'selected'; ?>>Closed</option>
          </select>
        </p>
        <p>PI or PD Information: <input type="text" name="piorpd" value="<?php echo $grant['piorpd']; ?>"></p>
        <p>Project Officer: <input type="text" name="projectOfficer" value="<?php echo $grant['projectOfficer']; ?>"></p>
        <p>Grant Writer: <input type="text" name="grantWriter" value="<?php echo $grant['grantWriter']; ?>"></p>
        <p>Indirect Percentage: <input type="number" name="indirectPercentage" value="<?php echo $grant['indirectPercentage']; ?>"></p>
        <p>Match Requirement: <input type="number" name="matchRequirement" value="<?php echo $grant['matchRequirement']; ?>"></p>
        <p>Associated Department: <input type="text" name="associatedDepartment" value="<?php echo $grant['associatedDepartment']; ?>"></p>
        <p>Campus
          <select name="campus">
            <option value="North" <?php if ($grant['campus'] == 'North') echo 'selected'; ?>>North</option>
            <option value="South" <?php if ($grant['campus'] == 'South') echo 'selected'; ?>>South</option>
            <option value="Pending" <?php if ($grant['campus'] == 'Central') echo 'selected'; ?>>Central</option>
            <option value="Post Award" <?php if ($grant['campus'] == 'Downtown') echo 'selected'; ?>>Downtown</option>
          </select>
        </p>
        <p>Partners: <input type="text" name="partners" value="<?php echo $grant['partners']; ?>"></p>
        <p>Performance Measures: <input type="text" name="performanceMeasures" value="<?php echo $grant['performanceMeasures']; ?>"></p>
        <p>Deliverables: <input type="text" name="deliverables" value="<?php echo $grant['deliverables']; ?>"></p>
        <p>FY Budget: <input type="number" name="FYBudget" value="<?php echo $grant['FYBudget']; ?>"></p>
        <p>FY Begin Date: <input type="date" name="FYBeginDate" value="<?php echo $grant['FYBeginDate']; ?>"/></p>
        <p>FY End Date: <input type="date" name="FYEndDate" value="<?php echo $grant['FYEndDate'];?>"></p>
        <p>Status in Legal: <input type="text" name="legalContractStatus" value="<?php echo $grant['legalContractStatus']; ?>"></p>
        <p>New or Continuation
          <select name="newOrContinuation">
            <option value="New" <?php if ($grant['newOrContinuation'] == 'New') echo 'selected'; ?>>New</option>
            <option value="Continuation" <?php if ($grant['newOrContinuation'] == 'Continuation') echo 'selected'; ?>>Continuation</option>
          </select>
        </p>
        
        <input type="hidden" name="grantID" value="<?php echo $grant['grantID'];?>">
        <input type="submit" value="Update">
        </form>
      <?php if ($_COOKIE['message'] != null) {
        $message = $_COOKIE['message']; ?>
        <h4 class="success"><?php echo $message; ?></h4>
      <?php } else {
        echo '<h4>   </h4>';
      }
      ?>
      
      <?php } else if ($grant['status'] == 'Denied') { ?>
      
       <h4>Grant number: <?php echo $grant['grantID'];?> </h4>
        <form action="scripts/updateGrant.php" method="post"target="_self">
        <p>Funder: <input type="text" name="funder" value="<?php echo  $grant['funder']; ?>"></p>
        <p>Website: <input type="text" name="website" value="<?php echo $grant['website'];?>"></p>
        <p>Description: <input type="text" name="description" value="<?php echo $grant['description'];?>"></p>
        <p>Grant Type: 
          <select name="grantType">
            <option value="Federal" <?php if ($grant['grantType'] == 'Federal') echo 'selected'; ?>>Federal</option>
            <option value="State" <?php if ($grant['grantType'] == 'State') echo 'selected'; ?>>State</option>
            <option value="Foundation" <?php if ($grant['grantType'] == 'Foundation') echo 'selected'; ?>>Foundation</option>
            <option value="Other" <?php if ($grant['grantType'] == 'Other') echo 'selected'; ?>>Other</option>
          </select></p>
        <p>Due Date: <input type="date" name="dueDate" value="<?php echo $grant['dueDate'];?>"></p>
        <p>Potential Project: <input type="text" name="potentialProject" value="<?php echo $grant['potentialProject']; ?>"></p>
        <p>Possible Award: <input type="number" name="possibleAward" value="<?php echo $grant['possibleAward']; ?>"></p>
        <p>Total Awards Given: <input type="number" name="numberAwardsGiven" value="<?php echo $grant['numberAwardsGiven']; ?>"></p>
        <p>Grant status
          <select name="status">
            <option value="Prospect" <?php if ($grant['status'] == 'Prospect') echo 'selected'; ?>>Prospect</option>
            <option value="Development" <?php if ($grant['status'] == 'Development') echo 'selected'; ?>>Development</option>
            <option value="Pending" <?php if ($grant['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="Post Award" <?php if ($grant['status'] == 'Post Award') echo 'selected'; ?>>Post Award</option>
            <option value="Denied" <?php if ($grant['status'] == 'Denied') echo 'selected'; ?>>Denied</option>
            <option value="Closed" <?php if ($grant['status'] == 'Closed') echo 'selected'; ?>>Closed</option>
          </select>
        </p>
        <p>PI or PD Information: <input type="text" name="piorpd" value="<?php echo $grant['piorpd']; ?>"></p>
        <p>Project Officer: <input type="text" name="projectOfficer" value="<?php echo $grant['projectOfficer']; ?>"></p>
        <p>Grant Writer: <input type="text" name="grantWriter" value="<?php echo $grant['grantWriter']; ?>"></p>
        <p>Indirect Percentage: <input type="number" name="indirectPercentage" value="<?php echo $grant['indirectPercentage']; ?>"></p>
        <p>Match Requirement: <input type="number" name="matchRequirement" value="<?php echo $grant['matchRequirement']; ?>"></p>
        <p>Associated Department: <input type="text" name="associatedDepartment" value="<?php echo $grant['associatedDepartment']; ?>"></p>
        <p>Campus
          <select name="campus">
            <option value="North" <?php if ($grant['campus'] == 'North') echo 'selected'; ?>>North</option>
            <option value="South" <?php if ($grant['campus'] == 'South') echo 'selected'; ?>>South</option>
            <option value="Pending" <?php if ($grant['campus'] == 'Central') echo 'selected'; ?>>Central</option>
            <option value="Post Award" <?php if ($grant['campus'] == 'Downtown') echo 'selected'; ?>>Downtown</option>
          </select>
        </p>
        <p>Partners: <input type="text" name="partners" value="<?php echo $grant['partners']; ?>"></p>
        <p>Date to hear back: <input type="date" name="hearBackDate" value="<?php echo $grant['hearBackDate']; ?>"/></p>
        <input type="hidden" name="grantID" value="<?php echo $grant['grantID'];?>">
        <input type="submit" value="Update">
        </form>
      <?php if ($_COOKIE['message'] != null) {
        $message = $_COOKIE['message']; ?>
        <h4 class="success"><?php echo $message; ?></h4>
      <?php } else {
        echo '<h4>   </h4>';
      }
      ?>
      
      <?php } else { ?>
      
        <h4>Grant number: <?php echo $grant['grantID'];?> </h4>
        <form action="scripts/updateGrant.php" method="post"target="_self">
        <p>Funder: <input type="text" name="funder" value="<?php echo  $grant['funder']; ?>"></p>
        <p>Website: <input type="text" name="website" value="<?php echo $grant['website'];?>"></p>
        <p>Description: <input type="text" name="description" value="<?php echo $grant['description'];?>"></p>
        <p>Grant Type: 
          <select name="grantType">
            <option value="Federal" <?php if ($grant['grantType'] == 'Federal') echo 'selected'; ?>>Federal</option>
            <option value="State" <?php if ($grant['grantType'] == 'State') echo 'selected'; ?>>State</option>
            <option value="Foundation" <?php if ($grant['grantType'] == 'Foundation') echo 'selected'; ?>>Foundation</option>
            <option value="Other" <?php if ($grant['grantType'] == 'Other') echo 'selected'; ?>>Other</option>
          </select></p>
        <p>Grant status
          <select name="status">
            <option value="Prospect" <?php if ($grant['status'] == 'Prospect') echo 'selected'; ?>>Prospect</option>
            <option value="Development" <?php if ($grant['status'] == 'Development') echo 'selected'; ?>>Development</option>
            <option value="Pending" <?php if ($grant['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
            <option value="Post Award" <?php if ($grant['status'] == 'Post Award') echo 'selected'; ?>>Post Award</option>
            <option value="Denied" <?php if ($grant['status'] == 'Denied') echo 'selected'; ?>>Denied</option>
            <option value="Closed" <?php if ($grant['status'] == 'Closed') echo 'selected'; ?>>Closed</option>
          </select>
        </p>
        <input type="hidden" name="grantID" value="<?php echo $grant['grantID'];?>">
        <input type="submit" value="Update">
        </form>
      <?php if ($_COOKIE['message'] != null) {
        $message = $_COOKIE['message']; ?>
        <h4 class="success"><?php echo $message; ?></h4>
      <?php } else {
        echo '<h4>   </h4>';
      }
      ?>
      
      <?php } ?>
      
    <?php } ?>
    
  
  <?php } ?>
  
  <?php if (isset($_SESSION['grantID'])) { ?> 
    
   <?php $grantID = $_SESSION['grantID'] ?>
  
  <?php } ?>
    
    <div class="row">
      <form action="UpdateGrant.php" method="get" target="_self">
        <label for="grantID">Grant ID:</label>
        <input type="number" class="form-control" id="grantID" name="grantID">
        <input type="submit">
      </form>
    </div>





</div>
<?php 
include('footer.php');
?>