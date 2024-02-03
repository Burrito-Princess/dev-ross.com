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

## Future ideas: 
    - Comment board
    - Reviews (products/food)
    - Favicons (ongoing)

## Current known missing stuff:
    - ross/about.php
        <a> tag is inside the <button> tag while it should be outside it
        this would fix that you can only click on the text, and not the button its self
    - Homepage, NS api and about page are responsive. The rest is not
    - Snake canvas disapears on small screen, this is on purpose. this is so you can check the scores while on mobile, but cant play because you need a desktop
    - More contact info needed

## This site will be uploaded to: 
    dev-ross.com


## Maaslanden roadmap:
    1. Owner awareness
        Know which player owns which ctiy
        You will have a card, which you can scan. Then you will be able to select from initialized cities to claim. 
        
    2. multiple industries
        Allow cities to have multiple industries, which increases the range of the city
        by a cerain amount of tiles
    3. Surroundings awareness
        Know what tiles are surrounding what cities.
        should be updatable trough the page of that city.
    4. Upgrades
    L. Front-end (least important)
    L. maaslanden.dev-ross.com (indev choice) / maaslanden.net (final product)
