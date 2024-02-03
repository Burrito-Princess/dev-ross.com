# This is the GitRepo for my Portofolio Website

## Here you'll find projects in all sizes, namely: 
    - Maaslanden
    - Snake
    - Numbers.exe
    - NS API
    - Steam API

## In the steam API at: 
    - ross/steamapi/userapi.php line 5
you should add your own (or other) steam ID


## For the API's you should add the following 2 files:
    - ns.php (in /js/nsapi)
    - steam.php (in /ross/about/steamapi)
## With the following inside:
"   <?php
    $apikey = {your api key}
                                "


## In the db.php files you should add your own user and password for the databases. this applies to these files
    - js/snake/php-database/db.php
    - maaslanden/code/db.php

## In the maaslanden map:
    - Make a file called "pass.php"
## With the following inside:
"   <?php
    $pass = {your password}
                                "
## This is so only you can make keys! 


## Future ideas: 
    - Comment board
    - Reviews (products/food)
    - Favicons (ongoing)

## Current known missing stuff:
    - Snake canvas disapears on small screen, this is on purpose. this is so you can check the scores while on mobile, but cant play because you need a desktop
    - More contact info needed

## This site will be uploaded to: 
    dev-ross.com


## Maaslanden roadmap:
[check] 1. Owner awareness 
            Know which player owns which ctiy.
            When initializing a city, chose which player claims it.
            using the reassign card you can reassign a city if you've made a mistake
            - In a final game it would be cool to have some sort of box with a lock on it where you put this card, so one can only use it with permission of the others 
        
        2. Move to maaslanden.dev-ross.com
            this is so i can update maaslanden easily without having to update the entire portofolio
        
        3. multiple industries
            Allow cities to have multiple industries, which increases the range of the city
            by a cerain amount of tiles

        4. Surroundings awareness
            Know what tiles are surrounding what cities.
            should be updatable trough the page of that city.

        5. Upgrades

        L. Front-end (least important)
        L. maaslanden.dev-ross.com (indev choice) / maaslanden.net (final product)
