/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.enterMode = CKEDITOR.ENTER_BR;

	config.filebrowserBrowseUrl = "../backend/ckeditor/ckfinder/ckfinder.html";

	config.filebrowserImageBrowseUrl = "../backend/ckeditor/ckfinder/ckfinder.html?type=Images";

	config.filebrowserFlashBrowseUrl = "../backend/ckeditor/ckfinder/ckfinder.html?type=Flash";

	config.filebrowserUploadUrl = "../backend/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";

	config.filebrowserImageUploadUrl = "../backend/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";

	config.filebrowserFlashUploadUrl = "../backend/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";

	// config.filebrowserBrowseUrl = "../ckfinder.html";

	// config.filebrowserImageBrowseUrl = "../ckfinder.html?type=Images";

	// config.filebrowserFlashBrowseUrl = "../ckfinder.html?type=Flash";

	// config.filebrowserUploadUrl = "../core/connector/php/connector.php?command=QuickUpload&type=Files";

	// config.filebrowserImageUploadUrl = "../core/connector/php/connector.php?command=QuickUpload&type=Images";

	// config.filebrowserFlashUploadUrl = "../core/connector/php/connector.php?command=QuickUpload&type=Flash";
};
