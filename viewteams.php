<html>
<head>
<style>
body {
color:white;
    background-image: url("b1.jpeg");
    background-size:cover;
}
table, th, td {
    border: 1px solid white;
}
table {
    border-collapse: collapse;
    width: 100%;
}
.inner-button-container{
  background-color:white;
  position:absolute;
  bottom:0;
  right:0;
  left:0;
  text-align:center;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(odd){background-color: black}
</style>
</head>
<body>

<h2 style align="center"><i><b>TEAMS</h2>
  <div class="inner-button-container">
      <a href="index.html">Home</a>
  </div>

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
$sql = "SELECT * FROM TEAM";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                 echo "<th>TEAM ID</th>";
                echo "<th>TEAM NAME</th>";
               echo "<th>CAPTAIN</th>";
                echo "<th>LOCATION</th>";
                 echo "<th>RANK</th>";
                  echo "<th>POINTS</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['team_id'] . "</td>";
                echo "<td>" . $row['team_name'] . "</td>";
                echo "<td>" . $row['captain'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['rank'] . "</td>";
                echo "<td>" . $row['points'] . "</td>";

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
