<?php
session_start();
   include "lang/config.php";

?>
<!DOCTYPE html>
<html class='no-js'>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title><?php echo $lang['title']; ?></title>

    <!--[if lt IE 9]>
		  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

    <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href='css/ionicons.min.css'>

    <link rel='stylesheet' type='text/css' href='css/owl.carousel.css'>
    <link rel='stylesheet' type='text/css' href='css/owl.theme.css'>
    <link rel='stylesheet' type='text/css' href='css/owl.transitions.css'>
    <link rel='stylesheet' type='text/css' href='css/magnific-popup.css'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <link rel='stylesheet' type='text/css' href='css/color-default.css'>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
    .language {
        position: fixed;
        bottom: 30px;
        left: 30px;
        margin: 10px;
    }
    </style>


</head>

<body>


    <!--=============================================================================
			Preloader
		===============================================================================-->
    <div id='preloader'>
        <div class='loader'>
            <img src='img/load.gif' alt='symp'>
        </div>
    </div>



    <!--=============================================================================
			Main Wrapper
		===============================================================================-->
    <div id='wrapper'>

        <!--=============================================================================
				Front Section
			===============================================================================-->
        <section class='front-section'>

            <div class='container'>


                <div class='transition-mask'></div>


                <div class='front-person-img'>

                    <!--person's image-->
                    <img src='img/yy.png' alt='Symp' style="max-width: 120%; margin-left: -6%; margin-top: -39%;">
                    <!--/person's image-->

                </div>

                <!--person's titles-->
                <div class='front-person-titles'>

                    <!--title1-->
                    <span class='t1'>
                        eddibes
                    </span>
                    <!--/title1-->

                    <!--title2-->
                    <span class='t2'>
                        souad :
                    </span>

                    <!--/title2-->

                    <!--title3-->
                    <span class='t3'>
                        youcode
                    </span>
                    <!--/title3-->

                </div>
                <!--/person's titles-->

                <nav class='front-person-links'>

                    <!--
							navigation links, data-section attribute points towards the section with id to be opened. 
						-->

                    <ul>

                        <li>
                            <a href='#' data-section='about'><?php echo $lang["A1"]; ?></a>
                        </li>

                        <li>
                            <a href='#' data-section='portfolio'><?php echo $lang["A2"]; ?></a>
                        </li>



                        <li>
                            <a href='#r' data-section='resume'><?php echo $lang["A3"]; ?></a>
                        </li>

                        <li>
                            <a href='#' data-section='blog'><?php echo $lang["A4"]; ?></a>
                        </li>

                        <li>
                            <a href='#' data-section='contact'><?php echo $lang["A5"]; ?></a>
                        </li>

                        <li>
                            <a href='contact.php'>S'identifier</a>
                        </li>
                    </ul>

                </nav>



                <div class='front-heading text-center'>

                    <h2>
                        EDDIBES SOUAD
                    </h2>



                </div>


            </div>

        </section>
        <!--=============================================================================
				/Front Section
			===============================================================================-->

        <!--=============================================================================
				About Section
			===============================================================================-->
        <section id='about' class='about-section section'>

            <div class='basic-info section-block'>

                <div class='container'>

                    <div class='section-header text-center'>

                        <h2>Informations de base sur moi</h2>

                        <!--divider-->
                        <div class='divider-draft center'></div>
                        <!--/divider-->


                    </div>

                    <div class='row'>

                        <div class='col-md-4'>
                            <div class='about-person-img'>

                                <img src='img/souad.jpg' alt='symp'>

                            </div>

                        </div>


                        <div class='col-md-8 about-info'>

                            <p>je m'appelle Souad EDDIBES je suis originaire de youssoufia,actuellement je poursuivi mes
                                études à l'école de programation Youcode à Youssoufia et j'ai 30 ans.
                                je suis titulaire d'unbaccaluréat science humain.
                                j'ai participé à l'organisation des hackatone,dont lesquels j'ai acquis les qualités
                                suivantes:travail en équipe,l'organisation des activités,la communication.
                                pour les langages de programmation je maitrise trés bien les deux langage
                                suivants:HTML,CSS.
                                je suis un personne sociables dynamique,je peux m'adapter avec tous les types
                                d'environnements du travail.
                            </p>

                            <div class='clearfix'></div>


                            <ul class='info-list'>

                                <li>
                                    <div class='inner'>
                                        <h4>Nom et prénome</h4>
                                        <p>SOUAD EDDIBES</p>
                                    </div>
                                </li>
                                <li>
                                    <div class='inner'>
                                        <h4>Age</h4>
                                        <p>30 ans</p>
                                    </div>
                                </li>
                                <li>
                                    <div class='inner'>
                                        <h4>gmail</h4>
                                        <p>souad.eddibes@gmail.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class='inner'>
                                        <h4>ville</h4>
                                        <p>EL YOUSSOUFIA</p>
                                    </div>
                                </li>



                            </ul>



                            <div class='col-xs-6 text-right'>
                                <ul class='footer-social'>
                                    <li>
                                        <a href='https://www.facebook.com/souad.eddibes'>
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='https://www.linkedin.com/in/souad-eddibes-2152a1180'>
                                            <i class='fab fa-linkedin'></i>
                                        </a>
                                    </li>
                                    <a href='https://github.com/souadov/Geek-q'>
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <i class='ion-social-facebook'></i>


                                </ul>
                            </div>

                        </div>


                    </div>

                </div>


        </section>
        <!--=============================================================================
				/About Section
			===============================================================================-->

        <!--=============================================================================
				Resume Section
			===============================================================================-->
        <section id='resume' class='resume-section section'>

            <div class='container'>
                <div class='row'>
                    <div class='col-md-6 col-md-offset-3'>
                        <div class='section-header text-center'>

                            <h2 class='animate text-over-block'>Mon CV</h2>

                            <!--divider-->
                            <div class='divider-draft center'></div>
                            <!--/divider-->


                        </div>
                    </div>
                </div>
            </div>

            <div class='timeline-block section-block'>
                <div class='container'>
                    <ul class='timeline'>

                        <li class='timeline-header'>
                            <h4>Education</h4>
                        </li>

                        <li>

                            <div class='timeline-desc'>

                                <h4>2010-2011</h4>

                            </div>

                            <div class='timeline-content'>

                                <h4>Titulaire d’un Baccalauréat science humain</h4>

                            </div>

                        </li>

                        <li class='inverse'>

                            <div class='timeline-desc'>

                                <h4>2011-2014</h4>

                            </div>

                            <div class='timeline-content'>



                                <p>

                                    Étudiant à la faculté des sciences, juridiques, économiques
                                    à marrakach

                                </p>

                            </div>

                        </li>

                        <li>

                            <div class='timeline-desc'>

                                <h4>2019-2020</h4>

                            </div>

                            <div class='timeline-content'>




                                <p>

                                    je poursuit mes études à l’école de programmation Youcode à Youssoufia
                                </p>

                            </div>

                        </li>


                        <li class='timeline-header'>
                            <h4>Experience</h4>
                        </li>


                        <li>

                            <div class='timeline-desc'>

                                <h4>5-11-2019</h4>

                            </div>

                            <div class='timeline-content'>

                                particpé à l’organisation des Hackatone





                            </div>

                        </li>

                        <li class='inverse'>

                            <div class='timeline-desc'>

                                <h4>1-11-2019</h4>

                            </div>

                            <div class='timeline-content'>



                                <p>
                                    realisation d' un projet application banquaire avec capgimini
                                </p>

                            </div>

                        </li>








                </div>


            </div>

            <div class='hobbies-block bg-lightgray section-block'>
                <div class='container'>

                    <div class='section-header text-center'>
                        <h2 class='animate text-over-block'>loisirs</h2>
                        <!--divider-->
                        <div class='divider-draft center'></div>
                        <!--/divider-->
                    </div>

                    <div class='row'>

                        <div class='col-md-2 col-sm-4 col-xs-6'>

                            <div class='hobby'>

                                <div class='icon'>
                                    <i class='ion-ios-game-controller-b'></i>
                                </div>

                                <h4>jeux vidéo</h4>

                            </div>

                        </div>

                        <div class='col-md-2 col-sm-4 col-xs-6'>

                            <div class='hobby'>

                                <div class='icon'>
                                    <i class='ion-ios-book'></i>
                                </div>

                                <h4>lecture</h4>

                            </div>

                        </div>



                        <div class='col-md-2 col-sm-4 col-xs-6'>

                            <div class='hobby'>

                                <div class='icon'>
                                    <i class='ion-ios-musical-notes'></i>
                                </div>

                                <h4>La musique</h4>

                            </div>

                        </div>

                        <div class='col-md-2 col-sm-4 col-xs-6'>

                            <div class='hobby'>


                            </div>

                        </div>

                        <div class='col-md-2 col-sm-4 col-xs-6'>

                            <div class='hobby'>



                            </div>

                        </div>



                    </div>



                </div>
            </div>

            <div class='skills-block section-block'>

                <div class='container'>

                    <div class='section-header text-center'>
                        <h2 class='animate text-over-block'>Mes compétences</h2>

                        <!--divider-->
                        <div class='divider-draft center'></div>
                        <!--/divider-->

                    </div>


                    <div class='row'>

                        <div class='col-md-6'>

                            <div class='skill'>

                                <h4>HTML</h4>

                                <div class='skill-bar' data-percent='90'>
                                    <div class='bar'>
                                        <div class='percent'>70%</div>
                                    </div>
                                </div>

                            </div>


                            <div class='skill'>

                                <h4>bootstrap</h4>

                                <div class='skill-bar' data-percent='90'>
                                    <div class='bar'>
                                        <div class='percent'>20%</div>
                                    </div>
                                </div>

                            </div>



                        </div>

                        <div class='col-md-6'>

                            <div class='skill'>

                                <h4>javascript</h4>

                                <div class='skill-bar' data-percent='90'>
                                    <div class='bar'>
                                        <div class='percent'>70%</div>
                                    </div>
                                </div>

                            </div>

                            <div class='skill'>

                                <h4>CSS</h4>

                                <div class='skill-bar' data-percent='85'>
                                    <div class='bar'>
                                        <div class='percent'>50%</div>
                                    </div>
                                </div>

                            </div>

                            <div class='skill'>

                                <h4>SQL</h4>

                                <div class='skill-bar' data-percent='95'>
                                    <div class='bar'>
                                        <div class='percent'>85%</div>
                                    </div>
                                </div>

                            </div>



                        </div>



                    </div>

                </div>

            </div>

            <div class='footer bg-lightgray section-block'>

                <div class='container'>

                    <div class='row'>

                        <div class='col-xs-6 text-left'>
                            <h4>SOUAD EDDIBES</h4>
                        </div>

                        <div class='col-xs-6 text-right'>
                            <ul class='footer-social'>
                                <li>
                                    <a href='https://www.facebook.com/souad.eddibes'>
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://github.com/souadov/Geek-q'>
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://www.instagram.com/souadibes7/?hl=fr'>
                                        <i class="fab fa-instagram"></i>
                                    </a>

                        </div>




                    </div>

                </div>


        </section>

        <!--=============================================================================
				/Services Section
			===============================================================================-->


        <!--=============================================================================
				Portfolio Section
			===============================================================================-->
        <section id='portfolio' class='portfolio-section section'>

            <div class='portfolio-block section-block'>

                <div class='container'>

                    <div class='row'>
                        <div class='col-md-6 col-md-offset-3'>

                            <div class='section-header text-center'>

                                <h2 class='animate text-over-block'>Portfolio</h2>

                                <!--divider-->
                                <div class='divider-draft center'></div>
                                <!--/divider-->

                                <p>
                                    réalesation
                                </p>

                            </div>

                        </div>
                    </div>
                    <!-- 
						<div id='portfolio-filters' >
							<ul>
								
								<li>
									<a href='' data-group='web' >Web</a>
								</li>
								<li>
									<a href='#' data-group='tech' >Tech</a>
								</li>
								<li>
									<a href='#' data-group='photography' >Photography</a>
								</li>
							</ul>
						</div> -->

                    <div id='portfolio-grid' class='portfolio-items'>

                        <div class='item' data-groups='["all","web","photography"]'>
                            <div class='inner'>

                                <img alt='symp' src='img/55711507_1233230033512923_3757555248185475072_n.jpg'>

                                <div class='caption'>

                                    <div class='caption-inner'>

                                        <h4>Project Title</h4>

                                        <ul class='links'>

                                            <li>
                                                <a href='work.php'>
                                                    <i class='ion-ios-plus-empty'></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='img/55920866_438895263321575_6124247322529366016_n.png'
                                                    class='image-link'>
                                                    <i class='ion-ios-search'></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                </div>

                            </div>
                        </div>

                        <!--<div class='item' data-groups='["all","photography","tech"]' >
								<div class='inner' >
									
									<img alt='symp' src='img/ss.PNG' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.html' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='img/55920866_438895263321575_6124247322529366016_n.png' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>-->

                        <!--<div class='item' data-groups='["all","web","tech"]' >
								<div class='inner' >
									
									<img alt='symp' src='img/E.PNG' >
									
									<div class='caption' >
										
										<div class='caption-inner' >
										
											<h4>Project Title</h4>
											
											<ul class='links' >
												
												<li>
													<a href='work.php' >
														<i class='ion-ios-plus-empty' ></i>
													</a>
												</li>
												
												<li>
													<a href='img/ss.png' class='image-link' >
														<i class='ion-ios-search' ></i>
													</a>
												</li>
												
											</ul>
										
										</div>
										
										
									</div>
									
								</div>
							</div>-->

                        <div class='item' data-groups='["all","web"]'>
                            <div class='inner'>

                                <img alt='symp' src='img/b.PNG'>

                                <div class='caption'>

                                    <div class='caption-inner'>

                                        <h4>Titre du projet</h4>

                                        <ul class='links'>

                                            <li>
                                                <a href='work.php'>
                                                    <i class='ion-ios-plus-empty'></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='img/ss.png' class='image-link'>
                                                    <i class='ion-ios-search'></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class='item' data-groups='["all","tech"]'>
                            <div class='inner'>

                                <img alt='symp' src='img/A.png'>

                                <div class='caption'>

                                    <div class='caption-inner'>

                                        <h4>Titre du projet</h4>

                                        <ul class='links'>

                                            <li>
                                                <a href='work.php'>
                                                    <i class='ion-ios-plus-empty'></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='img/01.jpg' class='image-link'>
                                                    <i class='ion-ios-search'></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class='item' data-groups='["all","photography"]'>
                            <div class='inner'>

                                <img alt='symp' src='img/01.jpg'>

                                <div class='caption'>

                                    <div class='caption-inner'>

                                        <h4>Titre du projet</h4>

                                        <ul class='links'>

                                            <li>
                                                <a href='work.php'>
                                                    <i class='ion-ios-plus-empty'></i>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='img/portfolio/6.jpg' class='image-link'>
                                                    <i class='ion-ios-search'></i>
                                                </a>
                                                </i>

                                        </ul>

                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class='item' data-groups='["all","web"]'>
                            <div class='inner'>

                                <img alt='symp' src='img/portfolio/7.jpg'>

                                <div class='caption'>

                                    <div class='caption-inner'>

                                        <h4>Titre du projet</h4>

                                        <ul class='links'>

                                            <li>
                                                <a href='work.php'>
                                                    <i class='ion-ios-plus-empty'></i>

                                            </li>

                                        </ul>

                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class='item' data-groups='["all","tech"]'>
                            <div class='inner'>



                                <div class='caption'>

                                    <div class='caption-inner'>

                                        <h4>Titre du projet</h4>

                                        <ul class='links'>

                                            <li>
                                                <a href='work.php'>
                                                    <i class='ion-ios-plus-empty'></i>
                                                </a>
                                            </li>

                                            <li>

                                                <i class='ion-ios-search'></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class='item' data-groups='["all","photography"]'>
                            <div class='inner'>




                                <div class='caption'>

                                    <div class='caption-inner'>

                                        <h4>Titre du projet</h4>

                                        <ul class='links'>

                                            <li>
                                                <a href='work.php'>
                                                    <i class='ion-ios-plus-empty'></i>
                                                </a>
                                            </li>

                                            <li>

                                                <i class='ion-ios-search'></i>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                </div>

                            </div>
                        </div>



                    </div>

                </div>

            </div>

            <div class='footer bg-lightgray section-block'>

                <div class='container'>

                    <div class='row'>

                        <div class='col-xs-6 text-left'>
                            <h4>SOUAD EDDIBES</h4>
                        </div>

                        <div class='col-xs-6 text-right'>
                            <ul class='footer-social'>
                                <li>
                                    <a href='https://www.facebook.com/souad.eddibes'>
                                        <i class='fab fa-facebook-f'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://www.linkedin.com/in/souad-eddibes-2152a1180/'>
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://www.instagram.com/souadibes7/?hl=fr'>
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://github.com/souadov/Geek-q'>
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>


                </div>

            </div>

        </section>
        <!--=============================================================================
				/Portfolio Section
			===============================================================================-->


        <!--=============================================================================
				Blog Section
			===============================================================================-->
        <section id='blog' class='blog-section section'>

            <div class='container'>

                <div class='row'>

                    <div class='col-md-6 col-md-offset-3'>
                        <div class='section-header text-center'>

                            <h2>Mon blog</h2>


                        </div>
                    </div>

                </div>

            </div>

            <div class='posts-block section-block'>

                <div class='container'>

                    <div class='row'>

                        <div class='col-md-8'>

                            <div class='post'>

                                <div class='media'>

                                </div>

                                <div class='content'>

                                    <h4>

                                    </h4>

                                    <ul class='post-icons'>

                                        <li>
                                            <i class='ion-ios-person'></i>
                                            <span>SOUAD EDDIBES</span>
                                        </li>





                                        <img alt='symp' src="img/so.JPG">
                                </div>

                                <div class='content'>

                                    <ul class='post-icons'>

                                        <li>
                                            <i class='ion-ios-person'></i>
                                            <span>SOUAD EDDIBES</span>

                                            <i class='ion-ios-clock'></i>
                                            <span>8 MARS 2019</span>
                                        </li>





                                    </ul>

                                    <p>
                                        Lors de notre participation à l'évenement à l'ecole 1337 khouribga
                                    </p>




                                </div>

                            </div>

                            <div class='post'>

                                <div class='media'>
                                    <img alt='symp' src="img/17.jpg">
                                </div>

                                <div class='content'>

                                    <h4>

                                        l'événement de capgemini

                                    </h4>

                                    <ul class='post-icons'>

                                        <li>
                                            <i class='ion-ios-person'></i>
                                            <span>souad eddibes</span>
                                        </li>

                                        <li>
                                            <i class='ion-ios-clock'></i>
                                            <span>11janvier 2019</span>




                                            <a class='read-more'>


                                </div>


                                <h4>SOUAD EDDIBES</h4>
                            </div>


                        </div>


                    </div>

                </div>


        </section>
        <!--=============================================================================
				/Blog Section
			===============================================================================-->


        <!--=============================================================================
				Contact Section
			===============================================================================-->
        <section id='contact' class='contact-section section'>

            <div class='contact-block section-block'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-6 col-md-offset-3'>

                            <div class='section-header text-center'>
                                <h2 class='animate text-over-block'>Contactez-moi</h2>
                                <!--divider-->
                                <div class='divider-draft center'></div>
                                <!--/divider-->
                                <!-- <p>
										Pour plus d'informations vous pouvez me contacter
									</p> -->
                            </div>

                        </div>
                    </div>

                    <div class='row'>
                        <div class='col-md-8 col-md-offset-2'>

                            <form class='contact-form' action='mail.php' method='post'>

                                <!-- <div id='contact-form-result' ></div> -->

                                <div class='row'>

                                    <div class='col-md-6'>

                                        <div class='form-group'>

                                            <input type='text' class='form-control' placeholder='Nom' name='name'>

                                            <!-- <div class='help-block with-errors' ></div> -->
                                        </div>

                                    </div>

                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <input type='text' class='form-control' placeholder='Email' name='email'>

                                            <!-- <div class='help-block with-errors' ></div> -->

                                        </div>
                                    </div>

                                </div>

                                <div class='row'>

                                    <div class='col-md-6'>
                                        <div class='form-group'>
                                            <input type='text' class='form-control' placeholder='Subject'
                                                name='subject'>
                                            <!-- <div class='help-block with-errors' ></div> -->

                                        </div>
                                    </div>

                                    <!-- <div class='col-md-6' >
											<div class='form-group' >
												<input type='text' class='form-control' placeholder='site web'name='website' required>
												<div class='help-block with-errors' ></div>
												
											</div>
										</div> -->

                                </div>

                                <div class='form-group'>
                                    <textarea rows='5' class='form-control' name='message'
                                        placeholder='Message'></textarea>
                                    <!-- <div class='help-block with-errors' ></div> -->
                                </div>

                                <div class='form-group text-center'>
                                    <input type='submit' class='symp-btn'>
                                </div>


                            </form>
                        </div>
                    </div>


                </div>
            </div>


            <div class='footer bg-lightgray section-block'>

                <div class='container'>

                    <div class='row'>

                        <div class='col-xs-6 text-left'>
                            <h4>SOUAD EDDIBES</h4>
                        </div>

                        <div class='col-xs-6 text-right'>
                            <ul class='footer-social'>
                                <li>
                                    <a href='https://www.facebook.com/souad.eddibes'>
                                        <i class='ion-social-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://www.instagram.com/souadibes7/?hl=fr'>
                                        <i class='ion-social-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href='https://www.linkedin.com/in/souad-eddibes-2152a1180/'>
                                        <i class='ion-social-linkedin'></i>
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>


                </div>

            </div>


        </section>
        <!--=============================================================================
				/Contact Section
			===============================================================================-->
        <div class=" language ">
            <a href="index.php?language=fr"><img src="https://img.icons8.com/color/32/000000/france.png"></a>
            <a href="index.php?language=en"><img src="https://img.icons8.com/color/32/000000/great-britain.png"></a>
        </div>
        <!--close button-->
        <div class='close-btn'>
            <span></span>
            <span></span>
        </div>
        <!--/close button-->


    </div>

    <!--=============================================================================
			/Main Wrapper
		===============================================================================-->


    <!--=============================================================================
			JavaScript Files
		===============================================================================-->
    <script src='js/jquery.min.js'></script>
    <script src='js/jquery.stellar.min.js'></script>
    <script src='js/modernizr.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src='js/jquery.shuffle.min.js'></script>
    <script src='js/jquery.magnific-popup.min.js'></script>
    <script src='js/validator.min.js'></script>
    <script src='js/smoothscroll.js'></script>
    <script src='js/script.js'></script>



</body>

</html>