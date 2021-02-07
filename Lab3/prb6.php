<?php 
  $n =array('1','2','3','4','5');
  echo "Original Array:";
  echo "<br>";
  foreach($n as $a){
      echo $a;
  }
  $position=3;
  $value= '$';
  array_splice($n,$position,0,$value);
  echo "<br>";
  echo "after inserting:";
  echo "<br>";

  foreach ($n as $a){
      echo $a;
  }
?>