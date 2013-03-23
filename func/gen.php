<?php

function gen_guid(){
	if(function_exists('com_create_guid') === true)
		return strtolower(strtr('{}-','',com_create_guid()));
	return sprintf(
		 '%04x%04x%04x%04x%04x%04x%04x%04x'
		,mt_rand(0,65535)
		,mt_rand(0,65535)
		,mt_rand(0,65535)
		,mt_rand(16384,20479)
		,mt_rand(32768,49151)
		,mt_rand(0,65535)
		,mt_rand(0,65535)
		,mt_rand(0,65535)
	);
}

function gen_handle($len=6){
	$str = '';
	for($i=1;$i<=$len;$i++){
		switch(mt_rand(0,5)){
		case 0:
		case 1:
		case 2:
			$str .= chr(mt_rand(48,57));
			break;
		case 3:
			$str .= chr(mt_rand(65,90));
			break;
		case 4:
		case 5:
		default:
			$str .= chr(mt_rand(97,122));
			break;
		}
	}
	return $str;
}
