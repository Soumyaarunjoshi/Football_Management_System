<?php
$database="management"; //database name
$pid=$_POST['pid'];
$ginc=$_POST['ginc'];//this values comes from html file after submitting 
$rinc=$_POST['rinc'];
$yinc=$_POST['yinc'];
    $con = mysqli_connect("localhost","root","","$database");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_connect_error());
    }
    mysqli_select_db($con,"$database" );

if ($ginc <"0" || $rinc<"0" || $yinc<"0") {
    echo "update unsuccesfull";
	return;
}
else{

$query = "UPDATE statistics SET goals=(statistics.goals+'$ginc'),red_cards=(statistics.red_cards+'$rinc'),yellow_cards=(statistics.yellow_cards+'$yinc') 
WHERE player_id='$pid'";
mysqli_query($con,$query);

//echo "<script type='text/javascript'>\n";
echo ' Successfully updated<br>';
echo '<a href="home.php">Go back to Home</a>';


//echo "</script>"; 

}
mysqli_close($con);
?>
