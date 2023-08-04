<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="assests/images/Logo.svg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentation</title>
    <link rel="stylesheet" href="./styles/presentation.css">
    <link rel="stylesheet" href="./styles/mainpage.css">
    <link rel="stylesheet" href="./styles/index.css">

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
                    <a href="#" class="hovereffect" data-menu-name="Présentation">Présentation</a>
                </li>

                <li>
                    <a href="evenement.php" class="hovereffect scroll" data-menu-name="Evénements">Evénements</a>
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

    <div class="presentationWrapper">

        <div class="aboutus">
            <div class="textAboutus">
                <h1>Qui Sommes nous ?</h1>
                <p> Micro Club est le premier club scientifique universitaire en Algérie, à but non lucratif créé le 5 mars 1985 à l’Université des Sciences et Technologies Houari Boumediene: USTHB. Dans le but de créer une culture qui favorise le développement
                    et la vulgarisation de l’informatique parmi les jeunes. On ne vise pas seulement à acquérir aux gens les compétences techniques du domaine informatique à travers des formations et des ateliers, mais aussi à les connecter avec le monde
                    de l’entrepreneuriat à travers des événements et des expositions. Et les préparer à l’avenir professionnel afin d’augmenter la production en ce dernier au niveau national.</p>
            </div>
            <img src="./assests/images/earth.png" alt="">
        </div>

        <div class="achivements">
            <img src="./assests/images/plane2.png" alt="">
            <div>
                <h1>Nos Accomplissements</h1>
                <p> Micro Club a pu fièrement représenter la communauté estudiantine à l’échelle nationale, et ce en prenant part à différentes activités impliquant par exemple l’organisation d’évènements avec le Ministre délégué chargé des Startup. Nous
                    avons aussi eu l’honneur de recevoir le Président de la République Mr Tebboune qui a salué les efforts fournis par notre club et l’ambition dégagée par les jeunes étudiants algériens. Le club a aussi réalisé de nombreux projets, créant
                    des applications et dispositifs préventifs durant la pandémie, ainsi que des projets en collaboration avec le Ministère de la Jeunesse et des Sports à travers la création de l’application Yaddi, une plateforme d’aide au bénévolat.
                    Nous avons aussi fait des apparitions sur des plateaux TV comme Canal Algérie ,Ennahar et El-Bilad.</p>
            </div>

        </div>
        <h1 class="titreChiffres"> Micro Club en chiffres </h1>
        <div class="chiffres">
         <h1>Nombres d'etudiant par faculté</h1>
            <?php
                // connection base de données 
            $connect = mysqli_connect("localhost", "root","", "login");
            if ($connect->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
            //requête SQL
            $sql = "SELECT count(*), faculty FROM mc_users WHERE code='' GROUP BY faculty";
           
            //execution de la requête
            $result = $connect -> query($sql);
           // $result2 = $connect -> query($sql2);
            // voir si la table est vide ou pas 
            if ($result->num_rows > 0 ){
                while($row = $result->fetch_assoc()) {
                    switch ($row['faculty']) {
                        case 'Sciences de la terre et de Geographie': 
                            $Geographie = $row['count(*)']-1;
                        break;   
                        case 'Informatique':
                            $informatique = $row['count(*)']-1;
                        break;
                        case 'Genie Mecanique et Genie des Procedes':
                            $Mecanique = $row['count(*)']-1;
                        break;
                        case 'Sciences Biologiques':
                            $Biologie = $row['count(*)']-1;
                        break;
                        case 'Mathematiques':
                            $Mathématiques = $row['count(*)']-1;
                        break;
                        case 'Chimie':
                        $Chimie = $row['count(*)']-1;
                        break;
                        case 'Genie electrique':
                          $Electrique = $row['count(*)']-1;
                        break;
                        case 'Physique':
                            $Physique = $row['count(*)']-1;
                        break; 
                        case 'Genie Civil':
                            $Génie = $row['count(*)']-1;
                        break;  
                    }
                }
            }
            $connect->close();
            ?>
         
                
            
            <div><img src="./assests/images/study/1.png" alt="">
                <h3>Geographie</h3>
                <strong><?php
                    echo $Geographie;
                ?></strong>
            </div>
            <div><img src="./assests/images/study/9.png" alt="">
                <h3>informatique</h3>
                <strong>
                    <?php
                    echo $informatique;
                    ?>    
                        </strong>
            </div>
            <div><img src="./assests/images/study/8.png" alt="">
                <h3>Mecanique</h3>
                <strong>
                    <?php
                       echo $Mecanique; 
                    ?>
                </strong>
            </div>
            <div><img src="./assests/images/study/7.png" alt="">
                <h3>Biologie</h3>
                <strong>
                    <?php
                     echo $Biologie;  
                    ?>
                </strong>
            </div>
            <div><img src="./assests/images/study/6.png" alt="">
                <h3>Mathématiques</h3>
                <strong>
                    <?php
                    echo $Mathématiques;
                    ?>
                </strong>
            </div>
            <div><img src="./assests/images/study/5.png" alt="">
                <h3>Chimie</h3>
                <strong>
                    <?php
                    echo $Chimie;
                    ?>
                </strong>
            </div>
            <div><img src="./assests/images/study/4.png" alt="">
                <h3>Electrique</h3>
                <strong>
                    <?php
                      echo $Electrique;  
                    ?>
                </strong>
            </div>
            <div><img src="./assests/images/study/3.png" alt="">
                <h3>Physique</h3>
                <strong>
                    <?php
                    echo $Physique;
                    ?>
                </strong>
            </div>
            <div><img src="./assests/images/study/2.png" alt="">
                <h3>Génie Civil</h3>
                <strong>
                    <?php
                     echo $Génie;   
                    ?>
                </strong>
            </div>
            
        </div>
        
        <div class="etudiants">
            <h1>Nombres d'etudiants par année</h1>
            <div class="niveaux">
                
            <?php
                 $connect = mysqli_connect("localhost", "root", "", "login");
                 if ($connect->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                  }
                 $sql2 = "SELECT count(*), study FROM mc_users WHERE code='' GROUP BY study";
                 $result = $connect -> query($sql2);

             
                    while($row = $result->fetch_assoc()){
                        switch ($row['study']) {
                            case 'L1':
                              $L1 = $row['count(*)']-1;
                            break;
                            
                            case 'L2':
                                $L2 = $row['count(*)']-1;
                            break;

                            case 'L3':
                                $L3 = $row['count(*)']-1;
                            break;

                            case 'M1':
                                $M1 = $row['count(*)']-1;
                            break;

                            case 'M2':
                                $M2 = $row['count(*)']-1;
                            break;
                            
                        }
                    }
                
                    $connect->close();     
                    
             ?>
                <div><strong><?php echo $L1; ?></strong><img src="./assests/images/study/L1.png" alt=""></div>
                <div><strong><?php  echo $L2; ?></strong><img src="./assests/images/study/L2.png" alt=""></div>
                <div><strong><?php   echo $L3; ?></strong><img src="./assests/images/study/L3.png" alt=""></div>
                <div><strong><?php  echo $M1; ?></strong><img src="./assests/images/study/M1.png" alt=""></div>
                <div><strong><?php  echo $M2; ?></strong><img src="./assests/images/study/M2.png" alt=""></div>
             </div>
        </div>
        
        <h1 style="text-align: center;" class="titreChiffres">Nos Sponsors</h1>
        <div class="sponsors">
            <div><img src="./assests/images/sponsors/Group 15 (1).png" alt=""></div>
            <div><img src="./assests/images/sponsors/aigle.png" alt=""></div>
            <div><img src="./assests/images/sponsors/image 13.png" alt=""></div>
            <div><img src="./assests/images/sponsors/mob.png" alt=""></div>
            <div><img src="./assests/images/sponsors/pixelCraft 1.png" alt=""></div>
            <div><img src="./assests/images/sponsors/USTHB 1.png" alt=""></div>
        </div>
    </div>
</body>

</html>