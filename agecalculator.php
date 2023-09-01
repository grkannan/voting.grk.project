<?php
function calculateAge($dob) {
  $dob = new DateTime($dob);
  $now = new DateTime();
  $interval = $dob->diff($now);
  return $interval->y;
}
?>