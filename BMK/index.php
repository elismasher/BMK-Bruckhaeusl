<!DOCTYPE html>
<html>

<head>
    <title>BMK Bruckhäusl</title>
    <meta charset="utf-8">

    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">

    <meta name="keywords" content="BMK, Bruckhäusl, Kirchbichl, Wörgl, Musikverein,  Musik,  Musizieren, Bundesmusikkapelle" />
    <meta name="description" content="Hier finden Sie einige Informationen zu den Auftritten, Mitgliedern, Vorständen, ... der BMK Bruckhäusl." />


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/mainStyle.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <!-- Facebook Javascript-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v3.2"></script>



    <!-- Navigation -->
    <!-- PC -->
    <div class="navigationPC1">
        <div uk-sticky>
            <div class="uk-position-relative">
                <nav class="uk-navbar-container" uk-navbar="dropbar: true" style="background-color: #b20022; height: 120px;">
                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav">
                            <li style="margin-left: 100px;">
                                <a href="index.html"><img src="images/logo.png" style="height:110px; width: auto;"></a>
                            </li>
                            <li style="margin-top: 15px;">
                                <a href="index.html" style="color: #faee00;">Home</a>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="html/mitglieder.html">Mitglieder</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="html/vorstand.html">Vorstand</a></li>
                                        <li><a href="html/mitglieder.html">Musikantinnen und Musikanten</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="html/mitgliedWerden.html">Mitglied werden</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="html/auftritte.html">Auftritte</a>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="html/galerie.html">Galerie</a>
                            </li>
                            <!-- Jugend -->
                            <li style="margin-top: 15px;">
                                <a href="../JUMU/index.php">Jugend</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">

                                        <li><a href="../JUMU/index.php">JUMU 2000</a></li>
                                        <li><a href="https://vsbhl.edupage.org/a/blaserklasse">Bläserklasse Bruckhäusl</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="https://www.tmsw.at/index.php?id=364">LMS Wörgl</a></li>
                                        <li><a href="https://vsbhl.edupage.org/">Volksschule Bruckhäusl</a></li>
                                    </ul>
                                </div>
                            </li>



                            <li style="margin-top: 15px;">
                                <a href="html/kontakt.html">Kontakt</a>
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
        <nav class="uk-navbar uk-navbar-container uk-margin" uk-navbar="dropbar: true" style="background-color: #b20022;">
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li>
                        <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a>

                        <div class="uk-navbar-dropdown" style="width: 100%;">

                            <ul style="list-style: none">
                                <li style="margin-top: 15px;">
                                    <a href="index.html" style="color: #b20022;">Home</a>
                                </li>

                                <li style="margin-top: 10px;">
                                    <a href="html/mitglieder.html">Mitglieder</a>

                                    <ul style=" width: 100%; margin-top: 0px;">
                                        <li><a href="html/vorstand.html">Vorstand</a></li>
                                        <li><a href="html/mitglieder.html">Musikantinnen und Musikanten</a></li>
                                        <hr style="margin-bottom: 2px; margin-top: 2px; width: 230px;">
                                        <li><a href="html/mitgliedWerden.html">Mitglied werden</a></li>
                                    </ul>

                                </li>

                                <li style="margin-top: 15px;">
                                    <a href="html/auftritte.html">Auftritte</a>
                                </li>

                                <li style="margin-top: 10px;">
                                    <a href="html/galerie.html">Galerie</a>
                                </li>
                                <!-- Jugend -->
                                <li style="margin-top: 10px;">
                                    <a href="../JUMU/index.php">Jugend</a>
                                    <ul>
                                        <li>
                                            <a href="../JUMU/index.php">JUMU 2000</a>
                                        </li>
                                        <li><a href="https://vsbhl.edupage.org/a/blaserklasse">Bläserklasse Bruckhäusl</a></li>
                                        <li><a href="https://www.tmsw.at/index.php?id=364">LMS Wörgl</a></li>
                                        <li><a href="https://vsbhl.edupage.org/">Volksschule Bruckhäusl</a></li>
                                    </ul>
                                </li>

                                <li style="margin-top: 10px;">
                                    <a href="html/kontakt.html">Kontakt</a>
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
            <img src="images/logo.png" class="mobileNavLogo">
        </nav>
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

    <!-- Slider -->

    <div uk-slideshow="animation: push; autoplay: true;">

        <div class="uk-position-relative uk-visible-toggle uk-light" style="height: 500px; width: 100%; z-index: 5;">

            <ul class="uk-slideshow-items" style="height: 500px; width: 100%;">
                <li style="height: 500px; width: 100%;">
                    <img src="images/slider1.jpg" alt="" uk-cover>
                </li>
                <li style="height: 500px; width: 100%;">
                    <img src="images/slider2.jpg" alt="" uk-cover>
                </li>
                <li style="height: 500px; width: 100%;">
                    <img src="images/slider3.JPG" alt="" uk-cover>
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

        </div>

        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>

    <!-- Welcome -->
    <div uk-scrollspy="target: > div; cls:uk-animation-slide-top-medium; delay: 100">
        <div>
            <h3>Herzlich Willkommen bei der</h3>
        </div>
    </div>
    <div uk-scrollspy="target: > div; cls:uk-animation-scale-up; delay: 300">
        <div>
            <h1>BMK Bruckhäusl</h1>
        </div>
    </div>

    <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 450">
        <div>
            <br>
            <div class="border1"><img src="images/noten.jpg"></div>
            <br>
        </div>
    </div>





    <!-- nächster großer Auftritt -->
    <!--
    <br>
    <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-medium; delay: 500">
        <div class="naechstenAuftritte">
            <h2>Unser nächster großer Auftritt:</h2>
        </div>
    </div>
    <br>



    <div class="naechstesEvent">

        <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 700">
            <div>
                
                <div class="mittig">
                    <div class="uk-grid-small uk-child-width-auto uk-margin" uk-grid uk-countdown="date: 2020-03-07T20:00:00+01:00">
                        <div>
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-">Tage</div>
                        </div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-">Stunden</div>
                        </div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-">Minuten</div>
                        </div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-">Sekunden</div>
                        </div>
                    </div>
                </div>
                <div class="mittig">
                    <img style="width:300px; height:auto;" src="pdf/BMK_Bruckh%C3%A4usl_Plakat_Fr%C3%BChjahrskonzert_2020.jpg">
                </div>
                <br>
                <div class="mittig">
                    <a  class="uk-button uk-button-default" href="pdf/BMK_Bruckha%CC%88usl_Plakat_Fr%C3%BChjahrskonzert_2020.pdf" target="_blank">Plakat</a>
                    
                    <a  style="margin-left: 20px;" class="uk-button uk-button-default" href="pdf/BMK_Bruckha%CC%88usl_Programm_Fr%C3%BChjahrskonzert_2020.pdf" target="_blank">Programm</a>
                </div>
            </div>

        </div>
    </div>


    
    <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 200">
        <div>
            <br>
            <div class="border1"><img src="images/noten.jpg"></div>
            <br>
        </div>
    </div>

    -->







    <div class="uk-text-center">
        <div class="uk-child-width-expand@s" uk-grid>
            <div class="uk-width-expand@m">

                <!-- Pending -->
                <br>
                <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-medium; delay: 1800">
                    <div>
                        <h2>Unsere nächsten Auftritte:</h2>
                    </div>
                </div>
                <br>

                <br>

                <!-- die nächsten Events -->


                <div class="pending">
                    <table class="uk-table uk-table-hover uk-table-divider">
                        <thead>
                            <tr>
                                <th class="uk-width-small"></th>
                                <th class="uk-table-expand"></th>
                                <th class="uk-width-small"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
        $feld = file("ausrueckungen.csv");
        $anzahl = 0;
        foreach($feld as $zeile){
            $i = explode(";", $zeile);
            if($anzahl<=3){
                $anzahl++;
            echo "<tr><td>" . $i[0] . "</td><td>" . $i[1] . "</td><td>"  . $i[2] . "</td></tr>";
            }
        }
    ?>

                        </tbody>
                        <tr>
                            <th class="uk-width-small"></th>
                            <th class="uk-table-expand"></th>
                            <th class="uk-width-small"></th>
                        </tr>
                    </table>
                </div>


            </div>
            <div class="uk-width-1-3@m">
                <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-medium; delay: 1800">
                    <div>
                        <h2>Neuigkeiten:</h2>
                    </div>
                </div>

                <div class="fb-page" data-href="https://www.facebook.com/bundesmusikkapellebruckhaeusl/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/bundesmusikkapellebruckhaeusl/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bundesmusikkapellebruckhaeusl/">Bundesmusikkapelle Bruckhäusl</a></blockquote>
                </div>



            </div>
        </div>
    </div>










    <!-- Members -->


    <div class="background1">
        <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('images/background1.JPG');">
            <div class="blackOverlay">
                <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                    <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-medium; delay: 500">
                        <div>
                            <h1 style="margin-top: 90px;">Mitglieder</h1>
                            <br>
                        </div>
                    </div>
                    <div uk-scrollspy="target: > div; cls:uk-animation-slide-right-medium; delay: 500">
                        <div>
                            <h3>Die BMK Bruckhäusl besteht derzeit aus 64 Mitgliedern.</h3>
                            <h3 style="margin-top: -15px;">Hier finden Sie mehr Infos zu unseren Musikantinnen und Musikanten</h3>
                            <button3 OnClick="location.href='html/mitglieder.html'">Mehr</button3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Card -->
    <div class="uk-child-width-1-3@m" uk-grid style="margin: 50px 50px 50px 50px;">
        <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-small; delay: 500">

            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <a href="html/galerie.html">
                            <img src="images/card1.jpg" alt="">
                        </a>
                    </div>
                    <div class="uk-card-body" style="text-align: center; margin-top: -90px;">
                        <h3 class="uk-card-title">Galerie</h3>
                        <p>Hautnah dabei sein -</p>
                        <p style="margin-top: -15px;">Einblicke in den Verein</p>
                        <button2 OnClick="location.href='html/galerie.html'">Mehr</button2>
                    </div>
                </div>
            </div>
        </div>

        <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 500">
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <a href="html/auftritte.html">
                            <img src="images/card2.jpg" alt="">
                        </a>
                    </div>
                    <div class="uk-card-body" style="text-align: center; margin-top: -90px;">
                        <h3 class="uk-card-title">Auftritte</h3>
                        <p>Alle Auftritte auf einem Blick -</p>
                        <p style="margin-top: -15px;">Keinen Auftritt verpassen</p>
                        <button2 OnClick="location.href='html/auftritte.html'">Mehr</button2>
                    </div>
                </div>
            </div>
        </div>

        <div uk-scrollspy="target: > div; cls:uk-animation-slide-right-small; delay: 500">
            <div>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <!-- a hinzufügen -->
                        <img src="images/card3.jpg" alt="">
                    </div>
                    <div class="uk-card-body" style="text-align: center; margin-top: -90px;">
                        <h3 class="uk-card-title">JUMU 2000</h3>
                        <p>Die Jugend im Auge -</p>
                        <p style="margin-top: -15px;">Alle Infos zur JUMU 2000</p>
                        <button2 OnClick="location.href='../JUMU/index.php'">Mehr</button2>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Footer -->
    <div id="links">
        <li class="footerLeft">
            <a href="html/impressum.html" style="color: white;">Impressum</a>
        </li>
    </div>


    <div id="mitte">
        <p style="color: white; padding-top:30px;">©2019 BMK Bruckhäusl</p>
        <!--
        <li class="footerIcons">
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
-->
    </div>


    <div id="rechts">
        <a style="margin-top: 30px; color: white;" href="" uk-totop uk-scroll></a>

    </div>










    <!------------------ LogIn ----------------->

    <div id="LogInID" style="z-index: 99999999" class="modal">

        <form name="loginform" class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('LogInID').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/logo.png" style="height: 200px; width: auto;" alt="Avatar" class="avatar">
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
                window.location.href = "html/termine.php";
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