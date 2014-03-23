<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Site">
    <meta name="author" content="Clems">
    <!--<link rel="shortcut icon" href="../../assets/ico/favicon.ico">-->
    <title>Start Up Dev Securité</title>
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/justified-nav.css" rel="stylesheet">
	<link href="../static/css/font-awesome.min.css" rel="stylesheet">
	<!--link href="../static/css/label.css" rel="stylesheet"-->
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h1><center>Start Up Dev <img src="../static/img/tn_sci2.jpg" alt="tn_sci2.jpg"/> </center></h1>
        <ul class="nav nav-justified">
          <li><a href="accueil.html"><i class="fa fa-home"></i> Accueil</a></li>
          <li><a href="tutoriel.html"><i class="fa fa-th-list"></i> Tutoriel</a></li>
          <li><a href="téléchargement.html"><i class="fa fa-download"></i>  Téléchargement</a></li>
          <li><a href="propos.html"><i class="fa fa-info-circle"></i> à propos</a></li>
          <li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
        </ul>
      </div>

      <div class="jumbotron">
        <h1>Bienvenue sur notre site</h1>
        <p class="lead">Si vous avez un soucis avec votre ordinateur aux niveaux de la sécurité, Start Up Dev peut vous aider !</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">S'incrire</a></p>
      </div>
		
	  
     <div class="span5">
       <form class="well form-inline" action="login.php" method="POST">
         <center><input type="text" name="username" class="input-medium"  placeholder="login"></center>
         <center><input type="password" name="password" class="input-medium pull-center"  placeholder="Mot de passe"></center>
         <div class="controls"> <br/>
         <center><button type="submit" class="btn btn-primary btn-small pull-center"> <i class="icon-user icon-white"></i> Connexion</button></center>
        </div>
      </form>
    </div>
	 
      
      <div class="footer">
		<div class="col-md-6">
			<p>&copy; Company 2014 </p>
		</div>
		<div class="col-md-6">
			<p class="pull-right"><a href="http://www.twitter.com"><button class="btn btn-primary"><i class="fa fa-twitter fa-3x"></i></button></a> 
			<a href="http://www.facebook.fr"><button class="btn btn-primary"><i class="fa fa-facebook fa-3x"></i></button></a> 
			<a href="http://www.plus.google.com"><button class="btn btn-primary"><i class="fa fa-google-plus fa-3x"></i></button></a> </p>
		</div>
		
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
