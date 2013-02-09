<?php
class chat extends core{

	public function fetchMessages(){
		$this->query("
			SELECT 		chat.message,
						login.first_name,
						login.id
			FROM
						chat
			JOIN		login
			ON			chat.user_id = login.id
			ORDER BY	chat.dateofmessage
			DESC
		");
		return $this->rows();
	}
	
	public function throwMessage($user_id, $message){
		$this->query("
			INSERT INTO 	chat (user_id, message, dateofmessage)
			VALUES(".(int)$user_id.", '".$this->db->real_escape_string(htmlentities($message)) ."', UNIX_TIMESTAMP())	
		");
	
	}

}
?>