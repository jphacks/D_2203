<?php


while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$itemに代入
	$result[$key] = $value;
}
arsort($result);

$a =0;
$num =0 ;

foreach($result as $k =>$v){
    if ($k=="勇者"){
        $a = $num + 1;
        break;
    }
    $num++;
   
}
print_r($result);
echo $a;  