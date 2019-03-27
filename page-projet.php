<?php
require_once ('connexion.php');
$appliBD = new connexion();
session_start();

$idEntrepriseByEmail = $appliBD->getEntrepriseByEmail($_SESSION['email']);
$idEntreprise = $idEntrepriseByEmail->getId();

$projets = $appliBD->getProjetById(($_GET["id"]));
$motsClesprojet = $appliBD->getProjetMotCles(($_GET["id"]));
$ListeEtudiantByProjet = $appliBD->getListeEtudiantByProjet(($_GET["id"]));
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
                        <a href="#" title="Eureka" class="logo"><img src="images/eureka-dark.png"
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
                                    <a href="home-classic-digital-agency.html">Home</a><i class="fas fa-angle-down dropdown-toggle"
                                        data-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                <?php
                                echo'<li class="dropdown simple-dropdown"><a href= "page-profil-entreprise.php">Profil entreprise</a><i
                                    class="fas fa-sign-up-alt"></i>';
                                    ?>
                                </li>
                                <li class="dropdown simple-dropdown"><a href="logout.php">Deconnexion</a><i
                                    class="fas fa-sign-up-alt"></i>
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
        <section class="wow fadeIn cover-background background-position-top" style="background-image:url('https://proxy.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pme-web.com%2Fwp-content%2Fuploads%2F2017%2F07%2FOutils-Gestion-de-projet-960x540.png&f=1');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 display-table page-title-large">
                        <div class="display-table-cell vertical-align-middle text-center padding-30px-tb">
                            <!-- start sub title -->
                            <span class="text-white opacity6 alt-font margin-10px-bottom display-block text-uppercase text-small">25 April 2017&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;by <a href="blog-masonry.html" class="text-white">Jay Benjamin</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-masonry.html" class="text-white">Design</a>, <a href="blog-masonry.html" class="text-white">Branding</a></span>
                            <!-- end sub title -->
                            <!-- start page title -->
                            <h1 class="text-white alt-font font-weight-600 margin-10px-bottom">"Projet bien enregistré"</h1>
                            <!-- end page title -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start post content section -->
        <section>
            <div class="container">
                <div class="row">
                    <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom no-padding-left sm-no-padding-right">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <img src="<?php echo $projets->getPhoto();?>" alt="" width="800px" style="height: 400px" class="img-responsive center-block margin-45px-bottom">
                            <p><?php echo nl2br(htmlspecialchars($projets->getDescription()));?></p>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-seven-bottom margin-eight-top">
                            <div class="divider-full bg-medium-light-gray"></div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 margin-30px-top">
                            <div class="display-table width-100 border-all border-color-extra-light-gray padding-50px-all sm-padding-30px-all xs-padding-20px-all">
                                <div class="display-table-cell width-130px text-center vertical-align-top xs-margin-15px-bottom xs-width-100 xs-display-block xs-text-center">
                                    <img src="http://placehold.it/149x149" class="img-circle width-100px" alt="" />
                                </div>
                                <div class="padding-40px-left display-table-cell vertical-align-top last-paragraph-no-margin xs-no-padding-left xs-display-block xs-text-center">
                                    <a href="#" class="text-extra-dark-gray text-uppercase alt-font font-weight-600 margin-10px-bottom display-inline-block text-small">Alexander Harvard</a>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                    <a class="btn btn-very-small btn-black margin-20px-top">All author posts</a>
                                </div>
                            </div>
                        </div>
                    </main>
                    <aside class="col-md-3 col-sm-12 col-xs-12 pull-right">
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>About Me</span></div>
                            <a href="about-me.html"><img src="http://placehold.it/800x533" alt="" class="margin-25px-bottom"/></a>
                            <p class="margin-20px-bottom text-small">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                            <a class="btn btn-very-small btn-dark-gray text-uppercase" href="about-me.html">About Author</a>
                        </div>
                        <div class="margin-50px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Follow Us</span></div>
                            <div class="social-icon-style-1 text-center">
                                <ul class="extra-small-icon">
                                    <li><a class="facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="linkedin" href="" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a class="instagram" href="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Categories</span></div>
                            <ul class="tag-cloud list-style-6 margin-50px-bottom text-small">
                            <?php
                                foreach ($motsClesprojet as $tagsprojet) {
                                echo'
                                    <a href="#">'.$tagsprojet->nom.'</a>
                                ';}?>
                            </ul>
                        </div>
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Liste Participants</span></div>
                            <?php
                                foreach ($ListeEtudiantByProjet as $etudiant) {
                                    echo'
                            <ul class="latest-post position-relative">
                                <li>
                                    <img src="'.$etudiant->getAvatar().'" alt="" class="img-circle"></a>
                                    <div class="display-table-cell vertical-align-top text-small"><span class="display-inline-block margin-5px-bottom">'.$etudiant->getNom()." ".$etudiant->getPrenom().'</span></a> <span class="clearfix text-medium-gray text-small">'.$etudiant->getEmail().'</span> <span class="clearfix text-medium-gray text-small">'.$etudiant->getTelephone().'</span></div>
                                </li>
                            </ul>
                            ';}?>
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
                                <a href="#"><img class="footer-logo" src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Eureka"></a>
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
        <!-- scroll to top -->
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
