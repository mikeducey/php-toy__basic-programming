<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.
function overten($var) {
  	return($var > 10);
}
function filterNumbers($arr) {
  return(overten($arr));
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting the array (1, 2, 3)\n";
$arr = array(1, 2, 3);
$arr1 = array(1, 2, 3);
if (filterNumbers($arr) == $arr1) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting the array (19, 2, 8, 22, 978)\n";
$arr = array(19, 2, 8, 22, 978);
$arr1 = array(2, 8);
if (filterNumbers($arr) == $arr1) {
  echo "Success!";
}
else{
  echo "Failed!";
}

echo "\n-------------------------------------------------------------------\n";

echo "\nTesting the array (-89.5, 45.987, .950, 3, 1.03)\n";
$arr = array(-89.5, .950, 3, 1.03);
$arr1 = array(2, 8);
if (filterNumbers($arr) == $arr1) {
  echo "Success!";
}
else{
  echo "Failed!";
}
?>