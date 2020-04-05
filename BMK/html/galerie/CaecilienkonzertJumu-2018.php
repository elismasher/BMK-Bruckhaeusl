<!DOCTYPE html>
<html>

<head>
    <title>BMK Bruckhäusl - Caecilienkonzert 2018</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" sizes="96x96" href="../../images/favicon-96x96.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/uikit.min.css" />
    <link rel="stylesheet" href="../../css/mainStyle.css" />
    <script src="../../js/uikit.min.js"></script>
    <script src="../../js/uikit-icons.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <!-- PC -->
    <div class="navigationPC1">
        <div uk-sticky>
            <div class="uk-position-relative">
                <nav class="uk-navbar-container" uk-navbar="dropbar: true" style="background-color: #b20022; height: 120px;">
                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav">
                            <li style="margin-left: 100px;">
                                <a href="../../index.html"><img src="../../images/logo.png" style="height:110px; width: auto;"></a>
                            </li>
                            <li style="margin-top: 15px;">
                                <a href="../../index.html">Home</a>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="../mitglieder.html">Mitglieder</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="../vorstand.html">Vorstand</a></li>
                                        <li><a href="../mitglieder.html">Musikantinnen und Musikanten</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="../mitgliedWerden.html">Mitglied werden</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="../auftritte.html">Auftritte</a>
                            </li>

                            <li style="margin-top: 15px;">
                                <a href="../galerie.html" style="color: #faee00;">Galerie</a>
                            </li>
                            <!-- Jumu
                            <li style="margin-top: 15px;">
                                <a href="../jumu2000.html">Jumu 2000</a>
                            </li>
-->
                            <li style="margin-top: 15px;">
                                <a href="../kontakt.html">Kontakt</a>
                            </li>

                        </ul>

                    </div>

                    <div class="uk-navbar-right">

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
                                    <a href="../../index.html">Home</a>
                                </li>

                                <li style="margin-top: 10px;">
                                    <p><a href="../mitglieder.html">Mitglieder</a></p>

                                    <ul style=" width: 100%; margin-top: -20px;">
                                        <li><a href="../vorstand.html">Vorstand</a></li>
                                        <li><a href="../mitglieder.html">Musikantinnen und Musikanten</a></li>
                                        <hr style="margin-bottom: 2px; margin-top: 2px; width: 230px;">
                                        <li><a href="../mitgliedWerden.html">Mitglied werden</a></li>
                                    </ul>

                                </li>

                                <li style="margin-top: 15px;">
                                    <a href="../auftritte.html">Auftritte</a>
                                </li>

                                <li style="margin-top: 10px;">
                                    <a href="../galerie.html" style="color: #b20022;">Galerie</a>
                                </li>
                                <!-- Jumu
                                <li style="margin-top: 10px;">
                                    <a href="../jumu2000.html">Jumu 2000</a>
                                </li>
-->
                                <li style="margin-top: 10px;">
                                    <a href="../kontakt.html">Kontakt</a>
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
            <img src="../../images/logo.png" class="mobileNavLogo">
        </nav>
    </div>





    <!-- Social Media

    <div class="sticky-container">
        <ul class="sticky">
            <li>
                <a href="https://www.facebook.com/bundesmusikkapellebruckhaeusl/" target="_blank">
                <img src="../../images/icons/facebook.png" width="32" height="32">
                <p>Like uns auf<br>Facebook</p></a>
            </li>
            <li>
                <a href="https://instagram.com/bmkbruckhaeusl?utm_source=ig_profile_share&igshid=iwqexy20ejl" target="_blank">
                <img src="../../images/icons/instagram.png" width="32" height="32">
                <p>Folge uns auf<br>Instagram</p></a>
            </li>
            <li>
                <a href="https://www.youtube.com/channel/UCHjTZl_m6a1VlaEPE7-AMcQ" target="_blank">
                <img src="../../images/icons/youtube.png" width="32" height="32">
                <p>Folge uns auf<br>YouTube</p></a>
            </li>
            <li>
                <a href="mailto:obmann@bmk-bruckhaeusl.at" target="_blank">
                <img src="../../images/icons/email.png" width="32" height="32">
                <p>Schreib uns eine<br>E-Mail</p></a>
            </li>
            <li>
                <a href="tel:+436508204080" target="_blank">
                <img src="../../images/icons/phone.png" width="32" height="32">
                <p>Ruf uns doch an!<br>Telefon</p></a>
            </li>
            <li>
                <a onclick="document.getElementById('LogInID').style.display='block'" target="_blank">
                <img src="../../images/icons/login.png" width="32" height="32">
                <p>Melde dich an<br>LogIn</p></a>
            </li>
            
        </ul>
    </div>
    
    -->









    <br>
    <br>
    <div uk-scrollspy="target: > div; cls:uk-animation-scale-up; delay: 100">
        <div>
            <h1>Cäcilienkonzert - JUMU 2000</h1>
        </div>
    </div>
    <br>
    <br>
    <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 900">
        <div>
            <div style="margin-left: 8%; margin-right: 8%;">
                <hr>
                <div uk-scrollspy="target: > div; cls:uk-animation-slide-left-medium; delay: 900">
                    <div>
                        <ul class="uk-breadcrumb">
                            <li><a href="../galerie.html">Galerie</a></li>
                            <li><a href="../galerie2018.html">2018</a></li>
                            <li><span>Cäcilienkonzert - JUMU 2000</span></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>


    <div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 1500">
        <div>
            <div class="galerie">
                <div uk-lightbox="animation: fade">

                    <?php
			$dir = "../../images/CaecilienkonzertJumu2018/";
			$i = 0;
			if (is_dir($dir)) {
			    if ($dh = opendir($dir)) {
				while ((($file = readdir($dh)) !== false)) {
                    if( $file != "." && $file != ".."){
				        echo"<a href='../../images/CaecilienkonzertJumu2018/$file'><img src='../../images/CaecilienkonzertJumu2018/$file' width='300px' height='auto'></a>";
                    }
				  }
				closedir($dh);
			    }
			}
?>


                    <br>

                </div>
            </div>
        </div>
    </div>








    <!-- Footer -->
    <div id="links">
        <li class="footerLeft">
            <a href="../impressum.html" style="color: white;">Impressum</a>
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
                <img src="../../images/logo.png" style="height: 200px; width: auto;" alt="Avatar" class="avatar">
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
    <script type="text/javascript">
        function FensterOeffnen(Adresse) {
            MeinFenster = window.open(Adresse, "Zweitfenster", "width=300,height=400,left=100,top=200");
            MeinFenster.focus();
        }
    </script>
    <!-- Login: -->

    <script language="javascript">
        function check(form) {

            if (form.userid.value == "BMK" && form.pswrd.value == "BMK") {
                window.location.href = "../termine.php";
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