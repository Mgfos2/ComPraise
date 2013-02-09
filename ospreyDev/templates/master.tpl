<link href="css/ospreDev.css" rel="stylesheet" type="text/css"/>
<script language="javascript" type="text/javascript" src="js/jquery1.js"></script>
<script language="javascript" type="text/javascript" src="js/cycle_plugin.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery-css-transform.js"></script>
<script language="javascript" type="text/javascript" src="js/rotate3Di.js"></script>
<script language="javascript" type="text/javascript" src="js/imgeffects2.js"></script>
<script language="javascript" type="text/javascript" src="js/search.js"></script>
<script language="javascript" type="text/javascript" src="js/user_notif.js"></script>
<div id="search">
		<form action="search_results.php" method="post">
		<span id="go_btn"><input type="submit" value="Go"></span>
		<input type="text" class="search" name="search_people" id="search_members"/>
		</form>
</div>

<div class ="notfication"></div>
<br><br><div id="menu">	   		
	<ul>
		<li class="current_page_item"><a href="index.php">Home</a></li>
		<li><a href="#">Join</a></li>
		<li><a href="#">Partners</a></li>
		<li><a href="#">Events</a></li>
		<li><a href="#">Media</a></li>
		<li><a href="#">Resources</a></li>
		<li><a href="#">Members Area</a></li>
	</ul>
</div>
{if $logged_in != 1}
  <center><ul class="sample_pics">
    <li><img src="img/ina.jpg" alt="jelly" width="580" height="255"/></li>
    <li><img src="img/kavita.png" alt="koala" width="580"height="255"/></li>
    <li><img src="img/Mergen.jpg" alt="tulips" width="580"height="255"/></li>
    <li><img src="img/Micah.jpg" alt="Micah" width="580"height="255"/></li>
  </ul></center>
 {include 'login.php'}
{elseif $user_info.admin == 1}
  <h2>Administrator Page</h2>
  <b>Hello, {$user_info.first_name}</b>
  <textarea rows="5" cols="70" placeholder="Administrator notifications"></textarea> 
  <br><b><a href="logout.php"</a>Log Out</b>  
{else}
  <br>
  <b>Hello,{$user_info.first_name}</b>
  <br><b><a href="logout.php"</a>Log Out</b>
  <br><img src="uploads/thumb/{$default_pic.album_id}/{$default_pic.image_id}.{$default_pic.image_ext}"/>
  <div id="edit_profile">
    <br><b><a href="edit_profile.php"</a>Edit Profile</b>
	<br><b><a href="image_page.php"</a>Images</b>
  </div>
  <div id="user_notifications"></div>
{/if}


