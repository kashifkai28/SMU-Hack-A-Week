
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
  <link href="bower_components/bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="stylesheets/jumbotron.css" rel="stylesheet">
                    <link href="stylesheets/background.css" rel="stylesheet">
                    <link href="stylesheets/signin.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h2>Share Your Experiences and Let People Know!</h2>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

<?php include "db.php"; ?>




<?php

//$sql = "SELECT distinct discussions FROM SMUnityCourses WHERE topics = '$topics';";


$sql = 'SELECT distinct discussions, name FROM info WHERE discussions <> " "';



$news_query = mysql_query($sql) or die(mysql_error());
$rsNews = mysql_fetch_assoc($news_query);
?>

<?php do {?>
<p><h2><div class = "pad"> <?php echo $rsNews['name']; ?> <br /></h2> <div class = "jumbotron"><? echo $rsNews['discussions']; ?> 
  <br /><br /><br />

</div>
</div>
<?php } while ($rsNews = mysql_fetch_assoc($news_query)) ?>


<br /><br /><br /><br /><br /><br /><br />

<form class="form-signin" role="form" action="post-discussions.php" method="post">

            <h2 class="form-signin-heading">Help your Classmates!</h2>
       Name: <input type="text" name="name" id="name" class="form-control" placeholder="Name" required><br />
            Comments : <input type="text" name="discussions" id="discussions" class="form-control" placeholder="Comments" required><br />
      <button class="btn btn-lg btn-primary btn-block" type="submit">Start!</button>
          </form>





</div>



      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bower_components/bootstrap-jasny/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/bootstrap-jasny/dist/js/docs.min.js"></script>
  </body>
</html>
