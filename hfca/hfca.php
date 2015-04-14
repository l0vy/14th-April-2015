<?php
include('conn.php');
session_start();

    
$checkbox=[];
if (isset($_POST['chk'])) {

$checkbox = $_POST['chk'];
}
$a= count($checkbox);
$ar= [];
$arr=[];



for($i=0; $i<$a; $i++)
{
switch ($checkbox[$i])
{
    
    case '1':
    
    $ar[$i]= 4;
    
    $arr[3]+= $ar[$i]; 
    break;
    
    case '2':
    
    $ar[$i]= 3;
    $arr[3]+= $ar[$i]; 
    break;
    
    
    case '3':
       
    $ar[$i]= 2;
    $arr[3]+= $ar[$i]; 
    break;
    
    case '4':
      
    $ar[$i]= 1;
    $arr[3]+= $ar[$i]; 
    break;
   
       
}
}
 echo "Your Net score is" .   $arr[3]; 

?>