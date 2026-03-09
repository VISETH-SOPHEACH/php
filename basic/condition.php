<?php
if (1) {
  echo "1";
} else {
  echo "0";
}
  
  # ternary oparator
  # $variable = condittion ? 'true' : 'false'
$login = false ;
$status = $login ? 'Login' : '<script>alert(`login again`)</script>';
echo '<br>' . $status;
