<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  $str = strtoupper($str);
  	return $str;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
// NOTE to the checker - I'm not sure how many tests I am supposed to write.  I came up with a few different examples.
// I will definitely write more tests if we are expected to write more!!!

echo "\nTesting the string 'Roses are Red.'\n";
$str = "Roses are Red.";
$str1 = "ROSES ARE RED.";
if (uppercasesAllLetters($str) == $str1) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting the string 'noumenal'\n";
$str = "noumenal";
$str1 = "NOUMENAL";
if (uppercasesAllLetters($str) == $str1) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that the string 'An example of a number is 14,891'\n";
$str = "An example of a number is 14,891";
$str1 = "AN EXAMPLE OF A NUMBER IS 14,891";
if (uppercasesAllLetters($str) == $str1) {
	echo "Success";
} else{
	echo "Failed!";
}

?>
