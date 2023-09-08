<?php

/*
$arr = array ('pencil','notebook','book');

echo $arr[0];

$arr[0] = 'pencil';
$arr[1] = 'notebook';
$arr[2] = 'book';

*/

//siruri asociative 
/*
$arr = array (
	'name' => 'Thomas',
	'tel' => '012 11 22 33'
 );
 echo $arr['name'];
$arr['name'] = 'Thomas';
$arr['tel'] ='012 11 22 33';

$arr = array (
	'name' => 'Thomas',
	'tel' => '012 11 22 33',
	'locations' => array('Barcelona' ,'Manchester')  
 );
if(array_search('Thomas',$arr)){
	echo  "<br>" . "Name exists";
	
} else {
	echo "<br>" . " Name don't exists";
}
 

echo "<br>" . $arr['locations'][0];

unset($arr['locations']);
var_dump($arr);
*/

$values = array (45,12,34,25,17,90,5,3,14,22,45,87,10,2);

sort($values);

echo  "Array after sort : ";

for($i=0 ; $i<count($values) ; $i++){
	echo  $values[$i] . " ";
}
//reverse sort 
rsort($values);
echo "<br>" . "Array after resort : ";
for($i=0;$i<sizeof($values);$i++){
	echo $values[$i] . " ";
}






?>