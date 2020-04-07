<!DOCTYPE html>
<html>
<body>

<?php
echo "Question 1: <i>“Good morning, Dave,” said HAL. </i>";
?>
<br>

<?php
$radius = 10;
$answer = pi()*$radius*$radius;
echo "Question 2 : $answer";
?> 

<br>

<?php
$celFahr = -459.67;
$c = (5/9)*($celFahr - 32);
echo "Question 3: $c";
?>

<br>

<?php
$s1 = "  php is fun  ";
echo "Question 4:\t";
$trimmed = trim($s1);
echo "String has " . strlen($trimmed) . " characters.";
?>

<br>

<?php
$s1 = "WDWWLWWWLDDWDLL";
$s2 = "WWW";
$s3 = strpos($s1,$s2)+strlen($s2);
echo "Question 5: ".substr($s1,$s3,1);
?>

<br>

<?php
$s1 = "Able was I ere I saw Elba";
$s1 = strtoupper($s1);
$s2 = strrev($s1);
$pal = true;
echo "Question 6: ";
for ($i = 0; $i < strlen($s1); $i++){
	if (substr($s1,$i,1) != substr($s2,$i,1)){
    	$pal = false;
        break;
    }
}
if($pal == true){
echo "The string IS a palindrome";
}

else {
echo "The sring IS NOT a palindrome";
}
?>
<br>

<?php
$num = 7;
$iseven = true;
echo "Question 7: ";
if($num % 2 != 0){
$iseven = false;
}
else{
$iseven = true;
}
if($iseven == true){
echo $num . " is EVEN";
}
else{
echo $num . "is ODD";
}

?>
<br>
<?php
$year = date(L);
echo "Question 8: ";
if($year == 1){
echo "It IS a leap year";
}
else{
echo "It is NOT a leap year";
}

?>

</body>
</html>
