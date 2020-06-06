<?php

// Grab User submitted information
$nic = $_POST['nic'];
$pin = $_POST['pin'];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("online-srilanka",$con);

$register = mysql_query("SELECT nic, pin FROM register WHERE nic = $nic");

$row = mysql_fetch_array($register);

if($row["nic"]==$nic && $row["pin"]==$pin)
{
include 'vote.html';}   
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>