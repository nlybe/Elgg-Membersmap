<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$language = array(

    //Menu items and titles
    'membersmap' => "Cartographie des membres",
    'membersmap:menu' => "Cartographie des membres",
    'membersmap:all' => "Cartographie des membres",
    'membersmap:allmembers' => "Tous les membres",
    'membersmap:membersof' => "Membres de %s",
    'membersmap:map' => "Carte",
    
    //tabs
    'membersmap:label:all' => "Tous les membres",
    'membersmap:label:friends' => "Amis",
    'membersmap:label:online' => "Membres connectés",
    
    //search 
    'membersmap:search' => "Chercher des membres par emplacement",
    'membersmap:search:location' => "emplacement",
    'membersmap:search:radius' => "distance à la ronde en mètres",
    'membersmap:search:radius:meters' => "distance à la ronde en mètres",
    'membersmap:search:radius:km' => "distance à la ronde en km",
    'membersmap:search:radius:miles' => "distance à la ronde en miles",
    'membersmap:search:meters' => "mètres",
    'membersmap:search:km' => "km",
    'membersmap:search:miles' => "miles",    
    'membersmap:search:showradius' => "Afficher la zone de recherche",
    'membersmap:search:submit' => "Chercher",
    'membersmap:searchnearby' => "Chercher les membres aux alentours",
    'membersmap:mylocationsis' => "Mon emplacement est : ",
    'membersmap:searchbyname' => "Chercher des membres par le nom",
    'membersmap:search:name' => "nom",
    'membersmap:search:searchname' => "Chercher des membres pour %s et alentours",
    'membersmap:search:usernotfound' => "Aucun membre trouvé",
    'membersmap:search:usersfound' => "Membres trouvés",
    'membersmap:search:around' => "Membres trouvés aux alentours",
 
    //groups
    'membersmap:group' => "Cartographie des membres du groupe",
    'membersmap:group:none' => "Aucun membre dans ce groupe",
    'membersmap:group:enablemaps' => "Activer la cartographie des membres",
    
    //js alerts
    'membersmap:map:1' => "Merci d'indiquer un emplacement dans la section d'admoinistration",
    'membersmap:map:2' => "Aucune adresse correcte",
    'membersmap:map:3' => "La géocodification a échoué pour l'une des raisons suivantes :",
    
    // settings
    'membersmap:settings:markericon' => 'Indicateur', 
    'membersmap:settings:markericon:blue-light' => 'Bleu clair', 
    'membersmap:settings:markericon:blue' => 'Bleu', 
    'membersmap:settings:markericon:green' => 'Vert', 
    'membersmap:settings:markericon:grey' => 'Gris', 
    'membersmap:settings:markericon:orange' => 'Orange', 
    'membersmap:settings:markericon:pink' => 'Rose', 
    'membersmap:settings:markericon:purple-light' => 'Pourpre clair', 
    'membersmap:settings:markericon:purple' => 'Pourpre', 
    'membersmap:settings:markericon:red' => 'Rouge', 
    'membersmap:settings:markericon:yellow' => 'Jaune', 
    'membersmap:settings:markericon:note' => 'Choisir la couleur de l\'indicateur de cartographie des membres', 
    'membersmap:settings:searchbyname' => 'Chercher un membre par nom', 
    'membersmap:settings:searchbyname:no' => 'Non', 
    'membersmap:settings:searchbyname:yes' => 'Oui', 
    'membersmap:settings:searchbyname:note' => 'Indiquer si le formulaire "Recherche des membres par leur nom" est affiché sur le côté. ',  
    'membersmap:settings:memberstab' => 'Ajouter l\'onglet "Cartographie des membres" sur la page des membres', 
    'membersmap:settings:memberstab:note' => 'Choisir si vous voulez ajouter un onglet "Cartographie des membres" sur la page des membres.<br /><strong>Important</strong> : Placer le plugin "Membersmap" après le plugin "Members" (pages : Administration->Configure->Plugins)',    
    'membersmap:settings:maponmenu' => 'Ajouter "Cartographie des membres" au menu du site', 
    'membersmap:settings:maponmenu:note' => 'Indiquer si vous souhaitez ajouter "Cartographie des membres" au menu du site. ',      
    'membersmap:settings:no' => 'Non', 
    'membersmap:settings:yes' => 'Oui',
    'membersmap:settings:batchusers' => 'Géolocation des utilisateurs par lot.',
    'membersmap:settings:batchusers:start' => 'Lancer la géolocalisation',
    'membersmap:settings:batchusers:note' => 'Si votre site compte déjà des membres, cliquez sur le bouton ci-dessus "Lancer la géolocalisation" pour convertir les emplacements indiqués en coordonnées géographiques.<br />Opération à réaliser <strong>une seule fois</strong> avant d\'utiliser pleinement ce plugin.',
    'membersmap:settings:amap_maps_api:notenabled' => 'Maps Api n\'est pas activé. La cartographie des membres est impossible.',
    
    // widget
    'membersmap:wg:title' => 'Cartographie de l\'emplacement', 
    'membersmap:wg:detail' => 'Cartographier votre emplacement', 
    'membersmap:zoom' => 'Zoom', 
);

add_translation("fr", $language);
