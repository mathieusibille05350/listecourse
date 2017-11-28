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
   <!-- <script src="js/jquery.dataTables.min.js" type="text/javascript"></script> -->
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
                    <div class="container">

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
                    <?php 
                    if (isset($_GET['DESC'])){ 
                    $requete = "SELECT * FROM fruits ORDER BY nom DESC";
                       
                    }
                    elseif (isset($_GET['QDESC']) )
                    {
                    $requete = "SELECT * FROM fruits ORDER BY quantite DESC";
                    }
                    elseif (isset($_GET['QASC']) )
                    {
                    $requete = "SELECT * FROM fruits ORDER BY quantite ASC";
                    }
                    else
                    {
                    $requete = "SELECT * FROM fruits ORDER BY nom ASC";   
                    } // defini le sens d'affichage des colonnes
                    

        if ($req_fruits = $bdd->query($requete))
            {   
            $les_fruits = $req_fruits->fetchAll();
            }
    echo ('<div class="table-responsive container">
    <table class="table table-bordered">'); 
                    echo(' <thead>
            <tr>
               
                <th>Produits <a href="index.php?ASC"><i class="fa fa-plus"></i></a> / <a href="index.php?DESC"><i class="fa fa-minus"></i></a></th>
                <th class ="text-center"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
</th>
                <th class ="text-center"><i class="fa fa-trash-o" aria-hidden="true"></i></th>
                <th class ="text-center">Q <a href="index.php?QASC"><i class="fa fa-plus"></i></a> / <a href="index.php?QDESC"><i class="fa fa-minus"></i></a></th>
                <th class ="text-center">&nbsp;<i class="fa fa-plus"></i> / <i class="fa fa-minus"></i></th>
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
    // $ligID = $row['id_fruit'];
       echo(' <tbody>
            <tr id='.$row['id_fruit'].' >
                ');
                echo '<td class='.$checked.'><a href="index.php?edition='.$row['id_fruit'].'&nom='.$row['nom'].'&quantite='.$row['quantite'].'">'.$row['nom'].'</a></td>';
               echo '<td  class="text-center '.$row['id_fruit'].'"><a href="index.php?caddiedown='.$row['id_fruit'].'&caddie='.$row['caddie'].' target="_self"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
</td>';
              echo '  <td  class="text-center '.$row['id_fruit'].'"><a href="index.php?efface='.$row['id_fruit'].' target="_self"><i class="fa fa-trash-o" aria-hidden="true"></i>
        </i></a></td>';
                echo "<td align=right>".$row['quantite']."</td>";
               echo '<td class ="text-center"><a href="index.php?plus='.$row['id_fruit'].'&quantite='.$row['quantite'].'"<i class="fa fa-plus"></i></a> / <a href="index.php?moins='.$row['id_fruit'].'&quantite='.$row['quantite'].'"<i class="fa fa-minus"></i></a></td>';
           }
          echo '  </tr>
        </tbody>
    </table>';
            echo "Vous avez ".compteQ(). " Articles a acheter au total<br>";
            echo "Vous avez encore ".compteR()." Articles a mettre dans le caddie<br>";
                              $id_modif = "";
                              $nom = "";
                              $quantite = "";
                if (isset($_GET['edition'])){
                                $bouton = "Modifier";
                                $id_modif = $_GET['edition'];
                                $nom = $_GET['nom'];
                                $quantite = $_GET['quantite'];
                }
                            else {
                                $bouton = "Ajouter";
                            }
                             ?>
                    <form action="index.php" method="get">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="index"  name="id_fruit" value="<?php echo $id_modif; ?>">
                            <input type="hidden" class="form-control" name ='UouI' value="<?php echo $bouton; ?>">
                            <input type="hidden" class="form-control" id="caddie"  name="caddie" values="0">
                            <label for="nom"><?php echo $bouton; ?> un produit</label>
                            <input type="text" value ="<?php echo $nom; ?>" class="form-control" id="nom" placeholder="Article" name="nom">
                        </div>
                        <div class="form-group">
                            <label >Sa Quantité :</label>
                        
                            <input  type="number" value="<?php echo $quantite; ?>" min="0" max="128" class="form-control" id="quantite" placeholder="0" name="quantite">
                        </div>
                        <div class="form-group">
                            <label >Son prix :</label>
                            <input type="float" class="form-control" id="prix" placeholder="0" name="prix">
                        </div>


                        <button type="submit" class="btn btn-default">
                            <?php echo $bouton; ?></button>
                    </form>
                </div>

            </div>
            </div>
        </container>

    </main>
    <footer>
        <div class="bandeau">
            <div class="container">

                Ardoise Magique 2018</div>
        </div>

    </footer>
</body>

</html>