<html>
    <head>
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
     // Check if the query is successful
     if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";

    } else{
        echo "ERROR: $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

   ?>
   </html>
</body>