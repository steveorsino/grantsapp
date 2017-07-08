<?php 
$title = 'Add a pathway';
include('header.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $grantID = filter_input(INPUT_POST, 'grantID');

    $SQL = "
      SELECT * FROM Pathway
      WHERE grantID = '$grantID';
    ";
    $pathways = $db->query($SQL);
}

?>
<div class="container">
    <div class="page-header">
      <h1>Add or Delete a pathway for Grant <?php echo $grantID ?></h1>
    </div>
    <ol>
        <?php foreach ($pathways as $pathway) { ?>
            <li><?php echo $pathway['pathwayName'];?><a href="scripts/addPathway.php?pathwayID=<?php echo $pathway['pathwayID']; ?>&grantID=<?php echo $grantID; ?>" target="_self">Delete</a></li>
        <?php } ?>
    </ol>
    <form action="scripts/addPathway.php" method="post">
        <p>Add a pathway: <input type="text" name="pathwayName"><input type="hidden" name="grantID" value="<?php echo $grantID;?>"><input type="submit" value="Add">
    </form>
    
    
    
    
    
    
    
    
    
</div>
<?php 
include('footer.php');
?>