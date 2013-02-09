$(document).ready(function() {

  $("#micah_btn").click(function()
  {
    alert('hello'); 
    $.getJSON('micah_test.php', function(data){
	  //$('#micah_test').tmpl(data.value).appendTo('#container');
	  
    });
  });
});



