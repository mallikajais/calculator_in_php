<?php
$firstnum=(float)$_POST['first'];
$secondnum=(float)$_POST['second'];
$operator=$_POST['op'];
$result="";
if(isset($_POST['first']) && isset($_POST['second']) && isset($_POST['op'])){
    switch ($operator) {
        case '+':
            $result=$firstnum+$secondnum;
            echo"$result";
          break;
        case '-':
            $result=$firstnum-$secondnum;
            echo"$result";
          break;
        case '%':
            $result=$firstnum%$secondnum;
            echo"$result";
          break;
        case '^':
            $result=$firstnum**$secondnum;
            echo"$result";
          break;
        case '*':
            if($result=="0"){
                $result=1;
            }
            $result=$firstnum*$secondnum;
            echo"$result";
          break;
        case '/':
            if($result=="0"){
                $result=1;
            }
            $result=$firstnum/$secondnum;
            echo"$result";
          break;
        default:
            echo"$result";
    }
} 
?>

