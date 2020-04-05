<!DOCTYPE html>
<html>

<head>
    <title>BMK Bruckhäusl - Termine</title>
    <meta charset="utf-8">
    
    <link rel="icon" type="image/png" sizes="96x96" href="../images/favicon-96x96.png">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/uikit.min.css" />
    <link rel="stylesheet" href="../css/mainStyle.css" />
    <script src="../js/uikit.min.js"></script>
    <script src="../js/uikit-icons.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
   
</head>

<body>
    <!-- Navigation -->

    <div uk-sticky>
        <div class="uk-position-relative">
            <nav class="uk-navbar-container" uk-navbar="dropbar: true" style="background-color: #b20022; height: 120px;">
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <div class="LogoTermine">
                            <li style="margin-left: 50px;">
                                <img src="../images/logo.png" style="height:110px; width: auto;">
                            </li>
                        </div>
                    </ul>

                </div>

                <div class="uk-navbar-center">
                    <li style="list-style:none;">
                        <h1 style="color:white;">Termine</h1>
                    </li>

                </div>

                <div class="uk-navbar-right">
                    <!-- Social Media -->

                    <li style="margin-right:50px">
                        <a href="../index.html" class="uk-icon-button" uk-icon="sign-out" uk-tooltip="title: LogOut; pos: bottom"></a>
                    </li>


                </div>
            </nav>
            <div class="uk-navbar-dropbar"></div>
        </div>
    </div>







    <br>
    <br>

    <!-- Kalender -->
    <div class="mittig">

        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=2&amp;hl=de&amp;bgcolor=%23FFFFFF&amp;src=3j8tsmd76bedfgi8jiec5c63ts%40group.calendar.google.com&amp;color=%23125A12&amp;src=gk44pa6kfuds0fnjrvra9a7a08%40group.calendar.google.com&amp;color=%23711616&amp;src=8trsj4k5u5kd5gtnmivl051jjo%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FVienna" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>

    <br>
    <div class="border1"><img src="../images/noten.jpg"></div>
    <br>
    <br>
    <br>
    
    

    <h1>Kalender integrieren</h1>
    <br>
    <br>
    <div class="tabelleLinksTermine">
        <table>
            <thead>
                <tr>
                    <th align="center">Ausrückungen</th>
                    <th align="center">Proben</th>
                    <th align="center">Sonstiges</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>                    
                    <input id="p1" type="text" value="https://calendar.google.com/calendar/ical/3j8tsmd76bedfgi8jiec5c63ts%40group.calendar.google.com/public/basic.ics" size="7">
                    </td>
                    <td>                    
                    <input id="p2" type="text" value="https://calendar.google.com/calendar/ical/gk44pa6kfuds0fnjrvra9a7a08%40group.calendar.google.com/public/basic.ics" size="7">
                    </td><td>                    
                    <input id="p3" type="text" value="https://calendar.google.com/calendar/ical/8trsj4k5u5kd5gtnmivl051jjo%40group.calendar.google.com/public/basic.ics" size="7">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    
    <div class="KalenderAnleitung">
        <h2>Anleitung</h2>
        <p>Mit den oben angegebenen Adressen kannst du von anderen Anwendungen aus auf den Kalender zugreifen.</p>
    </div>
    <div class="mittig">
        <ol type="1">
            <li>Öffne <a style="color:blue;" href="https://www.google.com/calendar">Google Kalender</a> auf einem Computer.</li>
            <li>Klicke rechts neben "Kalender hinzufügen" auf die 3 Punkte<span uk-icon="icon: more-vertical"></span>.</li>
            <li>Wähle "Per URL" aus.</li>
            <li>Füge nun die Adresse des Kalenders ein.</li>
            <li>Klicke auf "Kalender hinzufügen".</li>
            <li>Kalender wird daraufhin unter "Weitere Kalender" angezeigt.</li>
        </ol>
    </div>
    <br>
    <div class="KalenderAnleitung">
        <p>Mit Handy synchronisieren</p>
    </div>
    <div class="mittig">
        <ol type="1">
            <li>Installiere die App <a style="color:blue;" href="https://play.google.com/store/apps/details?id=com.google.android.calendar&hl=en">Google Calender</a>.</li>
            <li>Melde dich nun in der App an.</li>
            <li>Öffne das Seitenmenü <span uk-icon="icon: menu"></span>.</li>
            <li>Scroll nach ganz unten und öffne die Einstellungen.</li>
            <li>Klicke auf "Weitere anzeigen".</li>
            <li>Wähle nun z.B.: den Kalender "BMK Proben" aus.</li>
            <li>Schalte die Synchronisierung ein.</li>
            <li>Fertig!</li>
        </ol>
    </div>
    <br>
    
    
    <div class="KalenderAnleitung">
        <h2>Erinnerungen</h2>
    </div>
    <div class="mittig">
        <ol type="1">
            <li>Öffne im <a style="color:blue;" href="https://www.google.com/calendar">Google Kalender</a> die Einstellungen.</li>
            <li>Wähle den gewünschten Kalender aus.</li>
            <li>Klicke auf "Weitere Benachrichtigung hinzufügen".</li>
            <li>Wähle nun die gewünschte Zeit aus.</li>
            <li>Fertig!</li>
        </ol>
    </div>

    <br>
    <br>







    <!------------------- JavaScript's -------------->
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Button -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.menubutton').click(function() {
                $('nav').slideToggle('slow');
            });
        });


        
    </script>



</body>

</html>