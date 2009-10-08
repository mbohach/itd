<?php
	class Category {
		function all() {
			$categories = sql::select("*","categories"," order by title","id");
			return $categories;
		}
	}
?>