<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Project P2</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/p2.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php require 'generator.php'; ?>

  </head>
  <body>

    <div class="container">

      <div class="page-header">
        <h1 class="projectHeader">Password Generator</h1>
        <p class="lead">Project <strong>P2</strong> for class <strong>Dynamic Web Applications(dwa15) </strong> </p>
        <p>This application generates a random password for you separated with character of your choice. You can also add the special characters and numbers at the end of the password. Please fill out the form below and hit submit button. Please <a href="https://github.com/ranjayd-harvard/p2"><strong>click here</strong></a> for more details on source for this project.</p>

      </div>



    <div class="row">
        <div class="col-md-12">
          <form method="GET" action="index.php" class="form-inline">
            <div class="form-group">
              <label for="words"> How many words you need in password?
              <input type="text" name="words" value="<?php echo htmlspecialchars($number_of_words);?>" size="1">
              <span class="labelHelp"> ( max: 9 , default: 3) <span> </label>
              <span class="error">*</span>
            </div>
            <br>
            <div class="form-group">
              <label for="separator"> words separator
              <input type="text" name="separator" value="<?php echo htmlspecialchars($words_separator);?>" size="1">
              <span class="labelHelp"> ( default value is dash - ) <span> </label>
              <span class="error">*</span>
            </div>
            <br>
            <div class="form-group">
                <label for="needNumbers">  Needs numbers? </label>
                <input type="checkbox" name="needNumbers" <?php if (isset($need_numbers) && $need_numbers=="Y") echo "checked";?> value="Y" />
            </div>
            <br>
            <div class="form-group">
                <label for="needSpclChrs">  Needs special characters? </label>
                <input type="checkbox" name="needSpclChrs" <?php if (isset($need_special_chars) && $need_special_chars=="Y") echo "checked";?> value="Y" />
            </div>
            <br>

            <div class="form-group">
              <label>Case for password string:
                <label class="checkbox-inline"><input type="radio" name="pwdCase" <?php if (isset($pwd_case) && $pwd_case=="upperCase") echo "checked";?> value="upperCase"> Uppercase </label>
                <label class="checkbox-inline"><input type="radio" name="pwdCase" <?php if (isset($pwd_case) && $pwd_case=="lowerCase") echo "checked";?> value="lowerCase"> LowerCase </label>
                <label class="checkbox-inline"><input type="radio" name="pwdCase" <?php if (isset($pwd_case) && $pwd_case=="camelCase") echo "checked";?> value="camelCase"> CamelCase </label>
              </label>
            </div>
            <br>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary"> 	&#160; 	&#160;
            <input type="submit" name="another" value="Give me another one!" class="btn btn-danger">
          </form>
        </div>
      </div>
      <hr>
      <h3 class="formHeader">Generated Password</h3>
      <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <div class="formHeader password"><?php echo $password;?>
            </div>
          </div>
          <div class="col-md-2">
          </div>

        </div>



    <br><br>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
