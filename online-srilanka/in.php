<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = $content[0];
$n1 = $array[0];
$n2 = $array[1];
$n3 = $array[2];
$n4 = $array[3];



if ($vote == 0) {
  $n1 = $n1 + 1;
}
if ($vote == 1) {
  $n2 = $n2 + 1;
}
if ($vote == 2) {
  $n3 = $n3 + 1;
}
if ($vote == 3) {
  $n4 = $n4 + 1;
}


//insert votes to txt file
$insertvote = $n1."    United National Party    ".$n2."   Sri Lanka Podujana Peramuna   ". $n3."   New Democratic Front   ".$n4."  	Democratic Party   ";
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<img src="thank.png">
<h2></h2>
