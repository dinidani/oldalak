/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

    //kcfinder hozzadasa a ckeditorhoz
    var location = window.location.pathname.split("/")[1];
    config.filebrowserBrowseUrl = '/'+location+'/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '/'+location+'/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '/'+location+'/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '/'+location+'/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '/'+location+'/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '/'+location+'/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=flash';

};
