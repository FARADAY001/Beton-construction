<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>BETON-CONSTRUCTION</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<style type="text/css">
        /*herder*/
        .header-home {
            background-image: -webkit-linear-gradient(400deg, #faa61f 0%, #ed1847 100%);
            position: relative;
            padding-top: 200px;
            padding-bottom: 180px;
            overflow: hidden;
            z-index: 1;
        }

        .col-header-text {
            color: white;
        }


        .col-header-text h1 {
            font-size: 60px;
            line-height: 70px;
            letter-spacing: 0.05px;
            text-align: center;
            color: white;
        }

        .col-header-text h1 span {
            font-weight: 600;

        }

        .col-header-text p {
            font-size: 16px;
            line-height: 30px;
            margin: 25px 0 54px;
            display: inline;
        }

        .col-header-img {
            position: relative;
        }

        .col-header-img img {
            position: absolute;
        }

        .col-header-img img.img-header-lg {
            right: -150px;
            top: -73px;
            z-index: 30;
            border-radius: 40%;
        }

        .col-header-img img.img-header-sm {
            right: -100px;
            top: 222px;
            z-index: 20;
            border-radius: 40%;
        }


        .banner_btn {
            font-size: 14px;
            line-height: 58px;
            text-align: center !important;
            font-family: tahoma;
            font-weight: 700;
            width: 220px;
            height: 60px;
            display: inline-block;
            text-transform: uppercase;
            border-radius: 50px;
            border: 2px solid transparent;
            transition: all 0.5s linear;
            color: #272929;
            background: white;
            margin-right: 10px;
        }

        .banner_btn:hover {
            text-decoration: none;
        }

        .social {
            margin-top: 50px;
        }

        .social a {
            color: white;
            font-size: 20px;
            margin-right: 10px;
            margin-left: 20px;

        }

        .navbar {
            padding: 24px 0;
            border-bottom: none !important;
            transition: all 0.5s ease-in-out;
        }

        .navbar ul li a {
            color: white !important;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            font-size: 13px;
            transition: all 0.5s ease-in-out;
            background: transparent !important;
        }

        .navbar ul li a:hover,
        .navbar ul li a:focus {

            color: deepskyblue !important;
            background: none !important;
        }

        .navbar-toggle {
            border: 1px solid white !important;
            color: white !important;
            transition: all 0.5s ease-in;
        }

        .icon-bar {
            color: white !important;
            background-color: white !important;
        }

        .navbar-toggle:hover {
            background-color: deepskyblue !important;
        }

        .navbar-inverse .navbar-collapse {
            background-color: transparent !important;
        }

        .location {
            border: 1px solid white;
            border-radius: 50px;
        }

        .navbar-inverse {
            background-color: transparent !important;
        }

        .navbar-brand {
            color: white !important;
            font-weight: bold;
        }

        .navbar-brand:hover {
            color: white;
        }

        p {
            margin-left: -55px;
        }

        @keyframes ani-mouse {
            0% {
                opacity: 1;
                top: 29%;
            }

            15% {
                opacity: 1;
                top: 50%;
            }

            50% {
                opacity: 0;
                top: 50%;
            }

            100% {
                opacity: 0;
                top: 50%;
            }
        }

        .scroll-btn {
            display: block;
            position: absolute;
            left: 0;
            right: 0;
            text-align: center;
            margin-top: -30px;
        }

        .scroll-btn>* {
            display: inline-block;
            line-height: 18px;
            font-size: 13px;
            font-weight: normal;
            color: #7c8c8d;
            color: #ffffff;
            font-family: tahoma;
            letter-spacing: 2px;
        }

        .scroll-btn>*:hover,
        .scroll-btn>*:focus,
        .scroll-btn>*:active,
        .scroll-btn>*.active {
            opacity: 0.8;
            filter: alpha(opacity=80)
        }

        .scroll-btn .mouse {
            position: relative;
            display: block;
            width: 35px;
            height: 55px;
            margin: 0 auto 20px;
            box-sizing: border-box;
            border: 3px solid white;
            border-radius: 23px;
        }

        .scroll-btn .mouse>* {
            position: absolute;
            display: block;
            top: 29%;
            left: 50%;
            width: 8px;
            height: 8px;
            margin: -4px 0 0 -4px;
            background: white;
            border-radius: 50%;
            animation: ani-mouse 2.5s linear infinite;
        }

        .secondary {
            background-image: -webkit-linear-gradient(145deg, #faa61f 0%, #ed1847 100%);
            transition: all 0.5s ease-in;

        }

        /*************
        
        Abaut us section styling starts
                .section_title {}

        *****************/

        .section_subtitle {
            margin-bottom: 7px;
            padding-left: 7px;
            font-size: 16px;
            line-height: 1;
            text-transform: uppercase;
            color: #aaaaaa;
            border-left: 3px solid #bfa67a;
            font-size: 700;
            font-family: tahoma;
        }

        .section_main_title {
            margin-top: 0;
            margin-bottom: 37px;
            font-size: 30px;
            line-height: 1.27;
            font-weight: 300;
        }

        .section_main_title strong {
            font-weight: 600;
        }

        /*  .about-box {
            -webkit-box-shadow: 0 0 0 10px #000000 inset;
            box-shadow: 0 0 0 10px #000000 inset;
            margin-right: 100px;
            position: relative;
            display: block;
        }

        /* .box-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: #000;
            opacity: 0.5;
            z-index: 3;
            transform: translateY(30px) translateX(-30);
            -webkit-transform: translateY(30px) translateX(-30);
        }

        .about-box .videopopup img {
            transform: translateY(30px) translateX(-30);
            -webkit-transform: translateY(30px) translateX(-30);
            width: 100%;
            z-index: 1;
        }

        .about-box .videopopup {
            position: relative;
        }

        .sonar-wrapper {
            position: absolute;
            z-index: 9;
            top: 50%;
            left: 50%;
            margin-left: -40px;
            margin-top: 20px;
        }

        .sonar-emitter {
            position: relative;
            margin: 0px auto;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #bfa67a;
            text-align: center;
        }

        .sonar-emetter i {
            z-index: 10;
            font-size: 20px;
            color: white;
            margin-left: 4px;
            line-height: 32px;
        }

        .sonar-wave {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            border-radius: 9999px;
            background-color: #bfa67a;
            opacity: 0;
            z-index: -1;
            pointer-events: none;
        }

        .sonar-wave {
            animation: sonarWave 2s linear infinite;
        }

        @keyframes sonarWave {
            from {
                opacity: 0.4;
            }

            to {
                transform: scale(3);
                opacity: 0;
            }
        }*/

        .btn-color-background {
            -moz-user-select: none;
            background-image: -webkit-linear-gradient(145deg, #faa61f 0%, #faa61f 0%, #ed1847 100%);
            border: 1px solid #bfa67a;
            border-radius: 2px;
            color: #ffffff;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            line-height: 1.42857;
            margin-bottom: 0;
            padding: 12px 48px;
            text-align: center;
            text-transform: uppercase;
            transition: all 0.5s ease 0s;
            vertical-align: middle;

        }

        .btn-color-background:hover {
            text-decoration: none;
            color: #272627;
            background: transparent;
        }
     
     /****************************************************************

				Service  session start

     ****************************************************************/

     .services-     item
     {
     	padding: 0 8px;
}

     .services-item span
     {
     	float: left;
     	font-size: 45px;
     	color: #bfa67a;
     	line-height: 45px;
     }

     .services-single-item
     {
     	margin-left: 65px;
     }

     .services-heading
     {
     	margin-bottom: 8px;
     	padding-bottom: 10px;
     	position: relative;
     	text-transform: uppercase;
     	font-size: 12px;
     	font-weight: 600;

     }

     h5.services-heading:after
     {
     	content: "";
     	width: 30px;
     	height: 2px;
     	background: #bfa67a;
     	position: absolute;;
     	left: 0;
     	bottom: 0;
     	color: #272727;

     }
     .gaps
     {
     	margin-top: 50px;
     }


     /**************************************
		stat counting up effect and style

     *************************************/

    .stat
	     {
	     	background: #212121;
	     	padding-top: 80px;
	     	padding-bottom: 80px;
	     	color: white;
	     	margin-top: 100px;
	     }
	     .stat ion-icon
	     {
	     	font-size: 45px;

	     }
	     .stat-items h2
	     {
	     	font-weight: bolder;
	     	font-size: 32px;
	     	color: darkorange;
	     }
	     .stat p
	     {
	     	font-weight: bold;
	     	letter-spacing: 1px;
	     }


	     /***********************************************
	     			BLOG
	     ************************************************/

	     .latest-news-area
	     {
	     	margin-top: 40px;
	     }
	     .latest-news-wrap
	     {
	     	box-shadow: 0px 3px 10px rgba(0,0,0,0.1);

	     }
	     .news-img
	     {
	     	position: relative;

	     }
	     .news-img:before
	     {
	     	position: absolute;
	     	left: 0;
	     	top: 0;
	     	width: 100%;
	     	height: 100%;
	     	background: #000;
	     	content: "";
	     	opacity: 0;
	     	transform: scale(.8);
	     	transition: all 0.5s;
	     }
	     .latest-news-wrap:hover .news-img:before
	     {
	     	opacity: .5;
	     	transform: scale(1);
	     }
	     .deat
	     {
	     	background: #f89406 none repeat scroll 0 0;
	     	height: 70px;
	     	left: 0;
	     	position: absolute;
	     	text-align: center;
	     	top: 0;
	     }

	     .deat span
	     {
	     	display: block;
	     	color: white;
	     	font-weight: 700;
	     	font-size: 16px;
	     	padding: 5px 20px;

	     }
	     .news-content
	     {
	     	padding: 20px;
	     	margin-left: 3px;
	     }
	     .news-content i
	     {
	     	font-size: 18px;
	     	display: inline-block;
	     }
	     .news-content .fab
	     {
	     	padding: 10px 10px;
	     	cursor: pointer;
	     }
	     .news-content  .fa-facebook-f
	     {
	     	color: #3b5995;
	     }
	     .news-content  .fa-twitter
	     {
	     	color: #0084b4;
	     }
	     .news-content  .fa-linkedin
	     {
	     	color: #0077b5;
	     }
	     .news-content  .fa-youtube
	     {
	     	color: red;
	     }
	     .news-content  .fa-whatsapp
	     {
	     	color: #34af23;
	     }
	     .news-content p
	     {
	     	margin-bottom: 15px;
	     	text-align: justify;
	     	margin-top: 20px;
	     }
	     .news-content a
	     {
	     	font-size: 14px;
	     	background-color: #e0ad23;
	     	padding: 10px 20px;
	     	color: white;
	     	transition: all 0.5 ease-in;
	     }

	     .news-content a:hover
	     {
	     	font-size: 14px;
	     	border: 1px solid #34495e;
	     	border-top-right-radius: 20px;
	     	background-color: transparent;
	     	color: #34495e;
	     	text-decoration: none;
	     	transition: all 0.5 ease-in;
	     }
	     #map
	     {
	     	width: 100%;
	     	height: 500px;
	     }

/************************************
                 GALLERRY
**************************************/

div .gallery{
  border: 3px solid #faa61f;
  margin-bottom: 20px;
}

div .gallery:hover {
  border: 3px solid #ed1847;
}

div.gallery img {
  width: 100%;
  height: auto;
  filter: grayscale(100%);
-webkit-filter: grayscale(100%);
}
div.gallery img:hover {

    -webkit-filter: none;
}

div .desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}


/*********************************************************************************
            paragraphe
********************************************************************************/
    div#div1 {
    float: left;
    }
    div#div2 {
    float: right;
    }
    .clear {
    clear: both;
    }
/********************************************************************************
            counter
********************************************************************************/



.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 13px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #4ad1e5;
}
.timer
{
   color: darkorange;
}
.img img{
        filter: grayscale(100%);
    -webkit-filter: grayscale(100%);
}
.img img:hover{
        filter: none;
    -webkit-filter: none;
}
.about-section{
    height: 100vh;
    width: 100vw;
    border: 2 solid #000;
}

    </style>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
</head>

<body>
	<script src="jquery.waypoints.min.js"></script>
	<script src="jquery.counterup.min.js"></script>


	<link  href = " https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css "  rel = " stylesheet " >
    <script  src = "https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"> </script>



    <nav class="navbar  navbar-fixed-top" id="navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand">BETON-CONSTRUCTION</a>
            </div>
            <div class="collapse navbar-collapse" id="navi">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="accueil">ACCUEIL</a></li>
                    <li><a href="#about" class="about">A PROPOS DE NOUS</a></li>
                    <li><a href="#services" class="services">NOTRE SERVICE</a></li>
                    <li><a href="#latest" class="blog">BLOG</a></li>
                    <li><a href="contact/message.php">CONTACTEZ NOUS</a></li>
                    <li><a href="#map" class="location">NOTRE EMPLACEMENT</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="header-home">
        <div class="container">
            <div class="row">
                <div class="row col-header-text">
                    <h1>BIENVENUE A <span>BETON-CONTRUCTION</span>, LES BATISSEURS DE LA QUALITE .</h1>
                    <div id="div1" class="col-md-6">
                        
                        <p>
                        <h3 style="font-weight: bold;">Qui nous sommes</h3>
                        Une entreprise fiable et professionnelle de maintenance, de rénovation<br>
                         et de construction réactive et planifiée basée en Côte d'Ivoire, à Abidjan.<br><br>

                        Avec une solide réputation de qualité, une fiabilité constante, une relation 
                        Client exceptionnelle et une sensibilité aux besoins particuliers de l’éducation et des soins de santé.
                        De plus, nous sommes bien connus pour livrer des projets dans les délais et dans les limites du budget.<br>
                        </p> 
                    </div>
                    <div id="div2" class="col-md-6">
                        <p>
                        <h3 style="font-weight: bold;"> Une entreprise à laquelle vous pouvez faire confiance.</h3>
                          . Notre main-d'œuvre est d'origine locale, 
                           motivée et hautement qualifiée, en particulier en liaison avec la clientèle, chose difficile 
                           à trouver dans une autre entreprise de construction.
                        </p>
                    </div>
                    <div class="clear"></div><br><br><br>
                    <p class="row">
                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="dep2.jpg">
                              <img src="dep2.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <div class="desc"> Chantier de Rénovation</div>
                          </div>
                        </div>

                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="dep3.jpg">
                              <img src="dep3.jpg" alt="Northern Lights" width="600px" height="400px">
                            </a>
                            <div class="desc"> Chantier de Rénovation</div>
                          </div>
                        </div>

                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="dep.jpg">
                              <img src="dep.jpg" alt="Mountains" width="600" height="400">
                            </a>
                            <div class="desc"> Chantier de Rénovation</div>
                          </div>
                        </div>

                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="dep1.jpg">
                              <img src="dep1.jpg" alt="Mountains" width="600" height="400">
                            </a>
                            <div class="desc"> Chantier de Rénovation</div>
                          </div>
                        </div>
                    </p>
                    <p class="row">
                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="imge.jpg">
                              <img src="imge.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <div class="desc"> Chantier de Maintenance</div>
                          </div>
                        </div>

                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="img1.jpg">
                              <img src="img1.jpg" alt="Northern Lights" width="600px" height="400px">
                            </a>
                            <div class="desc"> Chantier de Maintenance</div>
                          </div>
                        </div>

                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="img2.jpg">
                              <img src="img2.jpg" alt="Mountains" width="600" height="400">
                            </a>
                            <div class="desc"> Chantier de Maintenance</div>
                          </div>
                        </div>

                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="img3.jpg">
                              <img src="img3.jpg" alt="Mountains" width="600" height="400">
                            </a>
                            <div class="desc"> Chantier de Maintenance</div>
                          </div>
                        </div>
                    </p>
                    <p class="row">
                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="log.jpg">
                              <img src="log.jpg" alt="Forest" width="600" height="400">
                            </a>
                            <div class="desc"> Chantier de Construction</div>
                          </div>
                        </div>

                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="log1.jpg">
                              <img src="log1.jpg" alt="Northern Lights" width="600px" height="400px">
                            </a>
                            <div class="desc"> Chantier de Construction</div>
                          </div>
                        </div>

                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="logo.jpg">
                              <img src="logo.jpg" alt="Mountains" width="600" height="400">
                            </a>
                            <div class="desc"> Chantier de Construction</div>
                          </div>
                        </div>

                        <div class="responsive col-lg-3">
                          <div class="gallery">
                            <a target="_blank" href="logo1.jpg">
                              <img src="logo1.jpg" alt="Mountains" width="600" height="400">
                            </a>
                            <div class="desc"> Chantier de Construction</div>
                          </div>
                        </div>
                    </p>
            </div>
        </div>
    <!--     <span class="scroll-btn">
            <a href="">
                <span class="mouse">
                    <span></span>
                </span>
            </a>
            <p>scroll me</p>
        </span> -->

    </section>

    <br><br><br><br><br><br><br>

    <section id="about" class="section-padding about-section">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section_title"><br>
                        <div class="section_subtitle">A PROPOS DE NOUS</div>
                        <h2 class="section_main_title"><strong>Présentation</strong></h2>
                    </div>
                    <div class="about-item">
                        <p>
                            BETON-CONSTRUCTION<br>
                            est une entreprise prospère basée en Côte d'Ivoire,
                            spécialisée dans la construction, la maintenance
                            et la rénovation de bâtiments.
                        </p>
                        <p>
                            La réalisation de projets qui satisfont et dépassent
                            les attentes des propriétaires est un processus qui commence au
                            stade de la conception avec une équipe collaborative,
                            de la conception à la construction.
                        </p>
                        <p>

<strong style="font-size: 25px;"> Pourquoi choisir BETON-CONSTRUCTION ?<br></strong>

<p>Depuis nos débuts, ceux qui nous ont utilisé comme une entreprise avec une attitude de petite entreprise 
et une grande aptitude en affaires nous connaissent. Nos clients apprécient le fait que tous nos employés soient 
hautement qualifiés en compétences de service à la clientèle, car cela les aide à avoir l'assurance de pouvoir toujours 
les tenir informés. Ils apprécient également notre vaste gamme de capacités, car ils savent que quelle que soit la taille 
de l'emploi ou les difficultés qu'il engendre, nous pourrons le mener à bien dans les délais impartis et dans les limites du budget.

Nos clients, qui nous contactent fréquemment par le biais de projets référés ou répétés (en contournant souvent le processus
 d'appel d'offres habituel), attachent une grande importance à notre professionnalisme, à nos compétences en construction, 
 à nos conseils avisés et à la gamme de services fournie par une source unique. Nous avons bâti notre réputation dans les
  secteurs des services de bâtiments publics et commerciaux sur les différenciateurs clés suivants, qui, nous le savons, 
  sont précieux pour nos clients et limités chez d’autres entrepreneurs.</p>

<p>

	Un large éventail de compétences et d'expérience<br><br>

	Tous les employés sont contrôlés<br><br>

	Expertise spécialisée dans des domaines sensibles tels que les bâtiments scolaires et les établissements de santé<br><br> 

	Un flair pour minimiser les perturbations dans les environnements de travail réels<br><br>

	Tous nos employés ont une formation poussée en liaison avec la clientèle.<br><br>

	Engagement et soutien envers nos clients<br><br>

	Digne de confiance et intégrité - nous sommes une entreprise éthique qui fait toujours ce qu’elle promet de faire.<br><br>

	Nos différenciateurs nous permettent de vous offrir les avantages suivants:<br><br>

	Services de construction, de maintenance et de rénovation de grande qualité pour des bâtiments modernes et historiques;<br><br>

	Perturbation minime du site pendant les travaux<br><br>

	Économie de temps et d'argent<br><br>

	Rassurance et tranquillité d'esprit<br><br>

	Réputation professionnelle améliorée / protégée - nous sommes une paire de mains sûrement sûre<br><br>
</p>
<a href="#mogo" style="text-decoration: none;" class="btn-color-background">Lire la suite</a>

                    <div class="hgt-20"></div>
                        <div class="home-button"><br>
                            
                        </div>
                    </div>
                </div>
                <div classs="col-sm-6 col-sm-offset-2">
                    <div class="about-box">
                        <div class="box-overlay"></div>
                        <a target="_blank" href="iron.jpg" class="img">
                            <img class="img-thumbnail img-fluid" src="iron.jpg" alt="">
                        </a>
                    </div><br><br>

                     <div classs="col-sm-6 col-sm-offset-2">
                    <div class="about-box">
                        <div class="box-overlay"></div>
                        <a target="_blank" href="iron.jpg" class="img">
                            <img style="width: 510px; height: 340px;" class="img-thumbnail img-fluid" src="cons.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br><br><br><br>
    
    <section id="services" class="section-padding services-section">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section_title">
                        <div class="section_subtitle">SERVICES</div>
                        <h2 class="section_main_title">Que faisons <strong> nous ?</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 gaps">
                    <div class="services-item">
                        <a href="#"><span class="fas fa-toolbox"></span></a>
                        <div class="services-single-item">
                            <P>
                            	<h5 class="services-heading"><a href="#">CONSTRUCTION DE BATIMENT</a></h5>
                                Quels que soient la taille ou l'emplacement de votre projet, les compétences, 
                                l'expérience et l'orientation client de vos entrepreneurs en construction peuvent
                                 réellement déterminer son succès. Que vous souhaitiez une petite extension d'école
                                  construite ou un complexe, un grand développement d'unités commerciales de haute 
                                  technologie en construction, vous devez choisir une entreprise en laquelle vous 
                                  pouvez avoir confiance.
                            </P>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 gaps">
                    <div class="services-item">
                        <a href="#"><span class="fas fa-store-alt"></span></a>
                        <div class="services-single-item">
                            <P>
                            	<h5 class="services-heading"><a href="#">RENOVATION DE BATIMENT</a></h5>
                                Vous êtes peut-être en train de rénover une petite réception de bureau ou 
                                vous envisagez une rénovation ambitieuse d'un commerce ou d'une école qui 
                                prendra des mois, voire des années? Quelles que soient vos exigences, les 
                                compétences, l’expérience et l’attention portée aux clients par les entrepreneurs 
                                en rénovation de bâtiments choisis peuvent réellement déterminer son succès.
                            </P>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 gaps">
                    <div class="services-item">
                       <a href=""><span class="fas fa-paint-roller"></span></a>
                        <div class="services-single-item">
                            <P>
                            	 <h5 class="services-heading"><a href="#">MAINTENANCE DE BATIMENT</a></h5>
                                À quoi pensez-vous lorsque vous entendez le terme maintenance de bâtiment? 
                                Des projets de maintenance massif sur des bâtiments emblématiques classés, des 
                                appels d’urgence lors des froides matinées hivernales ou les avantages d’un 
                                entretien pratique et économique pour vos locaux? Quoi que l’on pense, les 
                                compétences, l’expérience et l’attention portée à la clientèle des entreprises 
                                de maintenance sélectionnées peuvent faire toute la différence pour votre 
                                porte-monnaie et votre santé.
                            </P>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="stat" id="stats">
    	<div class="content-box">
    		<br><br>
    		<div class="container">
    			<!-- <div class="row text-center">
					<div class="col-md-3">
						<div class="stat-items">
							<ion-icon ios="ios-alarm" md="md-alarm"></ion-icon>
							<h2><span class="counter text-center">3200</span> <span>+</span></h2>
							<p>VUES</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="stat-items">
							<ion-icon ios="ios-time" md="md-time"></ion-icon>
							<h2><span class="counter text-center">3987</span> <span>+</span></h2>
							<p>AVIS</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="stat-items">
							<ion-icon name="logo-buffer"></ion-icon>
							<h2><span class="counter text-center">8857</span> <span>+</span></h2>
							<p>A L'ECHELLE MONDIALE</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="stat-items">
							<ion-icon ios="ios-flask" md="md-flask"></ion-icon>
							<h2><span class="counter text-center">9757</span> <span>+</span></h2>
							<p>ANNONCER</p>
						</div>
					</div> -->
           

                <div class="row text-center">
                    <div class="col-md-3">
                        <div>
                            <ion-icon ios="ios-alarm" md="md-alarm"></ion-icon>
                            <h2 class="timer count-title count-number" data-to="3200" data-speed="25000"></h2>
                            <p class="count-text ">VUES</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <ion-icon ios="ios-time" md="md-time"></ion-icon>
                            <h2 class="timer count-title count-number" data-to="11900" data-speed="25000"></h2>
                            <p class="count-text ">AVIS</p>
                        </div>
                    </div>
                        <div class="col-md-3">
                            <div>
                               <ion-icon name="logo-buffer"></ion-icon>
                               <h2 class="timer count-title count-number" data-to="157" data-speed="25000"></h2>
                               <p class="count-text ">A L'ECHELLE MONDIALE</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class=>
                               <ion-icon ios="ios-flask" md="md-flask"></ion-icon>
                               <h2 class="timer count-title count-number" data-to="157" data-speed="25000"></h2>
                               <p class="count-text ">ANNONCER</p>
                            </div>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
    	</div>
    </section>
    <br><br><br>
    <section class="latest-new-area" id="latest">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<div class="section_title">
    					<div class="section_subtitle">Blog</div>
    					<h2><strong>Blogs </strong>récent</h2>
    				</div>
    			</div>
    		</div>
    		<br><br>
    		<div class="row">
    			<div class="news-active">
    				<div class="col-md-4">
    					<div class="latest-news-wrap">
    						<div class="news-img">
    							<img src="img2.jpg" class="img-responsive">
    							<div class="deat">
    								<span>01</span>
    								<span>BET</span>
    							</div>
    						</div>
    						<div class="news-content">
    							<i class="fab fa-facebook-f"></i>
    							<i class="fab fa-twitter"></i>
    							<i class="fab fa-linkedin"></i>
    							<i class="fab fa-youtube"></i>
    							<i class="fab fa-whatsapp"></i>
    							
                                Des projets de maintenance massif sur des bâtiments emblématiques classés, des 
                                appels d’urgence lors des froides matinées hivernales ou les avantages d’un 
                                entretien pratique...
    							
    							<br><br>
    							<a href="">en savoir plus</a>
    						</div>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="latest-news-wrap">
    						<div class="news-img">
    							<img src="const.jpg" class="img-responsive">
    							<div class="deat">
    								<span>01</span>
    								<span>BET</span>
    							</div>
    						</div>
    						<div class="news-content">
    							<i class="fab fa-facebook-f"></i>
    							<i class="fab fa-twitter"></i>
    							<i class="fab fa-linkedin"></i>
    							<i class="fab fa-youtube"></i>
    							<i class="fab fa-whatsapp"></i>
    							
                                Quels que soient la taille ou l'emplacement de votre projet, les compétences, 
                                l'expérience et l'orientation client de vos entrepreneurs en construction peuvent
                                 réellement déterminer son succès...
    							
    							<br><br>
    							<a href="">en savoir plus</a>
    						</div>
    					</div>
    				</div>
    				<div class="col-md-4">
    					<div class="latest-news-wrap">
    						<div class="news-img">
    							<img src="dep.jpg" class="img-responsive">
    							<div class="deat">
    								<span>01</span>
    								<span>BET</span>
    							</div>
    						</div>
    						<div class="news-content">
    							<i class="fab fa-facebook-f"></i>
    							<i class="fab fa-twitter"></i>
    							<i class="fab fa-linkedin"></i>
    							<i class="fab fa-youtube"></i>
    							<i class="fab fa-whatsapp"></i>
    							
    							
                                Vous êtes peut-être en train de rénover une petite réception de bureau ou 
                                vous envisagez une rénovation ambitieuse d'un commerce ou d'une école qui 
                                prendra des mois...
                            	
    							 
    							<br><br>
    							<a href="">en savoir plus</a>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section><br><br>



    <section id="map"></section>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLOzG60R1gKFswtRbEuQ56WqhA1oGDXCo"></script>


    <script>
        $(window).scroll(function (){
            var top = $(window).scrollTop();
            if (top >= 60) {
                $("nav").addClass('secondary');
            } else
            if ($("nav").hasClass('secondary')) {
                $("nav").removeClass('secondary');
            }
        });
    </script>

    <script>
   		jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
   	</script>

   	<script type="text/javascript">

   		$(document).ready(function(){
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init(){
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(40.6700, -73.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
                };

                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.6700, -73.9400),
                    map: map,
                 title: 'Snazzy!'

                });
            }

          });

        </script>

   	<script type="text/javascript">
   		$(document).ready(function(e){

   			$(".btn-color-background").prev().hide();
   			$(".btn-color-background").click(function(e){

   		
   				if($(this).prev().is(":hidden")) {
   					$(this).text("Moins");
   				}
   				else{
   					$(this).text("En savoir plus");
   				}
   				$(this).prev().toggle("slow");
   			});

   		});
   	</script>
    <script type="text/javascript">
        (function ($) {
    $.fn.countTo = function (options) {
        options = options || {};
        
        return $(this).each(function () {
            // set options for current element
            var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
            }, options);
            
            // how many times to update the value, and how much to increment the value on each update
            var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;
            
            // references & variables that will change with each update
            var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};
            
            $self.data('countTo', data);
            
            // if an existing interval can be found, clear it first
            if (data.interval) {
                clearInterval(data.interval);
            }
            data.interval = setInterval(updateTimer, settings.refreshInterval);
            
            // initialize the element with the starting value
            render(value);
            
            function updateTimer() {
                value += increment;
                loopCount++;
                
                render(value);
                
                if (typeof(settings.onUpdate) == 'function') {
                    settings.onUpdate.call(self, value);
                }
                
                if (loopCount >= loops) {
                    // remove the interval
                    $self.removeData('countTo');
                    clearInterval(data.interval);
                    value = settings.to;
                    
                    if (typeof(settings.onComplete) == 'function') {
                        settings.onComplete.call(self, value);
                    }
                }
            }
            
            function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
            }
        });
    };
    
    $.fn.countTo.defaults = {
        from: 0,               // the number the element should start at
        to: 0,                 // the number the element should end at
        speed: 1000,           // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,           // the number of decimal places to show
        formatter: formatter,  // handler for formatting the value before rendering
        onUpdate: null,        // callback method for every time the element is updated
        onComplete: null       // callback method for when the element finishes updating
    };
    
    function formatter(value, settings) {
        return value.toFixed(settings.decimals);
    }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
    formatter: function (value, options) {
      return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    $this.countTo(options);
  }
});
    </script>
   	<?php /*require_once 'footer.php';s*/ ?>
</body>
</html>

<?php require_once 'footer.php'; ?>