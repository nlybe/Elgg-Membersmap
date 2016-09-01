<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$language = array(

    //Menu items and titles
    'membersmap' => "Χάρτης Μελών",
    'membersmap:menu' => "Χάρτης Μελών",
    'membersmap:all' => "Χάρτης Μελών",
    'membersmap:allmembers' => "Όλα τα Μέλη",
    'membersmap:membersof' => "Μέλη του %s",
    'membersmap:map' => "Map",
    
    //tabs
    'membersmap:label:all' => "Όλοι οι Χρήστες",
    'membersmap:label:friends' => "Οι Φίλοι μου",
    'membersmap:label:online' => "Online Χρήστες",
    
    //search 
    'membersmap:search' => "Αναζήτηση μελών",
    'membersmap:search:location' => "τοποθεσία",
    'membersmap:search:radius' => "απόσταση (μέτρα)",
    'membersmap:search:radius:meters' => "απόσταση (μέτρα)",
    'membersmap:search:radius:km' => "απόσταση (χιλιόμετρα)",
    'membersmap:search:radius:miles' => "απόσταση (μίλια)",    
    'membersmap:search:meters' => "μέτρα",
    'membersmap:search:km' => "χμ",
    'membersmap:search:miles' => "μίλια",    
    'membersmap:search:showradius' => "Εμφάνιση περιοχής αναζήτησης",
    'membersmap:search:submit' => "Αναζήτηση",
    'membersmap:searchnearby' => "Κοντινά μέλη",
    'membersmap:mylocationsis' => "Η τοποθεσία μου: ",
    'membersmap:searchbyname' => "Αναζήτηση μελών με όνομα",
    'membersmap:search:name' => "όνομα μέλους",
    'membersmap:search:searchname' => "Αναζήτηση μελών για %s",
    'membersmap:search:usernotfound' => "Δεν βρέθηκαν μέλη κατά την αναζήτηση σας",
    'membersmap:search:usersfound' => "Χρήστες που βρέθηκαν",
    'membersmap:search:around' => "Μέλη κοντινά στους χρήστες που βρέθηκαν",    
 
    //groups
    'membersmap:group' => "Χάρτης Μελών Ομάδας",
    'membersmap:group:none' => "Δεν υπάρχουν μέλη στην Ομάδα",
    'membersmap:group:enablemaps' => "Ενεργοποίηση Χάρτη Μελών",
    
    //js alerts
    'membersmap:map:1' => "Παρακαλούμε καταχωρείστε μια έγκυρη προεπιλεγμένη διεύθυνση στην ενότητα διαχείρισης",
    'membersmap:map:2' => "Μη έγκυρη τοποθεσία",
    'membersmap:map:3' => "Geocode was not successful for the following reason",
    
    // settings
    'membersmap:settings:markericon' => 'Επιλογή εικόνας', 
    'membersmap:settings:markericon:blue-light' => 'Ανοικτό μπλε', 
    'membersmap:settings:markericon:blue' => 'Μπλε', 
    'membersmap:settings:markericon:green' => 'Πράσινο', 
    'membersmap:settings:markericon:grey' => 'Γκρι', 
    'membersmap:settings:markericon:orange' => 'Πορτοκαλί', 
    'membersmap:settings:markericon:pink' => 'Ροζ', 
    'membersmap:settings:markericon:purple-light' => 'Ανοικτό μωβ', 
    'membersmap:settings:markericon:purple' => 'Μωβ', 
    'membersmap:settings:markericon:red' => 'Κόκκινο', 
    'membersmap:settings:markericon:yellow' => 'Κίτρινο', 
    'membersmap:settings:markericon:note' => 'Επιλέξτε εικονίδιο για την προβολή μελών στο χάρτη',  
    'membersmap:settings:searchbyname' => 'Αναζήτηση μελών με όνομα', 
    'membersmap:settings:searchbyname:no' => 'Όχι', 
    'membersmap:settings:searchbyname:yes' => 'Ναι', 
    'membersmap:settings:searchbyname:note' => 'Επιλέξτε εάν θέλετε να εμφανίζεται η φόρμα "Αναζήτηση μελών με όνομα" form. ',     
    'membersmap:settings:memberstab' => 'Add "Map of Members" tab on Elgg Members Page', 
    'membersmap:settings:memberstab:note' => 'Select if you want to add a "Map of Members" tab on Elgg Members Page (domain/members). ',    
    'membersmap:settings:maponmenu' => 'Add "Map of Members" item on site menu', 
    'membersmap:settings:maponmenu:note' => 'Select if you want to add a "Map of Members" item on site menu. ',      
    'membersmap:settings:no' => 'No', 
    'membersmap:settings:yes' => 'Yes',
    'membersmap:settings:batchusers' => 'Batch Users Geolocation',
    'membersmap:settings:batchusers:start' => 'Start Geolocation',
    'membersmap:settings:batchusers:note' => 'If you already members on your Elgg site, click on this button for converting users location to coordinates.<br />You have to do it <strong>just once</strong> when you start using this plugin.',
    'membersmap:settings:amap_maps_api:notenabled' => 'Maps Api is not enabled. Map of members cannot be displayed',
    
    // widget
    'membersmap:wg:title' => 'Τοποθεσία', 
    'membersmap:wg:detail' => 'Εμφανίστε την τοποθεσία σας',
    'membersmap:zoom' => 'Zoom', 
);

add_translation("el", $language);
