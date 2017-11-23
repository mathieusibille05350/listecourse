<html lang="fr">
 <head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="css/site.css" rel="stylesheet">
 <link href="css/font-awesome.css" rel="stylesheet">
 <link href="css/jquery-ui.css" rel="stylesheet">
 <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
 <script src="js/popper.js"  type="text/javascript"></script>
 <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
 <link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
 <script src="js/jquery-3.2.1.js"  type="text/javascript"></script>
 <script src="js/jquery-ui.min.js"  type="text/javascript"></script>
 <!-- <script src="js/bootstrap.min.js"  type="text/javascript"></script> -->
 <script src="js/bootstrap-3.3.7.js" type="text/javascript"></script>
 <script src="js/site.js"  type="text/javascript"></script>
 <script src="js/jquery.dataTables.min.js"  type="text/javascript"></script>
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>liste de Course</title>

</head>

<body>
    
<?php 
    $bdd = new PDO('mysql:host=localhost;dbname=formation;charset=utf8', 'root', ''); ?>
   
<header>
   <div class="container-fluid">
       <div class="bandeau">
        <div class="entete container"><h1>Ma petite liste de course</h1></div>    
    </div>
    </div> 
</header>
<header>&nbsp;</header>
    <main>
    <container>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
         
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#">Brand</a></div>
          
          <div class="collapse navbar-collapse" id="defaultNavbar1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Créer<span class="sr-only">(current)</span></a></li>
              <li><a href="#">Modifier</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Supprimer<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Article</a></li>
                  <li><a href="#">Liste</a></li>
                  <li><a href="#">Utilisateur</a></li>
                  
                </ul>
              </li>
            </ul>
           
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Créer</a></li>
                  <li><a href="#">Modifier</a></li>
                  <li><a href="#">Supprimer</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </container>
    
        </main>
<footer>
  <div class="bandeau"><div class="container">Ardoise Magique 2018</div></div>
    
    
</footer>
</body>

</html>
