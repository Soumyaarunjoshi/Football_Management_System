<html>
<head>
<style>
body {
    background-image: url("aj5.jpg");
}
</style>
</head>
<body>


<h1 align="right" style="color:White;"><i><b>ENTER VENUE</h1>

<form action="q3.php" method="post" align="right" style="color:White;">

venue:
<tr>
<td>
<select name="vn">


<?php

$database="management"; //database name

$con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$res = mysqli_query($con,"select venue_name from venue");
while($row=mysqli_fetch_array($res))
{
	echo "<option>";
	echo $row["venue_name"];




   echo"</option>";
}
?>
</select>
</td>
</tr><br>
<input type="submit" value="Search">

</form>
<form action="index.html" method="post" align="right" style="color:white;"><pre>


                        <input type="submit" value="HOME">
                      </form>
</body>
</html>
