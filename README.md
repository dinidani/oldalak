# Project Teszt feladat, ismerkedés yii2 vel

Ez egy teszt project, gyakorlás és tanulás a célja


## Getting Started

Ami a telepítéshez szükséges: php7, apache2, mysql5, rewrite_mod, composer


## Installing Telepítő scripttel: (csak teszteléshez, nincs hibakezelés, debian - bash szintaktika)

> cd ~

> git clone https://github.com/dinidani/oldalak.git

> cd oldalak

> ./install.sh yii2advanced root root /var/www/test_feladat www-data

Paraméterek sorban: adatbázis neve , adatbázis user neve, adatbázis user jelszava, web alkönyvtár ahova telepítse, web user neve.

Ha root jogosultsag kell a cél alkonyvtar letrehozasahoz bekéri a root jelszavat.

Which environment do you want the application to be initialized in?

0 for development

> yes


Apply the above migrations

> yes


root jelszót bekéri chown számára ha szükséges

> <password>


Ezek után a két cím ahol elérhető az oldal:

http://localhost/test_feladat/backend/web/index.php

http://localhost/test_feladat/frontend/web/index.php


Belépés admin / adminpass

*****************************************************************************************

# Installing Telepítés kézzel:

## 1.Adjuk ki a következő parancsot ott ahova le szeretnénk letölteni az alkalmazast

> git clone https://github.com/dinidani/oldalak.git

> cd oldalak

> php init

> composer update

## 2.szerkesszük át /oldalak/common/config/main-local.php filet, dbname=yii2advanceddb, 'password' => 'root'szintaktikaval adjuk meg az sql hozzáférés jelszavát

## 3.mysql segítsgével "yii2advanceddb" adatbázis létrehozása

> php yii migrate

## 4.mysql importáljuk a /oldalak/config/sql/data.sql filet


> cd ..

> chown -R www-data:www-data ./oldalak/

## 5./var/www/html/oldalak/vendor/sunhater/kcfinder/conf/config.php írjuk át (ezt majd javítani kell session alapúra !!!)


// GENERAL SETTINGS

    'disabled' => false,


> cp /var/www/html/oldalak/config/vendor/ckeditor/ckeditor/config.js /var/www/html/oldalak/vendor/ckeditor/ckeditor/config.js



## http elérés:

http://localhost/oldalak/backend/web/index.php?r=site%2Flogin

http://localhost/oldalak/frontend/web/index.php?r=site%2Flogin


admin / adminpass hozzáféréssel (ezt majd javítani kell admin lte alapúra !!!)
