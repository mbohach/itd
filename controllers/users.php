<?php
	class User {
		function create($data) {
			$fields = array('first_name','last_name','address','address2','city','state','zip','country','email','username','password','created_on');
			$data['created_on'] = date('Y-m-d H:i:s');
			foreach($fields as $k) {
				if($k == 'password') { $data[$k] = md5($data[$k]); } // encrypt password
				$values[] = mysql_real_escape_string($data[$k]);
			}
			$uid = sql::insert('seekers',$fields,$values);
		}
	}
?>