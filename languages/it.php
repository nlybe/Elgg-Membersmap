<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$language = array (
    
    //Menu items and titles
    'membersmap:settings:google_api_key:clickhere' => 'Vai su <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a> per ottenere il tuo "Google API key". <br />(<strong>Nota:</strong> l\'API key NON è obbligatorio. E\' necessario solo se vuoi monitorare le statistiche sull\'utilizzo delle API, o se hai un account API  a pagamento).',
    'membersmap:settings:cluster:note' => 'Seleziona Si per raggruppare sulla mappa gli utenti vicini. <br /> Se disabilitato, se si clicca sui marcatori sovrapposti questi si separeranno in modo da poterli vedere tutti singolarmente',
    'membersmap' => 'Mappa dei Vicini',
    'membersmap:menu' => 'Mappa dei Vicini',
    'membersmap:all' => 'Mappa dei Vicini',
    'membersmap:allmembers' => 'Tutti i Vicini',
    'membersmap:membersof' => 'Vicini di %s',
    'membersmap:map' => 'Mappa',
    
    //tabs
    'membersmap:label:all' => 'Tutti i Vicini',
    'membersmap:label:friends' => 'I miei amici',
    'membersmap:label:online' => 'Vicini online',
    
    //search 
    'membersmap:search' => 'Cerca i vicini per indirizzo',
    'membersmap:search:location' => 'indirizzo',
    'membersmap:search:radius' => 'raggio (metri)',
    'membersmap:search:radius:meters' => 'radius (metri)',
    'membersmap:search:radius:km' => 'radius (km)',
    'membersmap:search:radius:miles' => 'radius (miglia)',
    'membersmap:search:meters' => 'metri',
    'membersmap:search:km' => 'km',
    'membersmap:search:miles' => 'miglia',    
    
    'membersmap:search:showradius' => 'Mostra l\'area della ricerca',
    'membersmap:search:submit' => 'Cerca',
    'membersmap:searchnearby' => 'Cerca i vicini più vicini',
    'membersmap:mylocationsis' => 'Il mio indirizzo è:',
    'membersmap:searchbyname' => 'Cerca i vicini per nome',
    'membersmap:search:name' => 'nome',
    'membersmap:search:searchname' => 'Ricerca dei vicini di %s',
    'membersmap:search:usernotfound' => 'Non ho trovato vicini',
    'membersmap:search:usersfound' => 'Vicini trovati',
    'membersmap:search:around' => 'Altri vicini nei paraggi di quelli cercati',
    
    //groups
    'membersmap:group' => 'Mappa dei vicini del gruppo',
    'membersmap:group:none' => 'Non ci sono vicini in questo gruppo',
    'membersmap:group:enablemaps' => 'Abilita la Mappa dei Vicini',
    
    //js alerts
    'membersmap:map:1' => 'Inserisci un indirizzo predefinito valido nella sezione di amministrazione',
    'membersmap:map:2' => 'Non è un indirizzo valido',
    'membersmap:map:3' => 'La geolocalizzazione non è stata possibile a causa dei seguenti motivi',
    
    // settings
    'membersmap:settings:google_maps' => 'Impostazioni di Google Maps',
    'membersmap:settings:google_api_key' => 'Inserisci il tuo Google API key',
    'membersmap:settings:map_width' => 'Larghezza della mappa',
    'membersmap:settings:map_width:how' => 'In numero o in percentuale (es. 500 o 100%)',
    'membersmap:settings:map_height' => 'Altezza della mappa',
    'membersmap:settings:map_height:how' => 'In numero (es. 500)',
    'membersmap:settings:defaultlocation' => 'Indirizzo predefinito',
    'membersmap:settings:defaultlocation:note' => 'Inserisci un indirizzo valido (CAP, città, paese, etc. es. 10100, Italia)',
    'membersmap:settings:defaultzoom' => 'Ingrandimento predefinito',
    'membersmap:settings:defaultzoom:note' => 'Inserisci un ingrandimento (0 minimo, 19 massimo)',
    'membersmap:settings:cluster' => 'Raggruppa gli utenti vicini',
    'membersmap:settings:cluster:no' => 'No',
    'membersmap:settings:cluster:yes' => 'Si',
    'membersmap:settings:markericon' => 'Icona del marcatore',
    'membersmap:settings:markericon:blue-light' => 'Azzurro',
    'membersmap:settings:markericon:blue' => 'Blu',
    'membersmap:settings:markericon:green' => 'Verde',
    'membersmap:settings:markericon:grey' => 'Grigio',
    'membersmap:settings:markericon:orange' => 'Arancione',
    'membersmap:settings:markericon:pink' => 'Rosa',
    'membersmap:settings:markericon:purple-light' => 'Violetto',
    'membersmap:settings:markericon:purple' => 'Viola',
    'membersmap:settings:markericon:red' => 'Rosso',
    'membersmap:settings:markericon:yellow' => 'Giallo',
    'membersmap:settings:markericon:note' => 'Seleziona il colore del marcatore dei vicini',
    'membersmap:settings:searchbyname' => 'Cerca i vicini per nome',
    'membersmap:settings:searchbyname:no' => 'No',
    'membersmap:settings:searchbyname:yes' => 'Si',
    'membersmap:settings:searchbyname:note' => 'Seleziona per visualizzare "Cerca i vicini per nome" nella barra laterale',    
    'membersmap:settings:unitmeas' => 'Distance Unit of Measurement', 
    'membersmap:settings:unitmeas:meters' => 'Meters', 
    'membersmap:settings:unitmeas:km' => 'Kilometers', 
    'membersmap:settings:unitmeas:miles' => 'Miles',
    'membersmap:settings:unitmeas:note' => 'Select Unit of Measurement will be used in searching.',   
    'membersmap:settings:memberstab' => 'Add "Map of Members" tab on Elgg Members Page', 
    'membersmap:settings:memberstab:note' => 'Select if you want to add a "Map of Members" tab on Elgg Members Page (domain/members). ',    
    'membersmap:settings:maponmenu' => 'Add "Map of Members" item on site menu', 
    'membersmap:settings:maponmenu:note' => 'Select if you want to add a "Map of Members" item on site menu. ',      
    'membersmap:settings:no' => 'No', 
    'membersmap:settings:yes' => 'Yes',
    'membersmap:settings:batchusers' => 'Batch Users Geolocation',
    'membersmap:settings:batchusers:start' => 'Start Geolocation',
    'membersmap:settings:batchusers:note' => 'If you already members on your Elgg site, click on this button for converting users location to coordinates.<br />You have to do it <strong>just once</strong> when you start using this plugin.',
    
    
    // widget
    'membersmap:wg:title' => 'Indirizzo',
    'membersmap:wg:detail' => 'Show your location on map',
    'membersmap:zoom' => 'Zoom',
);

add_translation("it", $language);
