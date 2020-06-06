<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[5]);
$v1 = 0;
$v2 = 0;
$v3 = 0;
$v4 = 0;




if ($vote == 0) {
  $v1 = $v1 + 1;
}
if ($vote == 1) {
  $v2 = $v1 + 1;
}
 if ($vote == 2) {
  $v3 = $v3 + 1;
}
 if ($vote == 3) {
  $v4 = $v4 + 1;
}



$fp = fopen($filename,"w");

$insertvote =  $v1."  <<PARTY 01    ".$v2."   << PARTY 02  ".$v3."<<   PARTY 03  " .$v4.  "<< PARTY 04  ";

fputs($fp,$insertvote);
fclose($fp);
include 'vote.html';

?>