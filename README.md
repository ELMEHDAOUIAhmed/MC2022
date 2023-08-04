
#Auteurs                                       
Projet Cree par : 

#           Chebbah hamza 202031080702
#           YACINE OUKKAL  202031060792
#  ELMEHDAOUI Ahmed zine el abidine 191931089014

# HOSTED
`https://microclubhamzaahmedyacine.000webhostapp.com/index.php`

# Configuration de la base de données

1.Créer une base de données nommée : login .
2.importez les tables de la base de données dans phpmyadmin à partir du fichier appelé : login.sql , situé dans MicroClub-Project\database\login.sql

La configuration de la base de données est terminée !


# Informations  sur le fonctionnement des événements et les événement récents

Les événements et les événements récents sont extraits dynamiquement de la base de données, puis ajoutés au site. 

Comment ajouter un événement ?

1.importez vos nouvelles images d'événement dans le chemin : MicroClub-Project/assets/images/events
2.Récupérer le chemin relatif des différents image de l'événement example : "./assests/images/events/logo_event.png"
3.Inserer l' evenement dans la table "event" dans phpmyadmin

example :
#
`
INSERT INTO `event` ( `event_name`, `event_desc`, `event_logo`, `event_img_1`, `event_img_2`, `event_img_3`) VALUES
('Micro Catch The Flag', 'Description d evenement.', './assests/images/events/logo_event.png', './assests/images/events/MCTF_1.jpg', './assests/images/events/MCTF_2.jpg', './assests/images/events/MCTF_3.jpg'),
`

# Boite Email utilisée


Veuillez vous connecter à ce gmail pour recevoir tous les e-mails liés aux inscriptions et aux commentaires reçus

gmail:microclub.verfication.usthb@gmail.com
motdepass:Karloskarlosxx2

Cet e-mail est utilisé pour envoyer des e-mails aux utilisateurs récemment inscrits  et également récupérer les information et l envoyer a l admin

################################################### IMPORTANT : #########################################################

Veuillez consulter ce dossier pour trouver les e-mails envoyés à la fois à l'administrateur et à l'utilisateur,

MicroClub-Project\etapes_d_inscription_email_contact

n'oubliez pas de vous connecter au gmail indiqué afin de pouvoir  tester.

# Informations importantes

    Chaque Utilisateur qui s iscrit dans le site  Obtient un e-mail contenant des informations sur son inscription récente en même temps que l'administrateur reçoit un e-mail qu'un nouvel utilisateur a rejoint

# Page de Contact 

    Chaque utilisateur qui soumet un message reçoit un e-mail indiquant que ce message est bien reçu 
     en même temps, l'administrateur reçoit un e-mail contenant ce commentaire.

# Page Presentation

    Les chiffres sont calculer seulement pour les Utilisateurs approuvés uniquement ( email envoyer a l admin : microclub.verfication.usthb@gmail.com , peut accepter l utilisateur directement
    de l email s'il l'approuve , L'utilisateur sera considéré comme approuvé et le numéro sera ajouté en présentation en fonction de sa faculté et de son année d'étude )

# Compatibilité des navigateur

Chrome : fully compatible
Mozilla : (Custom scroll bar not showing)
Opera GX : fully compatible
Microsoft Edge : fully compatible


#Fin du README.md merci d'avoir lu
#################################################################################################################################################################################################



