<?php


function logged_in(){
return isset($_SESSION['id']);
}

function login_check($email, $password){
  $email = mysql_real_escape_string($email);
  $login_query = mysql_query("SELECT COUNT(id) as count , id FROM login WHERE email='$email' AND password = '$password'");
  return(mysql_result($login_query, 0) == 1) ? mysql_result($login_query, 0, 'id') : false;
  
}

function user_data(){
  $user_id = $_SESSION['id'];
  $userinfo_query = mysql_query("SELECT * FROM login WHERE id = $user_id");
  return(mysql_fetch_array($userinfo_query));
}

function user_register($email, $fname, $lname, $password){
  $email = mysql_real_escape_string($email);
  $fname = mysql_real_escape_string($fname);
  $lname = mysql_real_escape_string($lname);
  $query = mysql_query("INSERT INTO login (`first_name`,`last_name`, `email`,`password`) VALUES ('$fname', '$lname','$email','$password')");
  return mysql_insert_id();
}

function user_exists($email){
  $email = mysql_real_escape_string($email);
  $query = mysql_query("SELECT COUNT(`id`) FROM login WHERE email = '$email'");
  return (mysql_result($query, 0) == 1) ? true : false;
}

function update_profile($email, $first_name, $last_name, $id){
 
  $update_query = mysql_query("UPDATE login SET email = '$email', first_name = '$first_name', last_name = '$last_name' WHERE id = '$id'");
  header('Location:index.php');

}
function profile_data($user_id){
  $profileinfo_query = mysql_query("SELECT * FROM login WHERE id = $user_id");
  return(mysql_fetch_array($profileinfo_query));

}

function friend_request($profile_id){
  mysql_query("INSERT INTO notification(user_id, notification_type) VALUES ('$profile_id', 'friend_request')");

}
function retrieveNotification($user_id){
  $notification_query = mysql_query("SELECT * FROM notification WHERE user_id = '$user_id'");
  return(mysql_fetch_array($notification_query));
}

?>