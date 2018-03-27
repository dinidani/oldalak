# Project Teszt feladat, ismerkedés yii2 vel
Ez egy teszt project, gyakorlás és tanulás a célja

## Getting Started
Ami a telepítéshez szükséges: php7, apache2, mysql5, rewrite_mod, composer

## Installing Telepítő scripttel:
cd ~

git clone https://github.com/dinidani/oldalak.git

cd oldalak

./install.sh yii2advanced root root /var/www/test_feladat


Which environment do you want the application to be initialized in?
0 for development
<yes>


Apply the above migrations
<yes>


root password for chown
<password>

Ezek után a két cím ahol elérhető az oldal:

http://localhost/test_feladat/backend/web/index.php

http://localhost/test_feladat/frontend/web/index.php


Belépés admin / adminpass

*****************************************************************************************

# Installing Telepítés kézzel:

## Adjuk ki a következő parancsot ott ahova le szeretnénk letölteni az alkalmazast

git clone https://github.com/dinidani/oldalak.git

cd oldalak

php init

composer update

## szerkesszük át /oldalak/common/config/main-local.php filet, dbname=yii2advanceddb, 'password' => 'root'szintaktikaval adjuk meg az sql hozzáférés jelszavát

## mysql segítsgével "yii2advanceddb" adatbázis létrehozása

php yii migrate

## mysql importáljuk a /oldalak/config/sql/data.sql filet


cd ..

chown -R www-data:www-data ./oldalak/

## /var/www/html/oldalak/vendor/sunhater/kcfinder/conf/config.php írjuk át

// GENERAL SETTINGS
    'disabled' => false,

cp /var/www/html/oldalak/config/vendor/ckeditor/ckeditor/config.js /var/www/html/oldalak/vendor/ckeditor/ckeditor/config.js


## http elérés:
http://localhost/oldalak/backend/web/index.php?r=site%2Flogin

http://localhost/oldalak/frontend/web/index.php?r=site%2Flogin


admin / adminpass hozzáféréssel
