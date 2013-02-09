var notification = {}
notification.getNotifications = function() {
	$.ajax({
		url: 'notification.php',
		type: 'POST',
		data: { method: 'fetch'},
		success: function(data) {
			$('#user_notifications').html(data);
		}
	});
}

notification.interval = setInterval(notification.getNotifications, 5000);
