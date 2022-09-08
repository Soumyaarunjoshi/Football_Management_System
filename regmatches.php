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
    background-image: url("pp1.jpg");
    background-size: cover;
}
</style>
</head>
<body>


<h1 align="right" style="color:white;"><i><b>UPDATE MATCH</h1>

<form action="upmatches.php" method="post" align="right" style="color:white;">
<font size="+1">MATCH ID  :
<tr>
<td>
<select name="cd">


<?php

$database="management"; //database name

$con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$res = mysqli_query($con,"select match_id from matches");
while($row=mysqli_fetch_array($res))
{
	echo "<option>";
	echo $row["match_id"];



   echo"</option>";
}
?>
</select>
</td>
</tr><br>
<font size="+1">VENUE ID  :
<tr>
<td>
<select name="mn">


<?php

$database="management"; //database name

$con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$res = mysqli_query($con,"select venue_id from venue");
while($row=mysqli_fetch_array($res))
{
	echo "<option>";
	echo $row["venue_id"];



   echo"</option>";
}
?>
</select>
</td>
</tr><br>
<font size="+1">TEAM WON  : <input type="text" name="kl" required></font><br>
<!--<font size="+1">DATE      : <input type="datetime" name="ij" required></font><br>-->
          <input type="submit" value="Update">

</form>
<form action="home.php" method="post" align="right" style="color:white;"><pre>


                        <input type="submit" value="HOME">

</form>
</body>
</html>
