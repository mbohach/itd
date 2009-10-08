<?php
	class Error {
		function account($data) {
			$required_fields = array('first_name','last_name','address','city','state','zip','country','email','time_zone','username','password','confirm_password');
			foreach($data as $k=>$v) {
				if($data[$k] == "" && in_array($k,$required_fields)) {
					$errors[] = str_replace('_',' ',$k) . " is required";
				}
			}
			if($data['password'] != "" || $data['confirm_password'] != "") {
				if(strlen($data['password']) < 6) {
					$errors['password'] = "Your password must be at least 6 characters";
				}
				if($data['password'] != $data['confirm_password']) {
					$errors['password'] = "Passwords do not match";
				}
			}
			if($this->check_email($data['email'])) { $errors[] = "email address is already registered"; }
			if($this->check_username($data['username'])) { $errors[] = "username address is already registered"; }
			return $errors;
		}
		
		function user_update($data,$old_email) {
			$required = array('first_name','last_name','address','city','state','zip','country','email','time_zone');
			foreach($required as $k) {
				if($data[$k] == "") {
					$errors[$k] = $k. " is required";
				}
			}
			
			if($data['password'] != "" || $data['confirm_password'] != "") {
				if(strlen($data['password']) < 6) {
					$errors['password'] = "Your password must be at least 6 characters";
				}
				if($data['password'] != $data['confirm_password']) {
					$errors['password'] = "Passwords do not match";
				}
			}
			if($data['email'] != $old_email) {
				if($this->check_email($data['email'])) {
					$errors['email'] = "This email address is already registered with another account.";
				}
			}
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