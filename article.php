
    <?php
    $conn = mysqli_connect("localhost", "root", "", "ucm");
   //mysql_select_db("coursphp");
    //-----------------------------------------------------
    // Vérification 1 : est-ce qu'on veut poster une news una hung pau hund blu them brok viol chas frin prom venu ?
    //-----------------------------------------------------
    if (isset($_POST['titre']) AND isset($_POST['contenu']))
    {
        $titre = addslashes($_POST['titre']);
        $contenu = addslashes($_POST['contenu']);
        // On vérifie si c'est une modification de news ou non.
        if ($_POST['id_news'] == 0)
        {
            // Ce n'est pas une modification, on crée une nouvelle entrée dans la table.
            mysqli_query($conn,"INSERT INTO news VALUES('', '" . $titre . "','" . $contenu . "', '" . time() . "')");
        }
        else
        {
            // On protège la variable "id_news" pour éviter une faille SQL.
            $_POST['id_news'] = addslashes($_POST['id_news']);
            // C'est une modification, on met juste à jour le titre et le contenu.
            mysqli_query($conn,"UPDATE news SET titre='" . $titre . "',contenu='" . $contenu . "' WHERE id='" . $_POST['id_news'] . "'");
        }
    }
    //--------------------------------------------------------
    // Vérification 2 : est-ce qu'on veut supprimer une news ?
    //--------------------------------------------------------
    if (isset($_GET['supprimer_news'])) // Si l'on demande de supprimer une news.
    {
        // Alors on supprime la news correspondante.
        // On protège la variable « id_news » pour éviter une faille SQL.
        $_GET['supprimer_news'] = addslashes($_GET['supprimer_news']);
        mysqli_query($conn,'DELETE FROM news WHERE id=\'' .
        $_GET['supprimer_news'] . '\'');
        }
        ?>