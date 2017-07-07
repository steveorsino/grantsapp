<?php 
$title = 'New Pending Grant';
include('header.php');
?>

<div class="container">
    <div class="page-header">
      <h1>New Pending Grant</h1>
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
        <label for="piorpd">PI or PD information:</label>
        <input type="text" class="form-control" id="piorpd" name="piorpd">
      </div>
      <div class="form-group">
        <label for="projectOfficer">Project Officer:</label>
        <input type="text" class="form-control" id="projectOfficer" name="projectOfficer">
      </div>
      <div class="form-group">
        <label for="grantWriter">Grant Writer:</label>
        <input type="text" class="form-control" id="grantWriter" name="grantWriter">
      </div>
      <div class="form-group">
        <label for="indirectPercentage">Indirect Percentage:</label>
        <input type="number" class="form-control" id="indirectPercentage" name="indirectPercentage">
      </div>
      <div class="form-group">
        <label for="matchRequirement">Match Requirement:</label>
        <input type="number" class="form-control" id="matchRequirement" name="matchRequirement">
      </div>
      <div class="form-group">
        <label for="associatedDepartment">Grant Writer:</label>
        <input type="text" class="form-control" id="associatedDepartment" name="associatedDepartment">
      </div>
      <div class="form-group">
        <label for="campus">Campus:</label>
        <select class="form-control" id="campus" name="campus">
          <option>North</option>
          <option>South</option>
          <option>Central</option>
          <option>Downtown</option>
        </select>
      </div>
      <div class="form-group">
        <label for="partners">Grant Writer:</label>
        <input type="text" class="form-control" id="partners" name="partners">
      </div>
      <div class="form-group">
        <label for="hearBackDate">Date:</label>
        <input type="date" class="form-control" id="hearBackDate" name="hearBackDate">
      </div>
      
      <input type="hidden" name="status" value="Pending"/>
      <input type="submit" >
      
    </form>






</div>
<?php 
include('footer.php');
?>