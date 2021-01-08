<?php
//foreach($array as $value)
$colors = ["red","green","blue","yeallow"];

foreach ($colors as $value) {
    echo "$value <br>";
}

foreach($colors as $key=>$val){
    echo $key.'_'.$val."<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>