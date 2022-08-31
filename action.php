<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"!:>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$conn = mysqli_connect("localhost", "root", "", "ucm");

if(isset($_GET['t'], $_GET['id']) AND !empty($_GET['id'])){
    $getid = (int) $_GET['id'];
    $gett = (int) $_GET['t'];

    $conn = mysqli_connect("localhost", "root", "", "ucm");
                    //mysqli_select_db("ucm");
                    // On récupère les cinq dernières news.
    $retour = mysqli_query($conn,'SELECT id FROM download WHERE id = ?');
    $result=mysqli_result($conn,$retour);
    $donnees = mysqli_num_rows($retour);
    if($donnees->rowCount()==1){
        if($gett==1){
             $ins = $conn->prepare('INSERT INTO download (id_article) VALUE (?)');
             $ins->execute(array($getid));
        }
        header('Location: http://localhost/monsite/action.php?t=download&id='.$getid); 
    } else{
        exit('Erreur fatale');
    }
}else {
    exit('Erreur fatale.<a href="http://localhost/monsite/ami.php/">Revenir à l\'accueil</a>');
}

?>
</body>
</html>