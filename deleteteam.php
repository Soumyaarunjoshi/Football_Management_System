<html>
<head>
<style>
input[type=text], select {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
background-image: url("bbb.jpg");
    background-color: #f2f2f2;
    padding: 200px;
}
body {
    background-image: url("or.jpg");
    background-size: cover;
}
</style>
</head>
<body>


<h1 align="right" style="color:white;"><i><b>ENTER TEAM ID TO DELETE TEAM</h1>

<form action="backenddelteam.php" method="post" align="right" style="color:white;">
TEAM ID  :
<tr>
<td>
<select name="xy">


<?php

$database="management"; //database name

$con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$res = mysqli_query($con,"select team_id,team_name from team");
while($row=mysqli_fetch_array($res))
{
	echo "<option>";
	echo $row["team_id"];
	echo "-";
	echo $row["team_name"];


   echo"</option>";
}
?>
</select>
</td>
</tr><br>
<input type="submit" value="Delete">

</form>
<form action="home.php" method="post" align="right" style="color:white;"><pre>


                        <input type="submit" value="HOME">

</form>
</body>
</html>
