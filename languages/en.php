<?php
/**
 * Elgg MembersMap Plugin
 * @package membersmap 
 */

$language = array(

    //Menu items and titles
    'membersmap' => "Map of Members",
    'membersmap:menu' => "Map of Members",
    'membersmap:all' => "Map of Members",
    'membersmap:newest' => "Newest Members (%s)",
    'membersmap:allmembers' => "All Members",
    'membersmap:membersof' => "Members of %s",
    'membersmap:map' => "Map",
    'membersmap:map:detailed' => "Detailed Map",
    'admin:settings:membersmap' => 'Map of Members', 
    'membersmap:live_map' => "Live Map",
    
    // nearby 
    'membersmap:members:nearby:search' => 'Users near "%s"', 
    'membersmap:members:newest' => 'Map with %s newest users', 
    
    //tabs
    'membersmap:label:newest' => "Newest",
    'membersmap:label:all' => "All Members",
    'membersmap:label:friends' => "My Friends",
    'membersmap:label:online' => "Online Members",
    
    //search 
    'membersmap:search' => "Search members by location",
    'membersmap:search:location' => "location",
    'membersmap:search:radius' => "radius (meters)",
    'membersmap:search:radius:meters' => "radius (meters)",
    'membersmap:search:radius:km' => "radius (km)",
    'membersmap:search:radius:miles' => "radius (miles)",
    'membersmap:search:meters' => "meters",
    'membersmap:search:km' => "km",
    'membersmap:search:miles' => "miles",    
    'membersmap:search:showradius' => "Show search area",
    'membersmap:search:submit' => "Search",
    'membersmap:searchnearby' => "Search nearby members",
    'membersmap:mylocationsis' => "My location is: ",
    'membersmap:searchbyname' => "Search members by name",
    'membersmap:search:name' => "name",
    'membersmap:search:searchname' => "Member search for %s and nearby",
    'membersmap:search:usernotfound' => "No users found for keyword %s",
    'membersmap:search:usersfound' => "Members found",
    'membersmap:search:around' => "Members nearby on members found",
 
    //groups
    'membersmap:group' => "Group Members on Map",
    'membersmap:group:none' => "No members on this group",
    'membersmap:group:enablemaps' => "Enable Map of Members",
    
    //js alerts
    'membersmap:map:1' => "Please enter a valid default location on admin section",
    'membersmap:map:2' => "No valid search address",
    'membersmap:map:3' => "Geocode was not successful for the following reason",
    
    // settings
    'membersmap:settings:markericon' => 'Marker Icon', 
    'membersmap:settings:markericon:blue-light' => 'Blue light', 
    'membersmap:settings:markericon:blue' => 'Blue', 
    'membersmap:settings:markericon:green' => 'Green', 
    'membersmap:settings:markericon:grey' => 'Grey', 
    'membersmap:settings:markericon:orange' => 'Orange', 
    'membersmap:settings:markericon:pink' => 'Pink', 
    'membersmap:settings:markericon:purple-light' => 'Purple light', 
    'membersmap:settings:markericon:purple' => 'Purple', 
    'membersmap:settings:markericon:red' => 'Red', 
    'membersmap:settings:markericon:yellow' => 'Yellow', 
    'membersmap:settings:markericon:user_icon_tiny' => 'User icon (tiny)',
    'membersmap:settings:markericon:user_icon_small' => 'User icon (small)',
    'membersmap:settings:markericon:note' => 'Select the color of marker for members on map', 
    'membersmap:settings:searchbyname' => 'Search members by name', 
    'membersmap:settings:searchbyname:no' => 'No', 
    'membersmap:settings:searchbyname:yes' => 'Yes', 
    'membersmap:settings:searchbyname:note' => 'Select if display "Search members by name" form (sidebar). ',  
    'membersmap:settings:memberstab' => 'Add "Map of Members" tab on Elgg Members Page', 
    'membersmap:settings:memberstab:note' => 'Select if you want to add a "Map of Members" tab on Elgg Members Page (domain/members).<br /><strong>Important</strong>: You have to put Membersmap plugin after Members plugin in Administration/Configure/Plugins',    
    'membersmap:settings:maponmenu' => 'Add "Map of Members" item on site menu', 
    'membersmap:settings:maponmenu:note' => 'Select if you want to add a "Map of Members" item on site menu. ',      
    'membersmap:settings:geo_live' => 'Geolocation and User\'s Live Map',
    'membersmap:settings:geo_live:enable' => 'Enable Geolocation and User\'s Live Map',
    'membersmap:settings:geo_live:enable:note' => 'If select yes, logged-in users will be geo-located and they will be displayed on live map. The HTML Geolocation API is used to locate a user\'s position.', 
    'membersmap:settings:geo_live:geo_live_time' => 'Geolocation Frequency',
    'membersmap:settings:geo_live:geo_live_time:note' => 'Time in seconds to determine how often locate users. Set 0 for no limit (not suggested).', 
    'membersmap:settings:no' => 'No', 
    'membersmap:settings:yes' => 'Yes',
    'membersmap:settings:batchusers' => 'Batch Users Geolocation',
    'membersmap:settings:batchusers:start' => 'Start Geolocation',
    'membersmap:settings:batchusers:note' => 'If you have already members on your Elgg site, click on this button for converting users location to coordinates.<br />You have to do it <strong>just once</strong> before start using this plugin.',
    'membersmap:settings:amap_maps_api:notenabled' => 'Maps Api is not enabled. Map of members cannot be displayed',
    'membersmap:settings:newestusers' => 'Add "Newest Members" tab', 
    'membersmap:settings:newestusers:note' => 'Add the option to display Newest Members as intro page of the map section. It is recommented to select "Yes" when have large number of members.',    
    'membersmap:settings:newestusers:howmany' => 'Number: ', 
    'membersmap:settings:newestusers:howmany:note' => 'Define how many newest members will display. Value must be numeric.',    
    'membersmap:settings:tabs:general_options' => 'General Options', 
    'membersmap:settings:tabs:users_geolocation' => 'Users Geolocation', 
    'membersmap:settings:save:ok' => 'Settings were successfully saved', 
    'membersmap:settings:geolocation:results' => 'Geolocation Results',
    'membersmap:settings:initial_load:title' => 'Initial map',
    'membersmap:settings:initial_load:note' => 'Select what to show on initial map',
    'membersmap:settings:initial_load:all' => 'All users',
    'membersmap:settings:initial_load:newest' => 'Newest users',
    'membersmap:settings:initial_load:mylocation' => 'User\'s location',
    'membersmap:settings:initial_load:newest_no' => 'No of newest users',
    'membersmap:settings:initial_load:newest_no:note' => 'If <strong>Newest users</strong> selected, enter the number of newest users to display.',
    'membersmap:settings:initial_load:mylocation_radius' => 'Radius',
    'membersmap:settings:initial_load:mylocation_radius:note' => 'If <strong>User\'s location</strong> selected, enter the default radius for searching around user\'s location.',    
    'membersmap:settings:sidebar_list' => 'Display list of users on sidebar', 
    'membersmap:settings:sidebar_list:note' => 'Select if you want to display list of groups in sidebar. The users will be clickable displaying the info window of user on map.',    
    
    // widget
    'membersmap:wg:title' => 'Location Map', 
    'membersmap:wg:detail' => 'Show your location on map', 
    'membersmap:zoom' => 'Zoom', 
    'membersmap:wg:nolocationdefined' => 'User has not defined his/her location', 
    'membersmap:wg:alltitle' => 'Map of Members', 
    'membersmap:wg:alldetail' => 'Display map with all or newest members',    
    'membersmap:wg:alldetail:no' => 'No of users to display',  
    'membersmap:widgets:settings:zoom' => 'Select zoom level on map: ',    
    'membersmap:widgets:settings:mapheight' => 'Enter a numeric value for the height of the map (in pixels): ',    
    'membersmap:widget:group:title' => 'Map of Group Members',
    'membersmap:widget:group:detail' => 'Display map with group members',
    'membersmap:widget:group:invalid_group' => 'Invalid group',
    
    // user geolocation 
    'membersmap:geolocation:user_not_logged_in' => 'Not valid access for not logged-in users', 
);

add_translation("en", $language);
