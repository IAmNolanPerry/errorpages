<!DOCTYPE html>
<html lang=en>
    <head>
  <meta charset=utf-8>
  <meta name=viewport content="initial-scale=1, minimum-scale=1, width=device-width">
  <link rel="stylesheet" href="style.css">
  <title>Error 404 (Not Found)!!1</title>
  </style>
  </head>
  <a href=//www.omega-grid.org/><span id=logo aria-label=Omega-Grid></span></a>
  <p><b>404.</b> <ins>That’s an error.</ins>
  <p>A Error Has Occured, It Might Be Because/Caused By:<br>  
      <ins>
<?php
$myArray = file('excuses.txt');

$input = array_combine($myArray, $myArray); 
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
?>
      
      
      
      </ins>
