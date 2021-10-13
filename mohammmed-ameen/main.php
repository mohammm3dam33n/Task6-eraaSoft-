<h3 style="color:white;background-color:blue;padding:20px;text-align:center">Assignment3</h3>




<?php 
// Merge these arrays
// §  1 - $colors1 = [green , blue , red , yellow ]
// §  2 - $colors2 = [orange ,white ,black]
// $colors = [ blue , red , yellow , green] show alert if color is green -->
$colors1 = ["green" , "blue" , "red" , "yellow" ];
 for ($x = 1;$x<=count($colors1)-1; $x++) {
   print_r( "$colors1[$x] ");
}
print_r( "$colors1[0] ");



echo "<hr>";



// $colors = [ blue , red , yellow , green] show alert if color is green
for ($x = 0;$x<=count($colors1)-1; $x++) {
  if($colors1[$x]=="green"){
    echo "green";
  }}
?>



<!-- Get first element from this array [ blue , red , yellow , green] and put the value in h1 tag -->
<h1><?php echo $colors1[0] ?></h1>



<?php
// Change all names to upper case for this array
// $names = [ahmad ,ali , nader , Mohamad, nermeen,safaa]
// and put these names in h3
$names = ["ahmad","ali","nader","Mohamad","nermeen","safaa"];
for ($x = 1;$x<=count($names)-1; $x++) {
  ?><h3><?php echo strtoupper( $names[$x] )?></h3>
  <?php
}
?>



<?php
//  Get second element from last array and delete it from the array
// – then type all names in h3 again
echo"<hr>";
$names = ["ahmad","ali","nader","Mohamad","nermeen","safaa"];
for ($x = 1;$x<=count($names)-1; $x++) {
  if ($x == 2){
    continue;
}
?><h3><?php echo strtoupper( $names[$x] )?></h3>
<?php
}
echo"<hr>";
?>


<?php

$array1 = ["One","two","three","four"];
$array2=["five","six"];
$merge1=count($array1);
$merge2=count($array2);
// Push element to the end of the array
$result = array_merge($array2, $array1);
print_r($result);
echo"<br>";
print_r(array($array2,$array1));
echo"<br>";
// Loop method for merging two matrices
for($a=0;$a<$merge2;$a++){
  echo $array2[$a].",";
}
for($i=0;$i<$merge1;$i++){
  echo $array1[$i].",";
}
echo"<hr>";



// Put element at the first of the array
$result = array_merge($array1, $array2);
print_r($result);
echo"<br>";
print_r(array($array1,$array2));
echo"<br>";
// Loop method for merging two matrices
for($i=0;$i<$merge1;$i++){
  echo $array1[$i].",";
}
for($a=0;$a<$merge2;$a++){
echo $array2[$a].",";
}
echo"<hr>";
?>





<?php
// write a php program to check if the number is prime number  or not ( use rand  number )
// Modulus=> Remainder of $x divided by $y
 $num=13;
 for ($i = 2; $i < $num; $i++){
     if ($num % $i == 0) {
         echo 'NOT prime';
         break;
     }               
 }
 echo  "$num Is Prime";    

?>
