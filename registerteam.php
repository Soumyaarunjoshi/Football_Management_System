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
    background-color: #8B0000;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 200px;
}
body {
    background-image: url("team51.jpg");
    background-size: cover;
}
</style>
</head>
<body>


<h1 align="right" style="color:white;"><i><b>NEW TEAM</h1>

<form action="insertteam.php" method="post" align="right" style="color:white;"><pre>
<font size="+2">TEAM ID   : <input type="text" name="td" required></font><br>
<font size="+2">TEAM NAME : <input type="text" name="tn" required></font><br>
<font size="+2">CAPTAIN   : <input type="text" name="ci" required></font><br>
<font size="+2">LOCATION  : <input type="text" name="loc" required></font><br>
<font size="+2">RANK      : <input type="text" name="rn" required></font><br>
<font size="+2">POINTS    : <input type="text" name="pnt" required></font><br></pre>

                        <input type="submit" value="Register">

</form>
<form action="home.php" method="post" align="right" style="color:white;"><pre>


                        <input type="submit" value="HOME">

</form>
</body>
</html>
