<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  $sum = array_sum($arr);
  	return $sum;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting the sum of the array (1, 2, 3)\n";
$arr = array(1, 2, 3);
if (addUpNumbers($arr) == 6) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting the sum of the array (134, 56, 98)\n";
$arr = array(134, 56, 98);
if (addUpNumbers($arr) == 288) {
  echo "Success!";
}
else{
  echo "Failed!";
}

echo "\n-------------------------------------------------------------------\n";

echo "\nTesting the sum of the array (1.345, 5, 98.6)\n";
$arr = array(1.345, 5, 98.6);
if (addUpNumbers($arr) == 104.945) {
  echo "Success!";
}
else{
  echo "Failed!";
}

echo "\n-------------------------------------------------------------------\n";

echo "\nTesting the sum of the array (-9, -3986.7, 102)\n";
$arr = array(-9, -3986.7, 102);
if (addUpNumbers($arr) == -3893.7) {
  echo "Success!";
}
else{
  echo "Failed!";
}
?>
