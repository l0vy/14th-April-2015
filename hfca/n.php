<?php
include('conn.php');
session_start();

    
$checkbox=[];
if (isset($_POST['chk'])) {

$checkbox = $_POST['chk'];
}
$a= count($checkbox);
$ar= [];
$x=0;



for($i=0; $i<$a; $i++)
{
switch ($checkbox[$i])
{
    
    case '1':
    
    $ar[$i]= 4;
    
    $x+= $ar[$i]; 
    break;
    
    case '2':
    
    $ar[$i]= 3;
    $x+= $ar[$i];
     
    break;
    
    
    case '3':
       
    $ar[$i]= 2;
    $x+= $ar[$i]; 
    break;
    
    case '4':
      
    $ar[$i]= 1;
    $x+= $ar[$i]; 
    break;
   
       
}
}
 echo "<b>Your Net score is</b>" .  $x;

?>