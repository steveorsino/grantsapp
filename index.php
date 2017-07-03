<?php 
session_start();
$title = 'Dashboard';
include('header.php');
include('scripts/dbconnect.php');
if (!$_SESSION['userid']) header('Location: Login.php');
$SQL = "SELECT * FROM allGrant;";
$grants = $db->query($SQL);

echo '<h4>You are logged in as '. $_SESSION["userid"] .'</h4>';
?>

<div class="container">
    <div class="page-header">
      <h1>Welcome to the Grant Tracking portal of Broward College</h1>
    </div>
    <div class="table-responsive">
      <table class="table table-striped">
        <tr>
          <th>Grant ID</th>
          <th>Funder</th>
          <th>Grant Type</th>
          <th>Due Date</th>
          <th>Award</th>
          <th>Status</th>
        </tr>
        <?php foreach ($grants as $grant) { 
          echo '<tr>';
          echo '<td>' . $grant['grantID'] . '</td>';
          echo '<td>' . $grant['funder'] . '</td>';
          echo '<td>' . $grant['grantType'] . '</td>';
          echo '<td>' . $grant['dueDate'] . '</td>';
          echo '<td>' . $grant['possibleAward'] . '</td>';
          echo '<td>' . $grant['status'] . '</td>';
          echo '</tr>';
        } ?>
      </table>
    </div>
<a href="CreateGrant.php" target="_self">Create a Grant</a>
<a href="Login.php" target="_self">Login</a>




</div>


<?php 
include('footer.php');
?>