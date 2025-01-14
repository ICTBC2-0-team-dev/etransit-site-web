<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $to = 'ictbc237@gmail.com'; // Adresse e-mail de destination
//     $subject = 'Nouvelle inscription à la newsletter'; // Sujet du message

//     // Récupérer l'adresse e-mail soumise dans le formulaire
//     $email = $_POST['email'];

//     // Validation de l'adresse e-mail
//     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         // Contenu du message
//         $message = "Nouvelle inscription à la newsletter :\n\n";
//         $message .= "Adresse e-mail : " . $email;

//         // En-têtes du message
//         $headers = "From: newsletter@example.com" . "\r\n" .
//             "Reply-To: newsletter@example.com" . "\r\n" .
//             "X-Mailer: PHP/" . phpversion();

//         // Envoi du message
//         if (mail($to, $subject, $message, $headers)) {
//             echo '<script>alert("Inscription à la newsletter réussie. Merci !");</script>';
//         } else {
//             echo '<script>alert("Une erreur est survenue lors de l\'envoi du message.");</script>';
//         }
//     } else {
//         echo '<script>alert("Adresse e-mail invalide. Veuillez réessayer.");</script>';
//     }
// }
//action="<?php echo $_SERVER['PHP_SELF'];
?>
<!--============================
=            Footer            =
=============================-->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
                    <div class="block">
                        <a href="index.php"><img src="images/logo2.png" width="20%" alt="footer-logo"></a>
                        <!-- Social Site Icons -->
                        <ul class="social-icon list-inline">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/ictbusinesscenter?mibextid=puAhwszkLizsjj5x"><i
                                        class="ti-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/ictbusinesscenter?igshid=OGQ5ZDc2ODk2ZA=="><i
                                        class="ti-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <h6 class="text-white" style="margin-top: 25%;">Newsletter</h6>
                    <!-- links -->
                    <form method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="email" class="form-control" placeholder="Your email"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit" name="submit">S'abonner</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Address</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="#" style='font-size:77%'><i class="ti-email"></i>&nbsp; Mysupport@etransit.cm</a></li>
                            <li><a href="#"><i class="ti-mobile"></i>&nbsp; (+237)  698 46 77 67 / (+33 ) 60 57 76 830, </p></a></li>
                            <li><a href="#"><i class="ti-home"></i>&nbsp; Europe / Afrique</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Services</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="service.php">Espace publicitaire.</a></li>
                            <li><a href="service.php">Référencement des publications prioritaires</a></li>
                            <li><a href="service.php">Abonnement mensuel ou Annuel des comptes utilisateurs.</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
                    <div class="block-2">
                        <!-- heading -->
                        <h6>Liens rapides</h6>
                        <!-- links -->
                        <ul>
                            <li><a href="about.php">À propos</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="service.php">Nos Services</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center bg-dark py-4">
        <small class="text-secondary">Copyright &copy;e-transit
            <script>
            document.write(new Date().getFullYear())
            </script>. Conçu &amp; Développé par <a href="https://https://ictbusinesscenter.com/">ICT Business
                center</a>
        </small class="text-secondary">
    </div>
</footer>



<!-- To Top -->
<div class="scroll-top-to">
    <i class="ti-angle-up"></i>
</div>

<!-- JAVASCRIPTS -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="plugins/syotimer/jquery.syotimer.min.js"></script>
<script src="plugins/aos/aos.js"></script>
<!-- <script>
// Fonction pour convertir le temps au format HH:MM:SS en secondes
function convertTimeToSeconds(time) {
    const [hours, minutes, seconds] = time.split(':');
    const totalSeconds = parseInt(hours) * 3600 + parseInt(minutes) * 60 + parseInt(seconds);
    return totalSeconds;
}

// Fonction pour convertir les secondes en temps au format HH:MM:SS
function convertSecondsToTime(seconds) {
    const hours = Math.floor(seconds / 3600);
    const minutes = Math.floor((seconds % 3600) / 60);
    const remainingSeconds = seconds % 60;
    return `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${remainingSeconds.toString().padStart(2, '0')}`;
}

// Fonction pour mettre à jour le minuteur
function updateTimer() {
    const timerElement = document.getElementById('timer');
    const currentTime = timerElement.textContent;
    const currentSeconds = convertTimeToSeconds(currentTime);

    if (currentSeconds > 0) {
        const newSeconds = currentSeconds - 1;
        const newTime = convertSecondsToTime(newSeconds);
        timerElement.textContent = newTime;
        setTimeout(updateTimer, 1000); // Appel récursif toutes les 1 seconde
    }
}

// Démarrer le minuteur
updateTimer();
</script> -->
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="js/loader.js"></script>
<script src="js/Time.js"></script>
<script src="js/script.js"></script>
</body>

</html>