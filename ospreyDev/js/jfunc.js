$('#u_name').keyup(function() {

	var name = $('#u_name').val();
	$.post('php/process_name.php', {name: name}, function(data) {
		$('#name_feedback').html(data);	
	} );

} );

$('#re-password').keyup(function(){ 
	var fname = $('#f_name').val();
	var lname = $('#l_name').val();
	var username = $('#username').val();
	var re_password = $('#re-password').val();
	var password = $('#password').val();
	var nsucc = "Your password does not match!";
	var succ = "";
	if(re_password != password)
	{
	   $('#val_password').html(nsucc);
	   $('#submit').attr("disabled", "disabled");
	}
	else
	{
		$('#val_password').html(succ);
		$('#submit').removeAttr("disabled");
	}
} );