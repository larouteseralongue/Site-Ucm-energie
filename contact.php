<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>UCM | Contact</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
        <link href="css/styles.css" rel="stylesheet" />
    <title>Contactez-Nous</title>
</head>
<body>
<!-- Menu de Navigation-->
<?php

include "navigation.php";

?>
     <!-- Contact-->
     <section class="page-section p-5" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact-Nous</h2>
                <h3 class="section-subheading text-muted">.</h3>
            </div>
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-info btn-xl text-uppercase" id="sendMessageButton" type="submit">Envoy?? Votre Message</button>
                </div>
            </form>
        </div>
    </section>
    <footer class="footer py-4 bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container">
              <!-- Section: Social media -->
              <section class="py-2 mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-facebook-f"></i
                ></a>
          
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-twitter"></i
                ></a>
          
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-google"></i
                ></a>
          
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-instagram"></i
                ></a>
          
                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </section>
              <!-- Section: Social media -->
          
              <!-- Section: Form -->
              <section class="py-2">
                <form action="">
                  <!--Grid row-->
                  <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                      <p class="pt-2">
                        <strong>Inscrivez-vous ?? notre newsletter</strong>
                      </p>
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    <div class="col-md-5 col-12 py-2">
                      <!-- Email input -->
                      <div class="form-outline form-white mb-4">
                        <input type="email" id="form5Example21" class="form-control" placeholder="Adresse Email" />
                
                      </div>
                    </div>
                    <!--Grid column-->
          
                    <!--Grid column-->
                    <div class="col-auto py-2">
                      <!-- Submit button -->
                      <button type="submit" class="btn btn-outline-light mb-4">
                        S'abonner
                      </button>
                    </div>
                    <!--Grid column-->
                  </div>
                  <!--Grid row-->
                </form>
              </section>
        
            </div>
            <!-- Grid container -->
          
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              ?? 2022 Copyright:
             
            </div>
            <!-- Copyright -->
          </footer>
    
</body>
</html>