<?php
// Conversion des demi-journées en bitfield
function to_bitfield($halfdays) {
  $bitfield = 0;
  foreach ($halfdays as $hd) {
    $bitfield |= 1 << $hd;
  }
  return $bitfield;
}

// Conversion des demi-journées en bitfield
function from_bitfield($bitfield) {
  $halfdays = array();
  for ($i = 0; $i < 14; $i++) {
    if ($bitfield & 1 == 1) {
      $halfdays[] = $i; 
    }
    $bitfield >>= 1;
  }
  return $halfdays;
}

function matching($bitfield1, $bitfield2) {
  return from_bitfield($bitfield1 & $bitfield2);
}

$values = [0,7,10,10];
$bitfield = to_bitfield($values);
print_r($values);
echo "<br>";
print_r($bitfield);
echo "<br>";
print_r(from_bitfield($bitfield));
echo "<br>";
print_r(matching(201, 51));
?>
