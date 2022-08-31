<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <title>Document</title>
    <link rel="stylesheet" href="table.css">

    
</head>
<body>   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css /> -->
<?php include 'article.php';?>
<section class="container-fliud">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-3 col-xs-12">
                            <h4 class="title">Data <span>List</span></h4>
                        </div>
                        <div class="col-sm-9 col-xs-12 text-right">
                            <div class="btn_group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button class="btn btn-default" title="Reload"><i class="fa fa-sync-alt"></i></button>
                                <button class="btn btn-default" title="Pdf"><i class="fa fa-file-pdf"></i></button>
                                <button class="btn btn-default" title="Excel"><i class="fas fa-file-excel"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
            
                            <tr>
                                <th>#</th>
                                <th>Titre</th>
                                <th>Date de Publication</th>                                
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                        $retour = mysqli_query($conn,'SELECT * FROM news ORDER BY id DESC');
                        while ($donnees = mysqli_fetch_array($retour)) // On fait une boucle pour lister les news.
                            {
                            ?>
                            <tr>
    
                                <td><?php echo stripslashes($donnees['id']); ?></td>
                                <td><?php echo stripslashes($donnees['titre']); ?></td>
                                <td><?php echo date('d/m/Y', $donnees['timestamp']); ?></td>
                                <td>Sinaai-Waas</td>
                                <td>
                                    <ul class="action-list">
                                        <li><a href="#" data-tip="edit"><?php echo '<a href="index.php?modifier_news=' .$donnees['id'] . '">'; ?><i class="fa fa-edit"></i></a></li>
                                        <li><a href="#" data-tip="delete"><?php echo '<a href="liste_news.php?supprimer_news=' .$donnees['id'] . '">'; ?><i class="fa fa-trash"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <?php
                            } // Fin de la boucle qui liste les news.
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-sm-6 col-xs-6">showing <b>5</b> out of <b>25</b> entries</div>
                        <div class="col-sm-6 col-xs-6">
                            <ul class="pagination hidden-xs pull-right">
                                <li><a href="#"><</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">></a></li>
                            </ul>
                            <ul class="pagination visible-xs pull-right">
                                <li><a href="#"><</a></li>
                                <li><a href="#">></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>