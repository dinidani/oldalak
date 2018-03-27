<?php
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';

    $elemek = explode("/",Url::base());
    $root = '/'.$elemek[1];

    echo "
config.filebrowserBrowseUrl = '".$root."/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=files';<br>
config.filebrowserImageBrowseUrl = '".$root."/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=images';<br>
config.filebrowserFlashBrowseUrl = '".$root."/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=flash';<br>
config.filebrowserUploadUrl = '".$root."/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=files';<br>
config.filebrowserImageUploadUrl = '".$root."/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=images';<br>
config.filebrowserFlashUploadUrl = '".$root."/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=flash';<br>
";

?>
