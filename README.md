# Database-Project
This is a Music Library Website that me and my team designed that allows UH students to create albums, playlists and upload tracks. The log in page was formatted with the front end using the files about.php, login.php, index.php, process.php NavigationBar.php and register.php. The backend for the login page is the LoginBackend.php and RegBackend.php. Once valid credentials are entered, a session is started as our user enters our home page home.php. For the navigation bar, if a user is an average user, then there is the home-nav.php. For our artist users, there is a my-music page accessible using the artist-nav.php which will be seen upon becoming an artist. For our playlists, we used playlists.php to view all the playlists and a playlist.php to view each individual playlist. For our create playlist button we used create_playlist.php. For our discover page we used discover.php. Here for track interaction we also have like.php, PlaylistDropdown.php and AddTracks.php. In the search bar we have search.php which redirects to searchPage.php upon a search. We have our settings.php which contains a template an average user contained in users-settings.php. Here there is also a button to register as an Artist with RegisterArtist.php. Once the user is an artist, he is then able to see a different set of settings. This includes artist-settings.php, which also gives the user the option to become an admin. Here we have a logout button powered by logout.php. And we allow the artist to edit their artist info. Along with username and passcode. Finally, upon becoming an artist, the user can access the my-music.php. This allows the user to upload tracks using upload.php and create albums using create_album.php. If the user is an admin, they will see a get report button at the bottom of the page that allows them to pick a time frame to see how many songs they added and the count of elements in the database. These are powered by report.php. You can see our MySQL dump in MySQL_Dump.sql We hope you like our website!

Website: spammy.epizy.com/
-Roles
	User: 	username set passeord set
	Artist: username 456 password 456
  
-Triggers

	1) "CountTracks" in line 212 from MySQL_Dump.sql from github,  auto increment amount of tracks inside a albums/palylist when ever tracks added to one
	https://infinityfree.net/ > Client Area > Log in with credentials > Manage > Control Panel > phpMyAdmin (under DATABASES) > Connect now! (epiz_25317203_MLDB) > playlist or albums to see counter increment 	
	2) "RegisterNewArtist" in line 326 from MySQL_Dump.sql from github, RegisterNewArtist changes account from USER to ARTIST, they now have a My Music tab and 
	have privliges to add tracks and make albums, as well as his reports which is all the way at the bottom
