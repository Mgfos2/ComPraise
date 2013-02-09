<?php
include 'init.php';

$result = $_POST['search_people'];
$result = strip_tags($result);
$result = trim($result);

$search_results = search_results($result);

foreach($search_results as $search_res){
echo '<br><a href="user_page.php?user_id='.$search_res['id'].'">'.$search_res['first_name']. '</a>';
}

?>