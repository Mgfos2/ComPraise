
<h3>Register</h3>
<?php
include 'init.php';
if (isset($_POST['register_email'], $_POST['reg_first'], $_POST['reg_last'], $_POST['reg_pass'], $_POST['re_reg_pass']))
{
  $reg_email = $_POST['register_email'];
  $reg_fname = $_POST['reg_first'];
  $reg_lname = $_POST['reg_last'];
  $reg_pass = $_POST['reg_pass'];
  $rereg_pass = $_POST['re_reg_pass'];
  
  $errors = array();
  
    if(empty($reg_email) || empty($reg_fname) || empty($reg_lname) || empty($reg_pass) || empty($rereg_pass)){
      $errors[] = 'All fields required';
	}
    else{
       if (filter_var($reg_email, FILTER_VALIDATE_EMAIL) === false){
	     $errors[] = 'Email address not valid';
	   }
	   if(strlen($reg_email) > 255 || strlen($reg_fname) > 20 || strlen($reg_lname) > 20){
	     $errors[] = 'One of more fields contains too many characters';
	   }
	   if(user_exists($reg_email)){
	     $errors[] = 'Sorry but this user already exists';
	   }
    }
    if(!empty($errors)){
	  foreach($errors as $error){
	    echo $error, '<br>';
	  }
	}
    else{
	  $register = user_register($reg_email, $reg_fname,$reg_lname, $reg_pass); 
	  
	  $_SESSION['user_id'] = $register;
	  header('Location: index.php');
	  exit();
	}
  
}
?>

<form action="" method="post">

  <p>Email:<br> <input type="email" name="register_email" size="35" maxlength="255" /></p>
  <p>First Name:<br> <input type="text" name="reg_first" maxlength="20" /></p>
  <p>Last Name:<br> <input type="text" name="reg_last" maxlength="20" /></p>
  <p>Password:<br> <input type="password" name="reg_pass" maxlength="40"/></p>
  <p>Confirm Password:<br> <input type="password" name="re_reg_pass" maxlength="40"/></p>
  <p><input type="submit" value="Register"/></p>
</form>

<?php



?>