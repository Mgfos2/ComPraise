<?php
include 'init.php';

$user_info = user_data();


$user_email = ($user_info['email']);
$user_fname = ($user_info['first_name']);
$user_lname = ($user_info['last_name']);
$fav_color =  ($user_info['favorite_color']);

?>
<form action="" method="post">
  <p>Email:<br> <input type="email" name="edit_email" size="35" maxlength="255" value="<?php echo$user_email?>"/></p>
  <p>First Name:<br> <input type="text" name="edit_first" maxlength="20"  value="<?php echo $user_fname ?>"/></p>
  <p>Last Name:<br> <input type="text" name="edit_last" maxlength="20" value="<?php echo $user_lname?>"/></p>
  <p><input type="submit" name="submit value" value="Edit"/></p>
  <p><a href="index.php"><button type="button">Go Back</button></a></p>
</form> 
<?php
  if (isset($_POST['edit_email'], $_POST['edit_first'], $_POST['edit_last'])){
    $email = $_POST['edit_email'];
    $fname = $_POST['edit_first'];
    $lname = $_POST['edit_last'];
    $user_id = $_SESSION['id'];
    update_profile($email, $fname, $lname, $user_id);
  
  }
  
  
?>
   