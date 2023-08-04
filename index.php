<?php

    include 'config.php';
    $msg = "";

    if (isset($_GET['verification'])) {
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM mc_users WHERE code='{$_GET['verification']}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE mc_users SET code='' WHERE code='{$_GET['verification']}'");

        if ($query) {

            $msg = "<div class='validemsg'>La vérification du compte a été effectuée avec succès, assurez-vous d'informer l'utilisateur qu'il a été accepté !.</div>";
        }
    } else {
        header("Location: index.php");
    }


}




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="assests/images/Logo.svg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micro Club</title>
    <!-- styles-->

    <link rel="stylesheet" href="./styles/mainpage.css">
    <link rel="stylesheet" href="./styles/index.css">

    <!--js-->

</head>

<body>

    <div class="nav-container">
        <nav class="btn">
            <ul class="mobile-nav">
                <li>
                    <div class="menu-icon-container">
                        <div class="menu-icon ">
                            <span class="line-1"></span>
                            <span class="line-2"></span>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="link-logo"></a>
                </li>
            </ul>

            <ul class="desktop-nav">
                <li style="position: absolute;
                left: 0;">
                    <a href="#" class="link-logo"></a>
                </li>
                <li>
                    <a href="" class="hovereffect first scroll" data-menu-name="Acceuil">Acceuil</a>
                </li>
                <li>
                    <a href="./presentation.php" class="hovereffect" data-menu-name="Présentation">Présentation</a>
                </li>

                <li>
                    <a href="./evenement.php" class="hovereffect scroll" data-menu-name="Evénements">Evénements</a>
                </li>
                <li>
                    <a href="./contact.php" class="hovereffect scroll" data-menu-name="Contact">Contact</a>
                </li>
                <li>
                    <a href="./inscription.php" class="btnSignin"><span>S'inscrire</span> </a>
                </li>

            </ul>
        </nav>
    </div>
    <div class="heroContainer">
        <div> <img class="smallCloud" src="./assests/images/Cloud.png" alt="">
        </div>
        <div class="heroTextContainer">
            <?php echo $msg; ?>
            <h1 class="welcomeTitle">Bienvenue à <br> Micro Club</h1>
            <p>Le premier club scientifique <br> en Algerie 5 Mars 1985.</p>
            <div class="btnHero">
                <a href="./presentation.php">A propos de Nous</a>
            </div>
            <img class="bigCloud" src="./assests/images/Cloud.png" alt="">
        </div>

    </div>
    <div class="mainWrapper">
        <section class="presentation">

            <div class="containerPresentation">
                <div class="presentationTextContainer">
                    <h1>Micro Club c'est quoi ?</h1>
                    <p>Micro Club est le premier club scientifique universitaire en Algérie, à but non lucratif créé le 5 mars 1985 à l’Université des Sciences et Technologies Houari Boumediene: USTHB. </p>
                    <div><a href="./presentation.html">en savoir plus</a></div>
                </div><img class="plane" src="./assests/images/plane.png" alt="a plane">
            </div>

            <img style="width: 77%;margin-top: 134px;" src="./assests/images/mcMembers.png" alt="">
        </section>

        <section class="activity">
            <div class="upperContainer">
                <h1>Nos Activitées</h1>
                <div class="ballons">
                    <img style="margin-right: 15px;" src="./assests/images/smallBallon.svg" alt="">
                    <img src="./assests/images/bigBallon.svg" alt="">
                </div>

            </div>
            <div class="splitContainer">
                <div class="split">
                    <div style="position: relative;">
                        <div class="bgimg"></div>
                        <img src="./assests/images/workshop.png" alt="">
                    </div>
                    <h2>Workshops</h2>
                    <div class="yellowline"></div>
                </div>
                <div class="split">
                    <div style="position: relative;">
                        <div class="bgimg"></div>
                        <img src="./assests/images/evenement.png" alt="">
                    </div>

                    <h2>Evènements</h2>
                    <div class="yellowline"></div>
                </div>
                <div class="split">
                    <div style="position: relative;">
                        <div class="bgimg"></div>
                        <img src="./assests/images/formation.png" alt="">

                    </div>

                    <h2>Formations</h2>
                    <div class="yellowline"></div>

                </div>
            </div>
        </section>

        

        <section class="activity">
            <div class="upperContainer">
                <h1>Nos évènements les plus récents</h1>
                <div class="ballons">
                    <img style="margin-right: 15px;" src="./assests/images/smallBallon.svg" alt="">
                    <img src="./assests/images/bigBallon.svg" alt="">
                </div>

            </div>
            <div class="splitContainer">
                <?php

                    $query_2 = mysqli_query($conn,"SELECT * FROM `event` ORDER BY `id_event` DESC LIMIT 3"); 
                    
                    $query_num = mysqli_query($conn,"SELECT COUNT(`id_event`)  AS num FROM `event`"); // get number of  events

                    $row_nb = mysqli_fetch_assoc($query_num);

                    $nbr_event=$row_nb['num'];

                    if($nbr_event>0)
                    {
                    while($row_2= mysqli_fetch_assoc($query_2))
                    {
                    $title_1=$row_2['event_name'];
                    $logo_1=$row_2['event_logo'];

                    echo '<div class="split">';
                    echo '<div style="position: relative;">';
                    echo '<div class="bgimg"></div>';
                    echo '<img src='.$logo_1.' alt="">';
                    echo '</div>';
                    echo '<h2> '.$title_1.'</h2>';
                    echo '<div class="yellowline"></div>';
                    echo '</div>';
                    }
                    }
                    else
                    {
                        echo '<div class="split">';
                        echo '<div style="position: relative;">';
                        echo '<div class="bgimg"></div>';
                        echo '<img src="./assests/images/events/no_events.png" alt="">';
                        echo '</div>';
                        echo '<h2> Pas d evenement</h2>';
                        echo '<div class="yellowline"></div>';
                        echo '</div>';
                    }
  

                ?>

            </div>

        </section>       



        

        <img style="width: 100vw;margin-top: 173px; " src="./assests/images/footer.png" alt="">
        <img class="animate" src="./assests/images/voiture.png" alt="">

    </div>




    <!-- js-->
    <script src="./js/index.js"></script>
</body>

</html>