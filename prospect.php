<?php 
$title = 'New Prospect';
include('header.php');
$isApplied = '';

?>
<div class="container">
    <div class="page-header">
      <h1>New Prospect</h1>
    </div>
    <form action="scripts/createGrant.php" method="post">
      <div class="form-group">
        <label for="funder">Funder:</label>
        <input type="text" class="form-control" id="funder" name="funder">
      </div>
      <div class="form-group">
        <label for="website">Website:</label>
        <input type="text" class="form-control" id="website" name="website">
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
       <textarea class="form-control" rows="5" id="description" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="grantType">Grant Type:</label>
        <select class="form-control" id="grantType" name="grantType">
          <option>Federal</option>
          <option>State</option>
          <option>Foundation</option>
          <option>Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="dueDate">Due Date:</label>
        <input type="date" class="form-control" id="dueDate" name="dueDate">
      </div>
      <div class="form-group">
        <label for="pathway">Pathway:</label>
        <input type="text" class="form-control" id="pathway" name="pathway">
      </div>
      <div class="form-group">
        <label for="potentialProject">Potential Project:</label>
        <input type="text" class="form-control" id="potentialProject" name="potentialProject">
      </div>
      <div class="form-group">
        <label for="possibleAward">Possible Award:</label>
        <input type="number" class="form-control" id="possibleAward" name="possibleAward">
      </div>
      <div class="form-group">
        <label for="numberAwardsGiven">Number of Awards Given:</label>
        <input type="number" class="form-control" id="numberAwardsGiven" name="numberAwardsGiven">
      </div>
      <input type="hidden" name="status" value="prospect"/>
      <input type="submit" >
      
    </form>
</div>
<?php 
include('footer.php');
?>