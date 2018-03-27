Ami szükséges php7, apache2, mysql5, rewrite_mod, composer

adjuk ki a következő parancsot ahova szeretnénk letölteni az alkalmazast
git clone https://github.com/dinidani/oldalak.git
cd oldalak
php init
composer update
szerkesszük át /oldalak/common/config/main-local.php filet, dbname=yii2advanced, 'password' => 'root'szintaktikaval adjuk meg az sql hozzáférés jelszavát
mysql segítsgével "yii2advanced" adatbázis létrehozása
php yii migrate
mysql importáljuk a /oldalak/sql/data.sql filet

cd ..
chown -R www-data:www-data ./oldalak/

/var/www/html/oldalak/vendor/sunhater/kcfinder/conf/config.php írjuk át // GENERAL SETTINGS

    'disabled' => false,

/var/www/html/oldalak/vendor/ckeditor/ckeditor/config.js

    //kcfinder hozzadasa a ckeditorhoz
   config.filebrowserBrowseUrl = '/oldalak/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = '/oldalak/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = '/oldalak/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = '/oldalak/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = '/oldalak/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = '/oldalak/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=flash';

http elérés:
http://localhost/oldalak/backend/web/index.php?r=site%2Flogin
http://localhost/oldalak/frontend/web/index.php?r=site%2Flogin
