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
		$tname=substr($tname, 0, $k).".."; //�߸����ڿ� �ڿ� ..�� ���Դϴ�.. 
	} else { 
		$tname=$tname;
	} 
	return $tname;
}

//#2. 

?>