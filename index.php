    <?php require("connection.php"); ?>
    <?php include("function.php"); ?>
<html lang="fr">

<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="js/popper.js" type="text/javascript"></script>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <!-- <script src="js/bootstrap.min.js"  type="text/javascript"></script> -->
    <script src="js/bootstrap-3.3.7.js" type="text/javascript"></script>
    <script src="js/site.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>liste de Course</title>
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="bandeau">
                <div class="entete container">
                    <h1>Ma petite liste de course</h1>
                </div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                            <a class="navbar-brand" href="#">Ardoise Magique</a>
                        </div>

                        <div class="collapse navbar-collapse" id="defaultNavbar1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Créer<span class="sr-only">(current)</span></a>
                                </li>
                                <li><a href="#">Modifier</a>
                                </li>
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Supprimer<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Article</a>
                                        </li>
                                        <li><a href="#">Liste</a>
                                        </li>
                                        <li><a href="#">Utilisateur</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>


                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </header>

    <main>
        <container>
            <div role="tabpanel">
                <div role="tabpanel">
                    <?php $requete = "SELECT * FROM fruits";


        if ($req_fruits = $bdd->query($requete))
            {   
            $les_fruits = $req_fruits->fetchAll();
            }
    echo ('<div class="table-responsive container">
    <table class="table table-bordered">'); 
                    echo(' <thead>
            <tr>
                <th>ID</th>
                <th>Produits</th>
                <th><i class="scicon-awesome-basket" aria-hidden="true"></i></th>
                <th><i class="fa fa-trash-o" aria-hidden="true"></i></th>
                <th>Q</th>
                <th>&nbsp;<i class="fa fa-plus"></i> / <i class="fa fa-minus"></i></th>
            </tr>
        </thead>');
     foreach ($les_fruits as $row)

            { 
                $checked = $row['caddie'];
             if ($row['caddie'])
                {
                $checked = "checked";
                }
             else {
                 $checked = "";
             };
    
       echo(' <tbody>
            <tr>
                <th scope="row">1</th>');
                echo "<td class=".$checked.">".$row['nom']."</td>";
               echo '<td><form><input type="checkbox" '.$checked.' ></form></td>';
              echo '  <td><a href="http://127.0.0.1/listedecoursephp/index.php?efface='.$row['id_fruit'].'" target="_self"><i class="fa fa-trash-o" aria-hidden="true"></i>
        </i></a></td>';
                echo "<td>".$row['quantite']."</td>";
               echo '<td>&nbsp;<i class="fa fa-plus"></i> / <i class="fa fa-minus"></i></td>';
           }
          echo '  </tr>
        </tbody>
    </table>';
            echo "Vous avez ".compteQ(). " Articles a acheter au total<br>";
            echo "Vous avez encore ".compteR()." Articles a mettre dans le caddie<br>";
         
                ?>
                    <form action="index.php" method="get">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="nom" placeholder="Article" name="fruit">
                            <input type="hidden" class="form-control" id="caddie" placeholder="Article" name="caddie" values="0">
                            <label for="nom">Ajouter un produit</label>
                            <input type="text" class="form-control" id="nom" placeholder="Article" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Sa Quantité :</label>
                        
                            <input type="int" class="form-control" id="quantite" placeholder="0" name="quantite">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Son prix :</label>
                            <input type="float" class="form-control" id="prix" placeholder="0" name="prix">
                        </div>


                        <button type="submit" class="btn btn-default">Créer l'article</button>
                    </form>
                </div>

            </div>
            </div>
        </container>

    </main>
    <footer>
        <div class="bandeau">
            <div class="container">
                <div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
                </p>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a>  <a href="#" class="btn btn-default" role="button">Button</a>
                </p>
            </div>
        </div>
    </div>
</div>

                Ardoise Magique 2018</div>
        </div>

    </footer>
</body>

</html>