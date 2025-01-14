<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>e-transit</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="e-transit" content="e-transit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="ictBC">
    <!-- <meta name="generator" content="Themefisher Small Apps Template v1.0"> -->

    <!-- theme meta -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo2.png" />

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="plugins/aos/aos.css">

    <!-- CUSTOM CSS -->
    <link href="css/styles.css" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">

    <div class="loader-container">
        <div class="loader"></div>
    </div>
    <?php
// Récupérer le nom de la page actuelle
$current_page = basename($_SERVER['PHP_SELF']);

// Fonction pour vérifier si la page actuelle correspond à la page donnée
function isCurrentPage($page)
{
    global $current_page;
    return ($page === $current_page) ? 'active' : '';
}
?>

    <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="images/e-transit svg.svg" width="50%" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown <?php echo isCurrentPage('index.php'); ?>">
                        <a style='font-size: 12px' class="nav-link dropdown-toggle" href="index.php">Accueil
                            <span><i class="ti-angle-down"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu">
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="index.php">Présentation de e-transit</a></li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="index.php">Avantages de l'application</a>
                            </li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="index.php">Appel à l'action pour télécharger l'application</a>
                            </li>
                        </ul>
                    </li>

                    <!-- À propos -->
                    <li  class="nav-item dropdown <?php echo isCurrentPage('about.php'); ?>">
                        <a style='font-size: 12px' class="nav-link dropdown-toggle" href="about.php">À propos
                            <span><i class="ti-angle-down"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu">
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage('about.php'); ?>"
                                    href="about.php">Historique de e-transit</a></li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage('Direction.php'); ?>"
                                    href="#">Mission et valeurs</a>
                            </li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage('Direction.php'); ?>"
                                    href="Direction.php">L'équipe derrière l'application</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Fonctionnalités -->
                    <li class="nav-item dropdown <?php echo isCurrentPage(''); ?>">
                        <a class="nav-link dropdown-toggle" href="#">Fonctionnalités
                            <span><i class="ti-angle-down"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#"> Suivi en temps réel des colis</a></li>
                            <li><a class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#"> Partage de trajets pour une livraison plus économique</a>
                            </li>
                            <li><a class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#"> Gestion des expéditions et des destinataires</a>
                            </li>
                            <li><a class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#"> Notifications et alertes personnalisées</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Mode d'utilisation -->
                    <li class="nav-item dropdown <?php echo isCurrentPage('service.php'); ?>">
                        <a style='font-size: 12px' class="nav-link dropdown-toggle" href="about.php">Mode d'utilisation
                            <span><i class="ti-angle-down"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu">
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#">Guide étape par étape pour utiliser l'application</a></li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#">Configuration du compte utilisateur</a>
                            </li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#">Explication des différentes fonctionnalités</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Nouveautés -->
                    <li class="nav-item dropdown <?php echo isCurrentPage('about.php'); ?>">
                        <a style='font-size: 12px' class="nav-link dropdown-toggle" href="about.php">Nouveautés
                            <span><i class="ti-angle-down"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu">
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage('evenement.php'); ?>"
                                    href="evenement.php">Dernières mises à jour de l'application</a></li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#">Améliorations et nouvelles fonctionnalités</a>
                            </li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#">Témoignages d'utilisateurs satisfaits</a>
                            </li>
                        </ul>
                    </li>

                    <!-- FAQ -->
                    <li class="nav-item dropdown <?php echo isCurrentPage('about.php'); ?>">
                        <astyle='font-size: 12px' class="nav-link dropdown-toggle" href="FAQ.php">FAQ
                            <span><i class="ti-angle-down"></i></span>
                        </astyle=>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu">
                            <li><astyle='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="FAQ.php">Réponses aux questions fréquemment posées</astyle=></li>
                            <li><astyle='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#">Support client et contact</astyle=>
                            </li>
                        </ul>
                    </li>

                    <!-- Blog -->
                    <li class="nav-item dropdown <?php echo isCurrentPage('blog.php'); ?>">
                        <a style='font-size: 12px' class="nav-link dropdown-toggle" href="about.php">Blog
                            <span><i class="ti-angle-down"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu">
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage('Actus.php'); ?>"
                                    href="Actus.php">Articles sur les tendances du transport de colis</a></li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#">Conseils pour une expédition réussie</a>
                            </li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#">Histoires inspirantes d'utilisateurs</a>
                            </li>
                        </ul>
                    </li>

                    <!-- contact -->
                    <li class="nav-item dropdown <?php echo isCurrentPage('contact.php'); ?>">
                        <a style='font-size: 12px' class="nav-link dropdown-toggle" href="contact.php">Contact
                            <span><i class="ti-angle-down"></i></span>
                        </a>
                        <!-- Dropdown list -->
                        <ul class="dropdown-menu">
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage('contact.php'); ?>"
                                    href="contact.php">Formulaire de contact</a></li>
                            <li><a style='font-size: 12px' class="dropdown-item <?php echo isCurrentPage(''); ?>"
                                    href="#">Coordonnées, support client</a>
                            </li>
                        </ul>
                    </li>

                    <!-- <li class="nav-item <?php echo isCurrentPage('service.php'); ?>">
                        <a class="nav-link" href="service.php">Services</a>
                    </li> -->
                    <!-- <li
                        class="nav-item dropdown <?php echo isCurrentPage('Actus.php') || isCurrentPage('evenement.php') || isCurrentPage('FAQ.php') ? 'active' : ''; ?>">
                        <a class="nav-link dropdown-toggle" href="Actus.php">Medias
                            <span><i class="ti-angle-down"></i></span>
                        </a>
                        < Dropdown list -->
                        <!-- <ul class="dropdown-menu">
                            <li><a class="dropdown-item <?php echo isCurrentPage('Actus.php'); ?>"
                                    href="Actus.php">Actualités</a></li>
                            <li><a class="dropdown-item <?php echo isCurrentPage('evenement.php'); ?>"
                                    href="evenement.php">Evénements</a></li>
                            <li><a class="dropdown-item <?php echo isCurrentPage('FAQ.php'); ?>" href="FAQ.php">FAQ</a>
                            </li>
                        </ul>>
                    </li> -->
                    <!-- <li class="nav-item <?php echo isCurrentPage('carriere.php'); ?>">
                    <a class="nav-link" href="carriere.php">Notre présence Internationale</a>
                </li> -->
                </ul>
            </div>
        </div>
    </nav>