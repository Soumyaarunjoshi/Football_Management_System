<?php
$database="management"; //database name
$id=$_POST['id'];//this values comes from html file after submitting 
$nam=$_POST['nam'];
$nat=$_POST['nat'];
$ag=$_POST['ag'];
$pos=$_POST['pos'];
$team=$_POST['team'];
    $con = mysqli_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,$database);

$query = "INSERT INTO player (player_id,name,nationality,age,position,team_id)VALUES ('$id','$nam','$nat','$ag','$pos','$team')";
mysqli_query($con,$query);

echo "<script type='text/javascript'>\n";
echo "alert('you are Successfully registered');\n";
echo "</script>"; 
echo '<a href="home.php">Go back to Home</a>';

mysqli_close($con);
?>
