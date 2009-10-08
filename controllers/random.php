<?php
	class Random {
		function event($category_id) {
			$event = sql::select("*","random"," where category_id = ".mysql_real_escape_string($category_id)." order by rand() limit 0,1","id");
			return @current($event);
		}
	}
?>