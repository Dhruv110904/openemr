<?

// this function is related to the interface/language module.

function xl($constant,$mode='r',$prepend='',$append='') {
	$lang_id=LANGUAGE;
	$sql="SELECT * FROM lang_definitions JOIN lang_constants ON lang_definitions.cons_id = lang_constants.cons_id WHERE lang_id='$lang_id' AND constant_name = '$constant' LIMIT 1";
	$res=SqlStatement($sql);
	$row=SqlFetchArray($res);
	$string=$row['definition'];
	if ($string=='') { $string="$constant"; }
	$string="$prepend"."$string"."$append";
	if ($mode=='r'){ 
		return $string;	
	} else {
		echo $string;
	}
}

?>