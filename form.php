<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $conn=mysqli_connect("localhost","root","","contact");
   if(!$conn){
       echo "error";
   }
   else{
           echo "<br>";
           echo "connected successfully";
   }
        $name = $_REQUEST['name'];
        $branch = $_REQUEST['branch'];
        $sem = $_REQUEST['sem'];
        $Password= $_REQUEST['Password'];
        $Contact= $_REQUEST['Contact'];
        $Email= $_REQUEST['Email'];
        $gender=$_REQUEST['gender'];
        $date= $_REQUEST['date'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO form VALUES ('$name','$branch','$sem','$Password','$Contact','$Email','$gender','$date')";

       $r=mysqli_query($conn, $sql);
       if($r){
        echo "inserted";
        echo "<br>";
    }
        // -- Close connection
        mysqli_close($conn);
?>

</body>
</html>    