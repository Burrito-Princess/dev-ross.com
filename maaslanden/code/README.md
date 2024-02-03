NFC tag

	every city has a tag in it with: 

		- Game ID
		- City ID


This makes a link to a website link as following: 

http://www.maaslanden.net?game=1&city=3

(not a real link yet)



The site has a database with game IDs. Every board has it's own game ID. so the site knows which games are currently being played.
When a tile is taged, the link is followed. the site sees the city id, choses its values randomly.

If a city is already claimed (Initialized), the site will show the values of the city.


the values are: 
	- Type					[Capital, City, Town, Village]
	- Name					[Amsterdam, Den Haag, Utrecht, Rotterdam, Nijmegen, Groningen, Middelburg, Zwolle, Almere, ...]
	- Industry				Could depend on what country/city. Or just randomized [Lumber, Mining, Nuclear, Tourism, Argiculture, Fishing]
	- Initial Population	depends on what the type 
	- Current Population	[Village: 1 000 - 20 000, Town: 10 000 - 50 000, City: 50 000 - 200 000, Capital: 100 000 - 500 000]
	- City ID				The ID of the city



You can upgrade your city by tapping a upgrade card with your phone

Upgrade cards control:
	- Population
	- # of Industries 
	- Effect radius for resources

