<?php
function p($var){
	if(is_bool($var)){
		var_dump($var_dump);
	}elseif (is_null($var)) {
		var_dump(NULL);
	}else{
		echo "<pre>".print_r($var,true)."</pre>";
	}
}