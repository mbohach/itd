<?php
	class User {
		function my_info($username,$id) {
			$user = sql::select("*","users"," where username = '".mysql_real_escape_string($username)."' and md5(id)='".mysql_real_escape_string($id)."'","id");
			return @current($user);
		}
		
		function create($data) {
			$fields = array('first_name','last_name','address','address2','city','state','zip','country','email','username','password','created_on');
			$data['created_on'] = date('Y-m-d H:i:s');
			foreach($fields as $k) {
				if($k == 'password') { $data[$k] = md5($data[$k]); } // encrypt password
				$values[] = mysql_real_escape_string($data[$k]);
			}
			$uid = sql::insert('users',$fields,$values);
			
			return $uid;
		}
	
		function login($data) {
			$user = current(sql::select("*","users", " where username = '".$data['username']."' and password = '".mysql_real_escape_string(md5($data['password']))."'","id"));		
			$expires = time() + (3600*24*31); //expires in ~month
			setcookie("itd_id", md5($user->id),$expires,"/");
			setcookie("itd_user",$user->username,$expires,"/");
		}
		
		function logout() {
			$expires = time() - 3600;
			setcookie("itd_id", null,$expires,"/");
			setcookie("itd_user", null,$expires,"/");
			unset($_COOKIE);
		}
	}
?>