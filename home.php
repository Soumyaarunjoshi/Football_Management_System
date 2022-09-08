<?php
	require_once('auth.php');
?>

<html>
<head>

<title>Soccer Management</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: light blue;
    padding: 0px;
    text-align: center;
}
</style>


<style> 
html { 
  background: url(homeeee.jpg) no-repeat center fixed; 
  background-size: cover;
}

body { 
  color: white;

}
</style>

<style>  
  style="font-size:40px;              
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>





<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: white}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>









</head>
 
<body>



<div class="header">
  <h1>Fantasy Football</h1>
  <p>revolutionising football statistics</p>
</div>


<ul>
  
  
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">New regestration</a>
    <div class="dropdown-content">
      <a href="registration1.php">Player</a>
      <a href="registerteam.php">Team</a>
      
    </div>
  </li>
<li><a href="registermatches.php">Add match+</a></li>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Update</a>
    <div class="dropdown-content">
      <a href="updategoals.php">Statistics</a>
<a href="regmatches.php">Match</a>
     
    </div>
  </li>

<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Delete</a>
    <div class="dropdown-content">
      <a href="delete.php">Player </a>
      <a href="deleteteam.php">Team</a>

     
    </div>
  </li>

<li><a href="index.html">Logout</a></li>


</ul>


<p align="center" class="style1">Login successfull </p>

</body>
</html>