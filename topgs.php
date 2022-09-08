<html>
<head>
<style>
body {
color:white;
    background-image: url("bn.jpg");
    background-size:cover;
}
table, th, td {
    border: 1px solid white;
}
table {
    border-collapse: collapse;
    width: 100%;
table-align:center;
}

th, td {
    text-align: left;
    padding:10px;
}


</style>
</head>
<body>

<h2 style align="center"><i><b>TOP 10 GOAL SCORERS</h2>
  <form action="index.html" method="post" align="center" style="color:white;"><pre>


                          <input type="submit" value="HOME">
                        </form>


</body>
</html>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "management");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT name,team_name,goals
FROM ((PLAYER JOIN TEAM ON player.team_id = team.team_id) JOIN STATISTICS ON player.player_id = statistics.player_id) ORDER BY goals DESC LIMIT 10;";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
               echo "<th>PLAYER NAME</th>";
                echo "<th>TEAM NAME</th>";
                echo "<th>GOALS</th>";


            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['team_name'] . "</td>";
                echo "<td>" . $row['goals'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
