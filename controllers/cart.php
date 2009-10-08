<?php
	class Cart {
		function add($start,$end) {
			$_SESSION['item'][] = array('stamp_start' => $start, 'stamp_end' => $end);
		}
		function remove($id) {
			unset($_SESSION['item'][$id]);
		}
	}
?>