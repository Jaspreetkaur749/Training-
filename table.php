<html>
<head>
    <title>Form</title>
    <style>
        *{
    background-color: aqua;
    }
    table{
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>
<body>
    <body>
    <p><center><h1>Welcome To My Page</h1></center></p>
    <p><center><h2>Fill The Form</h2></center></p>
    <center><table border="1" cellspacing="0" cellpadding="2"></center>


<tr>
        <td> Name</td>
        <td>Choose a branch</td>
        <td>Choose a sem</td>
        <td> Password</td>
        <td>Contact no</td>
        <td>Email</td> 
        <td> Gender</td>
        <td>Date</td>
    <td>Delete</td>
    <td>Update</td>
    
    <?php 
    $conn=mysqli_connect("localhost","root","","contact");
    if(!$conn){
        echo "error";
    }
    else{
            echo "<br>";
            echo "connected successfully";
    } 
    $a="SELECT * FROM form";
    $b=mysqli_query($conn,$a);
    while($row=mysqli_fetch_assoc($b)){
    $name = $row['name'];
    $branch = $row['branch'];
    $sem = $row['sem'];
    $Password= $row['Password'];
    $Contact= $row['Contact'];
    $Email= $row['Email'];
    $gender= $row['gender'];
    $date= $row['date'];
    echo '<tr>
    <td>'.$name.'</td>
    <td>'.$branch.'</td>
    <td>'.$sem.'</td>
    <td>'.$Password.'</td>
    <td>'.$Contact.'</td>
    <td>'.$Email.'</td>
    <td>'.$gender.'</td>
    <td>'.$date.'</td>
    <td><a href="delete.php?name='.$name.'">delete</a></td>
    <td><a href="update.php?name='.$name.'">update</a></td>
    </tr>';
}
?>   
</table></center>
</form>
</body>
</html>