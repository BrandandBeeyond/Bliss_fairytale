/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see s://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	  // Add[MT]to the integration list
    config.extraPlugins += (config.extraPlugins.length == 0 ? '' : ',') + 'ckeditor_wiris';
};
If you use the Full MathML mode and for CKeditor versions higher than 4.0 you have to add this line as well:
 
config.allowedContent = true;