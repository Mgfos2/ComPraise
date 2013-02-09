<?php

function search_results($string){

$search_results = mysql_query("SELECT id,first_name, last_name, email FROM login WHERE first_name LIKE '%$string%' OR last_name LIKE '%$string%'");
while($prof_row = mysql_fetch_assoc($search_results)){
  $profile[] = array(
		'id' => $prof_row['id'],
		'first_name' => $prof_row['first_name'],
		'last_name' => $prof_row['last_name'],
		'email' => $prof_row['email']
  
  );
}
return $profile;

}






?>