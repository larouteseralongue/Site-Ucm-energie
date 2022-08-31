<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UCM | Marché en cours</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/main.css">
        
    </head>
    <body>

        <!-- Navigation-->

        <?php include 'navigation.php' ?>
  

        <!-- barre de recherche-->

    
      <!--Tableau Ami-->
        <section class="page-section">
          <div class="container">
            <h2 class="text-center">Marché Clôturé</h2>
          <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Intitulé</th>
      <th>Type de Marché</th>
      <th>Date de publication</th>
      <th>Date de Clôture</th>
      <th>Télechargement</th>
    </tr>
  </thead>
  <?php
                    $conn = mysqli_connect("localhost", "root", "", "ucm");
                    //mysqli_select_db("ucm");
                    // On récupère les cinq dernières news.
                    $retour = mysqli_query($conn,'SELECT * FROM news ORDER BY id DESC LIMIT 0,5');
                    while ($donnees = mysqli_fetch_array($retour))
                    {
                    ?>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $donnees['titre']; ?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?php
            
                          $contenu = nl2br(stripslashes($donnees['contenu']));
                          echo substr($contenu, 0,100);
                          ?></p>
    
      </td>
      <td>
        <span class="badge  rounded-pill d-inline text-dark"><?php echo date('d/m/Y à H\hi',$donnees['timestamp']); ?></span>
      </td>
      <td>
        <span class="badge badge-danger rounded-pill d-inline"><?php echo date('d/m/Y à H\hi',$donnees['timestamp']); ?></span></td>
      <td>
        <a href="action.php?t=0&id=<?= $id; ?> ">
      <i class="fa-solid fa-download"></i> Télécharger
      </a>
      <p class="text-center">(15)</p>
      </td>
    </tr>
        
  </tbody>
  <?php
                    } // Fin de la boucle des <italique>news</italique>.
                    ?>
</table>
          </div>
        </section>
      <!--Tableau Ami-->

        
              
        <!-- Footer-->
        <?php include 'footer.php';?>
          <!-- Footer -->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
