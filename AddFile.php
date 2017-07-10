<?php 
$title = 'Add a file';
include('header.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $grantID = filter_input(INPUT_POST, 'grantID');
    
    $roles = $_POST['role'];
    $roles = explode(',', $roles);
    $SQL = "
      SELECT * FROM Files
      WHERE grantID = '$grantID';
    ";
    $files = $db->query($SQL);
}

?>



        
<div class="container">
    <div class="page-header">
      <h1>Add or Delete a File for Grant <?php echo $grantID ?></h1>
    </div>
    <ol>
        <?php foreach ($files as $file) { ?>
            <li><?php echo $file['fileName'];?><a href="scripts/addFile.php?fileID=<?php echo $file['fileID']; ?>&grantID=<?php echo $grantID; ?>" target="_self">Delete</a></li>
        <?php } ?>
    </ol>
   
   
   
    <form action="scripts/addFile.php" method="post" enctype="multipart/form-data">
      <p>Upload your file here</p>
      <input type="file" name="newFile">
      <input type="hidden" name="grantID" value="<?php echo $grantID; ?>">
      <p>Role</p>
      <select name="role">
          <?php for ($i = 0; $i < count($roles); $i++) { ?>
              <option><?php echo $roles[$i]; ?></option>
          <?php } ?>
      </select>
      
      <br>
      <input type="submit" value="Add File">
    </form>
    
    
    
    
    
    
    
</div>
<?php 
include('footer.php');
?>