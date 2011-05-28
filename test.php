<html>
<head>
	<title>A simple testing page</title>
</head>
<body>

<!-- The php code used for testing --!>
<?php

$txt = "Hello World!";

// Gets the length of $txt
$txtLen = strlen($txt);

// Displays $txt and $txtLen
echo "<h1>" . $txt . "</h1><br>";
echo "<h3>Today's date is: " . date("m/d/y") . "</h3><br>";
echo "<br>";
echo "<h2>";
echo "The length of the above string is " . $txtLen . ".<br>";
echo "<br>";
echo "The second letter of the first string is: " . $txt[1] . "<br>";
echo "<br>";

// An associative array
$SomeArray = array("hey"=>"there", "how"=>"is it going?");
echo "hey " . $SomeArray['hey'] . "<br>";
echo "how " . $SomeArray['how'] . "<br>";
echo "<br>";

// Testing a function
echo "This is the string printed vertically:<br>";
echo "</h2>";

printVert($txt);

?>

<!-- php function declarations --!>
<?php


function printVert($str)
{
	// Get length of string
	$strLen = strlen($str);

	// Print it vertically
	echo "<h3>";
	for ($i = 0; $i < $strLen; $i++)
		echo $str[$i] . "<br>";
	echo "</h3>";
}

?>


</body>
</html>
