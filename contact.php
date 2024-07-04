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
<form action="connection.php" method="post">
<table cellpadding="5"><center>

<tr>
<td> Name:</td>
<td><input text="text" name="name"></td>
        </tr>
        <tr>
        <td>Choose a branch:</td>
        <td><select name="branch" id="branch">
          <option value="branch">branch</option>
          <option value="btech">Btech</option>
          <option value="mtech">Mtech</option>
          <option value="civil">Civil</option>
          <option value="electrical">Electrical</option>
        </select><br></td>
    </tr> 
        <tr>
        <td>Choose a sem:</td>
        <td><select name="sem" id="sem">
          <option value="sem">sem</option>  
          <option value="first year">First Year</option>
          <option value="second year">Second Year</option>
          <option value="third year">Third Year</option>
          <option value="forth year">Forth Year</option>
        </select><br></td>
    </tr>

<tr>
    <td> Password:</td>
    <td><input type="password" name="Password">
    </td>
    </tr>
<tr> 
    <td>Contact no:</td>
    <td><input type="number" name="Contact">   
    </td>
</tr>
<tr>
    <td>Email:</td>
   <td> <input type="email" name="Email"></td>
    </tr>
<tr>
<td>
    Gender:</td>
   <td> <input type="radio" name="gender" value="male">Male </td>
  <td> <input type="radio" name="gender" value="female">Female</td>
</tr>
<tr>
    <td>Date:</td>
    <td><input type="date" name="date" required></td>
</tr>
    <tr>
    
       <td><input type="submit" value="submit"></td>
    </tr>
</table></center>
</form>
</body>
</html>