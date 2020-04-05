<!DOCTYPE html>
<html>

<head>
    <title>JUMU 2000</title>

    <link rel="icon" type="image/png" sizes="96x96" href="../BMK/images/favicon-96x96.png">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/mainStyle.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <!-- Facebook -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v3.3"></script>




    <!-- Navigation -->
    <!-- PC -->
    <div class="navigationPC1">
        <div uk-sticky>
            <div class="uk-position-relative">
                <nav class="uk-navbar-container" uk-navbar="dropbar: true" style="background-color: #C11F09; height: 120px;">
                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav">
                            <li style="margin-left: 100px;">
                                <a href="../BMK/index.html"><img src="../BMK/images/logo.png" style="height:110px; width: auto;"></a>
                            </li>
                            <li style="margin-top: 15px;">
                                <a href="../BMK/index.html">Home</a>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="../BMK/html/mitglieder.html">Mitglieder</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="../BMK/html/vorstand.html">Vorstand</a></li>
                                        <li><a href="../BMK/html/mitglieder.html">Musikantinnen und Musikanten</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="../BMK/html/mitgliedWerden.html">Mitglied werden</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="../BMK/html/auftritte.html">Auftritte</a>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="../BMK/html/galerie.html">Galerie</a>
                            </li>
                            <!-- Jugend -->
                            <li style="margin-top: 15px;">
                                <a href="index.php" style="color: #faee00;">Jugend</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">

                                        <li><a href="index.php">JUMU 2000</a></li>
                                        <li><a href="https://vsbhl.edupage.org/a/blaserklasse">Bläserklasse Bruckhäusl</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="https://www.tmsw.at/index.php?id=364">LMS Wörgl</a></li>
                                        <li><a href="https://vsbhl.edupage.org/">Volksschule Bruckhäusl</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="../BMK/html/kontakt.html">Kontakt</a>
                            </li>

                        </ul>

                    </div>

                    <div class="uk-navbar-right">
                        <!-- Social Media -->

                        <li style="">
                            <a href="https://www.facebook.com/bundesmusikkapellebruckhaeusl/" class="uk-icon-button" uk-icon="facebook" uk-tooltip="title: Bundesmusikkapelle Bruckhäusl; pos: bottom"></a>
                        </li>

                        <li style="">
                            <a href="https://instagram.com/bmkbruckhaeusl?utm_source=ig_profile_share&igshid=iwqexy20ejl" class="uk-icon-button" uk-icon="instagram" uk-tooltip="title: bmkbruckhaeusl; pos: bottom"></a>
                        </li>

                        <li style="">
                            <a href="https://www.youtube.com/channel/UCHjTZl_m6a1VlaEPE7-AMcQ" class="uk-icon-button" uk-icon="youtube" uk-tooltip="title: BMK Bruckhäusl; pos: bottom"></a>
                        </li>

                        <li style="">
                            <a href="mailto:obmann@bmk-bruckhaeusl.at" class="uk-icon-button" uk-icon="mail" uk-tooltip="title: obmann@bmk-bruckhaeusl.at; pos: bottom"></a>
                        </li>

                        <li style="">
                            <a href="tel:+436508204080" class="uk-icon-button" uk-icon="receiver" uk-tooltip="title: +436508204080; pos: bottom"></a>
                        </li>

                        <li style="margin-right: 100px;">
                            <a onclick="document.getElementById('LogInID').style.display='block'" uk-scroll class="uk-icon-button" uk-icon="sign-in" uk-tooltip="title: LogIn; pos: bottom"></a>
                        </li>



                    </div>
                </nav>
                <div class="uk-navbar-dropbar"></div>
            </div>
        </div>
    </div>

    <!-- Mobile -->
    <div class="navigationMobile">
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
            <nav class="uk-navbar uk-navbar-container uk-margin" uk-navbar="dropbar: true" style="background-color: #C11F09;">
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li>
                            <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a>

                            <div class="uk-navbar-dropdown" style="width: 100%;">

                                <ul style="list-style: none">
                                    <li style="margin-top: 15px;">
                                        <a href="../BMK/index.html">Home</a>
                                    </li>

                                    <li style="margin-top: 10px;">
                                        <a href="../BMK/html/mitglieder.html">Mitglieder</a>

                                        <ul style=" width: 100%; margin-top: 0px;">
                                            <li><a href="../BMK/html/vorstand.html">Vorstand</a></li>
                                            <li><a href="../BMK/html/mitglieder.html">Musikantinnen und Musikanten</a></li>
                                            <hr style="margin-bottom: 2px; margin-top: 2px; width: 230px;">
                                            <li><a href="../BMK/html/mitgliedWerden.html">Mitglied werden</a></li>
                                        </ul>

                                    </li>

                                    <li style="margin-top: 15px;">
                                        <a href="../BMK/html/auftritte.html">Auftritte</a>
                                    </li>

                                    <li style="margin-top: 10px;">
                                        <a href="../BMK/html/galerie.html">Galerie</a>
                                    </li>
                                    <!-- Jugend -->
                                    <li style="margin-top: 10px;">
                                        <a href="index.php">Jugend</a>
                                        <ul>
                                            <li>
                                                <a href="index.php" style="color: #C11F09;">JUMU 2000</a>
                                                <ul style="list-style: none;">
                                                    <li><a href="#beiträge" uk-scroll>
                                                            <ion-icon name="chatbubbles-outline"></ion-icon>Aktuelles
                                                        </a></li>
                                                    <li><a href="#termine" uk-scroll>
                                                            <ion-icon name="calendar-outline"></ion-icon>Termine
                                                        </a></li>
                                                    <li><a href="#galerie" uk-scroll>
                                                            <ion-icon name="images-outline"></ion-icon>Galerie
                                                        </a></li>
                                                    <li><a href="#mitglieder" uk-scroll>
                                                            <ion-icon name="people-outline"></ion-icon>Mitglieder
                                                        </a></li>
                                                    <li><a href="#instrumentErlernen" uk-scroll>
                                                            <ion-icon name="musical-notes-outline"></ion-icon>Instrument lernen
                                                        </a></li>
                                                    <li><a href="#ausbildungsweg" uk-scroll>
                                                            <ion-icon name="library-outline"></ion-icon>Ausbildungsweg
                                                        </a></li>
                                                </ul>
                                            </li>


                                            <li><a href="https://vsbhl.edupage.org/a/blaserklasse">Bläserklasse Bruckhäusl</a></li>
                                            <li><a href="https://www.tmsw.at/index.php?id=364">LMS Wörgl</a></li>
                                            <li><a href="https://vsbhl.edupage.org/">Volksschule Bruckhäusl</a></li>
                                        </ul>
                                    </li>

                                    <li style="margin-top: 10px;">
                                        <a href="../BMK/html/kontakt.html">Kontakt</a>
                                    </li>

                                    <li style="margin-top: 10px;">
                                        <a onclick="document.getElementById('LogInID').style.display='block'" uk-scroll><span uk-icon="icon: sign-in">LogIn</span></a>
                                    </li>
                                </ul>


                                <ul style="list-style: none;">

                                    <li style="display: inline;">
                                        <a href="https://www.facebook.com/bundesmusikkapellebruckhaeusl/" class="uk-icon-button" uk-icon="facebook" uk-tooltip="title: Bundesmusikkapelle Bruckhäusl; pos: bottom"></a>
                                    </li>

                                    <li style="display: inline; margin-left: 10px;">
                                        <a href="https://instagram.com/bmkbruckhaeusl?utm_source=ig_profile_share&igshid=iwqexy20ejl" class="uk-icon-button" uk-icon="instagram" uk-tooltip="title: bmkbruckhaeusl; pos: bottom"></a>
                                    </li>

                                    <li style="display: inline; margin-left: 10px;">
                                        <a href="https://www.youtube.com/channel/UCHjTZl_m6a1VlaEPE7-AMcQ" class="uk-icon-button" uk-icon="youtube" uk-tooltip="title: BMK Bruckhäusl; pos: bottom"></a>
                                    </li>

                                    <li style="display: inline; margin-left: 10px;">
                                        <a href="mailto:obmann@bmk-bruckhaeusl.at" class="uk-icon-button" uk-icon="mail" uk-tooltip="title: obmann@bmk-bruckhaeusl.at; pos: bottom"></a>
                                    </li>

                                    <li style="display: inline; margin-left: 10px;">
                                        <a href="tel:+436508204080" class="uk-icon-button" uk-icon="receiver" uk-tooltip="title: +436508204080; pos: bottom"></a>

                                    </li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <img src="../JUMU/images/logo.png" class="mobileNavLogo">
            </nav>
        </div>
    </div>

    <!-- Social Media 

    <div class="sticky-container">
        <ul class="sticky">
            <li>
                <a href="https://www.facebook.com/bundesmusikkapellebruckhaeusl/" target="_blank">
                <img src="images/icons/facebook.png" width="32" height="32">
                <p>Like uns auf<br>Facebook</p></a>
            </li>
            <li>
                <a href="https://instagram.com/bmkbruckhaeusl?utm_source=ig_profile_share&igshid=iwqexy20ejl" target="_blank">
                <img src="images/icons/instagram.png" width="32" height="32">
                <p>Folge uns auf<br>Instagram</p></a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCHjTZl_m6a1VlaEPE7-AMcQ" target="_blank">
                <img src="images/icons/youtube.png" width="32" height="32">
                <p>Folge uns auf<br>YouTube</p></a>
            </li>
            <li>
                <a href="mailto:obmann@bmk-bruckhaeusl.at" target="_blank">
                <img src="images/icons/email.png" width="32" height="32">
                <p>Schreib uns eine<br>E-Mail</p></a>
            </li>
            <li>
                <a href="tel:+436508204080" target="_blank">
                <img src="images/icons/phone.png" width="32" height="32">
                <p>Ruf uns doch an!<br>Telefon</p></a>
            </li>
            <li>
                <a onclick="document.getElementById('LogInID').style.display='block'" target="_blank">
                <img src="images/icons/login.png" width="32" height="32">
                <p>Melde dich an<br>LogIn</p></a>
            </li>
            
        </ul>
    </div>
-->




    <!-- Navigation Left -->

    <div class="navLeft" style="z-index: 999;">
        <br>
        <br>
        <h8>JUMU 2000</h8>
        <br>
        <br>
        <br>
        <ul>
            <li><a class="effect-underline3" href="#beiträge" uk-scroll>
                    <ion-icon name="chatbubbles-outline"></ion-icon>Aktuelles
                </a></li>
            <li><a class="effect-underline3" href="#termine" uk-scroll>
                    <ion-icon name="calendar-outline"></ion-icon>Termine
                </a></li>
            <li><a class="effect-underline3" href="#galerie" uk-scroll>
                    <ion-icon name="images-outline"></ion-icon>Galerie
                </a></li>
            <li><a class="effect-underline3" href="#mitglieder" uk-scroll>
                    <ion-icon name="people-outline"></ion-icon>Mitglieder
                </a></li>
            <li><a class="effect-underline3" href="#instrumentErlernen" uk-scroll>
                    <ion-icon name="musical-notes-outline"></ion-icon>Instrument lernen
                </a></li>
            <li><a class="effect-underline3" href="#ausbildungsweg" uk-scroll>
                    <ion-icon name="library-outline"></ion-icon>Ausbildungsweg
                </a></li>
        </ul>
        <li class="footerLeft">
            <a href="../BMK/html/impressum.html" style="color: white; margin-left:12px; font-size: 1em; position: absolute; bottom: 160px;">Impressum</a>
        </li>
        <p style="color: white; margin-left:10px; margin-top:0px; font-size: 1em; position: absolute; bottom: 110px;">©2019 BMK Bruckhäusl</p>
    </div>

    <!-------------------------------------->
    <!---------------------------------------------->
    <!-------------------------------------->

    <div class="mainJUMU">

        <!-- Willkommen -->

        <div class="willkommen">
            <div class="willkommensText">
                <div uk-scrollspy="target: > div; cls:uk-animation-scale-up; delay: 100">
                    <div>
                        <h1>Herzlich Willkommen!</h1>
                    </div>
                </div>
                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 800" style="margin-top:20px;">
                    <div>
                        <p>Die vereinseigene Jugendmusikkapelle stellt die Vorstufe zur BMK Bruckhäusl dar und bedeutet für Jungmusikantinnen und Jungmusikanten ein Eingewöhnen in das Vereinsleben. In der Regel ist man berechtigt, ab dem 3. Ausbildungsjahr der JUMU 2OOO beizutreten. Die Kinder werden neben wöchentlicher Probe nicht nur musikalisch gefördert, es spielen auch Kameradschaft und soziale Kompetenz eine wichtige Rolle, welche in Form von Ausflügen und diversen Aktivitäten wie Rodeln, Hochseilgarten, etc. gestärkt werden.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="willkommensBild">
            <img src="images/gruppe.JPG">
        </div>






        <br>
        <br>
        <br>
        <br>
        <br>
        <br>



        <div class="uk-text-center">
            <div class="uk-child-width-expand@s" uk-grid>
                <div class="uk-width-2-3@m">

                    <!-- Beiträge -->
                    <div class="beiträge2">
                        <div id="beiträge"></div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <div uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 100">
                            <div>
                                <h3>Aktuelles</h3>
                            </div>
                        </div>
                        <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 300">
                            <div class="border1">
                                <!--<img src="../BMK/images/noten.jpg">-->
                            </div>
                        </div>
                        <br>

                        <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 400">
                            <!-- Card -->
                            <div style="margin-left: 50px; margin-right:50px;">

                                <div class="fb-page" data-href="https://www.facebook.com/bundesmusikkapellebruckhaeusl/" data-tabs="timeline" data-width="1000" data-height="700" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/bundesmusikkapellebruckhaeusl/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bundesmusikkapellebruckhaeusl/">Bundesmusikkapelle Bruckhäusl</a></blockquote>
                                </div>






                            </div>
                        </div>
                    </div>


                </div>
                <div class="uk-width-1-3@m">
                    <div class="termine2" id="termine">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 100">
                            <div>
                                <h3>Termine</h3>

                            </div>
                        </div>
                        <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 300">
                            <div class="border1">
                                <!--<img src="../BMK/images/noten.jpg">-->
                            </div>
                        </div>
                        <br>
                        <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 400">
                            <div class="tabelleTermineJumu">
                                <br>
                                <br>
                                <br>

                                <?php
                            $feld = file("ausrueckungen.csv");
                            $anzahl = 0;
                            foreach($feld as $zeile){
                                $i = explode(";", $zeile);
                                
                                if($anzahl<4){
                                    $anzahl++;
                                    echo "<div class='uk-child-width-expand uk-grid-small uk-text-center'' uk-grid>
            <div><h13>" . $i[0] . "</h13><p style='margin-top:5px;'><span uk-icon='calendar'></span> " . $i[1] . "</p><p style='margin-top: -20px;'><span uk-icon='clock'></span> "  . $i[2] . "</p><p style='margin-top: -20px;'><span uk-icon='location'></span> "  . $i[3] . "<br><br><br></div></div>";
                                }
                            }
                        ?>



                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>










        <!-- Galerie -->

        <div class="galerie" id="galerie">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 100">
                <div>
                    <h3 style="margin-left: 0px;">Galerie</h3>
                </div>
            </div>
            <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 300">
                <div class="border1" style="width:100%;">
                    <!--<img src="../BMK/images/noten.jpg">-->
                </div>
            </div>
            <br>
            <br>
            <br>

            <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 400">
                <div>
                    <!-- Slider PC -->
                    <div class="sliderGaleriePC">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true">

                            <ul class="uk-slider-items uk-grid">




                                <li class="uk-width-1-2">

                                    <div class="uk-panel">
                                        <a href="html/2019/Caecilienkonzert-2019.php">
                                            <img src="images/Caecilienkonzert2019/vero-online_caecilienkonzert-jumu2000-bruckhaeusl-nov2019-13.jpg" alt="">
                                        </a>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom" style="text-align: center; text-align-last: center;">

                                            <a href="html/2019/Caecilienkonzert-2019.php">
                                                <h3 class="uk-margin-remove">Cäcilienkonzert</h3>
                                            </a>
                                            <p class="uk-margin-remove">2019</p>
                                        </div>
                                    </div>
                                </li>


                                <li class="uk-width-1-2">

                                    <div class="uk-panel">
                                        <a href="html/2019/Muttertagskonzert-2019.php">
                                            <img src="images/Muttertagskonzert2019/vero-online_muttertagskonzert-bruckhaeusl-mai-2019-22.jpg" alt="">
                                        </a>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom" style="text-align: center; text-align-last: center;">

                                            <a href="html/2019/Muttertagskonzert-2019.php">
                                                <h3 class="uk-margin-remove">Muttertagskonzert</h3>
                                            </a>
                                            <p class="uk-margin-remove">2019</p>
                                        </div>
                                    </div>
                                </li>



                                <li class="uk-width-1-2">

                                    <div class="uk-panel">
                                        <a href="html/2019/Ostereierschiessen-2019.php">
                                            <img src="images/Ostereierschiessen2019/WhatsApp%20Image%202019-04-15%20at%2020.59.34(1).jpeg" alt="">
                                        </a>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom" style="text-align: center; text-align-last: center;">

                                            <a href="html/2019/Ostereierschiessen-2019.php">
                                                <h3 class="uk-margin-remove">Ostereierschießen</h3>
                                            </a>
                                            <p class="uk-margin-remove">2019</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="uk-width-1-2">

                                    <div class="uk-panel">
                                        <a href="html/2018/Leistungsabzeichen-2018_19.php">
                                            <img src="images/Leistungsabzeichen2018_19/WhatsApp%20Image%202019-02-13%20at%2018.40.06.jpeg" alt="">
                                        </a>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom" style="text-align: center; text-align-last: center;">

                                            <a href="html/2018/Leistungsabzeichen-2018_19.php">
                                                <h3 class="uk-margin-remove">Leistungsabzeichen</h3>
                                            </a>
                                            <p class="uk-margin-remove">2018/19</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="uk-width-1-2">

                                    <div class="uk-panel">
                                        <a href="html/2018/Caecilienkonzert-2018.php">
                                            <img src="images/Caecilienkonzert2018/caecilienkonzert%20jumu%20nov2018%20by%20veronika%20spielbichler%20(43).JPG" alt="">
                                        </a>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom" style="text-align: center; text-align-last: center;">

                                            <a href="html/2018/Caecilienkonzert-2018.php">
                                                <h3 class="uk-margin-remove">Cäcilienkonzert</h3>
                                            </a>
                                            <p class="uk-margin-remove">2018</p>
                                        </div>
                                    </div>
                                </li>


                            </ul>

                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous" style="background-color: rgba(0,0,0,0.5);"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next" style="background-color: rgba(0,0,0,0.5);"></a>

                        </div>
                    </div>

                    <!-- Slider Mobile -->
                    <div class="sliderGalerieMobile">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="clsActivated: uk-transition-active; center: true">

                            <ul class="uk-slider-items uk-grid">
                                <li class="uk-width-1-1">

                                    <div class="uk-panel">
                                        <a href="html/2019/Ostereierschiessen-2019.php">
                                            <img src="images/Ostereierschiessen2019/WhatsApp%20Image%202019-04-15%20at%2020.59.34(1).jpeg" alt="">
                                        </a>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom" style="text-align: center; text-align-last: center;">

                                            <a href="html/2019/Ostereierschiessen-2019.php">
                                                <h3 class="uk-margin-remove">Ostereierschießen</h3>
                                            </a>
                                            <p class="uk-margin-remove">2019</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="uk-width-1-1">

                                    <div class="uk-panel">
                                        <a href="html/2018/Leistungsabzeichen-2018_19.php">
                                            <img src="images/Leistungsabzeichen2018_19/WhatsApp%20Image%202019-02-13%20at%2018.40.06.jpeg" alt="">
                                        </a>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom" style="text-align: center; text-align-last: center;">

                                            <a href="html/2018/Leistungsabzeichen-2018_19.php">
                                                <h3 class="uk-margin-remove">Leistungsabzeichen</h3>
                                            </a>
                                            <p class="uk-margin-remove">2018/19</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="uk-width-1-1">

                                    <div class="uk-panel">
                                        <a href="html/2018/Caecilienkonzert-2018.php">
                                            <img src="images/Caecilienkonzert2018/caecilienkonzert%20jumu%20nov2018%20by%20veronika%20spielbichler%20(43).JPG" alt="">
                                        </a>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom" style="text-align: center; text-align-last: center;">

                                            <a href="html/2018/Caecilienkonzert-2018.php">
                                                <h3 class="uk-margin-remove">Cäcilienkonzert</h3>
                                            </a>
                                            <p class="uk-margin-remove">2018</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- später weg -->
                                <li class="uk-width-1-1">
                                    <div class="uk-panel">
                                        <a href="html/2018/Leistungsabzeichen-2018_19.php">
                                            <img src="images/Leistungsabzeichen2018_19/WhatsApp%20Image%202019-02-13%20at%2018.40.06(2).jpeg" alt="">
                                        </a>
                                        <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom" style="text-align: center; text-align-last: center;">

                                            <a href="html/2018/Leistungsabzeichen-2018_19.php">
                                                <h3 class="uk-margin-remove">Leistungsabzeichen</h3>
                                            </a>
                                            <p class="uk-margin-remove">2018/19</p>
                                        </div>
                                    </div>
                                </li>


                            </ul>

                            <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous" style="background-color: rgba(0,0,0,0.5);"></a>
                            <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next" style="background-color: rgba(0,0,0,0.5);"></a>

                        </div>
                    </div>
                </div>

            </div>


        </div>




        <!-- Mitglieder -->
        <div class="mitglieder" id="mitglieder">

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 100">
                <div>
                    <h3 style="margin-left: 0px;">Mitglieder</h3>
                </div>
            </div>
            <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 200">
                <div class="border1" style="width:100%;">
                    <!--<img src="../BMK/images/noten.jpg">-->
                </div>
            </div>
            <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 300">
                <div>
                    <p style="margin-left:4%; margin-top: 10px;">Die JUMU 2000 besteht derzeit aus 31 Jungmusikanten.</p>
                </div>
            </div>
            <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 500">
                <div>
                    <div class="mitgliederListe">
                        <table class="uk-table">
                            <thead>
                                <tr>
                                    <th class="uk-width-small"></th>
                                    <th class="uk-width-small"></th>
                                    <th class="uk-table-expand"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="images/dirigent.png"></td>
                                    <td style="padding-top: 25px;">Dirigent:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/PlonerHannes.JPG" class="effect-underline" data-caption="<h2>Ploner Hannes</h2>">
                                                <!--
<p><b>Auszeichnungen:</b> Bronze, Silber, Gold</p><p style='margin-top: -20px;'><b>Mitglied seit:</b> 2000</p><p>Kapellmeister und Jugendreferent Stv.</p>
-->

                                                Ploner Hannes
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/flute.png"></td>
                                    <td style="padding-top: 25px;">Querflöte:</td>
                                    <td style="padding-top: 25px;">
                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/DissertoriSarah.JPG" class="effect-underline" data-caption="<h2>Dissertori Sarah</h2>">
                                                Dissertori Sarah,
                                            </a>

                                            <a href="images/Mitglieder/LanzingerKatharina.JPG" class="effect-underline" data-caption="<h2>Lanzinger Katharina</h2>">
                                                Lanzinger Katharina,
                                            </a>

                                            <a href="images/Mitglieder/LeaSpanbloechl.JPG" class="effect-underline" data-caption="<h2>Spanblöchl Lea</h2>">
                                                Spanblöchl Lea
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/clarinet.png"></td>
                                    <td style="padding-top: 25px;">Klarinette:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/BergerMarco.JPG" class="effect-underline" data-caption="<h2>Berger Marco</h2>">
                                                Berger Marco,
                                            </a>

                                            <a href="#" class="effect-underline" data-caption="<h2>Grad Melanie</h2>">
                                                Grad Melanie,
                                            </a>

                                            <a href="images/Mitglieder/JessnerSebastian.JPG" class="effect-underline" data-caption="<h2>Jessner Sebastian</h2>">
                                                Jessner Sebastian,
                                            </a>

                                            <a href="images/Mitglieder/LaimingerMagdalena.jpg" class="effect-underline" data-caption="<h2>Laiminger Magdalena</h2>">
                                                Laiminger Magdalena,
                                            </a>

                                            <a href="#" class="effect-underline" data-caption="<h2>Lindner Sophia</h2>">
                                                Lindner Sophia,
                                            </a>

                                            <a href="images/Mitglieder/RauterChristina.JPG" class="effect-underline" data-caption="<h2>Rauter Christina</h2>">
                                                Rauter Christina,
                                            </a>

                                            <a href="images/Mitglieder/SchoebelAnna.JPG" class="effect-underline" data-caption="<h2>Schöbel Anna</h2>">
                                                Schöbel Anna,
                                            </a>

                                            <a href="images/Mitglieder/WerlbergerMatteo-Alois.JPG" class="effect-underline" data-caption="<h2>Werlberger Matteo-Alois</h2>">
                                                Werlberger Matteo-Alois
                                            </a>

                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/oboe.png"></td>
                                    <td style="padding-top: 25px;">Oboe:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/MaierLara.jpg" class="effect-underline" data-caption="<h2>Maier Lara</h2>">
                                                Maier Lara
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/bassoon.png"></td>
                                    <td style="padding-top: 25px;">Fagott:</td>
                                    <td style="padding-top: 25px;">
                                        <!--
                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/MaierLara.jpg" class="effect-underline" data-caption="<h2>Soder Bettina</h2>">
-->
                                        Soder Bettina
                                        <!--
                                            </a>
                                        </div>
                                        -->
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/saxophone.png"></td>
                                    <td style="padding-top: 25px;">Saxophon:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>

                                            <a href="images/Mitglieder/JuliaExenberger.jpg" class="effect-underline" data-caption="<h2>Exenberger Julia</h2>">
                                                Exenberger Julia,
                                            </a>

                                            <a href="#" class="effect-underline" data-caption="<h2>Lindner Theresa</h2>">
                                                Lindner Theresa,
                                            </a>

                                            <a href="images/Mitglieder/MorandellMarilisa.JPG" class="effect-underline" data-caption="<h2>Morandell Marilisa</h2>">
                                                Morandell Marilisa,
                                            </a>

                                            <a href="images/Mitglieder/RistElias.JPG" class="effect-underline" data-caption="<h2>Rist Elias</h2>">
                                                Rist Elias,
                                            </a>

                                            <a href="images/Mitglieder/SchoebelFelix.JPG" class="effect-underline" data-caption="<h2>Schöbel Felix</h2>">
                                                Schöbel Felix,
                                            </a>

                                            <a href="images/Mitglieder/TravenFlorian.jpg" class="effect-underline" data-caption="<h2>Traven Florian</h2>">
                                                Traven Florian
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/trumpet.png"></td>
                                    <td style="padding-top: 25px;">Trompete:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/EhrenstrasserFelix.JPG" class="effect-underline" data-caption="<h2>Ehrenstrasser Felix</h2>">
                                                Ehrenstrasser Felix,
                                            </a>

                                            <a href="images/Mitglieder/MariancherFabian.JPG" class="effect-underline" data-caption="<h2>Mariacher Fabian</h2>">
                                                Mariacher Fabian,
                                            </a>

                                            <a href="images/Mitglieder/PerstererSebastian.JPG" class="effect-underline" data-caption="<h2>Persterer Sebastian</h2>">
                                                Persterer Sebastian,
                                            </a>

                                            <a href="images/Mitglieder/PflugerSimon.JPG" class="effect-underline" data-caption="<h2>Pfluger Simon</h2>">
                                                Pfluger Simon
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/trombone.png"></td>
                                    <td style="padding-top: 25px;">Posaune:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/FuchsVerena.JPG" class="effect-underline" data-caption="<h2>Fuchs Verena</h2>">
                                                Fuchs Verena,
                                            </a>

                                            <a href="images/Mitglieder/MairSarah.jpg" class="effect-underline" data-caption="<h2>Mair Sarah</h2>">
                                                Mair Sarah,
                                            </a>

                                            <a href="images/Mitglieder/ReschKorbinian.JPG" class="effect-underline" data-caption="<h2>Resch Korbinian</h2>">
                                                Resch Korbinian,
                                            </a>

                                            <a href="images/Mitglieder/SchaetzleLars.jpg" class="effect-underline" data-caption="<h2>Schätzle Lars</h2>">
                                                Schätzle Lars
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/horn.png"></td>
                                    <td style="padding-top: 25px;">Waldhorn:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/FabianWinkler.JPG" class="effect-underline" data-caption="<h2>Winkler Fabian</h2>">
                                                Winkler Fabian,
                                            </a>

                                            <a href="images/Mitglieder/MarcelWinkler.jpg" class="effect-underline" data-caption="<h2>Winkler Marcel</h2>">
                                                Winkler Marcel
                                            </a>

                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/tenorHorn.png"></td>
                                    <td style="padding-top: 25px;">Tenorhorn:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/WeissMatthias.jpg" class="effect-underline" data-caption="<h2>Weiss Matthias</h2>">
                                                Weiss Matthias
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/tuba.png"></td>
                                    <td style="padding-top: 25px;">Tuba:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/ReschElisabeth.jpg" class="effect-underline" data-caption="<h2>Resch Elisabeth</h2>">
                                                Resch Elisabeth
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/drum-set.png"></td>
                                    <td style="padding-top: 25px;">Schlagzeug:</td>
                                    <td style="padding-top: 25px;">

                                        <div uk-lightbox>
                                            <a href="images/Mitglieder/PflugerClemens.jpg" class="effect-underline" data-caption="<h2>Pfluger Clemens</h2>">
                                                Pfluger Clemens
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <!-- Instrument erlernen -->

        <div class="instrumentErlernen" id="instrumentErlernen">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 100">
                <div>
                    <h3 style="margin-left: 0px;">Instrumente der Blasmusik</h3>
                </div>
            </div>
            <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 200">
                <div class="border1" style="width:100%;">
                    <!--<img src="../BMK/images/noten.jpg">-->
                </div>
            </div>
            <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 300">
                <div>
                    <p style="margin-left:4%; margin-top:10px;">Wer Interesse hat, ein Musikinstrument zu lernen und der BMK Bruckhäusl beizutreten, kann sich gerne mit uns in Verbindung setzen.</p>
                    <p style=" margin-left:4%; margin-top: -15px;">Für mehr Informationen bitte auf das jeweilige Instrument klicken. <br>(Rot markierte Instrumente können derzeit nicht erlernt werden.)</p>
                </div>
            </div>



            <div class="instrumenteZumErlernen">

                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 500">
                    <div>
                        <div class="uk-child-width-1-6@m" uk-grid>

                            <div style="height: 130px;">
                                <a href="#querflöte" uk-toggle>
                                    <div class="instrument" id="frei">
                                        <img src="images/flute.png" alt="">
                                    </div>
                                </a>

                                <a href="#querflöte" uk-toggle class="uk-button uk-button-text">Querflöte</a>
                            </div>

                            <div>
                                <a href="#klarinette" uk-toggle>
                                    <div class="instrument" id="frei">
                                        <img src="images/clarinet.png" alt="">
                                    </div>
                                </a>

                                <a href="#klarinette" uk-toggle class="uk-button uk-button-text">Klarinette</a>
                            </div>

                            <div>
                                <a href="#fagott" uk-toggle>
                                    <div class="instrument" id="frei">
                                        <img src="images/bassoon.png" alt="">
                                    </div>
                                </a>

                                <a href="#fagott" uk-toggle class="uk-button uk-button-text" style="margin-left: 10px;">Fagott</a>
                            </div>

                            <div>
                                <a href="#oboe" uk-toggle>
                                    <div class="instrument" id="frei">
                                        <img src="images/oboe.png" alt="">
                                    </div>
                                </a>

                                <a href="#oboe" uk-toggle class="uk-button uk-button-text" style="margin-left: 18px;">Oboe</a>
                            </div>

                            <div>
                                <a href="#besetzt" uk-toggle>
                                    <div class="instrument" id="besetzt">
                                        <img src="images/saxophone.png" alt="">
                                    </div>
                                </a>

                                <a href="#besetzt" uk-toggle class="uk-button uk-button-text">Saxophon</a>
                            </div>

                            <div>
                                <a href="#trompete" uk-toggle>
                                    <div class="instrument" id="frei">
                                        <img src="images/trumpet.png" alt="">
                                    </div>
                                </a>

                                <a href="#trompete" uk-toggle class="uk-button uk-button-text" style="margin-left: 5px;">Trompete</a>
                            </div>

                            <div class="nachRechtsInstrument">
                                <a href="#besetzt" uk-toggle>
                                    <div class="instrument" id="besetzt">
                                        <img src="images/trombone.png" alt="">
                                    </div>
                                </a>

                                <a href="#besetzt" uk-toggle class="uk-button uk-button-text" style="margin-left: 5px;">Posaune</a>
                            </div>

                            <div>
                                <a href="#horn" uk-toggle>
                                    <div class="instrument" id="frei">
                                        <img src="images/horn.png" alt="">
                                    </div>
                                </a>

                                <a href="#horn" uk-toggle class="uk-button uk-button-text">Waldhorn</a>
                            </div>

                            <div>
                                <a href="#tenorhorn" uk-toggle>
                                    <div class="instrument" id="frei">
                                        <img src="images/tenorHorn.png" alt="">
                                    </div>
                                </a>

                                <a href="#tenorhorn" uk-toggle class="uk-button uk-button-text" style="margin-left: -5px;">Tenorhorn</a>
                            </div>

                            <div>
                                <a href="#tuba" uk-toggle>
                                    <div class="instrument" id="frei">
                                        <img src="images/tuba.png" alt="">
                                    </div>
                                </a>

                                <a href="#tuba" uk-toggle class="uk-button uk-button-text" style="margin-left: 20px;">Tuba</a>
                            </div>

                            <div>
                                <a href="#schlagzeug" uk-toggle>
                                    <div class="instrument" id="frei">
                                        <img src="images/drum-set.png" alt="">
                                    </div>
                                </a>

                                <a href="#schlagzeug" uk-toggle class="uk-button uk-button-text" style="margin-left: -5px;">Schlagzeug</a>
                            </div>

                        </div>
                    </div>
                </div>
                

            </div>

            


        </div>




        <!-- Ausbildungsweg -->

        <div class="ausbildungsweg" id="ausbildungsweg">
            <br>
            <br>
            <div uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 100">
                <div>
                    <h3 style="margin-left: 0px;">Ausbildungsweg</h3>
                </div>
            </div>
            <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 300">
                <div class="border1" style="width:100%;">
                    <!--<img src="../BMK/images/noten.jpg">-->
                </div>
            </div>

            <div class="ausbildungswegGrafisch">

                <div class="awGesammt">

                    <div class="uk-text-center" uk-grid style="width:100%;">
                        <div class="uk-width-expand@m">
                            <div class="aw1">
                                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 600">
                                    <div>
                                        <p>1. & 2. Musikschuljahr</p>
                                    </div>
                                </div>
                                <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-small; delay: 500">
                                    <div>
                                        <a href="https://vsbhl.edupage.org/a/blaserklasse">
                                            <h6 class="effect-box" uk-tooltip="title: Die Bläserklasse stellt eine Kooperation zwischen der VS Bruckhäusl, der LMS Wörgl und der BMK Bruckhäusl dar. Die Bläserklasse ist ein kostenloses Zusatzangebot und findet im Rahmen des Schulunterrichts in der VS Bruckhäusl statt. Die Bläserklasse ermöglicht jenen Volksschulkindern, die Interesse haben, ein Musikinstrument zu erlernen, gemeinsam in der Gruppe zu musizieren. Voraussetzung dafür ist die parallele Ausbildung an der Landesmusikschule Wörgl. Das Zusammenspiel mit Gleichaltrigen in einem Ensemble bietet eine spannende Abwechslung zum allein - üben zu Hause.; pos: bottom">Bläserklasse</h6>
                                        </a>
                                    </div>
                                </div>
                                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 600">
                                    <div>
                                        <p style="margin-top:20px;">1 Stunde pro Schulwoche</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="uk-width-auto@m">
                            <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-small; delay: 700">
                                <div>
                                    <div class="awArrow1">
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="uk-width-expand@m">
                            <div class="aw2">
                                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 900">
                                    <div>
                                        <p>3. & 4. Musikschuljahr</p>
                                    </div>
                                </div>
                                <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-small; delay: 800">
                                    <div>
                                        <a href="index.php">
                                            <h6 class="effect-box" uk-tooltip="title: Die vereinseigene Jugendmusikkapelle stellt die Vorstufe zur BMK Bruckhäusl dar und bedeutet für Jungmusikantinnen und Jungmusikanten ein Eingewöhnen in das Vereinsleben. In der Regel ist man berechtigt, ab dem 3. Ausbildungjahr der JUMU 2OOO beizutreten. Die Kinder werden neben wöchentlicher Probe nicht nur musikalisch gefördert, es spielen auch Kameradschaft und soziale Kompetenz eine wichtige Rolle, welche in Form von Ausflügen und diversen Aktivitäten wie Rodeln, Hochseilgarten, etc. gestärkt werden.; pos: bottom">JUMU 2000</h6>
                                        </a>
                                    </div>
                                </div>
                                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 900">
                                    <div>
                                        <p style="margin-top:20px;">1 Probe pro Woche</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="uk-width-auto@m">
                            <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-small; delay: 1000">
                                <div>
                                    <div class="awArrow2">
                                        <div class="arrow"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="uk-width-expand@m">
                            <div class="aw3">
                                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 1200">
                                    <div>
                                        <p>ab 5. Musikschuljahr</p>
                                    </div>
                                </div>
                                <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-small; delay: 1100">
                                    <div>
                                        <a href="../BMK/index.php">
                                            <h6 class="effect-box">BMK Bruckhäusl</h6>
                                        </a>
                                    </div>
                                </div>
                                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 1200">
                                    <div>
                                        <p style="margin-top:20px;">1-2 Proben pro Woche</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>



                <div>
                    <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 1300">
                        <div>
                            <br>
                            <div class="border2"></div>
                            <br>
                        </div>
                    </div>
                </div>


                <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-small; delay: 1400">
                    <div>
                        <h4><i>Was können wir dir bieten:</i></h4>
                    </div>
                </div>
                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 1500">
                    <div>
                        <ul>
                            <li>die Musikinstrumente werden kostenlos von der BMK Bruckhäusl zur Verfügung gestellt (wenn vorhanden)</li>
                            <li>Ein Teil der jährlichen Musikschulkosten werden von der BMK Bruckhäusl unterstützt</li>
                            <li>Erste musikalische Auftritte mit der Bläserklasse bzw. mit der JUMU 2000</li>
                            <li>gemeinsame Ausflüge und sportliche Aktivitäten</li>
                        </ul>
                    </div>
                </div>
                <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-small; delay: 1400">
                    <div>
                        <h4><i>Was du dafür beitragen solltest:</i></h4>
                    </div>
                </div>
                <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 1500">
                    <div>
                        <ul>
                            <li>5 mal wöchentlich üben (ca. 20min je Einheit)</li>
                            <li>Freude am Musizieren haben</li>
                            <li>Dich in eine (kameradschaftliche) Gruppe integrieren</li>
                            <li>Verlässlichkeit und Pünktlichkeit ist wichtig ...</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>










        <!----------- Modals Instrumente ---------------->
        <div id="querflöte" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/flute.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Querflöte</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/querfloete.pdf" style="width:100%;height:400px">
                    <a href="pdf/querfloete.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="klarinette" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/clarinet.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Klarinette</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->


                <object data="pdf/klarinette.pdf" style="width:100%;height:400px">
                    <a href="pdf/klarinette.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="fagott" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/bassoon.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Fagott</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/fagott.pdf" style="width:100%;height:400px">
                    <a href="pdf/fagott.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="oboe" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/oboe.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Oboe</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/oboe.pdf" style="width:100%;height:400px">
                    <a href="pdf/oboe.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="saxophon" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/saxophone.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Saxophon</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/Saxofon.pdf" style="width:100%;height:400px">
                    <a href="pdf/Saxofon.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="trompete" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/trumpet.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Trompete</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/Trompete_Fluegelhorn.pdf" style="width:100%;height:400px">
                    <a href="pdf/Trompete_Fluegelhorn.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="posaune" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/trombone.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Posaune</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/Posaune.pdf" style="width:100%;height:400px">
                    <a href="pdf/Posaune.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="horn" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/horn.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Waldhorn</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/Waldhorn.pdf" style="width:100%;height:400px">
                    <a href="pdf/Waldhorn.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="tenorhorn" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/tenorHorn.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Tenorhorn</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/Tenorhorn_Bariton.pdf" style="width:100%;height:400px">
                    <a href="pdf/Tenorhorn_Bariton.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="tuba" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/tuba.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Tuba</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/Tuba.pdf" style="width:100%;height:400px">
                    <a href="pdf/Tuba.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>

        <div id="schlagzeug" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <!--
                <div style="text-align: center">
                    <img src="images/drum-set.png" style="height:200px; width:auto;">
                </div>
-->
                <h4 class="uk-modal-title">Schlagzeug</h4>
                <!--
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
-->

                <object data="pdf/Schlagwerk.pdf" style="width:100%;height:400px">
                    <a href="pdf/Schlagwerk.pdf" uk-margin><br><br><br><button class="uk-button uk-button-default" style="background-color: #f57a7a;">Infos Herunterladen</button><br><br><br><br></a>
                </object>

                <p class="uk-text-right" style="margin-bottom: -10px;">
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="https://www.tmsw.at/fileadmin/intern/formulare_neu/Schulgeldordnung_2019-05-30.pdf">LMS Schulgeldordnung</a></button>
                    <!-- LMS Schulgeldordnung -->
                    <button class="uk-button uk-button-default" type="button" style="margin-bottom: 10px;"><a href="../BMK/html/kontakt.html">Kontakt</a></button>

                    <button class="uk-button uk-button-default uk-modal-close" type="button" style="margin-bottom: 10px;">Schließen</button>
                </p>
            </div>
        </div>



        <div id="besetzt" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

                <button class="uk-modal-close-default" type="button" uk-close></button>

                <center>
                    <h3>Tut uns leid, aber dieses Instrument wird momentan nicht zur Verfügung gestellt!</h3>
                </center>



                <div>
                    <br>
                    <br>
                    <div class="border1"><img src="../BMK/images/noten.jpg"></div>
                    <br>
                    <br>
                    <br>
                </div>


                <center>
                    <h4 style="color: #1e1e1e; font-size: 1.5em;">Hast du noch Fragen?</h4>
                </center>
                <center>
                    <h4 style="margin-top: -20px; font-size: 1.3em;">Wir sind gerne für dich da!</h4>
                </center>

                <br>
                <br>

                <p class="uk-text-right">
                    <button class="uk-button uk-button-default" type="button"><a href="../BMK/html/kontakt.html">Kontakt</a></button>
                    <button class="uk-button uk-button-default uk-modal-close" type="button">Schließen</button>
                </p>

            </div>
        </div>







        <!-- Footer -->
        <div class="footer">
            <div id="links">
                <li class="footerLeft">
                    <a href="../BMK/html/impressum.html" style="color: white;">Impressum</a>
                </li>
            </div>


            <div id="mitte">
                <p style="color: white; padding-top:30px;">©2019 BMK Bruckhäusl</p>

            </div>


            <div id="rechts">
                <a style="margin-top: 30px; color: white;" href="" uk-totop uk-scroll></a>

            </div>
        </div>










        <!------------------ LogIn ----------------->

        <div id="LogInID" style="z-index: 99999999" class="modal">

            <form name="loginform" class="modal-content animate">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('LogInID').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="../BMK/images/logo.png" style="height: 200px; width: auto;" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="unerid" style="margin-left: -40px;"><b>Benutzername:</b></label>

                    <input type="text" placeholder="Benutzername eingeben" name="userid" required>
                    <br>

                    <label for="pswrd"><b>Passwort:</b></label>
                    <input type="password" placeholder="Passwort eingeben" name="pswrd" required>
                    <br>

                    <input type="button" onClick="check(this.form)" value="Login" class="buttonGreen">
                    <br>


                </div>

                <div class="container" style="background-color:#f1f1f1"></div>
            </form>
        </div>






        <!------------------- JavaScript's -------------->
        <!-- Icons -->

        <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
        <!-- Button -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('.menubutton').click(function() {
                    $('nav').slideToggle('slow');
                });
            });
        </script>

        <!-- Login: -->

        <script language="javascript">
            function check(form) {

                if (form.userid.value == "BMK" && form.pswrd.value == "BMK") {
                    window.location.href = "../BMK/html/termine.php";
                } else {
                    alert("Passwort und Benutzername ist falsch!")
                }
            }
        </script>

        <script>
            var modal = document.getElementById('LogInID');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>


</body>

</html>