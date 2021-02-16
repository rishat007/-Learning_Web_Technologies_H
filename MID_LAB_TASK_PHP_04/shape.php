<?php
  for ($i=0; $i < 4; $i++) { 
    for ($j=1; $j <=$i ; $j++) { 
      echo "*";
    }
    echo "\n";
  }
  for ($i=3; $i > 0; $i--) { 
    for ($j=1; $j <=$i ; $j++) { 
      echo "$j";
    }
    echo "\n";
  }
  for ($i=0; $i <6; $i++) { 
    for ($j=1; $j <$i ; $j++) { 
      echo chr(64+$j)." ";
    }
    echo "\n";
  }
?>