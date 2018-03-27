/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

    //kcfinder hozzadasa a ckeditorhoz
   config.filebrowserBrowseUrl = '/oldalak/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = '/oldalak/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = '/oldalak/vendor/sunhater/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = '/oldalak/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = '/oldalak/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = '/oldalak/vendor/sunhater/kcfinder/upload.php?opener=ckeditor&type=flash';

};
