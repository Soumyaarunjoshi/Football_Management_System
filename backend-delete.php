<?php
$database="management"; //database name
$pl=$_POST['pl'];//this values comes from html file after submitting 

    $con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysqli_select_db($con,$database);

$query = "DELETE FROM player
WHERE player_id='$pl';";
mysqli_query($con,$query);

echo "<script type='text/javascript'>\n";
echo "alert('Succesflly deleted');\n";
echo "</script>"; 
echo '<a href="home.php">Go back to Home</a>';

mysqli_close($con);
?>
