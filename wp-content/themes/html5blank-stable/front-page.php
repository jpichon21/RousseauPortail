<?php get_header(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.typekit.net/zuv7hqs.css">

    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/spectre.min.css'; ?>">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick.css'; ?>">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/slick-theme.css'; ?>">
    <link rel="stylesheet" src="<?php echo get_template_directory_uri() . '/icofont.min.css'; ?>">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />

    <script src="<?php echo get_template_directory_uri() . '/js/jquery-3.4.1.min.js'; ?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/slick.min.js'; ?>"></script>

</head>

<body id="bodyContainer">



    <header class="col-9 centered" id="headerBanner">
        <div class="row columns">

            <div class="col-6 logo-container center-text"> 
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="68%">
            </div>

            <div class="col-1 separator"></div>

            <div class="col-4 text-container">
                <p> Pour une offre plus performante, grâce à un réseau d'implantation étoffé, le Groupe Rousseau se
                    déploie aujourd'hui sur tout le territoire français et gravite au delà de ses frontières</p>
                <div class="btn-container">
                    <a href="#" class="btn">En savoir plus <i class="icofont-rounded-right" style="vertical-align: middle;"></i></a>
                    <a href="#" class="btn">Contact <i class="icofont-rounded-right"></i></a>
                </div>
            </div>
        </div>
    </header>

    <div class="col-9 centered" id="mozContainer">

        <!-- -->
        <div class="row columns">
            <div class="col-4 thumb-container center-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/content/1.jpg" width="100%">
                <h2>Bourgogne</h2>
                <h3>Eric Rousseau</h3>
            </div>



            <div class="col-4 thumb-container center-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/content/2.jpg" width="100%">
                <h2>Nord</h2>
                <h3>Eric Rousseau - partie nord</h3>
            </div>


            <div class="col-4 thumb-container center-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/content/3.jpg" width="100%">
                <h2>Auvergne</h2>
                <h3>ADL</h3>
            </div>
        </div>
        <!-- -->

        <!-- -->
        <div class="row columns">
            <div class="col-4 thumb-container center-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/content/4.jpg" width="100%">
                <h2>Centre</h2>
                <h3>CQFD</h3>
            </div>



            <div class="col-4 thumb-container center-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/content/5.jpg" width="100%">
                <h2>Aquitaine</h2>
                <h3>Spécialiste barriques et Espagne - Mamta</h3>
            </div>


            <div class="col-4 thumb-container center-text">
                <img src="<?php echo get_template_directory_uri(); ?>/img/content/6.jpg" width="100%">
                <h2>Aquitaine</h2>
                <h3>Distribution régionale et nationale - Eric Rousseau</h3>
            </div>
        </div>
        <!-- -->




    </div>

    <div class="col-9 centered" id="groupText">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-rousseau.png" style="margin-right:1rem;">LE GROUPE <span class="semibold">ROUSSEAU</span></h2>
        <div class="row columns">
            <div class="col-10 text-content">

                <p>Créé en 1994, les Transports Rousseau ont depuis grandi avec et grâce à leurs clients et compagnons.
                </p>

                <p> Devenu un groupe au fil des acquisitions et implantations, l’entreprise cultive une logique
                    indéfectible
                    d’amélioration continue et de qualité de service.</p>

                <p> Fort de ses implantations, le Groupe Rousseau fait évoluer ses services et son plan de transport
                    pour
                    s’adapter aux demandes clients tout en limitant son impact environnemental.</p>


                <h3><img src="<?php echo get_template_directory_uri(); ?>/img/icons/checkbox.png" style="margin-right:1rem;">NOS <span class="semibold">VALEURS</span></h3>

                <h4 class="semibold"><i class="icofont-rounded-right"></i>RÉACTIVITÉ/PROACTIVITÉ :</h4>
                <p>Fort de notre plan de transport étoilé, notre équipe met tout en oeuvre pour répondre aux diverses
                    sollicitations et contraintes de nos clients.</p>
                <h4 class="semibold"><i class="icofont-rounded-right"></i>ESPRIT D'ÉQUIPE :</h4>
                <p>Écouter, échanger, s'entraider et se mettre à la portée des autres pour mieux progresser, tel est
                    notre état d'esprit.</p>
                <h4 class="semibold"><i class="icofont-rounded-right"></i>CULTURE DE LA PERFORMANCE :</h4>
                <p>Nous avons à coeur de mesurer nos performances dans une logique d'amélioration continue en restant
                    pragmatique et efficace.</p>


                <h3><img src="<?php echo get_template_directory_uri(); ?>/img/icons/checkbox.png" style="margin-right:1rem;">LA <span class="semibold">RSE</span></h3>

                <h4 class="semibold"><i class="icofont-rounded-right"></i>SOCIÉTALE :</h4>
                <ul>
                    <li>- Formation, élévation et épanouissement de nos collaborateurs sont les préalables à une bonne
                        qualité de service</li>
                    <li>- Accueil et intégration de personnes en situation de handicap.</li>
                    <li>- Prévention de l’accidentologie</li>
                    <li>- Fidélité auprès de nos fournisseurs régionaux en contrepartie d’un engagement d’efficience
                    </li>
                </ul>

                <h4 class="semibold"><i class="icofont-rounded-right"></i>ENVIRONNEMENTALE :</h4>
                <ul>
                    <li>- Adhérent signataire de la charte CO2</li>
                    <li>- Référencé sur l’indice TK BLUE</li>
                    <li>- Renouvellement régulier du parc vers les normes les moins polluantes.</li>
                    <li>- Recyclage des palettes et traitement des déchets.</li>
                    <li>- Optimisation permanente de notre plan de transport étoilé <i>(réduction des kilomètres
                            parasites
                            et amélioration des taux de remplissages).</i></li>
                    <li>- Utilisation de remorques double étages pour l’optimisation de nos tractions.</li>
                    <li>- Membre actif du réseau VOLUPAL <i>(optimisation des envois de lots de 1 à 6 palettes).</i>
                    </li>

                </ul>


            </div>
        </div>


    </div>

    <div class="col-9 centered" id="bannerImg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/content/banner.jpg" width="100%">
    </div>

    <div class="col-9 centered" id="implantationsMap">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/icons/pointer.png" style="margin-right:1rem;">NOS <span class="semibold">IMPLANTATIONS</span></h2>
        <div class="row columns">

            <div class="col-6 map-container">
                 <img src="<?php echo get_template_directory_uri(); ?>/img/content/carte.svg" width="460px">
            </div>
            <div class="col-6 text-container">
                <ul>
                    <li>- Transports Rousseau Agence Nord</li>
                    <li>- CQFD</li>
                    <li>- Transports Rousseau</li>
                    <li>- ADL</li>
                    <li>- Transports Rousseau Aquitaine</li>
                    <li>- Transports Mamta</li>
                </ul>
            </div>


        </div>

    </div>

    <div class="col-9 centered" id="presidentTxt">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/icons/pointer.png" style="margin-right:1rem;">LE MOT <span class="semibold">PRÉSIDENT</span></h2>

    </div>





</body>

</html>