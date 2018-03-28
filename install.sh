#!/bin/bash

if [ "$#" -eq  "4" ]
   then

mkdir $4
if [ $? -eq 0 ]
then
    echo "Directory letrehozva"
else
    echo "Root tudja letrehozni, adja meg jelszavat" >&2
    su root -c "mkdir $4"
fi

exit 0


cp -R ./* $4
cd $4
php init
composer update

echo "<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=$1',
            'username' => '$2',
            'password' => '$3',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];" > $4/common/config/main-local.php

echo "create database $1;" | mysql -u$2 -p$3
php yii migrate
cat $4/config/sql/data.sql | mysql -D $1 -u$2 -p$3
cp -f $4/config/vendor/sunhater/kcfinder/conf/config.php $4/vendor/sunhater/kcfinder/conf/config.php
cp -f $4/config/vendor/ckeditor/ckeditor/config.js $4/vendor/ckeditor/ckeditor/config.js

echo "root password for chown"
su root -c "chown -R www-data:www-data $4"
 else
    echo "./install.sh mysql_db_name mysq_username mysql_password installdir";
    echo "./install.sh yii2advanced root root /var/www/html/oldalak_test";
 fi
