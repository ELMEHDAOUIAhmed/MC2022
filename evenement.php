
<?php

include 'config.php';

$query = mysqli_query($conn,"SELECT COUNT(`id_event`)  AS num FROM `event`"); // get number of  events

$row = mysqli_fetch_assoc($query);

$nbr_event=$row['num'];



?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="assests/images/Logo.svg">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Events</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./styles/index.css">
        <link rel="stylesheet" href="./styles/mainpage.css">
        <link rel="stylesheet" href="./styles/evenement.css">
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
                            <a href="./index.php" class="hovereffect first scroll" data-menu-name="Acceuil">Acceuil</a>
                        </li>
                        <li>
                            <a href="./presentation.php" class="hovereffect" data-menu-name="Présentation">Présentation</a>
                        </li>
        
                        <li>
                            <a href="" class="hovereffect scroll" data-menu-name="Evénements">Evénements</a>
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
        <div class="page">

            <h1 class="nosEvents">Nos évènements</h1>
            <div class="eventsContainer">

            <?php
            if($nbr_event >0)
            {

                $query_2 = mysqli_query($conn,"SELECT * FROM `event`"); 

                while($row_2= mysqli_fetch_assoc($query_2))
                {
                $title=$row_2['event_name'];
                $descr=$row_2['event_desc'];
                $logo=$row_2['event_logo'];
                $image=$row_2['event_img_1'];
                $image_1=$row_2['event_img_2'];
                $image_2=$row_2['event_img_3'];
                
                
                echo '<div class="eventContainer">';
                echo '<h3 class="eventContainer_title">'.$title.'<h3>';
                echo '<div class="eventContainer_descriptionLogo">';
                echo '<p class="eventDescription">'.$descr.'</p>';
                echo '<img src='.$logo.' class="logo" alt="this is a logo">';
                echo '</div>';
                echo '<div class="eventContainer_images">';
                echo '<div class="eventContainer_images_elements"><img src='.$image.' alt=""></div>';
                echo '<div class="eventContainer_images_elements"><img src='.$image_1.' alt=""></div>';
                echo '<div class="eventContainer_images_elements"><img src='.$image_2.' alt=""></div>';
                echo '</div>';
                echo '</div>';
                echo '<img src="./assests/images/Cloud_seperateur.png" class="Event_seperateur"  alt="">';
                
                }
            }
            else
            {
                echo '<img src="./assests/images/events/no_events.png" class="eventContainer_images_elements" alt="">';
                echo '<h3 class="eventContainer_title">Il n y a aucun evenement pour le moment<h3>';

            }

            ?>

            </div>


        </div>
        


            <script src="./js/index.js"></script>
    </body>
</html>