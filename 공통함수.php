<?PHP
// common function

//#1. Cutting String.
function CutStr(&$tname,$slen)
{
	$strstr=strlen($tname); 
	$lenstr=$slen; 
	for($k=0; $k<$lenstr-1; $k++){ 
		if(ord(substr($tname, $k, 1))>127){
			$k++; 
		}
	} 
	if ($strstr > $lenstr){ 
		$tname=substr($tname, 0, $k).".."; //잘린문자열 뒤에 ..을 붙입니다.. 
	} else { 
		$tname=$tname;
	} 
	return $tname;
}

//#2. 

?>