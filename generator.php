<?php

//var_dump($_GET);

$words = [];

$handle = fopen("words.txt", "r");
if ($handle) {
  while (( $line = fgets($handle)) !== false ) {
    //echo trim("$line")."<br>";
    array_push($words, trim($line));
  }
} else {
  echo "Error opening words file: words.txt";
}

//print_r($words);

function genrateRandCharFromString ($str) {

  if ($str == "") {
    return "";
  } else {
    $strArray = str_split($str);
    $randomChar = '';
    $randItem = array_rand($strArray);
    $randomChar = $strArray[$randItem];
    return $randomChar;
  }
}


function genrateRandomWords ($length, $words, $sep) {

  $randomString = '';
  for ($i=0;$i < $length; $i++){
    //$randomString .= 'A';
    $randItem = array_rand($words);
    if ( $i == ($length -1) ) {
      $randomString .= $words[$randItem];
    } else {
      $randomString .= $words[$randItem].$sep;
    }
  }
  return $randomString;
}

//echo $_GET['words']."<br>";

if ( !ctype_digit($_GET['words'])) {
  $password = "Please specify number of words in the password !!!<br>This field can't be a string.";
} else {
    if ( empty ($_GET['words']) || $_GET['words'] == "" ) {
      $password = "Please specify number of words in the password !!!<br>This field can't be empty or null.";
    } else {
      if ( $_GET['words'] > "9" ) {
        $password = "You can only have 9 words in password !!!";
      } else {
        $password = genrateRandomWords($_GET['words'],$words, $_GET['separator']);

        if ( isset($_GET['needNumbers']) &&  $_GET['needNumbers'] == "Y" ) {
          $password .= genrateRandCharFromString('0123456789');
        }

        if ( isset($_GET['needSpclChrs']) &&  $_GET['needSpclChrs'] == "Y" ) {
          $password .= genrateRandCharFromString('!@#$%^&*()_+');
        }

        if ( isset($_GET['upperCase']) &&  $_GET['upperCase'] == "Y" ) {
          $password = strtoupper($password);
        }

        if ( isset($_GET['lowerCase']) &&  $_GET['lowerCase'] == "Y" ) {
          $password = strtolower($password);
        }

        if ( isset($_GET['camelCase']) &&  $_GET['camelCase'] == "Y" ) {
          $password = ucwords($password);
        }

      }
    }
}
