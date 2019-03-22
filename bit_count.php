<?php
// Conversion des demi-journées en bitfield
function to_bitfield($halfdays) {
  $bitfield = 0;
  foreach ($halfdays as $hd) {
    $bitfield |= 1 << $hd;
  }
  return $bitfield;
}

// Conversion des bitfield en demi-journées
function from_bitfield($bitfield) {
  $halfdays = array();
  for ($i = 0; $i < 14; $i++) {
    if ($bitfield & 1 == 1) {
      $halfdays[] = $i;
    }
    $bitfieldEtudiant >>= 1;
  }
  return $halfdays;
}

// conversion des dates du projet en bitfield
function dates_with_periods_to_bitfield($days) {
  $halfdays = array();

  foreach ($days as $day) {
    $halfday = (date('N', strtotime($day[0])) - 1) * 2;
    if ($day[1] === "PM") {
      $halfday++;
    }
    $halfdays[] = $halfday;
  }
  return to_bitfield($halfdays);
}

function matching($bitfield1, $bitfield2) {
  return from_bitfield($bitfield1 & $bitfield2);
}

/* $days = [["2019-03-25","AM"],["2019-03-26","PM"],["2019-03-27","AM"]];
$bitfield = dates_with_periods_to_bitfield($days);
print_r($days);
echo "<br>";
print_r($bitfield);
echo "<br>"; */
/* print_r(from_bitfield($bitfield));
echo "<br>";
print_r(matching(7, 51)); */
/* print_r(to_bitfield($bitfield));
echo "<br>"; */
?>
