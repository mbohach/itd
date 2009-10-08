<?php
	mysql_connect("127.0.01", "root", "") or die(mysql_error());
	mysql_select_db("itd") or die(mysql_error());

	class Sql {
		function select($fields,$table,$where='',$key) {
			$sql = "select ".$fields." from ".$table.$where;
			$result = mysql_query($sql) or die(sql::error(mysql_error()));
			if(mysql_num_rows($result) > 0) {
				while($row = mysql_fetch_object($result)) {
					if($key != "") { $k = $row->$key; $objects[$k] = $row; } else { $k = ""; $objects[] = $row; }	
				}
			}
			return $objects;
		}
		
		function error($error) {
			global $include_root;
			include($include_root.'templates/404.php');
		}
		
		function insert($table,$fields,$values) {
			foreach($values as $k => $v) { $values[$k] = addslashes($v); }
			$sql = "insert into ".$table." (`".implode("`,`",$fields)."`) values ('".implode("','",$values)."')";
			mysql_query($sql) or die(mysql_error());
			return mysql_insert_id();
		}
		
		function delete($table,$where) {
			$sql = "delete from ".$table.$where;
			mysql_query($sql);
		}
		
		function update($table,$values,$where) {
			foreach($values as $k => $v) { $parts[] = $k."='".mysql_real_escape_string($v)."'"; }
			$sql = "update ".$table." set ".implode(',',$parts).$where;
			mysql_query($sql) or die(mysql_error());
		}
	}
?>