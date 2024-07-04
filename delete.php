<?php

$conn=mysqli_connect("localhost","root","","contact");
if(!$conn){
    echo "error";
}
else{
        echo "<br>";
        echo "connected successfully";
}
if (isset($_GET["name"])){
    $b=$_GET["name"];
    $sql="DELETE FROM `form` WHERE name='$b'";
    $a=mysqli_query($conn,$sql);
    if($a){
        echo "<br>";
        echo "delete";
    }
    else{
       echo "error";
    }
}
?>
