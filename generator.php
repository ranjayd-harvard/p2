<?php

//var_dump($_GET);
//initialize input values
$number_of_words = empty($_GET['words']) ? '3' : htmlspecialchars($_GET['words']);
$words_separator = empty($_GET['separator']) ? '-' : htmlspecialchars($_GET['separator']);
$need_numbers = empty($_GET['needNumbers']) ? 'N' : htmlspecialchars($_GET['needNumbers']);
$need_special_chars = empty($_GET['needSpclChrs']) ? 'N' : htmlspecialchars($_GET['needSpclChrs']);
$pwd_case = empty($_GET['pwdCase']) ? 'lowerCase' : htmlspecialchars($_GET['pwdCase']);


$words = [];

// read flile and load words array
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

// function to get random character from a string
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


// function to generate random password
function genrateRandomWords ($length, $words, $sep, $word_case) {

  $randomString = '';
  for ($i=0;$i < $length; $i++){
    //$randomString .= 'A';
    $randItem = array_rand($words);
    $word = $words[$randItem];

    switch ($word_case) {
    case "upperCase":
      $word = strtoupper($word);
      break;
    case "lowerCase":
      $word = strtolower($word);
      break;
    case "camelCase":
      $word = ucwords($word);
      break;
    default:
      $word = $word;
    }

    if ( $i == ($length -1) ) {
      $randomString .= $word;
    } else {
      $randomString .= $word.$sep;
    }
  }
  return $randomString;
}


// Perform form input validations and populate password
if ( !ctype_digit($number_of_words)) {
  $password = "Please specify number of words in the password !!!<br>This field can't be a string.";
} else {
    if ( empty ($number_of_words) || $number_of_words == "" ) {
      $password = "Please specify number of words in the password !!!<br>This field can't be empty or null.";
    } else {
      if ( $_GET['words'] > "9" ) {
        $password = "You can only have 9 words in password !!!";
      } else {
        $password = genrateRandomWords($number_of_words,$words, $words_separator,$pwd_case);

        if ( $need_numbers == "Y" ) {
          $numbers_str = genrateRandCharFromString('0123456789');
        } else {
          $numbers_str = "";
        }


        if ( $need_special_chars == "Y" ) {
          $special_chr_str = genrateRandCharFromString('!@#$%^&*()_+<>{}[]+-');
        } else {
          $special_chr_str = "";
        }




      $password .= $numbers_str.$special_chr_str;

      }
    }
}
