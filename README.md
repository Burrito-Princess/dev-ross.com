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
    - Favicons

## Current known bugs:
    - ross/about.php
        <a> tag is inside the <button> tag while it should be outside it
        this would fix that you can only click on the text, and not the button its self
    - Homepage and NS api are responsive, the rest is not

## This site will be uploaded to: 
    dev-ross.com
