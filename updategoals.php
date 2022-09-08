<html>
<head>
<style>
input[type=text], select {
    width: 30%;
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
    background-color: black;
    padding: 200px;
}
body {
    background-image: url("pp1.jpg");
    background-size: cover;
}
</style>
</head>
<body>


<h1 align="right" style="color:white;"><i><b>Update Statistics</h1>

<form action="updategoals1.php" method="post" align="right" style="color:white;">
<font size="+1">PLAYER ID                 :
<tr>
<td>
<select name="pid">


<?php

$database="management"; //database name

$con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$res = mysqli_query($con,"select player_id from player");
while($row=mysqli_fetch_array($res))
{
	echo "<option>";
	echo $row["player_id"];



   echo"</option>";
}
?>
</select>
</td>
</tr></font><br>
<font size="+1">GOALS INCREMENT BY        : <input type="text" name="ginc" required></font><br>
<font size="+1">RED CARDS INCREMENT BY    : <input type="text" name="rinc" required></font><br>
<font size="+1">YELLOW CARDS INCREMENT BY : <input type="text" name="yinc" required></font><br>

                                       <input type="Submit" value="Increment">
</form>
<form action="home.php" method="post" align="right" style="color:white;"><pre>


                        <input type="submit" value="HOME">

</form>
</body>
</html>
