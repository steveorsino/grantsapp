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
      <p>Due Date: <input type="date" name="dueDate" value="<?php echo $grant['funder'];?>"></p>
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
        </select>
      </p>
      <input type="hidden" name="grantID" value="<?php echo $grant['grantID'];?>">
      <input type="submit" value="Update">
      </form>
      
    <?php } else if ($grant['status'] == 'Development') { ?>
    <h3>Development Grant</h3>
    <?php } else if ($grant['status'] == 'Pending') { ?>
    
    <?php } else if ($grant['status'] == 'Post Award') {?>
    
    <?php } else if ($grant['status'] == 'Denied') { ?>
    
    <?php } else { ?>
    
    <?php } ?>
    
  <?php } ?>
  
  
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