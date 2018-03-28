<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

    $elemek = explode("/",Url::base());
    $root = '/'.$elemek[1];


?>
