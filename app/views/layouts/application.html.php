<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  
   <?php include 'app/views/layouts/_navigation.php' ?>

  <div class="container">

  <div class="jumbotron">
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <?php echo $Executing; ?>
        </div>
        <div class="col-xs-12 col-sm-4">
          <?php include $content2render; ?>
        </div>
        <div class="col-xs-12 col-sm-4">
          <?php echo   $SomeVariable;  ?>
        </div>
      </div>
 
  </div>   
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>

 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
  </body>
</html>