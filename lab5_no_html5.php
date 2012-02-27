<?php
$arr = array('a' => -1,'b' => -1,'c' => -1,'d' => -1,'e' => -1,
			'f' => -1,'g' => -1,'h' => -1,'i' => -1);
$arrChar = array('a','b','c','d','e','f','g','h','i');

for($i=0;$i<9;$i++){
	$ch1 = $arrChar[$i];
	if(isset($_GET[$ch1])){$arr[$ch1] = $_GET[$ch1];}
}


function redirect_to( $location = NULL ) {
	if ($location != NULL) {
		header("Location: {$location}");
		exit;
	}
}

if(!isset($_GET['a'])||!isset($_GET['b'])||!isset($_GET['c'])
||!isset($_GET['d'])||!isset($_GET['e'])||!isset($_GET['f'])
||!isset($_GET['g'])||!isset($_GET['h'])||!isset($_GET['i'])){
	redirect_to("lab5_no_html5.html?a=-1&b=-1&c=-1&d=-1" .
		 "&e=-1&f=-1&g=-1&h=-1&i=-1");
}else{
	$not_chosen = true;
	$k = 0;
	while($not_chosen && $k<9){
		$str2 = $arrChar[$k];
		if($arr[$str2]==-1){
			$arr[$str2]=0;
			$not_chosen = false;
		}
		$k++;
	}
	$str1 = "a=" . $arr['a'];
	for($i=1;$i<9;$i++){
		$ch2 = $arrChar[$i];
		$str1 .= "&" . $ch2 . "=" . $arr[$ch2];
	} 
	redirect_to("lab5_no_html5.html?" . $str1);
}
?>