<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset ="utf8">
	<title>Chat</title>
	<link rel="stylesheet" type="text/css" href="css/chat.css"/>
	<link href='http://fonts.googleapis.com/css?family=Merienda:700,400' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js"></script>
	 <script type="text/javascript">
		$(document).ready(function(){
			$('button').click(function(){
				var message = $('textarea').val();
				var old = $('#content').html();
				$('#content').html(old + '<p>' + message + '</p>');
			});
		});
	</script>
  </head>
 
  <body>
		<h1>Let's Chat</h2>
			<div id="content">
				<p>Here's our chat data</p>
			</div>
			<div id="message">
				<textarea rows="2"cols="34">Leave a comment</textarea>
				<button>post</button>
			</div>
  
  </body>


</html>