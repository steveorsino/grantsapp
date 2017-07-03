<?php 
session_start();
include('scripts/dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $myUserID = filter_input(INPUT_POST, 'userID');
    $myPassword = filter_input(INPUT_POST, 'password');
    
    $SQL = "SELECT * FROM user";
    $users = $db->query($SQL);
    $match = false;
    
    foreach ($users as $user) {
        if ($user['userID'] == $myUserID && $user['password'] == $myPassword) {
            $match = true;
            $_SESSION["userid"] = $myUserID;
            header('Location: index.php');
        }
    }
    if (!$match) {
        $err = 'No Account Found';
    }
}

$title = 'Log In';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
<div class="page-header">
  <h1>Broward College Grant Tracking Portal<small>Please Log In</small></h1>
</div>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4 login-form">
        <form action="Login.php" method="post">
            <p>userID: <input type="text" name="userID"></p>
            <p>password: <input type="password" name="password"></p>
            <input type="submit" value="Log In">
        </form>
    </div>
    <h3 class="text-center"><?php echo $err; ?></h3>
</div>






</div>
    
    
<?php include('footer.php'); ?>    