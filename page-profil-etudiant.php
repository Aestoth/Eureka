<?php
session_start();
require_once ('connexion.php');
$appliBD = new connexion();
$email = $_SESSION['email'];
$idEtudiantByEmail = $appliBD->getEtudiantByEmail($email);
$idEtudiant = $idEtudiantByEmail->getId();
$utilisateurByEmail = $appliBD->getUtilisateurByEmail($email);
$idUtilisateur = $utilisateurByEmail->getId();
$etudiant = $appliBD->getEtudiantById($idEtudiant);
$projets = $appliBD->getListeProjetEtudiant($idEtudiant);
$motsClesetudiant = $appliBD->getEtudiantListeMotCles($idEtudiant);
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- title -->
        <title>Eureka – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="Eureka is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon -->
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <style>

        h5{
          padding:40px;
        }

        .panel-body1{
            padding: 6px;
        }

        .section2 {
          padding: 70px;
        }


        </style>
    </head>
    <body>
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav bg-white header-light nav-box-width navbar-top">
            <div class="container-fluid nav-header-container">
                <div class="row">
                    <!-- start logo -->
                    <div class="col-md-2 col-xs-5">
                        <a href="index.php" title="Eureka" class="logo"><img src="images/eureka-dark.png"
                                data-rjs="images/eureka-dark@2x.png" class="logo-dark default" alt="Eureka"><img
                                src="images/logo-white.png" data-rjs="images/eureka-light@2x.png" alt="Eureka"
                                class="logo-light"></a>
                    </div>
                    <!-- end logo -->
                    <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
                        <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse"
                            data-target="#navbar-collapse-toggle-1">
                            <span class="sr-only">toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
                            <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal"
                                data-in="fadeIn" data-out="fadeOut">
                                <!-- start menu item -->
                                <li class="dropdown megamenu-fw">
                                    <a href="index.php">Home</a><i class="fas fa-angle-down dropdown-toggle"
                                        data-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                <li class="dropdown simple-dropdown"><a href="logout.php">Deconnexion</a><i
                                    class="fas fa-sign-out-alt"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </nav>
            <!-- end navigation -->
        </header>
        <!-- end header -->
        <!-- start page title section -->
        <section class="wow fadeIn parallax section2" data-stellar-background-ratio="0.5" style="background-image:url('https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fcdn2-europe1.new2.ladmedia.fr%2Fvar%2Feurope1%2Fstorage%2Fimages%2Feurope1%2Fsociete%2Fpartir-etudier-a-letranger-quels-benefices-2948591%2F30664676-1-fre-FR%2FPartir-etudier-a-l-etranger-quels-benefices.gif&f=1');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                        <div class="display-table-cell vertical-align-middle text-center">
                            <!-- start page title -->
                            <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom"><?php echo $etudiant->getNom()." ".$etudiant->getPrenom();?></h1>
                            <span class="text-white opacity6 alt-font">Lorem Ipsum is simply dummy text printing</span>
                            <!-- end page title -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start blog content section -->
        <section>
            <div class="container">
                <div class="row">
                    <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom sm-padding-15px-lr">
                        <!-- start post item -->
                        <div class="">
                            <h4 class="card-header text-center font-weight-bold text-uppercase py-4 text-extra-dark-gray alt-font" style="margin-bottom: 60px;">Informations Générales</h4>
                            <div class="container">
                              <div class="row" style="font-size: 20px;">
                              <div class="panel-group col-md-8">
                                <div class="panel panel-default">
                                  <div class="panel-heading"><i class="fas fa-user-graduate" style="margin-right: 15px;"></i>Nom</div>
                                  <div class="panel-body1" style="margin-left: 80px;"><?php echo htmlspecialchars($etudiant->getNom()); ?></div>
                                </div>

                                <div class="panel panel-default">
                                  <div class="panel-heading"><i class="fas fa-user-circle" style="margin-right: 15px;"></i>Prénom</div>
                                  <div class="panel-body1"  style="margin-left: 80px;"><?php echo  htmlspecialchars($etudiant->getPrenom());?></div>
                                </div>
                              </div>
                              </div>


                              <div class="row" style="font-size: 20px;">
                              <div class="panel-group col-md-8">
                                <div class="panel panel-default">
                                  <div class="panel-heading"><i class="fas fa-phone-square" style="margin-right: 15px;"></i>Téléphone</div>
                                  <div class="panel-body1"  style="margin-left: 80px;"><?php echo  htmlspecialchars($etudiant->getTelephone());?></div>
                                </div>

                                <div class="panel panel-default">
                                  <div class="panel-heading"><i class="fas fa-envelope" style="margin-right: 15px;"></i>Email</div>
                                  <div class="panel-body1"  style="margin-left: 80px;"><?php echo  htmlspecialchars($etudiant->getEmail());?></div>
                                </div>
                              </div>
                            </div>


                            <div class="text-center">


                              <a title="Titre du lien" href="modifier-info-etudiant.php">
                                <button type="button" class="btn btn-danger" style="margin-bottom: 25px;">Modifier Informations Générales</button>
                              </a>
                              </div>

                            </div>
                        </div>
                          <h4 class="text-center text-extra-dark-gray alt-font" style="margin-bottom: 50px; margin-top: 50px;"> Mes Projets</h4>
                          <?php
                            foreach ($projets as $projet) {
                            echo'
                        <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom display-inline-block border-bottom border-color-extra-light-gray sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                            <div class="blog-image col-md-5 no-padding sm-margin-30px-bottom xs-margin-20px-bottom margin-45px-right sm-no-margin-right display-table">
                                <div class="display-block">
                                    <a href="#"><img src="http://placehold.it/1200x840" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-text col-md-6 display-table no-padding">
                                <div class="display-table-cell vertical-align-middle">
                                    <div class="content margin-20px-bottom sm-no-padding-left ">
                                        <a href="blog-standard-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 display-inline-block">'.$projet->getTitre().'</a>
                                        <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Emily Wright</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Design</a></div>
                                        <p class="no-margin width-95">'.$projet->getDescription().'.</p>
                                    </div>
                                    <a class="btn btn-very-small btn-dark-gray text-uppercase" href="blog-standard-post.html">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                        ';}?>


                        <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom display-inline-block border-bottom border-color-extra-light-gray sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                            <div class="blog-image col-md-5 no-padding sm-margin-30px-bottom xs-margin-20px-bottom margin-45px-right sm-no-margin-right display-table">
                                <div class="display-table-cell vertical-align-middle">
                                    <a href="blog-youtube-video-post.html"><img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.omjc-info.fr%2Fwp-content%2Fuploads%2F2013%2F01%2FFotolia_9250049_S.jpg&f=1" alt=""></a>
                                </div>
                            </div>
                            <div class="blog-text col-md-6 display-table no-padding">
                                <div class="display-table-cell vertical-align-middle">
                                    <div class="content margin-20px-bottom sm-no-padding-left ">
                                        <a href="blog-youtube-video-post.html" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 display-inline-block">Vous n'avez pas encore des projets</a>
                                        <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>By <a href="blog-grid.html" class="text-medium-gray">Geoffrey Weaver</a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span>17 july 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">Branding</a></div>
                                        <p class="no-margin width-95">Lorem Ipsum is simply dummy text of the printing and industry. Lorem Ipsum has been the industry industry’s standard dummy text Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end post item -->
                        <!-- start pagination -->
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-top sm-margin-50px-top position-relative wow fadeInUp">
                            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                <ul>
                                    <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right xs-display-none"></i> Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left xs-display-none"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end pagination -->
                    </main>
                    <aside class="col-md-3">
                        <div class="display-inline-block width-100 margin-45px-bottom xs-margin-25px-bottom">
                            <form>
                                <div class="position-relative">
                                    <input type="text" class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left" placeholder="Cherchez mes Projets...">
                                    <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fas fa-search no-margin-left"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>About Me</span></div>
                            <a href="about-me.html"><img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Fchittagongit.com%2Fimages%2Favatar-icon-images%2Favatar-icon-images-4.jpg&f=1" alt="" class="margin-25px-bottom"/></a>
                            <p class="margin-20px-bottom text-small"><?php echo  nl2br(htmlspecialchars($etudiant->getDescription()));?>.</p>
                            <a class="btn btn-very-small btn-dark-gray text-uppercase" href="">Modifier Description</a>
                        </div>
                        <div class="margin-50px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Réseaux Sosiaux</span></div>
                            <div class="social-icon-style-1 text-center">
                                <ul class="extra-small-icon">
                                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                    <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>tags cloud</span></div>
                            <div class="tag-cloud">
                            <?php
                            foreach ($motsClesetudiant as $tagsetudiant) {
                            echo'
                                <a href="#">'.$tagsetudiant->nom.'</a>
                            ';}?>
                            </div>
                        </div>

                        <div class="bg-deep-pink padding-30px-all text-white text-center margin-45px-bottom xs-margin-25px-bottom">
                            <i class="fas fa-quote-left icon-small margin-15px-bottom display-block"></i>
                            <span class="text-extra-large font-weight-300 margin-20px-bottom display-block">The future belongs to those who believe in the beauty of their dreams.</span>
                            <a class="btn btn-very-small btn-transparent-white border-width-1 text-uppercase" href="portfolio-boxed-grid-overlay.html">Explore Portfolio</a>
                        </div>
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Dernière Connexion</span></div>
                            <div class="display-inline-block width-100">
                                <form>
                                    <div class="position-relative">
                                      <tr>
                                          <th scope="row"><i class="far fa-clock"></i></th>
                                          <td><?php echo $utilisateurByEmail->getDerniereConnexion();?></td>
                                      </tr>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- end blog content section -->
        <!-- start footer -->
        <footer class="footer-classic-dark bg-extra-dark-gray padding-five-bottom xs-padding-30px-bottom">
            <div class="bg-dark-footer padding-50px-tb xs-padding-30px-tb">
                <div class="container">
                    <div class="row equalize xs-equalize-auto">
                        <!-- start slogan -->
                        <div class="col-md-4 col-sm-5 col-xs-12 text-center alt-font display-table xs-text-center xs-margin-15px-bottom">
                            <div class="display-table-cell vertical-align-middle">
                                London based highly creative studio
                            </div>
                        </div>
                        <!-- end slogan -->
                        <!-- start logo -->
                        <div class="col-md-4 col-sm-2 col-xs-12 text-center display-table xs-margin-10px-bottom">
                            <div class="display-table-cell vertical-align-middle">
                                <a href="index.php"><img class="footer-logo" src="images/eureka-light.png" data-rjs="images/eureka-light@2x.png" alt="Eureka"></a>
                            </div>
                        </div>
                        <!-- end logo -->
                        <!-- start social media -->
                        <div class="col-md-4 col-sm-5 col-xs-12 col-xs-12 text-center display-table xs-text-center">
                            <div class="display-table-cell vertical-align-middle">
                                <span class="alt-font margin-20px-right">On social networks</span>
                                <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                                    <ul class="small-icon no-margin-bottom">
                                        <li><a class="facebook text-white" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a class="twitter text-white" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="google text-white" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a class="instagram text-white" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram no-margin-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
            <div class="footer-widget-area padding-five-top padding-30px-bottom xs-padding-30px-top">
                <div class="container">
                    <div class="row">
                        <!-- start about -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget sm-margin-30px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">About Agency</div>
                            <p class="text-small width-95 xs-width-100 no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the and typesetting industry. </p>
                        </div>
                        <!-- end about -->
                        <!-- start blog post -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget sm-margin-30px-bottom">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600 xs-text-center">Latest Blog Post</div>
                            <ul class="latest-post position-relative top-3">
                                <li class="border-bottom border-color-medium-dark-gray">
                                    <figure>
                                        <a href="blog-post-layout-01.html"><img src="http://placehold.it/700x403" alt=""></a>
                                    </figure>
                                    <div class="text-small"><a href="blog-post-layout-01.html">Design is not just what looks...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                                </li>
                                <li class="border-bottom border-color-medium-dark-gray">
                                    <figure>
                                        <a href="blog-post-layout-02.html"><img src="http://placehold.it/700x403" alt=""></a>
                                    </figure>
                                    <div class="text-small"><a href="blog-post-layout-02.html">A lot of care, effort & passion...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                                </li>
                                <li>
                                    <figure>
                                        <a href="blog-post-layout-03.html"><img src="http://placehold.it/700x403" alt=""></a>
                                    </figure>
                                    <div class="text-small"><a href="blog-post-layout-03.html">I love making the stuff, that's...</a> <span class="clearfix"></span>20 April 2017 | by <a href="blog-grid.html">Herman Miller</a></div>
                                </li>
                            </ul>
                        </div>
                        <!-- end blog post -->
                        <!-- start newsletter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget sm-margin-30px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">Subscribe Newsletter</div>
                            <p class="text-small width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <form id="subscribenewsletterform" action="javascript:void(0)" method="post">
                                <div class="position-relative newsletter width-95">
                                    <div id="success-subscribe-newsletter" class="no-margin-lr"></div>
                                    <input type="text" id="email" name="email" class="bg-transparent text-small no-margin border-color-medium-dark-gray" placeholder="Enter your email...">
                                    <button id="button-subscribe-newsletter" type="submit" class="btn btn-arrow-small position-absolute border-color-medium-dark-gray"><i class="fas fa-caret-right no-margin-left"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- end newsletter -->
                        <!-- start instagram -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget xs-margin-5px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Follow us Instagram</div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-footer"></ul>
                            </div>
                        </div>
                        <!-- end instagram -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-bottom border-top border-color-medium-dark-gray padding-30px-top">
                    <div class="row">
                        <!-- start copyright -->
                        <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center">Eureka - Portfolio Concept Theme</div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center">&COPY; 2017 Eureka is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" title="ThemeZaa">ThemeZaa</a></div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- equalize -->
        <script type="text/javascript" src="js/equalize.min.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script>
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
