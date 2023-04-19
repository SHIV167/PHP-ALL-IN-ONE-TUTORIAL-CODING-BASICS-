<?php 
echo '<h2>SWAPPING IN PHP</h2>';

/* $a=40;
$b=60;

//$a=$a+$b; //100
//$b=$a-$b; //40
//$a=$a-$b; //60

$c=$a; //40
$a=$b; //60
$b=$c; //40

echo "A is : $a <br/>";

echo "B is : $b "; */



?>

<?php    
//PHP TABLE
/* define('a', 2);   
for($i=1; $i<=10; $i++)   
{   
  echo $i*a;   
  echo '<br>';     
}  */ 
?>



<?php  
//PHP FACTORIAL
/* $num = 4;  
$factorial = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $factorial = $factorial * $x;  
}  
echo "Factorial of $num is $factorial";  */ 
?>


<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php   
    if($_POST){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br/><br/>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br/>";  
    }  
?>  
</body>  
</html>  



<?php  
/* $string = "JAVATPOINT";  
echo "Reverse string of $string is " .strrev ( $string );  */ 
?>


<?php  
/* $string = "JAVATPOINT";  
$length = strlen($string);  
for ($i=($length-1) ; $i >= 0 ; $i--)   
{  
  echo $string[$i];  
} */  
?> 


<?php  
/* Print fiboancci series upto 12 elements. */  
$num = 12;  
echo "<h3>Fibonacci series using recursive function:</h3>";  
echo "\n";  
/* Recursive function for fibonacci series. */  
function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
return 1;  
}  else {  
return (series($num-1) + series($num-2));  
}   
}  
/* Call Function. */  
for ($i = 0; $i < $num; $i++){  
echo series($i);  
echo "\n";  
}   
?>


<br/>

<?php  
for($i=0;$i<=5;$i++){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}  
for($i=4;$i>=1;$i--){  
for($k=5;$k>=$i;$k--){  
echo "  ";  
}  
for($j=1;$j<=$i;$j++){  
echo "*  ";  
}  
echo "<br>";  
}  
?>  


<?php
	
// PHP program to reverse
// digits of a number
/* $rev_num = 0;
$base_pos = 1; */

/* Recursive function to
reverse digits of num*/
/* function reversDigits($num) {
	global $rev_num;
	global $base_pos;
	if($num > 0) {
		reversDigits((int)($num / 10));
		$rev_num += ($num % 10) *
					$base_pos;
		$base_pos *= 10;
	}
	return $rev_num;
} */

// Driver Code
/* $num = 456213;
echo "Original number is :".$num;
echo "\r\n";
echo "Reverse of no. is ",
	reversDigits($num); */

?>


<?php
	
// Iterative function to
// reverse digits of num
function reversDigits($num) {
	$rev_num = 0;
	while($num > 1) {
		$rev_num = $rev_num * 10 + (int)$num % 10;
		$num = (int)$num / 10;
	}
	return $rev_num;
}

// Driver Code
$num = 456213;
echo "Original number is :".$num;
echo "\r\n";
echo "Reverse of no. is ", reversDigits($num);
?>



