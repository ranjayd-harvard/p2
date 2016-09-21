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
      </div>



    <div class="row">
        <div class="col-md-12">
          <h2>Specify Details for your password complexities:</h2>
          <p><span class="error">* required field.</span></p>
          <form method="GET" action="index.php" class="form-inline">
            <div class="form-group">
              <label for="words"> How many words you need in password? ( max: 9 , default: 3) </label>
              <input type="text" name="words" value="3" size="1">
              <span class="error">*</span>
            </div>
            <br>
            <div class="form-group">
              <label for="separator"> words separator? ( default: ( - dash )  </label>
              <input type="text" name="separator" value="-" size="1">
              <span class="error">*</span>
            </div>
            <br>
            <div class="form-group">
                    <label for="needNumbers">  Needs numbers? </label>
                    <input type="checkbox" name="needNumbers" value="Y" />
            </div>
            <br>
            <div class="form-group">
                    <label for="needSpclChrs">  Needs special characters? </label>
                    <input type="checkbox" name="needSpclChrs" value="Y" />
            </div>
            <br>
            <div class="form-group">
                    <label for="upperCase">  Uppercase? </label>
                    <input type="checkbox" name="upperCase" value="Y" />
            </div>
            <br>
            <div class="form-group">
                    <label for="lowerCase">  Lowercase? </label>
                    <input type="checkbox" name="lowerCase" value="Y" />
            </div>
            <br>
            <div class="form-group">
                    <label for="camelCase">  CamelCase? </label>
                    <input type="checkbox" name="camelCase" value="Y" />
            </div>
            <br>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
          </form>
        </div>
      </div>

      <h3>Generated Password</h3>
      <div class="row">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
            <div class="password"><?php echo $password;?>
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
