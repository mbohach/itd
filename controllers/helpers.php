<?php
	class Helper {
		function text($name,$html,$action,$password = false) {
			global $errors;
			if($action == "edit") {
				if($password) { $t = 'password'; $v = stripslashes($_POST['data'][$name]); } else { $t = 'text'; $v = stripslashes($_POST['data'][$name]);  }
				if($errors[$name] != "") { $e = ' <em>'.$errors[$name].'</em>'; } else { $e = ''; }
				$string = '<input type="'.$t.'" name="data['.$name.']" value="'.$v.'" '.$html.' />';//.$e;
			} 
			if($action == "preview" || $action == "view") {
				$string = stripslashes($_POST['data'][$name]) . '<input type="hidden" name="data['.$name.']" value="'.stripslashes($_POST['data'][$name]).'" />';
			}
			return $string;
		}
		
		function doTextArea($name,$html = '') {
			global $action;
			if($action == "edit") {
				$string = '<textarea name="data['.$name.']" '.$html.'>'.stripslashes($_POST['data'][$name]).'</textarea>';
			} 

			if($action == "preview" || $action == "view") {
				$string = stripslashes($_POST['data'][$name]) . '<input type="hidden" name="data['.$name.']" value="'.stripslashes($_POST['data'][$name]).'" />';
			}

			return $string;
		}

		function doHidden($name,$value) {
			global $action;
			if($action == "edit" || $action == "preview") {
				$string = '<input type="hidden" name="data['.$name.']" value="'.stripslashes($value).'" />';
			} 

			if($action == "view") {
				$string = stripslashes($value);
			}

			return $string;
		}

		function doCheckBox($name,$value,$html = '',$default = false) {
			global $action;
			$string ="";
			$selected="";
			if ($value == $_POST['data'][$name]) {
				$selected ="CHECKED";
			}
			if ($action != "edit")
				if ($value == $_POST['data'][$name])
					$string .= '<img src="/secure/ticketing/images/check-on.gif"><input type="hidden" name="data['.$name.']" value="'.$value.'" />';
				else
					$string .= '<img src="/secure/ticketing/images/check-off.gif">';		
			else 
				if($default) 
					$string .= '<input type="hidden" name="data['.$name.']" value="0" /> ';
				$string .= '<input type="checkbox" name="data['.$name.']" value="'.$value.'" '.$selected.' '.$html.'>';

			return $string;
		}


		function doRadio($name,$value,$html = '') {
			global $action;
			$string ="";
			$selected="";
			if ($value == $_POST['data'][$name]) {
				$selected ="CHECKED";
			}
			if ($action != "edit")
				if ($value == $_POST['data'][$name])
					$string .= '<img src="/secure/ticketing/images/radio-on.gif"><input type="hidden" name="data['.$name.']" value="'.$value.'" />';
				else
					$string .= '<img src="/secure/ticketing/images/radio-off.gif">';		
			else 
				$string .= '<input type="radio" name="data['.$name.']" value="'.$value.'" '.$selected.' '.$html.'>';

			return $string;
		}
		
		function doSelect($name,$values,$blank,$html='') {
			global $action;
			if($action == "edit") {
				$string = '<select name="data['.$name.']" '.$html.'>';
				if($blank)
					$string .= '<option value=""></option>';
				foreach($values as $k => $v) {
					if($k == $_POST['data'][$name]) {
						$selected = 'selected="selected"';
					} else {
						$selected = "";
					}
					$string .= '<option value="'.$k.'" '.$selected.'>'.$v.'</option>';
				}
				$string .= '</select>';
			}

			if($action == "preview" || $action == "view") {
				$string = $_POST['data'][$name] . '<input type="hidden" name="data['.$name.']" value="'.$_POST['data'][$name].'" />'; 
			}

			return $string;
		}
		
		function numSelect($name,$min,$max,$blank) {
			global $action;
			if($action == "edit") {
				$string = '<select name="data['.$name.']">';
				if($blank)
					$string .= '<option value=""></option>';
				for($x=$min; $x<=$max; $x++) {
					if($x == $_POST['data'][$name]) {
						$selected = 'selected="selected"';
					} else {
						$selected = "";
					}
					$string .= '<option value="'.$x.'" '.$selected.'>'.$x.'</option>';
				}
				$string .= '</select>';
			}

			if($action == "preview" || $action == "view") {
				$string = $_POST['data'][$name] . '<input type="hidden" name="data['.$name.']" value="'.$_POST['data'][$name].'" />'; 
			}

			return $string;
		}	
		function display_message($message,$class) {
			if($message != "") {
				echo '<div class="'.$class.'">'.$message.'</div>';
			}
		}
		
		function xml2ary(&$string) {
		    $parser = xml_parser_create();
		    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
		    xml_parse_into_struct($parser, $string, $vals, $index);
		    xml_parser_free($parser);

		    $mnary=array();
		    $ary=&$mnary;
		    foreach ($vals as $r) {
		        $t=$r['tag'];
		        if ($r['type']=='open') {
		            if (isset($ary[$t])) {
		                if (isset($ary[$t][0])) $ary[$t][]=array(); else $ary[$t]=array($ary[$t], array());
		                $cv=&$ary[$t][count($ary[$t])-1];
		            } else $cv=&$ary[$t];
		            if (isset($r['attributes'])) {foreach ($r['attributes'] as $k=>$v) $cv['_a'][$k]=$v;}
		            $cv['_c']=array();
		            $cv['_c']['_p']=&$ary;
		            $ary=&$cv['_c'];

		        } elseif ($r['type']=='complete') {
		            if (isset($ary[$t])) { // same as open
		                if (isset($ary[$t][0])) $ary[$t][]=array(); else $ary[$t]=array($ary[$t], array());
		                $cv=&$ary[$t][count($ary[$t])-1];
		            } else $cv=&$ary[$t];
		            if (isset($r['attributes'])) {foreach ($r['attributes'] as $k=>$v) $cv['_a'][$k]=$v;}
		            $cv['_v']=(isset($r['value']) ? $r['value'] : '');

		        } elseif ($r['type']=='close') {
		            $ary=&$ary['_p'];
		        }
		    }    

		    $this->_del_p($mnary);
		    return $mnary;
		}
		
		function _del_p(&$ary) {
		    foreach ($ary as $k=>$v) {
		        if ($k==='_p') unset($ary[$k]);
		        elseif (is_array($ary[$k])) $this->_del_p($ary[$k]);
		    }
		}
		
		function background_image($hour) {
			if($hour >= 21 || $hour <= 7) {
				return 'night';
			} elseif($hour > 7 && $hour <= 12) {
				return 'morning';
			} else {
				return 'day';
			}
		}
	}
?>