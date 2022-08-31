<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\\oui.css">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="oui.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>-->
    <style type="text/css">
        body{
            width: 100%;
            height: 100Vh;
            background:#eee;
        }
        .center{
            width:68%;
            margin-right: auto;
            margin-left: auto;
            background: white;
            min-height: 700px;
            padding: 30px 30px;
        }
    </style> 
</head>
<body>
    <div class="center">
        <h1>Admin</h1>
        <h3><a class="btn btn-outline-info btn-xl" href="lis_news.php">Retour à la liste des news</a></h3>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "ucm");
    if (isset($_GET['modifier_news'])) // Si on demande de modifier une news.
    {
        // On protège la variable « modifier_news » pour éviter une faille SQL.
        $_GET['modifier_news'] = mysqli_real_escape_string($conn,htmlspecialchars($_GET['modifier_news']));
        // On récupère les informations de la news correspondante.
        $retour = mysqli_query($conn,'SELECT * FROM news WHERE id=\'' .$_GET['modifier_news'] . '\'');
        $donnees = mysqli_fetch_array($retour);
        // On place le titre et le contenu dans des variables simples.
        $images = stripcslashes($donnees['fichier']);
        $titre = stripslashes($donnees['titre']);
        $contenu = stripslashes($donnees['contenu']);
        $id_news = $donnees['id']; // Cette variable va servir pour se souvenir que c'est une modification.

        
    }
    else // C'est qu'on rédige une nouvelle news.
    {
        // Les variables $titre et $contenu sont vides, puisque c'est une nouvelle news.
        $titre = '';
        $contenu = '';
        $id_news = 0; // La variable vaut 0, donc on se souviendra que ce n'est pas une modification.
    }
    ?>
    <form action="lis_news.php" method="post">
        <input type="text" class="form form-control" name="titre" value="<?php echo $titre; ?>" />
        
        <textarea name="contenu" class="form form-control">
        <?php echo $contenu; ?></textarea><br />
        <input type="hidden" name="id_news" value="<?php echo $id_news;?>" />
        <input type="file" name="fichier" <?php echo $images ?>>
        <input class="btn btn-info" type="submit" value="Envoyer" />
        </p>
    </form>
    

    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>