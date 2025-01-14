<?php include 'include/Header.php' ?>

<?php

// Récupération des données du formulaire
if(!empty($_POST['submit'])){
    $nom = $_POST['nom'];
    $adresseMail = $_POST['adresseMail'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    // Envoi du message
    $to = 'ictbc237@gmail.com';

    $mailHeaders = "Name: " . $nom .
	"\r\n Email: ". $adresseMail  . 
	"\r\n Sujet: ". $sujet  . 
	"\r\n Message: " . $message . "\r\n";

    if(mail($to, $nom, $mailHeaders)) {
	    $message = "Vos coordonnées ont été reçues avec succès.";
	}else{
        $message = "Erreur lors de l\'envoi de votre message. Veuillez réessayer ultérieurement.";
    }

}

?>
<!--================================
=            over section           =
=================================-->
<!-- <section class="conctat-us">
	<div class="conctat-us-2 text-center">
		<h1 class="text-white" style="font-weight: bold;" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="100">Contactez-nous</h1>
		<p class="text-white" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">Accueil /conctat</p>	
	</div>
</section> -->


<!--====================================
=            Hero Section            =
=====================================-->
<section class="section conctat-us" style='height: auto; width: 100%'>
    <div class="container">

        <div class="etransit-2 text-center">
            <h1 class="text-white" style="font-weight: bold;" data-aos="fade-left" data-aos-duration="1500"
                data-aos-delay="100">Contactez-nous</h1>
            <p class="text-white" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">Accueil
                /conctat</p>
        </div>
    </div>
</section>

<!--====  End of Hero Section  ====-->

<section class="section pt-0 position-relative pull-top">
    <div class="container">
        <div class="rounded shadow p-5 bg-white">
            <p class="text-center">Soyez plus précis dans la formulation de votre requête afin que
                notre réponse puisse mieux satisfaire vos attentes.</p><br />
            <br />
            <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div>
                        <iframe class="mapControl"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.6648857583073!2d11.492791175022173!3d3.881826996091962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf1169fa5195%3A0xf5a8babf485b7cba!2sLyc%C3%A9e%20Technique%20De%20Madagascarde%20(LT%20de%20yaounde%202)!5e0!3m2!1sfr!2scm!4v1702026846051!5m2!1sfr!2scm"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="mb-5 text-center">Envoyez-nous un mail</h2>
                            </div>
                            <div class="col-12">
                                <form action="" method="post">
                                    <div class="row">
                                        <!-- Name -->
                                        <div class="col-md-6 mb-2">
                                            <input class="form-control main" type="text" placeholder="Name" id="nom"
                                                name="nom" required>
                                        </div>
                                        <!-- Email -->
                                        <div class="col-md-6 mb-2">
                                            <input class="form-control main" type="email" id="adresseMail"
                                                name="adresseMail" placeholder="Your Email Address" required>
                                        </div>
                                        <!-- subject -->
                                        <div class="col-md-12 mb-2">
                                            <input class="form-control main" id="sujet" name="sujet" type="text"
                                                placeholder="Subject" required>
                                        </div>
                                        <!-- Message -->
                                        <div class="col-md-12 mb-2">
                                            <textarea class="form-control main" id="message" name="message"
                                                name="message" rows="10" placeholder="Your Message"></textarea>
                                        </div>
                                        <!-- Submit Button -->
                                        <div class="col-12 text-right">
                                            <button class="btn btn-main-md" type="submit" name="submit">Submit</button>
                                        </div>
                                        <div class="input-row">
                                            <?php if (!empty($message)) {?>
                                            <div class='success'>
                                                <strong><?php echo $message; ?>	</strong>
                                            </div>
                                            <?php } ?>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================
=            Footer            =
=============================-->
<?php include 'include/Footer.php' ?>