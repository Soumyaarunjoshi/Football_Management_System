<?php
$database="management"; //database name
$xy=$_POST['xy'];//this values comes from html file after submitting 

    $con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$query = "DELETE FROM team
WHERE team_id='$xy';";
mysqli_query($con,$query);

echo "<script type='text/javascript'>\n";
echo "alert('Succesflly deleted');\n";
echo "</script>"; 
echo '<a href="home.php">Go back to Home</a>';

mysqli_close($con);
?>
