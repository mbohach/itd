<?php
	class Error {
		function account($data) {
			$required_fields = array('first_name','last_name','address','city','state','zip','country','email','time_zone','username','password');
			foreach($data as $k=>$v) {
				if($data[$k] == "" && in_array($k,$required_fields)) {
					$errors[] = str_replace('_',' ',$k) . " is required";
				}
			}
			if($this->check_email($data['email'])) { $errors[] = "email address is already registered"; }
			if($this->check_username($data['username'])) { $errors[] = "username address is already registered"; }
			return $errors;
		}
		
		function check_login($username,$password) {
			$user = sql::select("*","users", " where username = '".$username."' and password = '".mysql_real_escape_string(md5($password))."'","id");
			if($user == "") {
				$errors['other'] = "Invalid login information.  Please try again.";
			} 
			return $errors;
		}
		
		function check_email($email) {
			$user = sql::select("*","users"," where email = '".mysql_real_escape_string($email)."'","id");
			if(count($user) > 0) {
				return true;
			} else {
				return false;
			}
		}
		function check_username($username) {
			$user = sql::select("*","users"," where username = '".mysql_real_escape_string($username)."'","id");
			if(count($user) > 0) {
				return true;
			} else {
				return false;
			}
		}
	}
?>