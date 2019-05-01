MembersMap Plugin for Elgg
==========================

![Elgg 2.3](https://img.shields.io/badge/Elgg-2.1-orange.svg?style=flat-square)

Elgg map plugin for showing community members in Google Maps, based on "location" field offering multiple search options.

This plugin requires the Maps API plugin (https://github.com/nlybe/Elgg-MapsAPI)

Demo: http://nikos.lyberakis.gr/elgg/membersmap

###Features###

- Group widget for displaying group members on map
- Option to display members around current logged-in user's location
- Option to show initally all members, newest members or members around current loggedin user's location
- Optionally, a list of members, who are displayed on map, loaded on sidebar
- Search functionality users on map using location, radius and keyword
- Option to ask a customized search via URL, e.g. http://www.mydomain.com/membersmap?l=Greece&r=3000&q=username&sr=show
- Based on Google Geocoding API
- Elgg caching of user locations
- Use of MarkerClusterer for improving map view when a large number of users are there on map
- When multiple markers are located at the same or nearby location, they are splitted so they are clickable
- Non registered users can see only users with public location.
- Registered users can see all users, online users and friends.
- Search for members based on a given address and radius
- Search for nearby members based on radius
- Search for members on map by name and their nearby members (optional)
- Option to show search area.
- Display members of group on map, if this option is enabled on group.
- Widget for users to display their location on map
- Option to display Newest Members as intro page of the map section
- Option to select marker in settings
- Compatible with Profile Manager plugin (default 'location' field is required)
- Visit user's profile from map
- Multiple configuration options about google maps

###Installation###

Requires: Elgg 2.1 or higher

1. Upload amap_maps_api plugin in "/mod/" elgg folder and activate it
2. In "Administration/Configure/Settings/AgoraMap Maps API" you must enter API keys and basic map options
3. Upload membersmap in "/mod/" elgg folder and activate it
4. Optionally in "Administration/Configure/Settings/AgoraMap Maps API", run once 'Batch Users Geolocation' for geolocate current users
5. In "Administration/Configure/Settings/Map of Members" you can configure several plugin options
6. If using Profile Manager, in the Profile Manager settings, import default fields. Delete fields you don't want but leave location field.






