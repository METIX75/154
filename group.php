<?php
$link = mysqli_connect("localhost", "id9152030_xenforo","Mslechta1");
$database = mysqli_select_db($link, "id9152030_xenforo");

$user = $_GET['username'];
$tables = "mybb_users";

$sql = "SELECT * FROM ". $tables ." WHERE username = '". mysqli_real_escape_string($link,$user) ."'" ;
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // Outputting the rows
    while($row = $result->fetch_assoc())
    {
        echo $row['usergroup'] . ",";
        echo $row['additionalgroups'];
    }
}  
?>