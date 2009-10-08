<?php
	class Moment {
		function is_available($start,$end) {
			$moments = sql::select("*","moments"," where '".$start."' between stamp_start and stamp_end or '".$end."' between stamp_start and stamp_end","id");
			if(count($moments) > 0) {
				return false;
			} else {
				return true;
			}
		}
		
		function in_range($start,$end) {
			$moments = sql::select("*","moments"," where stamp_start between '".$start."' and '".$end."' or  stamp_end between '".$start."' and '".$end."'","id");
			if(count($moments) > 0) {
				return false;
			} else {
				return true;
			}
		}
	}
?>