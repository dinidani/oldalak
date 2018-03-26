Ami szükséges php7, apache2, mysql5, rewrite_mod

adjuk ki a következő parancsot ahova szeretnénk letölteni az alkalmazast
git clone https://github.com/dinidani/oldalak.git
cd oldalak
php init
composer update
php yii migrate
mysql segítsgével "yii2advanced" adatbázis létrehozása
mysql importáljuk a /oldalak/sql/data.sql filet

chown -R www-data:www-data ./oldalak/

/var/www/html/oldalak/vendor/sunhater/kcfinder/conf/config.php írjuk át // GENERAL SETTINGS

    'disabled' => false,




szerkesszük át /oldalak/common/config/main-local.php filet, 'password' => 'root'szintaktikaval adjuk meg az sql hozzáférés jelszavát
