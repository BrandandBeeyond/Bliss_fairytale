CKEditor 4 Changelog
====================

## CKEditor 4.13

New Features:

* [#835](s://github.com/ckeditor/ckeditor-dev/issues/835): Extended support for pasting from external applications:
   * Added support for pasting rich content from Google Docs with the [Paste from Google Docs](s://ckeditor.com/cke4/addon/pastefromgdocs) plugin.
   * Added a new [Paste Tools](s://ckeditor.com/cke4/addon/pastetools) plugin for unified paste handling.
* [#3315](s://github.com/ckeditor/ckeditor-dev/issues/3315): Added support for strikethrough in the [BBCode](s://ckeditor.com/cke4/addon/bbcode) plugin. Thanks to [Alexander Kahl](s://github.com/akahl-owl)!
* [#3175](s://github.com/ckeditor/ckeditor-dev/issues/3175): Introduced selection optimization mechanism for handling incorrect selection behaviors in various browsers:
    * [#3256](s://github.com/ckeditor/ckeditor-dev/issues/3256): Triple-clicking in the last table cell and deleting content no longer pulls the content below into the table.
    * [#3118](s://github.com/ckeditor/ckeditor-dev/issues/3118): Selecting a paragraph with a triple-click and applying a heading applies the heading only to the selected paragraph.
    * [#3161](s://github.com/ckeditor/ckeditor-dev/issues/3161): Double-clicking a `<span>` element containing just one word creates a correct selection including the clicked `<span>` only.
* [#3359](s://github.com/ckeditor/ckeditor-dev/issues/3359): Improved [dialog](s://ckeditor.com/cke4/addon/dialog) positioning and behavior when the dialog is resized or moved, or the browser window is resized.
* [#2227](s://github.com/ckeditor/ckeditor-dev/issues/2227): Added the [`config.linkDefaultProtocol`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-linkDefaultProtocol) configuration option that allows setting the default URL protocol for the [Link](s://ckeditor.com/cke4/addon/link) plugin dialog.
* [#3240](s://github.com/ckeditor/ckeditor-dev/issues/3240): Extended the [`CKEDITOR.plugins.widget#mask`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#property-mask) property to allow masking only the specified part of a [widget](s://ckeditor.com/cke4/addon/widget).
* [#3138](s://github.com/ckeditor/ckeditor-dev/issues/3138): Added the possibility to use the [`widgetDefinition.getClipboardHtml()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#method-getClipboardHtml) method to customize the [widget](s://ckeditor.com/cke4/addon/widget) HTML during copy, cut and drag operations.

Fixed Issues:

* [#808](s://github.com/ckeditor/ckeditor-dev/issues/808): Fixed: [Widgets](s://ckeditor.com/cke4/addon/widget) and other content disappear on drag and drop in [read-only mode](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html).
* [#3260](s://github.com/ckeditor/ckeditor-dev/issues/3260): Fixed: [Widget](s://ckeditor.com/cke4/addon/widget) drag handler is visible in [read-only mode](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html).
* [#3261](s://github.com/ckeditor/ckeditor-dev/issues/3261): Fixed: A [widget](s://ckeditor.com/cke4/addon/widget) initialized using the dialog has an incorrect owner document.
* [#3198](s://github.com/ckeditor/ckeditor-dev/issues/3198): Fixed: Blurring and focusing the editor when a [widget](s://ckeditor.com/cke4/addon/widget) is focused creates an additional undo step.
* [#2859](s://github.com/ckeditor/ckeditor-dev/pull/2859): [IE, Edge] Fixed: Various editor UI elements react to right mouse button click:
	* [#2845](s://github.com/ckeditor/ckeditor-dev/issues/2845): [Rich Combo](s://ckeditor.com/cke4/addon/richcombo).
	* [#2857](s://github.com/ckeditor/ckeditor-dev/issues/2857): [List Block](s://ckeditor.com/cke4/addon/listblock).
	* [#2858](s://github.com/ckeditor/ckeditor-dev/issues/2858): [Menu](s://ckeditor.com/cke4/addon/menu).
* [#3158](s://github.com/ckeditor/ckeditor-dev/issues/3158): [Chrome, Safari] Fixed: [Undo](s://ckeditor.com/cke4/addon/undo) plugin breaks with the filling character.
* [#504](s://github.com/ckeditor/ckeditor-dev/issues/504): [Edge] Fixed: The editor's selection is collapsed to the beginning of the content when focusing the editor for the first time.
* [#3101](s://github.com/ckeditor/ckeditor-dev/issues/3101): Fixed: [`CKEDITOR.dom.range#_getTableElement()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-_getTableElement) returns `null` instead of a table element for edge cases.
* [#3287](s://github.com/ckeditor/ckeditor-dev/issues/3287): Fixed: [`CKEDITOR.tools.promise`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_promise.html) initializes incorrectly if an AMD loader is present.
* [#3379](s://github.com/ckeditor/ckeditor-dev/issues/3379): Fixed: Incorrect [`CKEDITOR.editor#getData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getData) call when inserting content into the editor.
* [#941](s://github.com/ckeditor/ckeditor-dev/issues/941): Fixed: An error is thrown after styling a table cell text selected using the native selection when the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin is enabled.
* [#3136](s://github.com/ckeditor/ckeditor-dev/issues/3136): [Firefox] Fixed: Clicking [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) items removes the native table selection.
* [#3381](s://github.com/ckeditor/ckeditor-dev/issues/3381): [IE8] Fixed: The [`CKEDITOR.tools.object.keys()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-keys) method does not accept non-objects.
* [#2395](s://github.com/ckeditor/ckeditor-dev/issues/2395): [Android] Fixed: Focused input in a [dialog](s://ckeditor.com/cke4/addon/dialog) is scrolled out of the viewport when the soft keyboard appears.
* [#453](s://github.com/ckeditor/ckeditor-dev/issues/453): Fixed: [Link](s://ckeditor.com/cke4/addon/link) dialog has an invalid width when the editor is maximized and the browser window is resized.
* [#2138](s://github.com/ckeditor/ckeditor-dev/issues/2138): Fixed: An email address containing a question mark is mishandled by the [Link](s://ckeditor.com/cke4/addon/link) plugin.
* [#14613](s://dev.ckeditor.com/ticket/14613): Fixed: Race condition when loading plugins for an already destroyed editor instance throws an error.
* [#2257](s://github.com/ckeditor/ckeditor-dev/issues/2257): Fixed: The editor throws an exception when destroyed shortly after it was created.
* [#3115](s://github.com/ckeditor/ckeditor-dev/issues/3115): Fixed: Destroying the editor during the initialization throws an error.
* [#3354](s://github.com/ckeditor/ckeditor4/issues/3354): [iOS] Fixed: Pasting no longer works on iOS version 13.
* [#3423](s://github.com/ckeditor/ckeditor4/issues/3423) Fixed: [Bookmarks](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-createBookmark) can be created inside temporary elements.

API Changes:

* [#3154](s://github.com/ckeditor/ckeditor-dev/issues/3154): Added the [`CKEDITOR.tools.array.some()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_array.html#method-some) method.
* [#3245](s://github.com/ckeditor/ckeditor-dev/issues/3245): Added the [`CKEDITOR.plugins.undo.UndoManager.addFilterRule()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_undo_UndoManager.html#method-addFilterRule) method that allows filtering undo snapshot contents.
* [#2845](s://github.com/ckeditor/ckeditor-dev/issues/2845): Added the [`CKEDITOR.tools.normalizeMouseButton()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-normalizeMouseButton) method.
* [#2975](s://github.com/ckeditor/ckeditor-dev/issues/2975): Added the [`CKEDITOR.dom.element#fireEventHandler()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-fireEventHandler) method.
* [#3247](s://github.com/ckeditor/ckeditor-dev/issues/3247): Extended the [`CKEDITOR.tools.bind()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-bind) method to accept arguments for bound functions.
* [#3326](s://github.com/ckeditor/ckeditor-dev/issues/3326): Added the [`CKEDITOR.dom.text#isEmpty()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_text.html#method-isEmpty) method.
* [#2423](s://github.com/ckeditor/ckeditor-dev/issues/2423): Added the [`CKEDITOR.plugins.dialog.getModel()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dialog.html#method-getModel) and [`CKEDITOR.plugins.dialog.getMode()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dialog.html#method-getMode) methods with their [`CKEDITOR.plugin.definition`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dialog_definition.html) counterparts, allowing to get the dialog subject of a change.
* [#3124](s://github.com/ckeditor/ckeditor-dev/issues/3124): Added the [`CKEDITOR.dom.element#isDetached()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-isDetached) method.

## CKEditor 4.12.1

Fixed Issues:

* [#3220](s://github.com/ckeditor/ckeditor-dev/issues/3220): Fixed: Prevent [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) filter from deleting [Page Break](s://ckeditor.com/cke4/addon/pagebreak) elements on paste.

## CKEditor 4.12

New Features:

* [#2598](s://github.com/ckeditor/ckeditor-dev/issues/2598): Added the [Page Break](s://ckeditor.com/cke4/addon/pagebreak) feature support for the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#1490](s://github.com/ckeditor/ckeditor-dev/issues/1490): Improved the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin to retain table cell borders.
* [#2870](s://github.com/ckeditor/ckeditor-dev/issues/2870): Improved support for preserving the indentation of list items for nested lists pasted with the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#2048](s://github.com/ckeditor/ckeditor-dev/issues/2048): New [`CKEDITOR.config.image2_maxSize`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-image2_maxSize) configuration option for the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) plugin that allows setting a maximum size that an image can be resized to with the resizer.
* [#2639](s://github.com/ckeditor/ckeditor-dev/issues/2639): The [Color Dialog](s://ckeditor.com/cke4/addon/colordialog) plugin now shows the current selection's color when opened.
* [#2084](s://github.com/ckeditor/ckeditor-dev/issues/2084): The [Table Tools](s://ckeditor.com/cke4/addon/tabletools) plugin now allows to change the cell height unit type to either pixels or percent.
* [#3164](s://github.com/ckeditor/ckeditor-dev/issues/3164): The [Table Tools](s://ckeditor.com/cke4/addon/tabletools) plugin now accepts floating point values as the table cell width and height.

Fixed Issues:

* [#2672](s://github.com/ckeditor/ckeditor-dev/issues/2672): Fixed: When resizing an [Enhanced Image](s://ckeditor.com/cke4/addon/image2) to a minimum size with the resizer, the image dialog does not show actual values.
* [#1478](s://github.com/ckeditor/ckeditor-dev/issues/1478): Fixed: Custom colors added to [Color Button](s://ckeditor.com/cke4/addon/colorbutton) with the [`config.colorButton_colors`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-colorButton_colors) configuration option in the form of a label or code do not work correctly.
* [#1469](s://github.com/ckeditor/ckeditor-dev/issues/1469): Fixed: Trying to get data from a nested editable inside a freshly pasted widget throws an error.
* [#2235](s://github.com/ckeditor/ckeditor-dev/issues/2235): Fixed: An [Image](s://ckeditor.com/cke4/addon/image) in a table cell has an empty URL field when edited from the context menu opened by right-click when the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin is in use.
* [#3098](s://github.com/ckeditor/ckeditor-dev/issues/3098): Fixed: Unit pickers for table cell width and height in the [Table Tools](s://ckeditor.com/cke4/addon/tabletools) plugin have a different width.
* [#2923](s://github.com/ckeditor/ckeditor-dev/issues/2923): Fixed: The CSS `windowtext` color is not correctly recognized by the [`CKEDITOR.tools.style.parse`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_parse.html) methods.
* [#3120](s://github.com/ckeditor/ckeditor-dev/issues/3120): [IE8] Fixed: The [`CKEDITOR.tools.extend()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tool.html#method-extend) method does not work with the [`DontEnum`](s://developer.mozilla.org/en-US/docs/Web/JavaScript/Data_structures#Properties) object property attribute.
* [#2813](s://github.com/ckeditor/ckeditor-dev/issues/2813): Fixed: Editor HTML insertion methods ([`editor.insertHtml()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertHtml), [`editor.insertHtmlIntoRange()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertHtmlIntoRange), [`editor.insertElement()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertElement) and [`editor.insertElementIntoRange()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertElementIntoRange)) pollute the editable with empty `<span>` elements.
* [#2751](s://github.com/ckeditor/ckeditor-dev/issues/2751): Fixed: An editor with [`config.enterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enterMode) set to [`ENTER_DIV`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#property-ENTER_DIV) alters pasted content.

API Changes:

* [#1496](s://github.com/ckeditor/ckeditor-dev/issues/1496): The [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) plugin exposes the [`CKEDITOR.ui.balloonToolbar.reposition()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_balloonToolbar.html#reposition) and [`CKEDITOR.ui.balloonToolbarView.reposition()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_balloonToolbarView.html#reposition) methods.
* [#2021](s://github.com/ckeditor/ckeditor-dev/issues/2021): Added new [`CKEDITOR.dom.documentFragment.find()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_documentFragment.html#method-find) and [`CKEDITOR.dom.documentFragment.findOne()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_documentFragment.html#method-findOne) methods.
* [#2700](s://github.com/ckeditor/ckeditor-dev/issues/2700): Added the [`CKEDITOR.tools.array.find()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_array.html#method-find) method.
* [#3123](s://github.com/ckeditor/ckeditor-dev/issues/3123): Added the [`CKEDITOR.tools.object.keys()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-keys) method.
* [#3123](s://github.com/ckeditor/ckeditor-dev/issues/3123): Added the [`CKEDITOR.tools.object.entries()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-entries) method.
* [#3123](s://github.com/ckeditor/ckeditor-dev/issues/3123): Added the [`CKEDITOR.tools.object.values()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-values) method.
* [#2821](s://github.com/ckeditor/ckeditor-dev/issues/2821): The [`CKEDITOR.template#source`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_template.html#property-source) property can now be a function, so it can return the changed template values during the runtime. Thanks to [Jacek Pulit](s://github.com/jacek-pulit)!
* [#2598](s://github.com/ckeditor/ckeditor-dev/issues/2598): Added the [`CKEDITOR.plugins.pagebreak.createElement()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_pagebreak.html#method-createElement) method allowing to create a [Page Break](s://ckeditor.com/cke4/addon/pagebreak) plugin [`CKEDITOR.dom.element`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html) instance.
* [#2748](s://github.com/ckeditor/ckeditor-dev/issues/2748): Enhanced error messages thrown when creating an editor on a non-existent element or when trying to instantiate the second editor on the same element. Thanks to [Byran Zaugg](s://github.com/blzaugg)!
* [#2698](s://github.com/ckeditor/ckeditor-dev/issues/2698): Added the [`CKEDITOR.htmlParser.element.findOne()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_htmlParser_element.html#method-findOne) method.
* [#2935](s://github.com/ckeditor/ckeditor-dev/issues/2935): Introduced the [`CKEDITOR.config.pasteFromWord_keepZeroMargins`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWord_keepZeroMargins) configuration option that allows for keeping any `margin-*: 0` style that would be otherwise removed when pasting content with the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#2962](s://github.com/ckeditor/ckeditor-dev/issues/2962): Added the [`CKEDITOR.tools.promise`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_promise.html) class.
* [#2924](s://github.com/ckeditor/ckeditor-dev/issues/2924): Added the [`CKEDITOR.tools.style.border`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_border.html) object wrapping CSS border style helpers under a single type.
* [#2495](s://github.com/ckeditor/ckeditor-dev/issues/2495): The [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin can now be disabled for the given table with the `data-cke-tableselection-ignored` attribute.
* [#2692](s://github.com/ckeditor/ckeditor-dev/issues/2692): Plugins can now expose information about the supported environment by implementing the [`pluginDefinition.isSupportedEnvironment()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_pluginDefinition.html#method-isSupportedEnvironment) method.

Other Changes:

* [#2741](s://github.com/ckeditor/ckeditor-dev/issues/2741): Replaced deprecated `arguments.callee` calls with named function expressions to allow the editor to work in strict mode.
* [#2924](s://github.com/ckeditor/ckeditor-dev/issues/2924): Marked [`CKEDITOR.tools.style.parse.border()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_parse.html#method-border) as deprecated in favor of the [`CKEDITOR.tools.style.border.fromCssRule()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_border.html#static-method-fromCssRule) method.
* [#3132](s://github.com/ckeditor/ckeditor-dev/issues/2924): Marked [`CKEDITOR.tools.objectKeys()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-objectKeys) as deprecated in favor of the [`CKEDITOR.tools.object.keys()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-keys) method.

## CKEditor 4.11.4

Fixed Issues:

* [#589](s://github.com/ckeditor/ckeditor-dev/issues/589): Fixed: The editor causes memory leaks in create and destroy cycles.
* [#1397](s://github.com/ckeditor/ckeditor-dev/issues/1397): Fixed: Using the dialog to remove headers from a [table](s://ckeditor.com/cke4/addon/table) with one header row only throws an error.
* [#1479](s://github.com/ckeditor/ckeditor-dev/issues/1479): Fixed: [Justification](s://ckeditor.com/cke4/addon/justify) for styled content in BR mode is disabled.
* [#2816](s://github.com/ckeditor/ckeditor-dev/issues/2816): Fixed: [Enhanced Image](s://ckeditor.com/cke4/addon/image2) resize handler is visible in [read-only mode](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html).
* [#2874](s://github.com/ckeditor/ckeditor-dev/issues/2874): Fixed: [Enhanced Image](s://ckeditor.com/cke4/addon/image2) resize handler is not created when the editor is initialized in [read-only mode](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html).
* [#2775](s://github.com/ckeditor/ckeditor-dev/issues/2775): Fixed: [Clipboard](s://ckeditor.com/cke4/addon/clipboard) paste buttons have wrong state when [read-only](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html) mode is set by the mouse event listener with the [Div Editing Area](s://ckeditor.com/cke4/addon/divarea) plugin.
* [#1901](s://github.com/ckeditor/ckeditor-dev/issues/1901): Fixed: Cannot open the context menu over a [Widget](s://ckeditor.com/cke4/addon/widget) with the <kbd>Shift</kbd>+<kbd>F10</kbd> keyboard shortcut.

Other Changes:

* Updated [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) (WSC) and [SpellCheckAsYouType](s://ckeditor.com/cke4/addon/scayt) (SCAYT) plugins:
	* Language dictionary update: German language was extended with over 600k new words.
	* Language dictionary update: Swedish language was extended with over 300k new words.
	* Grammar support added for Australian and New Zealand English, Polish, Slovak, Slovenian and Austrian languages.
	* Changed wavy red and green lines that underline spelling and grammar errors to straight ones.
	* [#55](s://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/55): Fixed: WSC does not use [`CKEDITOR.getUrl()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#method-getUrl) when referencing style sheets.
	* [#166](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/166): Fixed: SCAYT does not use [`CKEDITOR.getUrl()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#method-getUrl) when referencing style sheets.
	* [#56](s://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/56): [Chrome] Fixed: SCAYT/WSC throws errors when running inside a  Chrome extension.
	* Fixed: After removing a dictionary, the words are not underlined and considered as incorrect.
	* Fixed: The Slovenian (`sl_SL`) language does not work.
	* Fixed: Quotes with code `U+2019` (Right single quotation mark) are considered separators.
	* Fixed: Wrong error message formatting when the service ID is invalid.
	* Fixed: Absent languages in the Languages tab when using SCAYT with the [Shared Spaces](s://ckeditor.com/cke4/addon/sharedspace) plugin.

## CKEditor 4.11.3

Fixed Issues:

* [#2721](s://github.com/ckeditor/ckeditor-dev/issues/2721), [#487](s://github.com/ckeditor/ckeditor-dev/issues/487): Fixed: The order of sublist items is reversed when a higher level list item is removed.
* [#2527](s://github.com/ckeditor/ckeditor-dev/issues/2527): Fixed: [Emoji](s://ckeditor.com/cke4/addon/emoji) autocomplete order does not prioritize emojis with the name starting from the used string.
* [#2572](s://github.com/ckeditor/ckeditor-dev/issues/2572): Fixed: Icons in the [Emoji](s://ckeditor.com/cke4/addon/emoji) dropdown navigation groups are not centered.
* [#1191](s://github.com/ckeditor/ckeditor-dev/issues/1191): Fixed: Items in the [elements path](s://ckeditor.com/cke4/addon/elementspath) are draggable.
* [#2292](s://github.com/ckeditor/ckeditor-dev/issues/2292): Fixed: Dropping a list with a link on the editor's margin causes a console error and removes the dragged text from editor.
* [#2756](s://github.com/ckeditor/ckeditor-dev/issues/2756): Fixed: The [Auto Link](s://ckeditor.com/cke4/addon/autolink) plugin causes an error when typing in the [source editing mode](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_sourcearea.html).
* [#1986](s://github.com/ckeditor/ckeditor-dev/issues/1986): Fixed: The Cell Properties dialog from the [Table Tools](s://ckeditor.com/cke4/addon/tabletools) plugin shows styles that are not allowed through [`config.allowedContent`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-allowedContent).
* [#2565](s://github.com/ckeditor/ckeditor-dev/issues/2565): [IE, Edge] Fixed: Buttons in the [editor toolbar](s://ckeditor.com/cke4/addon/toolbar) are activated by clicking them with the right mouse button.
* [#2792](s://github.com/ckeditor/ckeditor-dev/pull/2792): Fixed: A bug in the [Copy Formatting](s://ckeditor.com/cke4/addon/copyformatting) plugin that caused the following issues:
    * [#2780](s://github.com/ckeditor/ckeditor-dev/issues/2780): Fixed: Undo steps disappear after multiple changes of selection.
    * [#2470](s://github.com/ckeditor/ckeditor-dev/issues/2470): [Firefox] Fixed: Widget's nested editable gets blurred upon focus.
    * [#2655](s://github.com/ckeditor/ckeditor-dev/issues/2655): [Chrome, Safari] Fixed: Widget's nested editable cannot be focused under certain circumstances.

## CKEditor 4.11.2

Fixed Issues:

* [#2403](s://github.com/ckeditor/ckeditor-dev/issues/2403): Fixed: Styling inline editor initialized inside a table with the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin is causing style leaks.
* [#2514](s://github.com/ckeditor/ckeditor-dev/issues/2403): Fixed: Pasting table data into inline editor initialized inside a table with the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin inserts pasted content into the wrapping table.
* [#2451](s://github.com/ckeditor/ckeditor-dev/issues/2451): Fixed: The [Remove Format](s://ckeditor.com/cke4/addon/removeformat) plugin changes selection.
* [#2546](s://github.com/ckeditor/ckeditor-dev/issues/2546): Fixed: The separator in the toolbar moves when buttons are focused.
* [#2506](s://github.com/ckeditor/ckeditor-dev/issues/2506): Fixed: [Enhanced Image](s://ckeditor.com/cke4/addon/image2) throws a type error when an empty `<figure>` tag with an `image` class is upcasted.
* [#2650](s://github.com/ckeditor/ckeditor-dev/issues/2650): Fixed: [Table](s://ckeditor.com/cke4/addon/table) dialog validator fails when the `getValue()` function is defined in the global scope.
* [#2690](s://github.com/ckeditor/ckeditor-dev/issues/2690): Fixed: Decimal characters are removed from the inside of numbered lists when pasting content using the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#2205](s://github.com/ckeditor/ckeditor-dev/issues/2205): Fixed: It is not possible to add new list items under an item containing a block element.
* [#2411](s://github.com/ckeditor/ckeditor-dev/issues/2411), [#2438](s://github.com/ckeditor/ckeditor-dev/issues/2438) Fixed: Apply numbered list option throws a console error for a specific markup.
* [#2430](s://github.com/ckeditor/ckeditor-dev/issues/2430) Fixed: [Color Button](s://ckeditor.com/cke4/addon/colorbutton) and [List Block](s://ckeditor.com/cke4/addon/listblock) items are draggable.

Other Changes:

* Updated the [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) (WSC) plugin:
	* [#52](s://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/52) Fixed: Clicking "Finish Checking" without a prior action would hang the Spell Checking dialog.
* [#2603](s://github.com/ckeditor/ckeditor-dev/issues/2603): Corrected the GPL license entry in the `package.json` file.

## CKEditor 4.11.1

Fixed Issues:

* [#2571](s://github.com/ckeditor/ckeditor-dev/issues/2571): Fixed: Clicking the categories in the [Emoji](s://ckeditor.com/cke4/addon/emoji) dropdown panel scrolls the entire page.

## CKEditor 4.11

**Security Updates:**

* Fixed XSS vulnerability in the HTML parser reported by [maxarr](s://hackerone.com/maxarr).

	Issue summary: It was possible to execute XSS inside CKEditor after persuading the victim to: (i) switch CKEditor to source mode, then (ii) paste a specially crafted HTML code, prepared by the attacker, into the opened CKEditor source area, and (iii) switch back to WYSIWYG mode.

**An upgrade is highly recommended!**

New Features:

* [#2062](s://github.com/ckeditor/ckeditor-dev/pull/2062): Added the emoji dropdown that allows the user to choose the emoji from the toolbar and search for them using keywords.
* [#2154](s://github.com/ckeditor/ckeditor-dev/issues/2154): The [Link](s://ckeditor.com/cke4/addon/link) plugin now supports phone number links.
* [#1815](s://github.com/ckeditor/ckeditor-dev/issues/1815): The [Auto Link](s://ckeditor.com/cke4/addon/autolink) plugin supports typing link completion.
* [#2478](s://github.com/ckeditor/ckeditor-dev/issues/2478): [Link](s://ckeditor.com/cke4/addon/link) can be inserted using the <kbd>Ctrl</kbd>/<kbd>Cmd</kbd> + <kbd>K</kbd> keystroke.
* [#651](s://github.com/ckeditor/ckeditor-dev/issues/651): Text pasted using the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin preserves indentation in paragraphs.
* [#2248](s://github.com/ckeditor/ckeditor-dev/issues/2248): Added support for justification in the [BBCode](s://ckeditor.com/cke4/addon/bbcode) plugin. Thanks to [Matěj Kmínek](s://github.com/KminekMatej)!
* [#706](s://github.com/ckeditor/ckeditor-dev/issues/706): Added a different cursor style when selecting cells for the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin.
* [#2072](s://github.com/ckeditor/ckeditor-dev/issues/2072): The [UI Button](s://ckeditor.com/cke4/addon/button) plugin supports custom `aria-haspopup` property values. The [Menu Button](s://ckeditor.com/cke4/addon/menubutton) `aria-haspopup` value is now `menu`, the [Panel Button](s://ckeditor.com/cke4/addon/panelbutton) and [Rich Combo](s://ckeditor.com/cke4/addon/richcombo) `aria-haspopup` value is now `listbox`.
* [#1176](s://github.com/ckeditor/ckeditor-dev/pull/1176): The [Balloon Panel](s://ckeditor.com/cke4/addon/balloonpanel) can now be attached to a selection instead of an element.
* [#2202](s://github.com/ckeditor/ckeditor-dev/issues/2202): Added the `contextmenu_contentsCss` configuration option to allow adding custom CSS to the [Context Menu](s://ckeditor.com/cke4/addon/contextmenu).

Fixed Issues:

* [#1477](s://github.com/ckeditor/ckeditor-dev/issues/1477): Fixed: On destroy, [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) does not destroy its content.
* [#2394](s://github.com/ckeditor/ckeditor-dev/issues/2394): Fixed: [Emoji](s://ckeditor.com/cke4/addon/emoji) dropdown does not show up with repeated symbols in a single line.
* [#1181](s://github.com/ckeditor/ckeditor-dev/issues/1181): [Chrome] Fixed: Opening the context menu in a read-only editor results in an error.
* [#2276](s://github.com/ckeditor/ckeditor-dev/issues/2276): [iOS] Fixed: [Button](s://ckeditor.com/cke4/addon/button) state does not refresh properly.
* [#1489](s://github.com/ckeditor/ckeditor-dev/issues/1489): Fixed: Table contents can be removed in read-only mode when the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin is used.
* [#1264](s://github.com/ckeditor/ckeditor-dev/issues/1264) Fixed: Right-click does not clear the selection created with the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin.
* [#586](s://github.com/ckeditor/ckeditor-dev/issues/586) Fixed: The `required` attribute is not correctly recognized by the [Form Elements](s://ckeditor.com/cke4/addon/forms) plugin dialog. Thanks to [Roli Züger](s://github.com/rzueger)!
* [#2380](s://github.com/ckeditor/ckeditor-dev/issues/2380) Fixed: Styling HTML comments in a top-level element results in extra paragraphs.
* [#2294](s://github.com/ckeditor/ckeditor-dev/issues/2294) Fixed: Pasting content from Microsoft Outlook and then bolding it results in an error.
* [#2035](s://github.com/ckeditor/ckeditor-dev/issues/2035) [Edge] Fixed: `Permission denied` is thrown when opening a [Panel](s://ckeditor.com/cke4/addon/panel) instance.
* [#965](s://github.com/ckeditor/ckeditor-dev/issues/965) Fixed: The [`config.forceSimpleAmpersand`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-forceSimpleAmpersand) option does not work. Thanks to [Alex Maris](s://github.com/alexmaris)!
* [#2448](s://github.com/ckeditor/ckeditor-dev/issues/2448): Fixed: The [`Escape HTML Entities`] plugin with custom [additional entities](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-entities_additional) configuration breaks HTML escaping.
* [#898](s://github.com/ckeditor/ckeditor-dev/issues/898): Fixed: [Enhanced Image](s://ckeditor.com/cke4/addon/image2) long alternative text protrudes into the editor when the image is selected.
* [#1113](s://github.com/ckeditor/ckeditor-dev/issues/1113): [Firefox] Fixed: Nested contenteditable elements path is not updated on focus with the [Div Editing Area](s://ckeditor.com/cke4/addon/divarea) plugin.
* [#1682](s://github.com/ckeditor/ckeditor-dev/issues/1682) Fixed: Hovering the [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) panel changes its size, causing flickering.
* [#421](s://github.com/ckeditor/ckeditor-dev/issues/421) Fixed: Expandable [Button](s://ckeditor.com/cke4/addon/button) puts the `(Selected)` text at the end of the label when clicked.
* [#1454](s://github.com/ckeditor/ckeditor-dev/issues/1454): Fixed: The [`onAbort`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_fileTools_uploadWidgetDefinition.html#property-onAbort) method of the [Upload Widget](s://ckeditor.com/cke4/addon/uploadwidget) is not called when the loader is aborted.
* [#1451](s://github.com/ckeditor/ckeditor-dev/issues/1451): Fixed: The context menu is incorrectly positioned when opened with <kbd>Shift</kbd>+<kbd>F10</kbd>.
* [#1722](s://github.com/ckeditor/ckeditor-dev/issues/1722): [`CKEDITOR.filter.instances`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_filter.html#static-property-instances) is causing memory leaks.
* [#2491](s://github.com/ckeditor/ckeditor-dev/issues/2491): Fixed: The [Mentions](s://ckeditor.com/cke4/addon/mentions) plugin is not matching diacritic characters.
* [#2519](s://github.com/ckeditor/ckeditor-dev/issues/2519): Fixed: The [Accessibility Help](s://ckeditor.com/cke4/addon/a11yhelp) dialog should display all available keystrokes for a single command.

API Changes:

* [#2453](s://github.com/ckeditor/ckeditor-dev/issues/2453): The [`CKEDITOR.ui.panel.block.getItems`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_panel_block.html#method-getItems) method now also returns `input` elements in addition to links.
* [#2224](s://github.com/ckeditor/ckeditor-dev/issues/2224):  The [`CKEDITOR.tools.convertToPx`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-convertToPx) function now converts negative values.
* [#2253](s://github.com/ckeditor/ckeditor-dev/issues/2253): The widget definition [`insert`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-insert) method now passes `editor` and `commandData`. Thanks to [marcparmet](s://github.com/marcparmet)!
* [#2045](s://github.com/ckeditor/ckeditor-dev/issues/2045): Extracted [`tools.eventsBuffer`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-eventsBuffer) and [`tools.throttle`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-throttle) functions logic into a separate namespace.
	* [`tools.eventsBuffer`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-eventsBuffer) was extracted into [`tools.buffers.event`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_buffers_event.html),
	* [`tools.throttle`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-throttle) was extracted into [`tools.buffers.throttle`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_buffers_throttle.html).
* [#2466](s://github.com/ckeditor/ckeditor-dev/issues/2466):  The [`CKEDITOR.filter`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-constructor) constructor accepts an additional `rules` parameter allowing to bind the editor and filter together.
* [#2493](s://github.com/ckeditor/ckeditor-dev/issues/2493):  The [`editor.getCommandKeystroke`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getCommandKeystroke) method accepts an additional `all` parameter allowing to retrieve an array of all command keystrokes.
* [#2483](s://github.com/ckeditor/ckeditor-dev/issues/2483): Button's DOM element created with the [`hasArrow`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui.html#method-addButton) definition option can by identified by the `.cke_button_expandable` CSS class.

Other Changes:

* [#1713](s://github.com/ckeditor/ckeditor-dev/issues/1713): Removed the redundant `lang.title` entry from the [Clipboard](s://ckeditor.com/cke4/addon/clipboard) plugin.

## CKEditor 4.10.1

Fixed Issues:

* [#2114](s://github.com/ckeditor/ckeditor-dev/issues/2114): Fixed: [Autocomplete](s://ckeditor.com/cke4/addon/autocomplete) cannot be initialized before [`instanceReady`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-instanceReady).
* [#2107](s://github.com/ckeditor/ckeditor-dev/issues/2107): Fixed: Holding and releasing the mouse button is not inserting an [autocomplete](s://ckeditor.com/cke4/addon/autocomplete) suggestion.
* [#2167](s://github.com/ckeditor/ckeditor-dev/issues/2167): Fixed: Matching in [Emoji](s://ckeditor.com/cke4/addon/emoji) plugin is not case insensitive.
* [#2195](s://github.com/ckeditor/ckeditor-dev/issues/2195): Fixed: [Emoji](s://ckeditor.com/cke4/addon/emoji) shows the suggestion box when the colon is preceded with other characters than white space.
* [#2169](s://github.com/ckeditor/ckeditor-dev/issues/2169): [Edge] Fixed: Error thrown when pasting into the editor.
* [#1084](s://github.com/ckeditor/ckeditor-dev/issues/1084) Fixed: Using the "Automatic" option with [Color Button](s://ckeditor.com/cke4/addon/colorbutton) on a text with the color already defined sets an invalid color value.
* [#2271](s://github.com/ckeditor/ckeditor-dev/issues/2271): Fixed: Custom color name not used as a label in the [Color Button](s://ckeditor.com/cke4/addon/image2) plugin. Thanks to [Eric Geloen](s://github.com/egeloen)!
* [#2296](s://github.com/ckeditor/ckeditor-dev/issues/2296): Fixed: The [Color Button](s://ckeditor.com/cke4/addon/colorbutton) plugin throws an error when activated on content containing HTML comments.
* [#966](s://github.com/ckeditor/ckeditor-dev/issues/966): Fixed: Executing [`editor.destroy()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-destroy) during the [file upload](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_fileTools_uploadWidgetDefinition.html#property-onUploading) throws an error. Thanks to [Maksim Makarevich](s://github.com/MaksimMakarevich)!
* [#1719](s://github.com/ckeditor/ckeditor-dev/issues/1719): Fixed: <kbd>Ctrl</kbd>/<kbd>Cmd</kbd> + <kbd>A</kbd> inadvertently focuses inline editor if it is starting and ending with a list. Thanks to [theNailz](s://github.com/theNailz)!
* [#1046](s://github.com/ckeditor/ckeditor-dev/issues/1046): Fixed: Subsequent new links do not include the `id` attribute. Thanks to [Nathan Samson](s://github.com/nathansamson)!
* [#1348](s://github.com/ckeditor/ckeditor-dev/issues/1348): Fixed: [Enhanced Image](s://ckeditor.com/cke4/addon/image2) plugin aspect ratio locking uses an old width and height on image URL change.
* [#1791](s://github.com/ckeditor/ckeditor-dev/issues/1791): Fixed: [Image](s://ckeditor.com/cke4/addon/image) and [Enhanced Image](s://ckeditor.com/cke4/addon/image2) plugins can be enabled when [Easy Image](s://ckeditor.com/cke4/addon/easyimage) is present.
* [#2254](s://github.com/ckeditor/ckeditor-dev/issues/2254): Fixed: [Image](s://ckeditor.com/cke4/addon/image) ratio locking is too precise for resized images. Thanks to [Jonathan Gilbert](s://github.com/logiclrd)!
* [#1184](s://github.com/ckeditor/ckeditor-dev/issues/1184): [IE8-11] Fixed: Copying and pasting data in [read-only mode](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) throws an error.
* [#1916](s://github.com/ckeditor/ckeditor-dev/issues/1916): [IE9-11] Fixed: Pressing the <kbd>Delete</kbd> key in [read-only mode](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) throws an error.
* [#2003](s://github.com/ckeditor/ckeditor-dev/issues/2003): [Firefox] Fixed: Right-clicking multiple selected table cells containing empty paragraphs removes the selection.
* [#1816](s://github.com/ckeditor/ckeditor-dev/issues/1816): Fixed: Table breaks when <kbd>Enter</kbd> is pressed over the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin.
* [#1115](s://github.com/ckeditor/ckeditor-dev/issues/1115): Fixed: The `<font>` tag is not preserved when proper configuration is provided and a style is applied by the [Font](s://ckeditor.com/cke4/addon/font) plugin.
* [#727](s://github.com/ckeditor/ckeditor-dev/issues/727): Fixed: Custom styles may be invisible in the [Styles Combo](s://ckeditor.com/cke4/addon/stylescombo) plugin.
* [#988](s://github.com/ckeditor/ckeditor-dev/issues/988): Fixed: ACF-enabled custom elements prefixed with `object`, `embed`, `param` are removed from the editor content.

API Changes:

* [#2249](s://github.com/ckeditor/ckeditor-dev/issues/1791): Added the [`editor.plugins.detectConflict()`](s://ckeditor.com/docs/ckeditor4/latest/CKEDITOR_editor_plugins.html#method-detectConflict) method finding conflicts between provided plugins.

## CKEditor 4.10

New Features:

* [#1751](s://github.com/ckeditor/ckeditor-dev/issues/1751): Introduced the **Autocomplete** feature that consists of the following plugins:
	* [Autocomplete](s://ckeditor.com/cke4/addon/autocomplete) &ndash; Provides contextual completion feature for custom text matches based on user input.
	* [Text Watcher](s://ckeditor.com/cke4/addon/textWatcher) &ndash; Checks whether an editor's text change matches the chosen criteria.
	* [Text Match](s://ckeditor.com/cke4/addon/textMatch) &ndash; Allows to search [`CKEDITOR.dom.range`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html) for matching text.
* [#1703](s://github.com/ckeditor/ckeditor-dev/issues/1703): Introduced the [Mentions](s://ckeditor.com/cke4/addon/mentions) plugin providing smart completion feature for custom text matches based on user input starting with a chosen marker character.
* [#1746](s://github.com/ckeditor/ckeditor-dev/issues/1703): Introduced the [Emoji](s://ckeditor.com/cke4/addon/emoji) plugin providing completion feature for emoji ideograms.
* [#1761](s://github.com/ckeditor/ckeditor-dev/issues/1761): The [Auto Link](s://ckeditor.com/cke4/addon/autolink) plugin now supports email links.

Fixed Issues:

* [#1458](s://github.com/ckeditor/ckeditor-dev/issues/1458): [Edge] Fixed: After blurring the editor it takes 2 clicks to focus a widget.
* [#1034](s://github.com/ckeditor/ckeditor-dev/issues/1034): Fixed: JAWS leaves forms mode after pressing the <kbd>Enter</kbd> key in an inline editor instance.
* [#1748](s://github.com/ckeditor/ckeditor-dev/pull/1748): Fixed: Missing [`CKEDITOR.dialog.definition.onHide`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dialog_definition.html#property-onHide) API documentation. Thanks to [sunnyone](s://github.com/sunnyone)!
* [#1321](s://github.com/ckeditor/ckeditor-dev/issues/1321): Fixed: Ideographic space character (`\u3000`) is lost when pasting text.
* [#1776](s://github.com/ckeditor/ckeditor-dev/issues/1776): Fixed: Empty caption placeholder of the [Image Base](s://ckeditor.com/cke4/addon/imagebase) plugin is not hidden when blurred.
* [#1592](s://github.com/ckeditor/ckeditor-dev/issues/1592): Fixed: The [Image Base](s://ckeditor.com/cke4/addon/imagebase) plugin caption is not visible after paste.
* [#620](s://github.com/ckeditor/ckeditor-dev/issues/620): Fixed: The [`config.forcePasteAsPlainText`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-forcePasteAsPlainText) option is not respected in internal and cross-editor pasting.
* [#1467](s://github.com/ckeditor/ckeditor-dev/issues/1467): Fixed: The resizing cursor of the [Table Resize](s://ckeditor.com/cke4/addon/tableresize) plugin appearing in the middle of a merged cell.

API Changes:

* [#850](s://github.com/ckeditor/ckeditor-dev/issues/850): Backward incompatibility: Replaced the `replace` dialog from the [Find / Replace](s://ckeditor.com/cke4/addon/find) plugin with a `tabId` option in the `find` command.
* [#1582](s://github.com/ckeditor/ckeditor-dev/issues/1582): The [`CKEDITOR.editor.addCommand()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-addCommand) method can now accept a [`CKEDITOR.command`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_command.html) instance as a parameter.
* [#1712](s://github.com/ckeditor/ckeditor-dev/issues/1712): The [`extraPlugins`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-extraPlugins), [`removePlugins`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-removePlugins) and [`plugins`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-plugins) configuration options allow whitespace.
* [#1802](s://github.com/ckeditor/ckeditor-dev/issues/1802): The [`extraPlugins`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-extraPlugins), [`removePlugins`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-removePlugins) and [`plugins`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-plugins) configuration options allow passing plugin names as an array.
* [#1724](s://github.com/ckeditor/ckeditor-dev/issues/1724): Added an option to the [`getClientRect()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-getClientRect) function allowing to retrieve an absolute bounding rectangle of the element, i.e. a position relative to the upper-left corner of the topmost viewport.
* [#1498](s://github.com/ckeditor/ckeditor-dev/issues/1498) : Added a new [`getClientRects()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-getClientRects) method to `CKEDITOR.dom.range`. It returns a list of rectangles for each selected element.
* [#1993](s://github.com/ckeditor/ckeditor-dev/issues/1993): Added the [`CKEDITOR.tools.throttle()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-throttle) function.

Other Changes:

* Updated [SCAYT](s://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type) and [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) (WSC) plugins:
	* Language dictionary update: Added support for the Uzbek Latin language.
	* Languages no longer supported as additional languages: Manx - Isle of Man (`gv_GB`) and Interlingua (`ia_XR`).
	* Extended and improved language dictionaries: Georgian and Swedish. Also added the missing word _"Ensure"_ to the American, British and Canada English language.
	* [#141](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/141) Fixed: SCAYT throws "Uncaught Error: Error in RangyWrappedRange module: createRange(): Parameter must be a Window object or DOM node".
	* [#153](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/153) [Chrome] Fixed: Correcting a word in the widget in SCAYT moves focus to another editable.
	* [#155](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/155) [IE8] Fixed: SCAYT throws an error and does not work.
	* [#156](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/156) [IE10] Fixed: SCAYT does not seem to work.
	* Fixed: After some text is dragged and dropped, the markup is not refreshed for grammar problems in SCAYT.
	* Fixed: Request to FastCGI fails when the user tries to replace a word with non-English characters with a proper suggestion in WSC.
	* [Firefox] Fixed: <kbd>Ctrl</kbd>+<kbd>Z</kbd> removes focus in SCAYT.
	* Grammar support for default languages was improved.
	* New application source URL was added in SCAYT.
	* Removed green marks and legend related to grammar-supported languages in the Languages tab of SCAYT. Grammar is now supported for almost all the anguages in the list for an additional fee.
	* Fixed: JavaScript error in the console: "Cannot read property 'split' of undefined" in SCAYT and WSC.
	* [IE10] Fixed: Markup is not set for a specific case in SCAYT.
	* Fixed: Accessibility issue: No `alt` attribute for the logo image in the About tab of SCAYT.

## CKEditor 4.9.2

**Security Updates:**

* Fixed XSS vulnerability in the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) (`image2`) plugin reported by [Kyaw Min Thein](s://twitter.com/kyawminthein99).

	Issue summary: It was possible to execute XSS inside CKEditor using the `<img>` tag and specially crafted HTML. Please note that the default presets (Basic/Standard/Full) do not include this plugin, so you are only at risk if you made a custom build and enabled this plugin.

We would like to thank the [Drupal security team](s://www.drupal.org/drupal-security-team) for bringing this matter to our attention and coordinating the fix and release process!

## CKEditor 4.9.1

Fixed Issues:

* [#1835](s://github.com/ckeditor/ckeditor-dev/issues/1835): Fixed: Integration between [CKFinder](s://ckeditor.com/ckeditor-4/ckfinder/) and the [File Browser](s://ckeditor.com/cke4/addon/filebrowser) plugin does not work.

## CKEditor 4.9

New Features:

* [#932](s://github.com/ckeditor/ckeditor-dev/issues/932): Introduced Easy Image feature for inserting images that are automatically rescaled, optimized, responsive and delivered through a blazing-fast CDN. Three new plugins were added to support it:
    * [Easy Image](s://ckeditor.com/cke4/addon/easyimage),
    * [Cloud Services](s://ckeditor.com/cke4/addon/cloudservices)
    * [Image Base](s://ckeditor.com/cke4/addon/imagebase)
* [#1338](s://github.com/ckeditor/ckeditor-dev/issues/1338): Keystroke labels are displayed for function keys (like F7, F8).
* [#643](s://github.com/ckeditor/ckeditor-dev/issues/643): The [File Browser](s://ckeditor.com/cke4/addon/filebrowser) plugin can now upload files using XHR requests. This allows for setting custom HTTP headers using the [`config.fileTools_requestHeaders`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-fileTools_requestHeaders) configuration option.
* [#1365](s://github.com/ckeditor/ckeditor-dev/issues/1365): The [File Browser](s://ckeditor.com/cke4/addon/filebrowser) plugin uses XHR requests by default.
* [#1399](s://github.com/ckeditor/ckeditor-dev/issues/1399): Added the possibility to set [`CKEDITOR.config.startupFocus`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-startupFocus) as `start` or `end` to specify where the editor focus should be after the initialization.
* [#1441](s://github.com/ckeditor/ckeditor-dev/issues/1441): The [Magic Line](s://ckeditor.com/cke4/addon/magicline) plugin line element can now be identified by the `data-cke-magic-line="1"` attribute.

Fixed Issues:

* [#595](s://github.com/ckeditor/ckeditor-dev/issues/595): Fixed: Pasting does not work on mobile devices.
* [#869](s://github.com/ckeditor/ckeditor-dev/issues/869): Fixed: Empty selection clears cached clipboard data in the editor.
* [#1419](s://github.com/ckeditor/ckeditor-dev/issues/1419): Fixed: The [Widget Selection](s://ckeditor.com/cke4/addon/widgetselection) plugin selects the editor content with the <kbd>Alt+A</kbd> key combination on Windows.
* [#1274](s://github.com/ckeditor/ckeditor-dev/issues/1274): Fixed: [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) does not match a single selected image using the [`contextDefinition.cssSelector`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_balloontoolbar_contextDefinition.html#property-cssSelector) matcher.
* [#1232](s://github.com/ckeditor/ckeditor-dev/issues/1232): Fixed: [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) buttons should be registered as focusable elements.
* [#1342](s://github.com/ckeditor/ckeditor-dev/issues/1342): Fixed: [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) should be re-positioned after the [`change`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-change) event.
* [#1426](s://github.com/ckeditor/ckeditor-dev/issues/1426): [IE8-9] Fixed: Missing [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) background in the [Kama](s://ckeditor.com/cke4/addon/kama) skin. Thanks to [Christian Elmer](s://github.com/keinkurt)!
* [#1470](s://github.com/ckeditor/ckeditor-dev/issues/1470): Fixed: [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) is not visible after drag and drop of a widget it is attached to.
* [#1048](s://github.com/ckeditor/ckeditor-dev/issues/1048): Fixed: [Balloon Panel](s://ckeditor.com/cke4/addon/balloonpanel) is not positioned properly when a margin is added to its non-static parent.
* [#889](s://github.com/ckeditor/ckeditor-dev/issues/889): Fixed: Unclear error message for width and height fields in the [Image](s://ckeditor.com/cke4/addon/image) and [Enhanced Image](s://ckeditor.com/cke4/addon/image2) plugins.
* [#859](s://github.com/ckeditor/ckeditor-dev/issues/859): Fixed: Cannot edit a link after a double-click on the text in the link.
* [#1013](s://github.com/ckeditor/ckeditor-dev/issues/1013): Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) does not work correctly with the [`config.forcePasteAsPlainText`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-forcePasteAsPlainText) option.
* [#1356](s://github.com/ckeditor/ckeditor-dev/issues/1356): Fixed: [Border parse function](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_style_parse.html#method-border) does not allow spaces in the color value.
* [#1010](s://github.com/ckeditor/ckeditor-dev/issues/1010): Fixed: The CSS `border` shorthand property was incorrectly expanded ignoring the `border-color` style.
* [#1535](s://github.com/ckeditor/ckeditor-dev/issues/1535): Fixed: [Widget](s://ckeditor.com/cke4/addon/widget) mouseover border contrast is insufficient.
* [#1516](s://github.com/ckeditor/ckeditor-dev/issues/1516): Fixed: Fake selection allows removing content in read-only mode using the <kbd>Backspace</kbd> and <kbd>Delete</kbd> keys.
* [#1570](s://github.com/ckeditor/ckeditor-dev/issues/1570): Fixed: Fake selection allows cutting content in read-only mode using the <kbd>Ctrl</kbd>/<kbd>Cmd</kbd> + <kbd>X</kbd> keys.
* [#1363](s://github.com/ckeditor/ckeditor-dev/issues/1363): Fixed: Paste notification is unclear and it might confuse users.


API Changes:

* [#1346](s://github.com/ckeditor/ckeditor-dev/issues/1346): [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) [context manager API](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.balloontoolbar.contextManager.html) is now available in the [`pluginDefinition.init()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_pluginDefinition.html#method-init) method of the [requiring](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_pluginDefinition.html#property-requires) plugin.
* [#1530](s://github.com/ckeditor/ckeditor-dev/issues/1530): Added the possibility to use custom icons for [buttons](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_button.html.html).

Other Changes:

* Updated [SCAYT](s://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type) and [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) (WSC) plugins:
	* SCAYT [`scayt_minWordLength`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#scayt_minWordLength) configuration option now defaults to 3 instead of 4.
	* SCAYT default number of suggested words in the context menu changed to 3.
	* [#90](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/90): Fixed: Selection is lost on link creation if SCAYT highlights the word.
	* Fixed: SCAYT crashes when the browser `localStorage` is disabled.
	* [IE11] Fixed: `Unable to get property type of undefined or null reference` error in the browser console when SCAYT is disabled/enabled.
	* [#46](s://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/46): Fixed: Editing is blocked when remote spell checker server is offline.
	* Fixed: User Dictionary cannot be created in WSC due to `You already have the dictionary` error.
	* Fixed: Words with apostrophe `'` on the replacement make the WSC dialog inaccessible.
	* Fixed: SCAYT/WSC causes the `Uncaught TypeError` error in the browser console.
* [#1337](s://github.com/ckeditor/ckeditor-dev/issues/1337): Updated the samples layout with the new CKEditor 4 logo and color scheme.
* [#1591](s://github.com/ckeditor/ckeditor-dev/issues/1591): CKBuilder and language tools are now downloaded over HTTPS. Thanks to [August Detlefsen](s://github.com/augustd)!

## CKEditor 4.8

**Important Notes:**

* [#1249](s://github.com/ckeditor/ckeditor-dev/issues/1249): Enabled the [Upload Image](s://ckeditor.com/cke4/addon/uploadimage) plugin by default in standard and full presets. Also, it will no longer log an error in case of missing [`config.imageUploadUrl`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-imageUploadUrl) property.

New Features:

* [#933](s://github.com/ckeditor/ckeditor-dev/issues/933): Introduced [Balloon Toolbar](s://ckeditor.com/cke4/addon/balloontoolbar) plugin.
* [#662](s://github.com/ckeditor/ckeditor-dev/issues/662): Introduced image inlining for the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#468](s://github.com/ckeditor/ckeditor-dev/issues/468): [Edge] Introduced support for the Clipboard API.
* [#607](s://github.com/ckeditor/ckeditor-dev/issues/607): Manually inserted Hex color is prefixed with a hash character (`#`) if needed. It ensures a valid Hex color value is used when setting the table cell border or background color with the [Color Dialog](s://ckeditor.com/cke4/addon/colordialog) window.
* [#584](s://github.com/ckeditor/ckeditor-dev/issues/584): [Font size and Family](s://ckeditor.com/cke4/addon/font) and [Format](s://ckeditor.com/cke4/addon/format) drop-downs are not toggleable anymore. Default option to reset styles added.
* [#856](s://github.com/ckeditor/ckeditor-dev/issues/856): Introduced the [`CKEDITOR.tools.keystrokeToArray()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-keystrokeToArray) method. It converts a keystroke into its string representation, returning every key name as a separate array element.
* [#1053](s://github.com/ckeditor/ckeditor-dev/issues/1053): Introduced the [`CKEDITOR.tools.object.merge()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_object.html#method-merge) method. It allows to merge two objects, returning the new object with all properties from both objects deeply cloned.
* [#1073](s://github.com/ckeditor/ckeditor-dev/issues/1073): Introduced the [`CKEDITOR.tools.array.every()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools_array.html#method-every) method. It invokes a given test function on every array element and returns `true` if all elements pass the test.

Fixed Issues:

* [#796](s://github.com/ckeditor/ckeditor-dev/issues/796): Fixed: A list is pasted from OneNote in the reversed order.
* [#834](s://github.com/ckeditor/ckeditor-dev/issues/834): [IE9-11] Fixed: The editor does not save the selected state of radio buttons inserted by the [Form Elements](s://ckeditor.com/cke4/addon/forms) plugin.
* [#704](s://github.com/ckeditor/ckeditor-dev/issues/704): [Edge] Fixed: Using <kbd>Ctrl</kbd>/<kbd>Cmd</kbd> + <kbd>Z</kbd> breaks widget structure.
* [#591](s://github.com/ckeditor/ckeditor-dev/issues/591): Fixed: A column is inserted in a wrong order inside the table if any cell has a vertical split.
* [#787](s://github.com/ckeditor/ckeditor-dev/issues/787): Fixed: Using Cut inside a nested table does not cut the selected content.
* [#842](s://github.com/ckeditor/ckeditor-dev/issues/842): Fixed: List style not restored when toggling list indent level in the [Indent List](s://ckeditor.com/cke4/addon/indentlist) plugin.
* [#711](s://github.com/ckeditor/ckeditor-dev/issues/711): Fixed: Dragging widgets should only work with the left mouse button.
* [#862](s://github.com/ckeditor/ckeditor-dev/issues/862): Fixed: The "Object Styles" group in the [Styles Combo](s://ckeditor.com/cke4/addon/stylescombo) plugin is visible only if the whole element is selected.
* [#994](s://github.com/ckeditor/ckeditor-dev/pull/994): Fixed: Typo in the [`CKEDITOR.focusManager.focus()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_focusManager.html#method-focus) API documentation. Thanks to [benjy](s://github.com/benjy)!
* [#1014](s://github.com/ckeditor/ckeditor-dev/issues/1014): Fixed: The [Table Tools](s://ckeditor.com/cke4/addon/tabletools) Cell Properties dialog is now [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_acf.html) aware &mdash; it is not possible to change the cell width or height if corresponding styles are disabled.
* [#877](s://github.com/ckeditor/ckeditor-dev/issues/877): Fixed: A list with custom bullets with exotic characters crashes the editor when [pasted from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#605](s://github.com/ckeditor/ckeditor-dev/issues/605): Fixed: Inline widgets do not preserve trailing spaces.
* [#1008](s://github.com/ckeditor/ckeditor-dev/issues/1008): Fixed: Shorthand Hex colors from the [`config.colorButton_colors`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-colorButton_colors) option are not correctly highlighted in the [Color Button](s://ckeditor.com/cke4/addon/colorbutton) Text Color or Background Color panel.
* [#1094](s://github.com/ckeditor/ckeditor-dev/issues/1094): Fixed: Widget definition [`upcast`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-upcasts) methods are called for every element.
* [#1057](s://github.com/ckeditor/ckeditor-dev/issues/1057): Fixed: The [Notification](s://ckeditor.com/addon/notification) plugin overwrites Web Notifications API due to leakage to the global scope.
* [#1068](s://github.com/ckeditor/ckeditor-dev/issues/1068): Fixed: Upload widget paste listener ignores changes to the [`uploadWidgetDefinition`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.fileTools.uploadWidgetDefinition.html).
* [#921](s://github.com/ckeditor/ckeditor-dev/issues/921): Fixed: [Edge] CKEditor erroneously perceives internal copy and paste as type "external".
* [#1213](s://github.com/ckeditor/ckeditor-dev/issues/1213): Fixed: Multiple images uploaded using [Upload Image](s://ckeditor.com/cke4/addon/uploadimage) plugin are randomly duplicated or mangled.
* [#532](s://github.com/ckeditor/ckeditor-dev/issues/532): Fixed: Removed an outdated user guide link from the [About](s://ckeditor.com/cke4/addon/about) dialog.
* [#1221](s://github.com/ckeditor/ckeditor-dev/issues/1221): Fixed: Invalid CSS loaded by [Balloon Panel](s://ckeditor.com/cke4/addon/balloonpanel) plugin when [`config.skin`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-skin) is loaded using a custom path.
* [#522](s://github.com/ckeditor/ckeditor-dev/issues/522): Fixed: Widget selection is not removed when widget is inside table cell with [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin enabled.
* [#1027](s://github.com/ckeditor/ckeditor-dev/issues/1027): Fixed: Cannot add multiple images to the table with [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin in certain situations.
* [#1069](s://github.com/ckeditor/ckeditor-dev/issues/1069): Fixed: Wrong shape processing by [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#995](s://github.com/ckeditor/ckeditor-dev/issues/995): Fixed: Hyperlinked image gets inserted twice by [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#1287](s://github.com/ckeditor/ckeditor-dev/issues/1287): Fixed: [Widget](s://ckeditor.com/cke4/addon/widget) plugin throws exception if included in editor build but not loaded into editor's instance.

API Changes:

* [#1097](s://github.com/ckeditor/ckeditor-dev/issues/1097): Widget [`upcast`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-upcast) methods are now called in the [widget definition's](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#property-definition) context.
* [#1118](s://github.com/ckeditor/ckeditor-dev/issues/1118): Added the `show` option in the [`balloonPanel.attach()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ui_balloonPanel.html#method-attach) method, allowing to attach a hidden [Balloon Panel](s://ckeditor.com/cke4/addon/balloonpanel) instance.
* [#1145](s://github.com/ckeditor/ckeditor-dev/issues/1145): Added the [`skipNotifications`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_fileTools_uploadWidgetDefinition.html#property-skipNotifications) option to the [`CKEDITOR.fileTools.uploadWidgetDefinition`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.fileTools.uploadWidgetDefinition.html), allowing to switch off default notifications displayed by upload widgets.

Other Changes:

* [#815](s://github.com/ckeditor/ckeditor-dev/issues/815): Removed Node.js dependency from the CKEditor build script.
* [#1041](s://github.com/ckeditor/ckeditor-dev/pull/1041), [#1131](s://github.com/ckeditor/ckeditor-dev/issues/1131): Updated URLs pointing to [CKSource](s://cksource.com/) and [CKEditor](s://ckeditor.com/) resources after the launch of new websites.

## CKEditor 4.7.3

New Features:

* [#568](s://github.com/ckeditor/ckeditor-dev/issues/568): Added possibility to adjust nested editables' filters using the [`CKEDITOR.filter.disallowedContent`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_filter.html#property-disallowedContent) property.

Fixed Issues:

* [#554](s://github.com/ckeditor/ckeditor-dev/issues/554): Fixed: [`change`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-change) event not fired when typing the first character after pasting into the editor. Thanks to [Daniel Miller](s://github.com/millerdev)!
* [#566](s://github.com/ckeditor/ckeditor-dev/issues/566): Fixed: The CSS `border` shorthand property with zero width (`border: 0px solid #000;`) causes the table to have the border attribute set to 1.
* [#779](s://github.com/ckeditor/ckeditor-dev/issues/779): Fixed: The [Remove Format](s://ckeditor.com/cke4/addon/removeformat) plugin removes elements with language definition inserted by the [Language](s://ckeditor.com/cke4/addon/language) plugin.
* [#423](s://github.com/ckeditor/ckeditor-dev/issues/423): Fixed: The [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin pastes paragraphs into the editor even if [`CKEDITOR.config.enterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enterMode) is set to `CKEDITOR.ENTER_BR`.
* [#719](s://github.com/ckeditor/ckeditor-dev/issues/719): Fixed: Image inserted using the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) plugin can be resized when the editor is in [read-only mode](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html).
* [#577](s://github.com/ckeditor/ckeditor-dev/issues/577): Fixed: The "Delete Columns" command provided by the [Table Tools](s://ckeditor.com/cke4/addon/tabletools) plugin throws an error when trying to delete columns.
* [#867](s://github.com/ckeditor/ckeditor-dev/issues/867): Fixed: Typing into a selected table throws an error.
* [#817](s://github.com/ckeditor/ckeditor-dev/issues/817): Fixed: The [Save](s://ckeditor.com/cke4/addon/save) plugin does not work in [Source Mode](s://ckeditor.com/cke4/addon/sourcearea).

Other Changes:

* Updated the [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) plugin:
	* [#40](s://github.com/WebSpellChecker/ckeditor-plugin-wsc/issues/40): Fixed: IE10 throws an error when spell checking is started.
* [#800](s://github.com/ckeditor/ckeditor-dev/issues/800): Added the [`CKEDITOR.dom.selection.isCollapsed()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_selection.html#method-isCollapsed) method which is a simpler way to check if the selection is collapsed.
* [#830](s://github.com/ckeditor/ckeditor-dev/issues/830): Added an option to define which dialog tab should be shown by default when creating [`CKEDITOR.dialogCommand`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.dialogCommand.html).

## CKEditor 4.7.2

New Features:

* [#455](s://github.com/ckeditor/ckeditor-dev/issues/455): Added [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_acf.html) integration with the [Justify](s://ckeditor.com/cke4/addon/justify) plugin.

Fixed Issues:

* [#663](s://github.com/ckeditor/ckeditor-dev/issues/663): [Chrome] Fixed: Clicking the scrollbar throws an `Uncaught TypeError: element.is is not a function` error.
* [#694](s://github.com/ckeditor/ckeditor-dev/pull/694): Refactoring in the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin:
  * [#520](s://github.com/ckeditor/ckeditor-dev/issues/520): Fixed: Widgets cannot be properly pasted into a table cell.
  * [#460](s://github.com/ckeditor/ckeditor-dev/issues/460): Fixed: Editor gone after pasting into an editor within a table.
* [#579](s://github.com/ckeditor/ckeditor-dev/issues/579): Fixed: Internal `cke_table-faked-selection-table` class is visible in the Stylesheet Classes field of the [Table Properties](s://ckeditor.com/cke4/addon/table) dialog.
* [#545](s://github.com/ckeditor/ckeditor-dev/issues/545): [Edge] Fixed: Error thrown when pressing the [Select All](s://ckeditor.com/cke4/addon/selectall) button in [Source Mode](s://ckeditor.com/cke4/addon/sourcearea).
* [#582](s://github.com/ckeditor/ckeditor-dev/issues/582): Fixed: Double slash in the path to stylesheet needed by the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin. Thanks to [Marius Dumitru Florea](s://github.com/mflorea)!
* [#491](s://github.com/ckeditor/ckeditor-dev/issues/491): Fixed: Unnecessary dependency on the [Editor Toolbar](s://ckeditor.com/cke4/addon/toolbar) plugin inside the [Notification](s://ckeditor.com/cke4/addon/notification) plugin.
* [#646](s://github.com/ckeditor/ckeditor-dev/issues/646): Fixed: Error thrown into the browser console after opening the [Styles Combo](s://ckeditor.com/cke4/addon/stylescombo) plugin menu in the editor without any selection.
* [#501](s://github.com/ckeditor/ckeditor-dev/issues/501): Fixed: Double click does not open the dialog for modifying anchors inserted via the [Link](s://ckeditor.com/cke4/addon/link) plugin.
* [#9780](s://dev.ckeditor.com/ticket/9780): [IE8-9] Fixed: Clicking inside an empty [read-only](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) editor throws an error.
* [#16820](s://dev.ckeditor.com/ticket/16820): [IE10] Fixed: Clicking below a single horizontal rule throws an error.
* [#426](s://github.com/ckeditor/ckeditor-dev/issues/426): Fixed: The [`range.cloneContents()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-cloneContents) method selects the whole element when the selection starts at the beginning of that element.
* [#644](s://github.com/ckeditor/ckeditor-dev/issues/644): Fixed: The [`range.extractContents()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-extractContents) method returns an incorrect result when multiple nodes are selected.
* [#684](s://github.com/ckeditor/ckeditor-dev/issues/684): Fixed: The [`elementPath.contains()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_elementPath.html#method-contains) method incorrectly excludes the last element instead of root when the `fromTop` parameter is set to `true`.

Other Changes:

* Updated the [SCAYT](s://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type) plugin:
	* [#148](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/148): Fixed: SCAYT leaves underlined word after the CKEditor Replace dialog corrects it.
* [#751](s://github.com/ckeditor/ckeditor-dev/issues/751): Added the [`CKEDITOR.dom.nodeList.toArray()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_nodeList.html#method-toArray) method which returns an array representation of a [node list](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.dom.nodeList.html).

## CKEditor 4.7.1

New Features:

* Added a new Mexican Spanish localization. Thanks to [David Alexandro Rodriguez](s://www.transifex.com/user/profile/darsco16/)!
* [#413](s://github.com/ckeditor/ckeditor-dev/issues/413): Added Paste as Plain Text keyboard shortcut to the [Accessibility Help](s://ckeditor.com/cke4/addon/a11yhelp) instructions.

Fixed Issues:

* [#515](s://github.com/ckeditor/ckeditor-dev/issues/515): [Chrome] Fixed: Mouse actions on CKEditor scrollbar throw an exception when the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin is loaded.
* [#493](s://github.com/ckeditor/ckeditor-dev/issues/493): Fixed: Selection started from a nested table causes an error in the browser while scrolling down.
* [#415](s://github.com/ckeditor/ckeditor-dev/issues/415): [Firefox] Fixed: <kbd>Enter</kbd> key breaks the table structure when pressed in a table selection.
* [#457](s://github.com/ckeditor/ckeditor-dev/issues/457): Fixed: Error thrown when deleting content from the editor with no selection.
* [#478](s://github.com/ckeditor/ckeditor-dev/issues/478): [Chrome] Fixed:  Error thrown by the [Enter Key](s://ckeditor.com/cke4/addon/enterkey) plugin when pressing <kbd>Enter</kbd> with no selection.
* [#424](s://github.com/ckeditor/ckeditor-dev/issues/424): Fixed: Error thrown by [Tab Key Handling](s://ckeditor.com/cke4/addon/tab) and [Indent List](s://ckeditor.com/cke4/addon/indentlist) plugins when pressing <kbd>Tab</kbd> with no selection in inline editor.
* [#476](s://github.com/ckeditor/ckeditor-dev/issues/476): Fixed: Anchors inserted with the [Link](s://ckeditor.com/cke4/addon/link) plugin on collapsed selection cannot be edited.
* [#417](s://github.com/ckeditor/ckeditor-dev/issues/417): Fixed: The [Table Resize](s://ckeditor.com/cke4/addon/tableresize) plugin throws an error when used with a table with only header or footer rows.
* [#523](s://github.com/ckeditor/ckeditor-dev/issues/523): Fixed: The [`editor.getCommandKeystroke()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getCommandKeystroke) method does not obtain the correct keystroke.
* [#534](s://github.com/ckeditor/ckeditor-dev/issues/534): [IE] Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) does not work in Quirks Mode.
* [#450](s://github.com/ckeditor/ckeditor-dev/issues/450): Fixed: [`CKEDITOR.filter`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.filter.html) incorrectly transforms the `margin` CSS property.

## CKEditor 4.7

**Important Notes:**

* [#13793](s://dev.ckeditor.com/ticket/13793): The [`embed_provider`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-embed_provider) configuration option for the [Media Embed](s://ckeditor.com/cke4/addon/embed) and [Semantic Media Embed](s://ckeditor.com/cke4/addon/embedsemantic) plugins is no longer preset by default.
* The [UI Color](s://ckeditor.com/cke4/addon/uicolor) plugin now uses a custom color picker instead of the `YUI 2.7.0` library which has some known vulnerabilities (it's a security precaution, there was no security issue in CKEditor due to the way it was used).

New Features:

* [#16755](s://dev.ckeditor.com/ticket/16755): Added the [Table Selection](s://ckeditor.com/cke4/addon/tableselection) plugin that lets you select and manipulate an arbitrary rectangular table fragment (a few cells, a row or a column).
* [#16961](s://dev.ckeditor.com/ticket/16961): Added support for pasting from Microsoft Excel.
* [#13381](s://dev.ckeditor.com/ticket/13381): Dynamic code evaluation call in [`CKEDITOR.template`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.template.html) removed. CKEditor can now be used without the `unsafe-eval` Content Security Policy. Thanks to [Caridy Patiño](://caridy.name)!
* [#16971](s://dev.ckeditor.com/ticket/16971): Added support for color in the `background` property containing also other styles for table cells in the [Table Tools](s://ckeditor.com/cke4/addon/tabletools) plugin.
* [#16847](s://dev.ckeditor.com/ticket/16847): Added support for parsing and inlining any formatting created using the Microsoft Word style system to the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#16818](s://dev.ckeditor.com/ticket/16818): Added table cell height parsing in the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#16850](s://dev.ckeditor.com/ticket/16850): Added a new [`config.enableContextMenu`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enableContextMenu) configuration option for enabling and disabling the [context menu](s://ckeditor.com/cke4/addon/contextmenu).
* [#16937](s://dev.ckeditor.com/ticket/16937): The `command` parameter in [`CKEDITOR.editor.getCommandKeystroke()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getCommandKeystroke) now also accepts a command name as an argument.
* [#17010](s://dev.ckeditor.com/ticket/17010): The [`CKEDITOR.dom.range.shrink()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-shrink) method now allows for skipping bogus `<br>` elements.

Fixed Issues:

* [#16935](s://dev.ckeditor.com/ticket/16935): [Chrome] Fixed: Blurring the editor in [Source Mode](s://ckeditor.com/cke4/addon/sourcearea) throws an error.
* [#16825](s://dev.ckeditor.com/ticket/16825): [Chrome] Fixed: Error thrown when destroying a focused inline editor.
* [#16857](s://dev.ckeditor.com/ticket/16857): Fixed: <kbd>Ctrl+Shift+V</kbd> blocked by [Copy Formatting](s://ckeditor.com/cke4/addon/copyformatting).
* [#16845](s://dev.ckeditor.com/ticket/16845): [IE] Fixed: Cursor jumps to the top of the scrolled editor after focusing it when the [Copy Formatting](s://ckeditor.com/cke4/addon/copyformatting) plugin is enabled.
* [#16786](s://dev.ckeditor.com/ticket/16786): Fixed: Added missing translations for the [Copy Formatting](s://ckeditor.com/cke4/addon/copyformatting) plugin.
* [#14714](s://dev.ckeditor.com/ticket/14714): [WebKit/Blink] Fixed: Exception thrown on refocusing a blurred inline editor.
* [#16913](s://dev.ckeditor.com/ticket/16913): [Firefox, IE] Fixed: [Paste as Plain Text](s://ckeditor.com/cke4/addon/pastetext) keystroke does not work.
* [#16968](s://dev.ckeditor.com/ticket/16968): Fixed: [Safari] [Paste as Plain Text](s://ckeditor.com/cke4/addon/pastetext) is not handled by the editor.
* [#16912](s://dev.ckeditor.com/ticket/16912): Fixed: Exception thrown when a single image is pasted using [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#16821](s://dev.ckeditor.com/ticket/16821): Fixed: Extraneous `<span>` elements with `height` style stacked when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#16866](s://dev.ckeditor.com/ticket/16866): [IE, Edge] Fixed: Whitespaces not preserved when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#16860](s://dev.ckeditor.com/ticket/16860): Fixed: Paragraphs which only look like lists incorrectly transformed into them when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#16817](s://dev.ckeditor.com/ticket/16817): Fixed: When [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword), paragraphs are transformed into lists with some corrupted data.
* [#16833](s://dev.ckeditor.com/ticket/16833): [IE11] Fixed: Malformed list with headers [pasted from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#16826](s://dev.ckeditor.com/ticket/16826): [IE] Fixed: Superfluous paragraphs within lists [pasted from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#12465](s://dev.ckeditor.com/ticket/12465): Fixed: Cannot change the state of checkboxes or radio buttons if the properties dialog was invoked with a double-click.
* [#13062](s://dev.ckeditor.com/ticket/13062): Fixed: Impossible to unlink when the caret is at the edge of the link.
* [#13585](s://dev.ckeditor.com/ticket/13585): Fixed: Error when wrapping two adjacent `<div>` elements with a `<div>`.
* [#16811](s://dev.ckeditor.com/ticket/16811): Fixed: Table alignment is not preserved by the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#16810](s://dev.ckeditor.com/ticket/16810): Fixed: Vertical align in tables is not supported by the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin.
* [#11956](s://dev.ckeditor.com/ticket/11956): [Blink, IE] Fixed: [Link](s://ckeditor.com/cke4/addon/link) dialog does not open on a double click on the second word of the link with a background color or other styles.
* [#10472](s://dev.ckeditor.com/ticket/10472): Fixed: Unable to use [Table Resize](s://ckeditor.com/cke4/addon/tableresize) on table header and footer.
* [#14762](s://dev.ckeditor.com/ticket/14762): Fixed: Hovering over an empty table (without rows or cells) throws an error when the [Table Resize](s://ckeditor.com/cke4/addon/tableresize) plugin is active.
* [#16777](s://dev.ckeditor.com/ticket/16777): [Edge] Fixed: The [Clipboard](s://ckeditor.com/cke4/addon/clipboard) plugin does not allow to drop widgets into the editor.
* [#14894](s://dev.ckeditor.com/ticket/14894): [Chrome] Fixed: The editor scrolls to the top after focusing or when a dialog is opened.
* [#14769](s://dev.ckeditor.com/ticket/14769): Fixed: URLs with '-' in host are not detected by the [Auto Link](s://ckeditor.com/cke4/addon/autolink) plugin.
* [#16804](s://dev.ckeditor.com/ticket/16804): Fixed: Focus is not on the first menu item when the user opens a context menu or a drop-down list from the editor toolbar.
* [#14407](s://dev.ckeditor.com/ticket/14407): [IE] Fixed: Non-editable widgets can be edited.
* [#16927](s://dev.ckeditor.com/ticket/16927): Fixed: An error thrown if a bundle containing the [Color Button](s://ckeditor.com/cke4/addon/colorbutton) plugin is run in ES5 strict mode. Thanks to [Igor Rubinovich](s://github.com/IgorRubinovich)!
* [#16920](s://dev.ckeditor.com/ticket/16920): Fixed: Several plugins not using the [Dialog](s://ckeditor.com/cke4/addon/dialog) plugin as a direct dependency.
* [PR#336](s://github.com/ckeditor/ckeditor-dev/pull/336): Fixed: Typo in [`CKEDITOR.getCss()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#method-getCss) API documentation. Thanks to [knusperpixel](s://github.com/knusperpixel)!
* [#17027](s://dev.ckeditor.com/ticket/17027): Fixed: Command event data should be initialized as an empty object.
* Fixed the behavior of HTML parser when parsing `src`/`srcdoc` attributes of the `<iframe>` element in a CKEditor setup with ACF turned off and without the [Iframe Dialog](s://ckeditor.com/cke4/addon/iframe) plugin. The issue was originally reported as a security issue by [Sriramk21](s://twitter.com/sriramk21) from Pegasystems and was later downgraded by the security team into a normal issue due to the requirement of having ACF turned off. Disabling [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html) is against [security best practices](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_best_practices.html#security), so the problem described above has not been considered a security issue as such.

Other Changes:

* Updated [SCAYT](s://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type) and [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) plugins:
	* Fixed: DOM Exception after clicking "Remove Language" on a selected word with enabled [Language](s://ckeditor.com/cke4/addon/language) plugin in SCAYT.
* [#16958](s://dev.ckeditor.com/ticket/16958): Switched the default MathJax CDN provider for the [Mathematical Formulas](s://ckeditor.com/cke4/addon/mathjax) plugin from `cdn.mathjax.org` to [cdnjs](s://cdnjs.com/), due to closing of `cdn.mathjax.org` scheduled for April 30, 2017.
* [#16954](s://dev.ckeditor.com/ticket/16954): Removed the paste dialog.
* [#16982](s://dev.ckeditor.com/ticket/16982): Latest Safari now supports enhanced Clipboard API introduced in CKEditor 4.5.0.
* [#17025](s://dev.ckeditor.com/ticket/17025): Updated [Bender.js](s://github.com/benderjs/benderjs) to 0.4.2.

## CKEditor 4.6.2

New Features:

* [#16733](s://dev.ckeditor.com/ticket/16733): Added a new pastel color palette for the [Color Button](s://ckeditor.com/cke4/addon/colorbutton) plugin and a new [`config.colorButton_colorsPerRow`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-colorButton_colorsPerRow) configuration option for setting the number of rows in the color selector.
* [#16752](s://dev.ckeditor.com/ticket/16752): Added a new Azerbaijani localization. Thanks to the [Azerbaijani language team](s://www.transifex.com/ckeditor/teams/11143/az/)!
* [#13818](s://dev.ckeditor.com/ticket/13818): It is now possible to group [Widget](s://ckeditor.com/cke4/addon/widget) [style definitions](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_styles.html#widget-styles), so applying one style disables the other.

Fixed Issues:

* [#13446](s://dev.ckeditor.com/ticket/13446): [Chrome] Fixed: It is possible to type in an unfocused inline editor.
* [#14856](s://dev.ckeditor.com/ticket/14856): Fixed: [Font size and font family](s://ckeditor.com/cke4/addon/font) reset each other when modified at certain positions.
* [#16745](s://dev.ckeditor.com/ticket/16745): [Edge] Fixed: List items are lost when [pasted from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#16682](s://dev.ckeditor.com/ticket/16682): [Edge] Fixed: A list gets [pasted from Word](s://ckeditor.com/cke4/addon/pastefromword) as a set of paragraphs. Added the [`config.pasteFromWord_heuristicsEdgeList`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWord_heuristicsEdgeList) configuration option.
* [#10373](s://dev.ckeditor.com/ticket/10373): Fixed: Context menu items can be dragged into the editor.
* [#16728](s://dev.ckeditor.com/ticket/16728): [IE] Fixed: [Copy Formatting](s://ckeditor.com/cke4/addon/copyformatting) breaks the editor in Quirks Mode.
* [#16795](s://dev.ckeditor.com/ticket/16795): [IE] Fixed: [Copy Formatting](s://ckeditor.com/cke4/addon/copyformatting) breaks the editor in Compatibility Mode.
* [#16675](s://dev.ckeditor.com/ticket/16675): Fixed: Styles applied with [Copy Formatting](s://ckeditor.com/cke4/addon/copyformatting) to a single table cell are applied to the whole table.
* [#16753](s://dev.ckeditor.com/ticket/16753): Fixed: [`element.setSize()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-setSize) sets incorrect editor dimensions if the border width is represented as a fraction of pixels.
* [#16705](s://dev.ckeditor.com/ticket/16705): [Firefox] Fixed: Unable to paste images as Base64 strings when using [Clipboard](s://ckeditor.com/cke4/addon/clipboard).
* [#14869](s://dev.ckeditor.com/ticket/14869): Fixed: JavaScript error is thrown when trying to use [Find](s://ckeditor.com/cke4/addon/find) in a [`<div>`-based editor](s://ckeditor.com/cke4/addon/divarea).

## CKEditor 4.6.1

New Features:

* [#16639](s://dev.ckeditor.com/ticket/16639): The `callback` parameter in the [`CKEDITOR.ajax.post()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_ajax.html#method-post) method became optional.

Fixed Issues:

* [#11064](s://dev.ckeditor.com/ticket/11064): [Blink, WebKit] Fixed: Cannot select all editor content when a widget or a non-editable element is the first or last element of the content. Also fixes this issue in the [Select All](s://ckeditor.com/cke4/addon/selectall) plugin.
* [#14755](s://dev.ckeditor.com/ticket/14755): [Blink, WebKit, IE8] Fixed: Browser hangs when a table is inserted in the place of a selected list with an empty last item.
* [#16624](s://dev.ckeditor.com/ticket/16624): Fixed: Improved the [Color Button](s://ckeditor.com/cke4/addon/colorbutton) plugin which will now normalize the CSS `background` property if it only contains a color value. This fixes missing background colors when using [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#16600](s://dev.ckeditor.com/ticket/16600): [Blink, WebKit] Fixed: Error thrown occasionally by an uninitialized editable for multiple CKEditor instances on the same page.

## CKEditor 4.6

New Features:

* [#14569](s://dev.ckeditor.com/ticket/14569): Added a new, flat, default CKEditor skin called [Moono-Lisa](s://ckeditor.com/cke4/addon/moono-lisa). Refreshed default colors available in the [Color Button](s://ckeditor.com/cke4/addon/colorbutton) plugin ([Text Color and Background Color](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_colorbutton.html) feature).
* [#14707](s://dev.ckeditor.com/ticket/14707): Added a new [Copy Formatting](s://ckeditor.com/cke4/addon/copyformatting) feature to enable easy copying of styles between your document parts.
* Introduced the completely rewritten [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) plugin:
	* Backward incompatibility: The [`config.pasteFromWordRemoveFontStyles`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWordRemoveFontStyles) option now defaults to `false`. This option will be deprecated in the future. Use [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_acf.html) to replicate the effect of setting it to `true`.
	* Backward incompatibility: The [`config.pasteFromWordNumberedHeadingToList`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWordNumberedHeadingToList) and [`config.pasteFromWordRemoveStyles`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWordRemoveStyles) options were dropped and no longer have any effect on pasted content.
	* Major improvements in preservation of list numbering, styling and indentation (nested lists with multiple levels).
	* Major improvements in document structure parsing that fix plenty of issues with distorted or missing content after paste.
* Added new translation: Occitan. Thanks to [Cédric Valmary](s://totenoc.eu/)!
* [#10015](s://dev.ckeditor.com/ticket/10015): Keyboard shortcuts (relevant to the operating system in use) will now be displayed in tooltips and context menus.
* [#13794](s://dev.ckeditor.com/ticket/13794): The [Upload Image](s://ckeditor.com/cke4/addon/uploadimage) feature now uses `uploaded.width/height` if set.
* [#12541](s://dev.ckeditor.com/ticket/12541): Added the [Upload File](s://ckeditor.com/cke4/addon/uploadfile) plugin that lets you upload a file by drag&amp;dropping it into the editor content.
* [#14449](s://dev.ckeditor.com/ticket/14449): Introduced the [Balloon Panel](s://ckeditor.com/cke4/addon/balloonpanel) plugin that lets you create stylish floating UI elements for the editor.
* [#12077](s://dev.ckeditor.com/ticket/12077): Added support for the HTML5 `download` attribute in link (`<a>`) elements. Selecting the "Force Download" checkbox in the [Link](s://ckeditor.com/cke4/addon/link) dialog will cause the linked file to be downloaded automatically. Thanks to [sbusse](s://github.com/sbusse)!
* [#13518](s://dev.ckeditor.com/ticket/13518): Introduced the [`additionalRequestParameters`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_fileTools_uploadWidgetDefinition.html#property-additionalRequestParameters) property for file uploads to make it possible to send additional information about the uploaded file to the server.
* [#14889](s://dev.ckeditor.com/ticket/14889): Added the [`config.image2_altRequired`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-image2_altRequired) option for the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) plugin to allow making alternative text a mandatory field. Thanks to [Andrey Fedoseev](s://github.com/andreyfedoseev)!

Fixed Issues:

* [#9991](s://dev.ckeditor.com/ticket/9991): Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) should only normalize input data.
* [#7209](s://dev.ckeditor.com/ticket/7209): Fixed: Lists with 3 levels not [pasted from Word](s://ckeditor.com/cke4/addon/pastefromword) correctly.
* [#14335](s://dev.ckeditor.com/ticket/14335): Fixed: Pasting a numbered list starting with a value different from "1" from Microsoft Word does not work correctly.
* [#14542](s://dev.ckeditor.com/ticket/14542): Fixed: Copying a numbered list from Microsoft Word does not preserve list formatting.
* [#14544](s://dev.ckeditor.com/ticket/14544): Fixed: Copying a nested list from Microsoft Word results in an empty list.
* [#14660](s://dev.ckeditor.com/ticket/14660): Fixed: [Pasting text from  Word](s://ckeditor.com/cke4/addon/pastefromword) breaks the styling in some cases.
* [#14867](s://dev.ckeditor.com/ticket/14867): [Firefox] Fixed: Text gets stripped when [pasting content from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#2507](s://dev.ckeditor.com/ticket/2507): Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) does not detect pasting a part of a paragraph.
* [#3336](s://dev.ckeditor.com/ticket/3336): Fixed: Extra blank row added on top of the content [pasted from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#6115](s://dev.ckeditor.com/ticket/6115): Fixed: When Right-to-Left text direction is applied to a table [pasted from Word](s://ckeditor.com/cke4/addon/pastefromword), borders are missing on one side.
* [#6342](s://dev.ckeditor.com/ticket/6342): Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) filters out a basic text style when it is [configured to use attributes](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_basicstyles.html#custom-basic-text-style-definition).
* [#6457](s://dev.ckeditor.com/ticket/6457): [IE] Fixed: [Pasting from Word](s://ckeditor.com/cke4/addon/pastefromword) is extremely slow.
* [#6789](s://dev.ckeditor.com/ticket/6789): Fixed: The `mso-list: ignore` style is not handled properly when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#7262](s://dev.ckeditor.com/ticket/7262): Fixed: Lists in preformatted body disappear when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#7662](s://dev.ckeditor.com/ticket/7662): [Opera] Fixed: Extra empty number/bullet shown in the editor body when editing a multi-level list [pasted from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#7807](s://dev.ckeditor.com/ticket/7807): Fixed: Last item in a list not converted to a `<li>` element after [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#7950](s://dev.ckeditor.com/ticket/7950): [IE] Fixed: Content [from Word pasted](s://ckeditor.com/cke4/addon/pastefromword) differently than in other browsers.
* [#7982](s://dev.ckeditor.com/ticket/7982): Fixed: Multi-level lists get split into smaller ones when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#8231](s://dev.ckeditor.com/ticket/8231): [WebKit, Opera] Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) inserts empty paragraphs.
* [#8266](s://dev.ckeditor.com/ticket/8266): Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) inserts a blank line at the top.
* [#8341](s://dev.ckeditor.com/ticket/8341), [#7646](s://dev.ckeditor.com/ticket/7646): Fixed: Faulty removal of empty `<span>` elements in [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) content cleanup breaking content formatting.
* [#8754](s://dev.ckeditor.com/ticket/8754): [Firefox] Fixed: Incorrect pasting of multiple nested lists in [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#8983](s://dev.ckeditor.com/ticket/8983): Fixed: Alignment lost when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword) with [`config.enterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enterMode) set to [`CKEDITOR.ENTER_BR`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#property-ENTER_BR).
* [#9331](s://dev.ckeditor.com/ticket/9331): [IE] Fixed: [Pasting text from Word](s://ckeditor.com/cke4/addon/pastefromword) creates a simple Caesar cipher.
* [#9422](s://dev.ckeditor.com/ticket/9422): Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) leaves an unwanted `color:windowtext` style.
* [#10011](s://dev.ckeditor.com/ticket/10011): [IE9-10] Fixed: [`config.pasteFromWordRemoveFontStyles`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWordRemoveFontStyles) is ignored under certain conditions.
* [#10643](s://dev.ckeditor.com/ticket/10643): Fixed: Differences between using <kbd>Ctrl+V</kbd> and pasting from the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) dialog.
* [#10784](s://dev.ckeditor.com/ticket/10784): Fixed: Lines missing when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#11294](s://dev.ckeditor.com/ticket/11294): [IE10] Fixed: Font size is not preserved when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#11627](s://dev.ckeditor.com/ticket/11627): Fixed: Missing words when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#12784](s://dev.ckeditor.com/ticket/12784): Fixed: Bulleted list with custom bullets gets changed to a numbered list when [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#13174](s://dev.ckeditor.com/ticket/13174): Fixed: Data loss after [pasting from Word](s://ckeditor.com/cke4/addon/pastefromword).
* [#13828](s://dev.ckeditor.com/ticket/13828): Fixed: Widget classes should be added to the wrapper rather than the widget element.
* [#13829](s://dev.ckeditor.com/ticket/13829): Fixed: No class in [Widget](s://ckeditor.com/cke4/addon/widget) wrapper to identify the widget type.
* [#13519](s://dev.ckeditor.com/ticket/13519): Server response received when uploading files should be more flexible.

Other Changes:

* Updated [SCAYT](s://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type) and [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) plugins:
 	* Support for the new default Moono-Lisa skin.
 	* [#121](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/121): Fixed: [Basic Styles](s://ckeditor.com/cke4/addon/basicstyles) do not work when SCAYT is enabled.
 	* [#125](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/125): Fixed: Inline styles are not continued when writing multiple lines of styled text with SCAYT enabled.
 	* [#127](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/127): Fixed: Uncaught TypeError after enabling SCAYT in the CKEditor `<div>` element.
 	* [#128](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/128): Fixed: Error thrown after enabling SCAYT caused by conflicts with RequireJS.

## CKEditor 4.5.11

**Security Updates:**

* [Severity: minor] Fixed the `target="_blank"` vulnerability reported by James Gaskell.

	Issue summary: If a victim had access to a spoofed version of ckeditor.com via HTTP (e.g. due to DNS spoofing, using a hacked public network or mailicious hotspot), then when using a link to the ckeditor.com website it was possible for the attacker to change the current URL of the opening page, even if the opening page was protected with SSL.

  An upgrade is recommended.

New Features:

* [#14747](s://dev.ckeditor.com/ticket/14747): The [Enhanced Image](s://ckeditor.com/cke4/addon/image2) caption now supports the link `target` attribute.
* [#7154](s://dev.ckeditor.com/ticket/7154): Added support for the "Display Text" field to the [Link](s://ckeditor.com/cke4/addon/link) dialog. Thanks to [Ryan Guill](s://github.com/ryanguill)!

Fixed Issues:

* [#13362](s://dev.ckeditor.com/ticket/13362): [Blink, WebKit] Fixed: Active widget element is not cached when it is losing focus and it is inside an editable element.
* [#13755](s://dev.ckeditor.com/ticket/13755): [Edge] Fixed: Pasting images does not work.
* [#13548](s://dev.ckeditor.com/ticket/13548): [IE] Fixed: Clicking the [elements path](s://ckeditor.com/cke4/addon/elementspath) disables Cut and Copy icons.
* [#13812](s://dev.ckeditor.com/ticket/13812): Fixed: When aborting file upload the placeholder for image is left.
* [#14659](s://dev.ckeditor.com/ticket/14659): [Blink] Fixed: Content scrolled to the top after closing the dialog in a [`<div>`-based editor](s://ckeditor.com/cke4/addon/divarea).
* [#14825](s://dev.ckeditor.com/ticket/14825): [Edge] Fixed: Focusing the editor causes unwanted scrolling due to dropped support for the `setActive()` method.

## CKEditor 4.5.10

Fixed Issues:

* [#10750](s://dev.ckeditor.com/ticket/10750): Fixed: The editor does not escape the `font-style` family property correctly, removing quotes and whitespace from font names.
* [#14413](s://dev.ckeditor.com/ticket/14413): Fixed: The [Auto Grow](s://ckeditor.com/cke4/addon/autogrow) plugin with the [`config.autoGrow_onStartup`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-autoGrow_onStartup) option set to `true` does not work properly for an editor that is not visible.
* [#14451](s://dev.ckeditor.com/ticket/14451): Fixed: Numeric element ID not escaped properly. Thanks to [Jakub Chalupa](s://github.com/chaluja7)!
* [#14590](s://dev.ckeditor.com/ticket/14590): Fixed: Additional line break appearing after inline elements when switching modes. Thanks to [dpidcock](s://github.com/dpidcock)!
* [#14539](s://dev.ckeditor.com/ticket/14539): Fixed: JAWS reads "selected Blank" instead of "selected <widget name>" when selecting a widget.
* [#14701](s://dev.ckeditor.com/ticket/14701): Fixed: More precise labels for [Enhanced Image](s://ckeditor.com/cke4/addon/image2) and [Placeholder](s://ckeditor.com/cke4/addon/placeholder) widgets.
* [#14667](s://dev.ckeditor.com/ticket/14667): [IE] Fixed: Removing background color from selected text removes background color from the whole paragraph.
* [#14252](s://dev.ckeditor.com/ticket/14252): [IE] Fixed: Styles drop-down list does not always reflect the current style of the text line.
* [#14275](s://dev.ckeditor.com/ticket/14275): [IE9+] Fixed: `onerror` and `onload` events are not used in browsers it could have been used when loading scripts dynamically.

## CKEditor 4.5.9

Fixed Issues:

* [#10685](s://dev.ckeditor.com/ticket/10685): Fixed: Unreadable toolbar icons after updating to the new editor version. Fixed with [6876179](s://github.com/ckeditor/ckeditor-dev/commit/6876179db4ee97e786b07b8fd72e6b4120732185) in [ckeditor-dev](s://github.com/ckeditor/ckeditor-dev) and [6c9189f4](s://github.com/ckeditor/ckeditor-presets/commit/6c9189f46392d2c126854fe8889b820b8c76d291) in [ckeditor-presets](s://github.com/ckeditor/ckeditor-presets).
* [#14573](s://dev.ckeditor.com/ticket/14573): Fixed: Missing [Widget](s://ckeditor.com/cke4/addon/widget) drag handler CSS when there are multiple editor instances.
* [#14620](s://dev.ckeditor.com/ticket/14620): Fixed: Setting both the `min-height` style for the `<body>` element and the `height` style for the `<html>` element breaks the [Auto Grow](s://ckeditor.com/cke4/addon/autogrow) plugin.
* [#14538](s://dev.ckeditor.com/ticket/14538): Fixed: Keyboard focus goes into an embedded `<iframe>` element.
* [#14602](s://dev.ckeditor.com/ticket/14602): Fixed: The [`dom.element.removeAttribute()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-removeAttribute) method does not remove all attributes if no parameter is given.
* [#8679](s://dev.ckeditor.com/ticket/8679): Fixed: Better focus indication and ability to style the selected color in the [color picker dialog](s://ckeditor.com/cke4/addon/colordialog).
* [#11697](s://dev.ckeditor.com/ticket/11697): Fixed: Content is replaced ignoring the letter case setting in the [Find and Replace](s://ckeditor.com/cke4/addon/find) dialog window.
* [#13886](s://dev.ckeditor.com/ticket/13886): Fixed: Invalid handling of the [`CKEDITOR.style`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.style.html) instance with the `styles` property by [`CKEDITOR.filter`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.filter.html).
* [#14535](s://dev.ckeditor.com/ticket/14535): Fixed: CSS syntax corrections. Thanks to [mdjdenormandie](s://github.com/mdjdenormandie)!

## CKEditor 4.5.8

New Features:

* [#12440](s://dev.ckeditor.com/ticket/12440): Added the [`config.colorButton_enableAutomatic`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-colorButton_enableAutomatic) option to allow hiding the "Automatic" option in the [color picker](s://ckeditor.com/cke4/addon/colorbutton).

Fixed Issues:

* [#10448](s://dev.ckeditor.com/ticket/10448): Fixed: Lack of scrollbar in the [right-to-left text direction](s://ckeditor.com/cke4/addon/bidi).
* [#12707](s://dev.ckeditor.com/ticket/12707): Fixed: The order of table elements does not comply with the HTML specification.
* [#13756](s://dev.ckeditor.com/ticket/13756): [Edge] Fixed: Context menus are cut-off.

## CKEditor 4.5.7

New Features:

* [#14327](s://dev.ckeditor.com/ticket/14327): Added Swiss German localization. Thanks to [Miro Grenda](s://twitter.com/mirogrenda)!

Fixed Issues:

* [#13816](s://dev.ckeditor.com/ticket/13816): Introduced a new strategy for Filling Character handling to avoid changes in DOM. This fixes the following issues:
	* [#12727](s://dev.ckeditor.com/ticket/12727): [Blink] `IndexSizeError` when using the [Div Editing Area](s://ckeditor.com/cke4/addon/divarea) and [Content Templates](s://ckeditor.com/cke4/addon/templates) plugins.
	* [#13377](s://dev.ckeditor.com/ticket/13377): [Widget](s://ckeditor.com/cke4/addon/widget) plugin issue when typing in Korean.
	* [#13389](s://dev.ckeditor.com/ticket/13389): [Blink] [`editor.getData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getData) fails when the cursor is next to an `<hr>` tag.
	* [#13513](s://dev.ckeditor.com/ticket/13513): [Blink, WebKit] [Div Editing Area](s://ckeditor.com/cke4/addon/divarea) and [`editor.getData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getData) throw an error when an image is the only data in the editor.
* [#13884](s://dev.ckeditor.com/ticket/13884): [Firefox] Fixed: Copying and pasting a table results in just the first cell being pasted.
* [#14234](s://dev.ckeditor.com/ticket/14234): Fixed: URL input field is not marked as required in the [Media Embed](s://ckeditor.com/cke4/addon/embed) dialog.

## CKEditor 4.5.6

New Features:

* Introduced the [`CKEDITOR.tools.getCookie()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-getCookie) and [`CKEDITOR.tools.setCookie()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-setCookie) methods for accessing cookies.
* Introduced the [`CKEDITOR.tools.getCsrfToken()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-getCsrfToken) method. The CSRF token is now automatically sent by the [File Browser](s://ckeditor.com/cke4/addon/filebrowser) and [File Tools](s://ckeditor.com/cke4/addon/filetools) plugins during file uploads. The server-side upload handlers may check it and use it to additionally secure the communication.

Other Changes:

* Updated [SCAYT](s://ckeditor.com/cke4/addon/scayt) (Spell Check As You Type):
	- New features:
		- CKEditor [Language](s://ckeditor.com/cke4/addon/language) plugin support.
		- CKEditor [Placeholder](s://ckeditor.com/cke4/addon/placeholder) plugin support.
		- [Drag&Drop](s://ckeditor.com/docs/ckeditor4/latest/examples/fileupload.html) support.
		- **Experimental** [GRAYT](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-grayt_autoStartup) (Grammar As You Type) functionality.
	- Fixed issues:
		* [#98](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/98): SCAYT affects dialog double-click. Fixed in SCAYT core.
		* [#102](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/102): SCAYT core performance enhancements.
		* [#104](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/104): SCAYT's spans leak into the clipboard and after pasting.
		* [#105](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/105): A JavaScript error fired in case of multiple instances of CKEditor on one page.
		* [#107](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/107): SCAYT should not check non-editable parts of content.
		* [#108](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/108): Latest SCAYT copies the ID of the editor element to the iframe.
		* SCAYT stops working when CKEditor [Undo plugin](s://ckeditor.com/cke4/addon/undo) not enabled.
		* Issue with pasting SCAYT markup in CKEditor.
		* SCAYT stops working after pressing the *Cancel* button in the WSC dialog.

## CKEditor 4.5.5

Fixed Issues:

* [#13887](s://dev.ckeditor.com/ticket/13887): Fixed: [Link](s://ckeditor.com/cke4/addon/link) plugin alters the `target` attribute value. Thanks to [SamZiemer](s://github.com/SamZiemer)!
* [#12189](s://dev.ckeditor.com/ticket/12189): Fixed: The [Link](s://ckeditor.com/cke4/addon/link) plugin dialog does not display the subject of email links if the subject parameter is not lowercase.
* [#9192](s://dev.ckeditor.com/ticket/9192): Fixed: An `undefined` string is appended to an email address added with the [Link](s://ckeditor.com/cke4/addon/link) plugin if subject and email body are empty and [`config.emailProtection`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-emailProtection) is set to `encode`.
* [#13790](s://dev.ckeditor.com/ticket/13790): Fixed: It is not possible to destroy the editor `<iframe>` after the editor was detached from DOM. Thanks to [Stefan Rijnhart](s://github.com/StefanRijnhart)!
* [#13803](s://dev.ckeditor.com/ticket/13803): Fixed: The editor cannot be destroyed before being fully initialized. Thanks to [Cyril Fluck](s://github.com/cyril-sf)!
* [#13867](s://dev.ckeditor.com/ticket/13867): Fixed: CKEditor does not work when the `classList` polyfill is used.
* [#13885](s://dev.ckeditor.com/ticket/13885): Fixed: [Enhanced Image](s://ckeditor.com/cke4/addon/image2) requires the [Link](s://ckeditor.com/cke4/addon/link) plugin to link an image.
* [#13883](s://dev.ckeditor.com/ticket/13883): Fixed: Copying a table using the context menu strips off styles.
* [#13872](s://dev.ckeditor.com/ticket/13872): Fixed: Cutting is possible in the [read-only](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) mode.
* [#12848](s://dev.ckeditor.com/ticket/12848): [Blink] Fixed: Opening the [Find and Replace](s://ckeditor.com/cke4/addon/find) dialog window in the [read-only](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) mode throws an exception.
* [#13879](s://dev.ckeditor.com/ticket/13879): Fixed: It is not possible to prevent the [`editor.drop`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-drop) event.
* [#13361](s://dev.ckeditor.com/ticket/13361): Fixed: Skin images fail when the site path includes parentheses because the `background-image` path needs single quotes around the URL value.
* [#13771](s://dev.ckeditor.com/ticket/13771): Fixed: The `contents.css` style is not used if the [IFrame Editing Area](s://ckeditor.com/cke4/addon/wysiwygarea) plugin is missing.
* [#13782](s://dev.ckeditor.com/ticket/13782): Fixed: Unclear log messages.
* [#13919](s://dev.ckeditor.com/ticket/13919): [Edge] Fixed: Browser window crashes when accessing the `isContentEditable` property of an `<input>` DOM element.

Other Changes:

* [#13859](s://dev.ckeditor.com/ticket/13859): Test cases created with `bender.tools.createTestsForEditors` will also receive editor bot as a second parameter.

## CKEditor 4.5.4

New Features:

* [#13632](s://dev.ckeditor.com/ticket/13632): Introduce error logging mechanism.
* [#13730](s://dev.ckeditor.com/ticket/13730): Switch to the new error logging mechanism.

Fixed Issues:

* [#9856](s://dev.ckeditor.com/ticket/9856): Fixed: Cannot use the native context menu together with the [Div Editing Area](s://ckeditor.com/cke4/addon/divarea) plugin. Thanks to [Mark Wade](s://github.com/mark-wade)!
* [#12733](s://dev.ckeditor.com/ticket/12733): [IE9+] Fixed: Radio button `onChange` does not work. Thanks to [Iliya Kostadinov](s://github.com/iliyakostadinov)!
* [#13142](s://dev.ckeditor.com/ticket/13142): [Edge] Fixed: *Ctrl+A* and then *Backspace* result in an empty `<div>` element.
* [#13599](s://dev.ckeditor.com/ticket/13599): Fixed: Cross-editor drag and drop of an inline widget results in error/artifacts.
* [#13640](s://dev.ckeditor.com/ticket/13640): [IE] Fixed: Dropping a widget outside the `<body>` element is not handled correctly.
* [#13533](s://dev.ckeditor.com/ticket/13533): Fixed: No progress during upload.
* [#13680](s://dev.ckeditor.com/ticket/13680): Fixed: The parser should allow the `<h1-6>` element to be a child of the `<summary>` element.
* [#11724](s://dev.ckeditor.com/ticket/11724): [Touch devices] Fixed: Drop-downs often hide right after opening them.
* [#13690](s://dev.ckeditor.com/ticket/13690): Fixed: Copying content from IE to Chrome adds an extra paragraph.
* [#13284](s://dev.ckeditor.com/ticket/13284): Fixed: Cannot drag and drop a widget if the text caret is placed just after the widget instance.
* [#13516](s://dev.ckeditor.com/ticket/13516): Fixed: CKEditor removes empty HTML5 anchors without the `name` attribute.
* [#13765](s://dev.ckeditor.com/ticket/13765): [Safari 9] Fixed: Problems with rendering samples.

Other Changes:

* [#11725](s://dev.ckeditor.com/ticket/11725): Marked [`CKEDITOR.env.mobile`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_env.html#property-mobile) as deprecated. The reason is that it is no longer clear what "mobile" means.
* [#13737](s://dev.ckeditor.com/ticket/13737): Upgraded [Bender.js](s://github.com/benderjs/benderjs) to 0.4.1.

## CKEditor 4.5.3

New Features:

* [#13501](s://dev.ckeditor.com/ticket/13501): Added the [`config.fileTools_defaultFileName`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-fileTools_defaultFileName) option to allow setting a default file name for paste uploads.
* [#13603](s://dev.ckeditor.com/ticket/13603): Added support for uploading dropped BMP images.

Fixed Issues:

* [#13590](s://dev.ckeditor.com/ticket/13590): Fixed: Various issues related to the [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) feature. Fixes also:
  * [#11215](s://dev.ckeditor.com/ticket/11215),
  * [#8780](s://dev.ckeditor.com/ticket/8780),
  * [#12762](s://dev.ckeditor.com/ticket/12762).
* [#13386](s://dev.ckeditor.com/ticket/13386): [Edge] Fixed: Issues with selecting and editing images.
* [#13568](s://dev.ckeditor.com/ticket/13568): Fixed: The [`editor.getSelectedHtml()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getSelectedHtml) method returns invalid results for entire content selection.
* [#13453](s://dev.ckeditor.com/ticket/13453): Fixed: Drag&drop of entire editor content throws an error.
* [#13465](s://dev.ckeditor.com/ticket/13465): Fixed: Error is thrown and the widget is lost on drag&drop if it is the only content of the editor.
* [#13414](s://dev.ckeditor.com/ticket/13414): Fixed: Content auto paragraphing in a nested editable despite editor configuration.
* [#13429](s://dev.ckeditor.com/ticket/13429): Fixed: Incorrect selection after content insertion by the [Auto Embed](s://ckeditor.com/cke4/addon/autoembed) plugin.
* [#13388](s://dev.ckeditor.com/ticket/13388): Fixed: [Table Resize](s://ckeditor.com/cke4/addon/tableresize) integration with [Undo](s://ckeditor.com/cke4/addon/undo) is broken.

Other Changes:

* [#13637](s://dev.ckeditor.com/ticket/13637): Several icons were refactored.
* Updated [Bender.js](s://github.com/benderjs/benderjs) to 0.3.0 and introduced the ability to run tests via HTTPs ([#13265](s://dev.ckeditor.com/ticket/13265)).

## CKEditor 4.5.2

Fixed Issues:

* [#13609](s://dev.ckeditor.com/ticket/13609): [Edge] Fixed: The browser crashes when switching to the source mode. Thanks to [Andrew Williams and Mark Smeed](://webxsolution.com/)!
* [PR#201](s://github.com/ckeditor/ckeditor-dev/pull/201): Fixed: Buttons in the toolbar configurator cause form submission. Thanks to [colemanw](s://github.com/colemanw)!
* [#13422](s://dev.ckeditor.com/ticket/13422): Fixed: A monospaced font should be used in the `<textarea>` element storing editor configuration in the toolbar configurator.
* [#13494](s://dev.ckeditor.com/ticket/13494): Fixed: Error thrown in the toolbar configurator if plugin requirements are not met.
* [#13409](s://dev.ckeditor.com/ticket/13409): Fixed: List elements incorrectly merged when pressing *Backspace* or *Delete*.
* [#13434](s://dev.ckeditor.com/ticket/13434): Fixed: Dialog state indicator broken in Right–To–Left environments.
* [#13460](s://dev.ckeditor.com/ticket/13460): [IE8] Fixed: Copying inline widgets is broken when [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_acf.html) is disabled.
* [#13495](s://dev.ckeditor.com/ticket/13495): [Firefox, IE] Fixed: Text is not word-wrapped in the Paste dialog window.
* [#13528](s://dev.ckeditor.com/ticket/13528): [Firefox@Windows] Fixed: Content copied from Microsoft Word and other external applications is pasted as a plain text. Removed the `CKEDITOR.plugins.clipboard.isHtmlInExternalDataTransfer` property as the check must be dynamic.
* [#13583](s://dev.ckeditor.com/ticket/13583): Fixed: [`DataTransfer.getData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_clipboard_dataTransfer.html#method-getData) should work consistently in all browsers and should not strip valuable content. Fixed pasting tables from Microsoft Excel on Chrome.
* [#13468](s://dev.ckeditor.com/ticket/13468): [IE] Fixed: Binding drag&drop `dataTransfer` does not work if `text` data was set in the meantime.
* [#13451](s://dev.ckeditor.com/ticket/13451): [IE8-9] Fixed: One drag&drop operation may affect following ones.
* [#13184](s://dev.ckeditor.com/ticket/13184): Fixed: Web page reloaded after a drop on editor UI.
* [#13129](s://dev.ckeditor.com/ticket/13129) Fixed: Block widget blurred after a drop followed by an undo.
* [#13397](s://dev.ckeditor.com/ticket/13397): Fixed: Drag&drop of a widget inside its nested widget crashes the editor.
* [#13385](s://dev.ckeditor.com/ticket/13385): Fixed: [`editor.getSnapshot()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getSnapshot) may return a non-string value.
* [#13419](s://dev.ckeditor.com/ticket/13419): Fixed: The [Auto Link](s://ckeditor.com/cke4/addon/autolink) plugin does not encode double quotes in URLs.
* [#13420](s://dev.ckeditor.com/ticket/13420): Fixed: The [Auto Embed](s://ckeditor.com/cke4/addon/autoembed) plugin ignores encoded characters in URL parameters.
* [#13410](s://dev.ckeditor.com/ticket/13410): Fixed: Error thrown in the [Auto Embed](s://ckeditor.com/cke4/addon/autoembed) plugin when undoing right after pasting a link.
* [#13566](s://dev.ckeditor.com/ticket/13566): Fixed: Suppressed notifications in the [Media Embed Base](s://ckeditor.com/cke4/addon/embedbase) plugin.
* [#11616](s://dev.ckeditor.com/ticket/11616): [Chrome] Fixed: Resizing the editor while it is not displayed breaks the editable. Fixes also [#9160](s://dev.ckeditor.com/ticket/9160) and [#9715](s://dev.ckeditor.com/ticket/9715).
* [#11376](s://dev.ckeditor.com/ticket/11376): [IE11] Fixed: Loss of text when pasting bulleted lists from Microsoft Word.
* [#13143](s://dev.ckeditor.com/ticket/13143): [Edge] Fixed: Focus lost when opening the panel.
* [#13387](s://dev.ckeditor.com/ticket/13387): [Edge] Fixed: "Permission denied" error thrown when loading the editor with developer tools open.
* [#13574](s://dev.ckeditor.com/ticket/13574): [Edge] Fixed: "Permission denied" error thrown when opening editor dialog windows.
* [#13441](s://dev.ckeditor.com/ticket/13441): [Edge] Fixed: The [Clipboard](s://ckeditor.com/cke4/addon/clipboard) plugin breaks the state of [Undo](s://ckeditor.com/cke4/addon/undo) commands after a paste.
* [#13554](s://dev.ckeditor.com/ticket/13554): [Edge] Fixed: Paste dialog's iframe does not receive focus on show.
* [#13440](s://dev.ckeditor.com/ticket/13440): [Edge] Fixed: Unable to paste a widget.

Other Changes:

* [#13421](s://dev.ckeditor.com/ticket/13421): UX improvements to notifications in the [Auto Embed](s://ckeditor.com/cke4/addon/autoembed) plugin.

## CKEditor 4.5.1

Fixed Issues:

* [#13486](s://dev.ckeditor.com/ticket/13486): Fixed: The [Upload Image](s://ckeditor.com/cke4/addon/uploadimage) plugin should log an error, not throw an error when upload URL is not set.

## CKEditor 4.5

New Features:

* [#13304](s://dev.ckeditor.com/ticket/13304): Added support for passing DOM elements to [`config.sharedSpaces`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-sharedSpaces). Thanks to [Undergrounder](s://github.com/Undergrounder)!
* [#13215](s://dev.ckeditor.com/ticket/13215): Added ability to cancel fetching a resource by the Embed plugins.
* [#13213](s://dev.ckeditor.com/ticket/13213): Added the [`dialog#setState()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dialog.html#method-setState) method and used it in the [Embed](s://ckeditor.com/cke4/addon/embed) dialog to indicate that a resource is being loaded.
* [#13337](s://dev.ckeditor.com/ticket/13337): Added the [`repository.onWidget()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_repository.html#method-onWidget) method &mdash; a convenient way to listen to [widget](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.widget.html) events through the [repository](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.widget.repository.html).
* [#13214](s://dev.ckeditor.com/ticket/13214): Added support for pasting links that convert into embeddable resources on the fly.

Fixed Issues:

* [#13334](s://dev.ckeditor.com/ticket/13334): Fixed: Error after nesting widgets and playing with undo/redo.
* [#13118](s://dev.ckeditor.com/ticket/13118): Fixed: The [`editor.getSelectedHtml()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getSelectedHtml) method throws an error when called in the source mode.
* [#13158](s://dev.ckeditor.com/ticket/13158): Fixed: Error after canceling a dialog when creating a widget.
* [#13197](s://dev.ckeditor.com/ticket/13197): Fixed: Linked inline [Enhanced Image](s://ckeditor.com/cke4/addon/image2) alignment class is not transferred to the widget wrapper.
* [#13199](s://dev.ckeditor.com/ticket/13199): Fixed: [Semantic Embed](s://ckeditor.com/cke4/addon/embedsemantic) does not support widget classes.
* [#13003](s://dev.ckeditor.com/ticket/13003): Fixed: Anchors are uploaded when moving them by drag and drop.
* [#13032](s://dev.ckeditor.com/ticket/13032): Fixed: When upload is done, notification update should be marked as important.
* [#13300](s://dev.ckeditor.com/ticket/13300): Fixed: The `internalCommit` argument in the [Image](s://ckeditor.com/cke4/addon/image) dialog seems to be never used.
* [#13036](s://dev.ckeditor.com/ticket/13036): Fixed: Notifications are moved 10px to the right.
* [#13280](s://dev.ckeditor.com/ticket/13280): [IE8] Fixed: Undo after inline widget drag&drop throws an error.
* [#13186](s://dev.ckeditor.com/ticket/13186): Fixed: Content dropped into a nested editable is not filtered by [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_acf.html).
* [#13140](s://dev.ckeditor.com/ticket/13140): Fixed: Error thrown when dropping a block widget right after itself.
* [#13176](s://dev.ckeditor.com/ticket/13176): [IE8] Fixed: Errors on drag&drop of embed widgets.
* [#13015](s://dev.ckeditor.com/ticket/13015): Fixed: Dropping an image file on [Enhanced Image](s://ckeditor.com/cke4/addon/image2) causes a page reload.
* [#13080](s://dev.ckeditor.com/ticket/13080): Fixed: Ugly notification shown when the response contains HTML content.
* [#13011](s://dev.ckeditor.com/ticket/13011): [IE8] Fixed: Anchors are duplicated on drag&drop in specific locations.
* [#13105](s://dev.ckeditor.com/ticket/13105): Fixed: Various issues related to [`CKEDITOR.tools.htmlEncode()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-htmlEncode) and [`CKEDITOR.tools.htmlDecode()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-htmlDecode) methods.
* [#11976](s://dev.ckeditor.com/ticket/11976): [Chrome] Fixed: Copy&paste and drag&drop lists from Microsoft Word.
* [#13128](s://dev.ckeditor.com/ticket/13128): Fixed: Various issues with cloning element IDs:
  * Fixed the default behavior of [`range.cloneContents()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-cloneContents) and [`range.extractContents()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-extractContents) methods which now clone IDs similarly to their native counterparts.
  * Added `cloneId` arguments to the above methods, [`range.splitBlock()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-splitBlock) and [`element.breakParent()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-breakParent). Mind the default values and special behavior in the `extractContents()` method!
  * Fixed issues where IDs were lost on copy&paste and drag&drop.
* Toolbar configurators:
  * [#13185](s://dev.ckeditor.com/ticket/13185): Fixed: Wrong position of the suggestion box if there is not enough space below the caret.
  * [#13138](s://dev.ckeditor.com/ticket/13138): Fixed: The "Toggle empty elements" button label is unclear.
  * [#13136](s://dev.ckeditor.com/ticket/13136): Fixed: Autocompleter is far too intrusive.
  * [#13133](s://dev.ckeditor.com/ticket/13133): Fixed: Tab leaves the editor.
  * [#13173](s://dev.ckeditor.com/ticket/13173): Fixed: [`config.removeButtons`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-removeButtons) is ignored by the advanced toolbar configurator.

Other Changes:

* [#13119](s://dev.ckeditor.com/ticket/13119): Improved compatibility of editor skins ([Moono](s://ckeditor.com/cke4/addon/moono) and [Kama](s://ckeditor.com/cke4/addon/kama)) with external web page style sheets.
* Toolbar configurators:
  * [#13147](s://dev.ckeditor.com/ticket/13147): Added buttons to the sticky toolbar.
  * [#13207](s://dev.ckeditor.com/ticket/13207): Used modal window to display toolbar configurator help.
* [#13316](s://dev.ckeditor.com/ticket/13316): Made [`CKEDITOR.env.isCompatible`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_env.html#property-isCompatible) a blacklist rather than a whitelist. More about the change in the [Browser Compatibility](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_browsers.html) guide.
* [#13398](s://dev.ckeditor.com/ticket/13398): Renamed `CKEDITOR.fileTools.UploadsRepository` to [`CKEDITOR.fileTools.UploadRepository`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.fileTools.uploadRepository.html) and changed all related properties.
* [#13279](s://dev.ckeditor.com/ticket/13279): Reviewed CSS vendor prefixes.
* [#13454](s://dev.ckeditor.com/ticket/13454): Removed unused `lang.image.alertUrl` token from the [Image](s://ckeditor.com/cke4/addon/image) plugin.

## CKEditor 4.5 Beta

New Features:

* Clipboard (copy&paste, drag&drop) and file uploading features and improvements ([#11437](s://dev.ckeditor.com/ticket/11437)).

  * Major features:
    * Support for dropping and pasting files into the editor was introduced. Through a set of new facades for native APIs it is now possible to easily intercept and process inserted files.
    * [File upload tools](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.fileTools.html) were introduced in order to simplify controlling the loading, uploading and handling server response, properly handle [new upload configuration](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-uploadUrl) options, etc.
    * [Upload Image](s://ckeditor.com/cke4/addon/uploadimage) widget was introduced to upload dropped images. A base class for the [upload widget](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.fileTools.uploadWidgetDefinition.html) was exposed, too, to make it simple to create new types of upload widgets which can handle any type of dropped file, show the upload progress and update the content when the process is done. It also handles editing and undo/redo operations when a file is being uploaded and integrates with the [notification aggregator](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.notificationAggregator.html) to show progress and success or error.
    * All drag and drop operations were integrated with the editor. All dropped content is passed through the [`editor#paste`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-paste) event and a set of new editor events was introduced &mdash; [`dragstart`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-dragstart), [`drop`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-drop), [`dragend`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-dragend).
    * The [Data Transfer](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.clipboard.dataTransfer.html) facade was introduced to unify access to data in various types and files. [Data Transfer](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.clipboard.dataTransfer.html) is now always available in the [`editor#paste`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-paste) event.
    * Switched from the pastebin to using the native clipboard access whenever possible. This solved many issues related to pastebin such as unnecessary scrolling or data loss. Additionally, on copy and cut from the editor the clipboard data is set. Therefore, on paste the editor has access to clean data, undisturbed by the browsers.
    * Drag and drop of inline and block widgets was integrated with the standard clipboard APIs. By listening to drag events you will thus be notified about widgets, too. This opens a possibility to filter pasted and dropped widgets.
    * The [`editor#paste`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-paste) event can have the `range` parameter so it is possible to change the paste position in the listener or paste in the not selectable position. Also the [`editor.insertHtml()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertHtml) method now accepts `range` as an additional parameter.
    * [#11621](s://dev.ckeditor.com/ticket/11621): A configurable [paste filter](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFilter) was introduced. The filter is by default turned to `'semantic-content'` on Webkit and Blink for all pasted content coming from external sources because of the low quality of HTML that these engines put into the clipboard. Internal and cross-editor paste is safe due to the change explained in the previous point.

  * Other changes and related fixes:
    * [#12095](s://dev.ckeditor.com/ticket/12095): On drag and copy of widgets [the same method](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getSelectedHtml) is used to get selected HTML as in the normal case. Thanks to that styles applied to inline widgets are not lost.
    * [#11219](s://dev.ckeditor.com/ticket/11219): Fixed: Dragging a [captioned image](s://ckeditor.com/cke4/addon/image2) does not fire the [`editor#paste`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-paste) event.
    * [#9554](s://dev.ckeditor.com/ticket/9554): [Webkit Mac] Fixed: Editor scrolls on paste.
    * [#9898](s://dev.ckeditor.com/ticket/9898): [Webkit&Divarea] Fixed: Pasting causes undesirable scrolling.
    * [#11993](s://dev.ckeditor.com/ticket/11993): [Chrome] Fixed: Pasting content scrolls the document.
    * [#12613](s://dev.ckeditor.com/ticket/12613): Show the user that they can not drop on editor UI (toolbar, bottom bar).
    * [#12851](s://dev.ckeditor.com/ticket/12851): [Blink/Webkit] Fixed: Formatting disappears when pasting content into cells.
    * [#12914](s://dev.ckeditor.com/ticket/12914): Fixed: Copy/Paste of table broken in `div`-based editor.

  * Browser support.<br>Browser support for related features varies significantly (see ://caniuse.com/clipboard).
    * File APIs needed to operate and file upload is not supported in Internet Explorer 9 and below.
    * Only Chrome and Safari on Mac OS support setting custom data items in the clipboard, so currently it is possible to recognize the origin of the copied content in these browsers only. All drag and drop operations can be identified thanks to the new Data Transfer facade.
    * No Internet Explorer browser supports the standard clipboard API which results in small glitches like where only plain text can be dropped from outside the editor. Thanks to the new Data Transfer facade, internal and cross-editor drag and drop supports the full range of data.
    * Direct access to clipboard could only be implemented in Chrome, Safari on Mac OS, Opera and Firefox. In other browsers the pastebin must still be used.

* [#12875](s://dev.ckeditor.com/ticket/12875): Samples and toolbar configuration tools.
  * The old set of samples shipped with every CKEditor package was replaced with a shiny new single-page sample. This change concluded a long term plan which started from introducing the [CKEditor SDK](s://ckeditor.com/docs/ckeditor4/latest/examples/index.html) and [CKEditor Features Overview](s://ckeditor.com/docs/ckeditor4/latest/features.html) section in the documentation which essentially redefined the old samples.
  * Toolbar configurators with live previews were introduced. They will be shipped with every CKEditor package and are meant to help in configuring toolbar layouts.

* [#10925](s://dev.ckeditor.com/ticket/10925): The [Media Embed](s://ckeditor.com/cke4/addon/embed) and [Semantic Media Embed](s://ckeditor.com/cke4/addon/embedsemantic) plugins were introduced. Read more about the new features in the [Embedding Content](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_media_embed.html) article.
* [#10931](s://dev.ckeditor.com/ticket/10931): Added support for nesting widgets. It is now possible to insert one widget into another widget's nested editable. Note that unless nested editable's [allowed content](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_nestedEditable_definition.html#property-allowedContent) is defined precisely, starting from CKEditor 4.5 some widget buttons may become enabled. This feature is not supported in IE8. Included issues:
  * [#12018](s://dev.ckeditor.com/ticket/12018): Fixed and reviewed: Nested widgets garbage collection.
  * [#12024](s://dev.ckeditor.com/ticket/12024): [Firefox] Fixed: Outline is extended to the left by unpositioned drag handlers.
  * [#12006](s://dev.ckeditor.com/ticket/12006): Fixed: Drag and drop of nested block widgets.
  * [#12008](s://dev.ckeditor.com/ticket/12008): Fixed various cases of inserting a single non-editable element using the [`editor.insertHtml()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertHtml) method. Fixes pasting a widget with a nested editable inside another widget's nested editable.

* Notification system:
  * [#11580](s://dev.ckeditor.com/ticket/11580): Introduced the [notification system](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.notification.html).
  * [#12810](s://dev.ckeditor.com/ticket/12810): Introduced a [notification aggregator](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.notificationAggregator.html) for the [notification system](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.notification.html) which simplifies displaying progress of many concurrent tasks.
* [#11636](s://dev.ckeditor.com/ticket/11636): Introduced new, UX-focused, methods for getting selected HTML and deleting it &mdash; [`editor.getSelectedHtml()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getSelectedHtml) and [`editor.extractSelectedHtml()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-extractSelectedHtml).
* [#12416](s://dev.ckeditor.com/ticket/12416): Added the [`widget.definition.upcastPriority`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-upcastPriority) property which gives more control over widget upcasting order to the widget author.
* [#12036](s://dev.ckeditor.com/ticket/12036): Initialize the editor in [read-only](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) mode when the `<textarea>` element has a `readonly` attribute.
* [#11905](s://dev.ckeditor.com/ticket/11905): The [`resize` event](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-resize) passes the current dimensions in its data.
* [#12126](s://dev.ckeditor.com/ticket/12126): Introduced [`config.image_prefillDimensions`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-image_prefillDimensions) and [`config.image2_prefillDimensions`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-image2_prefillDimensions) to make pre-filling `width` and `height` configurable for the [Enhanced Image](s://ckeditor.com/cke4/addon/image2).
* [#12746](s://dev.ckeditor.com/ticket/12746): Added a new configuration option to hide the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) resizer.
* [#12150](s://dev.ckeditor.com/ticket/12150): Exposed the [`getNestedEditable()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#static-method-getNestedEditable) and `is*` [widget helper](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.widget.html) functions (see the static methods).
* [#12448](s://dev.ckeditor.com/ticket/12448): Introduced the [`editable.insertHtmlIntoRange`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editable.html#method-insertHtmlIntoRange) method.
* [#12143](s://dev.ckeditor.com/ticket/12143): Added the [`config.floatSpacePreferRight`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-floatSpacePreferRight) configuration option that switches the alignment of the floating toolbar. Thanks to [InvisibleBacon](://github.com/InvisibleBacon)!
* [#10986](s://dev.ckeditor.com/ticket/10986): Added support for changing dialog input and textarea text directions by using the *Shift+Alt+Home/End* keystrokes. The direction is stored in the value of the input by prepending the [`\u202A`](://unicode.org/cldr/utility/character.jsp?a=202A) or [`\u202B`](://unicode.org/cldr/utility/character.jsp?a=202B) marker to it. Read more in the [documentation](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dialog_definition_textInput.html#property-bidi). Thanks to [edithkk](s://github.com/edithkk)!
* [#12770](s://dev.ckeditor.com/ticket/12770): Added support for passing [widget](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.widget.html)'s startup data as a widget command's argument. Thanks to [Rebrov Boris](s://github.com/zipp3r) and [Tieme van Veen](s://github.com/tiemevanveen)!
* [#11583](s://dev.ckeditor.com/ticket/11583): Added support for the HTML5 `required` attribute in various form elements. Thanks to [Steven Busse](s://github.com/sbusse)!

Changes:

* [#12858](s://dev.ckeditor.com/ticket/12858): Basic [Spartan](://blogs.windows.com/bloggingwindows/2015/03/30/introducing-project-spartan-the-new-browser-built-for-windows-10/) browser compatibility. Full compatibility will be introduced later, because at the moment Spartan is still too unstable to be used for tests and we see many changes from version to version.
* [#12948](s://dev.ckeditor.com/ticket/12948): The [`config.mathJaxLibrary`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-mathJaxLib) option does not default to the MathJax CDN any more. It needs to be configured to enable the [Mathematical Formulas](s://ckeditor.com/cke4/addon/mathjax) plugin now.
* [#13069](s://dev.ckeditor.com/ticket/13069): Fixed inconsistencies between [`editable.insertHtml()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editable.html#method-insertElement) and [`editable.insertElement()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editable.html#method-insertElement) when the `range` parameter is used. Now, the `editor.insertElement()` method works on a higher level, which means that it saves undo snapshots and sets the selection after insertion. Use the [`editable.insertElementIntoRange()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editable.html#method-insertElementIntoRange) method directly for the pre 4.5 behavior of `editable.insertElement()`.
* [#12870](s://dev.ckeditor.com/ticket/12870): Use [`editor.showNotification()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-showNotification) instead of `alert()` directly whenever possible. When the [Notification plugin](s://ckeditor.com/cke4/addon/notification) is loaded, the notification system is used automatically. Otherwise, the native `alert()` is displayed.
* [#8024](s://dev.ckeditor.com/ticket/8024): Swapped behavior of the Split Cell Vertically and Horizontally features of the [Table Tools](s://ckeditor.com/cke4/addon/tabletools) plugin to be more intuitive. Thanks to [kevinisagit](s://github.com/kevinisagit)!
* [#10903](s://dev.ckeditor.com/ticket/10903): Performance improvements for the [`dom.element.addClass()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-addClass), [`dom.element.removeClass()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-removeClass) and [`dom.element.hasClass()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-hasClass) methods. Note: The previous implementation allowed passing multiple classes to `addClass()` although it was only a side effect of that implementation. The new implementation does not allow this.
* [#11856](s://dev.ckeditor.com/ticket/11856): The jQuery adapter throws a meaningful error if CKEditor or jQuery are not loaded.

Fixed issues:

* [#11586](s://dev.ckeditor.com/ticket/11586): Fixed: [`range.cloneContents()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-cloneContents) should not change the DOM in order not to affect selection.
* [#12148](s://dev.ckeditor.com/ticket/12148): Fixed: [`dom.element.getChild()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-getChild) should not modify a passed array.
* [#12503](s://dev.ckeditor.com/ticket/12503): [Blink/Webkit] Fixed: Incorrect result of Select All and *Backspace* or *Delete*.
* [#13001](s://dev.ckeditor.com/ticket/13001): [Firefox] Fixed: The `<br />` filler is placed in the wrong position by the [`range.fixBlock()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-fixBlock) method due to quirky Firefox behavior.
* [#13101](s://dev.ckeditor.com/ticket/13101): [IE8] Fixed: Colons are prepended to HTML5 element names when cloning them.

## CKEditor 4.4.8

**Security Updates:**

* Fixed XSS vulnerability in the HTML parser reported by [Dheeraj Joshi](s://twitter.com/dheerajhere) and [Prem Kumar](s://twitter.com/iAmPr3m).

	Issue summary: It was possible to execute XSS inside CKEditor after persuading the victim to: (i) switch CKEditor to source mode, then (ii) paste a specially crafted HTML code, prepared by the attacker, into the opened CKEditor source area, and (iii) switch back to WYSIWYG mode.

**An upgrade is highly recommended!**

Fixed Issues:

* [#12899](s://dev.ckeditor.com/ticket/12899): Fixed: Corrected wrong tag ending for horizontal box definition in the [Dialog User Interface](s://ckeditor.com/cke4/addon/dialogui) plugin. Thanks to [mizafish](s://github.com/mizafish)!
* [#13254](s://dev.ckeditor.com/ticket/13254): Fixed: Cannot outdent block after indent when using the [Div Editing Area](s://ckeditor.com/cke4/addon/divarea) plugin. Thanks to [Jonathan Cottrill](s://github.com/jcttrll)!
* [#13268](s://dev.ckeditor.com/ticket/13268): Fixed: Documentation for [`CKEDITOR.dom.text`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.dom.text.html) is incorrect. Thanks to [Ben Kiefer](s://github.com/benkiefer)!
* [#12739](s://dev.ckeditor.com/ticket/12739): Fixed: Link loses inline styles when edited without the [Advanced Tab for Dialogs](s://ckeditor.com/cke4/addon/dialogadvtab) plugin. Thanks to [Віталій Крутько](s://github.com/asmforce)!
* [#13292](s://dev.ckeditor.com/ticket/13292): Fixed: Protection pattern does not work in attribute in self-closing elements with no space before `/>`. Thanks to [Віталій Крутько](s://github.com/asmforce)!
* [PR#192](s://github.com/ckeditor/ckeditor-dev/pull/192): Fixed: Variable name typo in the [Dialog User Interface](s://ckeditor.com/cke4/addon/dialogui) plugin which caused [`CKEDITOR.ui.dialog.radio`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.ui.dialog.radio.html) validation to not work. Thanks to [Florian Ludwig](s://github.com/FlorianLudwig)!
* [#13232](s://dev.ckeditor.com/ticket/13232): [Safari] Fixed: The [`element.appendText()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-appendText) method does not work properly for empty elements.
* [#13233](s://dev.ckeditor.com/ticket/13233): Fixed: [HTMLDataProcessor](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlDataProcessor.html) can process `foo:href` attributes.
* [#12796](s://dev.ckeditor.com/ticket/12796): Fixed: The [Indent List](s://ckeditor.com/cke4/addon/indentlist) plugin unwraps parent `<li>` elements. Thanks to [Andrew Stucki](s://github.com/andrewstucki)!
* [#12885](s://dev.ckeditor.com/ticket/12885): Added missing [`editor.getData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getData) parameter documentation.
* [#11982](s://dev.ckeditor.com/ticket/11982): Fixed: Bullet added in a wrong position after the *Enter* key is pressed in a nested list.
* [#13027](s://dev.ckeditor.com/ticket/13027): Fixed: Keyboard navigation in dialog windows with multiple tabs not following IBM CI 162 instructions or [ARIA Authoring Practices](://www.w3.org/TR/2013/WD-wai-aria-practices-20130307/#tabpanel).
* [#12256](s://dev.ckeditor.com/ticket/12256): Fixed: Basic styles classes are lost when pasting from Microsoft Word if [basic styles](s://ckeditor.com/cke4/addon/basicstyles) were configured to use classes.
* [#12729](s://dev.ckeditor.com/ticket/12729): Fixed: Incorrect structure created when merging a block into a list item on *Backspace* and *Delete*.
* [#13031](s://dev.ckeditor.com/ticket/13031): [Firefox] Fixed: No more line breaks in source view since Firefox 36.
* [#13131](s://dev.ckeditor.com/ticket/13131): Fixed: The [Code Snippet](s://ckeditor.com/cke4/addon/codesnippet) plugin cannot be used without the [IFrame Editing Area](s://ckeditor.com/cke4/addon/wysiwygarea) plugin.
* [#9086](s://dev.ckeditor.com/ticket/9086): Fixed: Invalid ARIA property used on paste area `<iframe>`.
* [#13164](s://dev.ckeditor.com/ticket/13164): Fixed: Error when inserting a hidden field.
* [#13155](s://dev.ckeditor.com/ticket/13155): Fixed: Incorrect [Line Utilities](s://ckeditor.com/cke4/addon/lineutils) positioning when `<body>` has a margin.
* [#13351](s://dev.ckeditor.com/ticket/13351): Fixed: Link lost when editing a linked image with the Link tab disabled. This also fixed a bug when inserting an image into a fully selected link would throw an error ([#12847](s://dev.ckeditor.com/ticket/12847)).
* [#13344](s://dev.ckeditor.com/ticket/13344): [WebKit/Blink] Fixed: It is possible to remove or change editor content in [read-only mode](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_readonly.html).

Other Changes:

* [#12844](s://dev.ckeditor.com/ticket/12844) and [#13103](s://dev.ckeditor.com/ticket/13103): Upgraded the [testing environment](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_tests.html) to [Bender.js](s://github.com/benderjs/benderjs) `0.2.3`.
* [#12930](s://dev.ckeditor.com/ticket/12930): Because of licensing issues, `truncated-mathjax/` is now removed from the `tests/` directory. Now `bender.config.mathJaxLibPath` must be configured manually in order to run [Mathematical Formulas](s://ckeditor.com/cke4/addon/mathjax) plugin tests.
* [#13266](s://dev.ckeditor.com/ticket/13266): Added more shades of gray in the [Color Dialog](s://ckeditor.com/cke4/addon/colordialog) window. Thanks to [mizafish](s://github.com/mizafish)!


## CKEditor 4.4.7

Fixed Issues:

* [#12825](s://dev.ckeditor.com/ticket/12825): Fixed: Preventing the [Table Resize](s://ckeditor.com/cke4/addon/tableresize) plugin from operating on elements outside the editor. Thanks to [Paul Martin](s://github.com/Paul-Martin)!
* [#12157](s://dev.ckeditor.com/ticket/12157): Fixed: Lost text formatting on pressing *Tab* when the [`config.tabSpaces`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-tabSpaces) configuration option value was greater than zero.
* [#12777](s://dev.ckeditor.com/ticket/12777): Fixed: The `table-layout` CSS property should be reset by skins. Thanks to [vita10gy](s://github.com/vita10gy)!
* [#12812](s://dev.ckeditor.com/ticket/12812): Fixed: An uncaught security exception is thrown when [Line Utilities](s://ckeditor.com/cke4/addon/lineutils) are used in an inline editor loaded in a cross-domain `iframe`. Thanks to [Vitaliy Zurian](s://github.com/thecatontheflat)!
* [#12735](s://dev.ckeditor.com/ticket/12735): Fixed: [`config.fillEmptyBlocks`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-fillEmptyBlocks) should only apply when outputting data.
* [#10032](s://dev.ckeditor.com/ticket/10032): Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) filter is executed for every paste after using the button.
* [#12597](s://dev.ckeditor.com/ticket/12597): [Blink/WebKit] Fixed: Multi-byte Japanese characters entry not working properly after *Shift+Enter*.
* [#12387](s://dev.ckeditor.com/ticket/12387): Fixed: An error is thrown if a skin does not have the [`chameleon`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_skin.html#method-chameleon) property defined and [`config.uiColor`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-uiColor) is defined.
* [#12747](s://dev.ckeditor.com/ticket/12747): [IE8-10] Fixed: Opening a drop-down for a specific selection when the editor is maximized results in incorrect drop-down panel position.
* [#12850](s://dev.ckeditor.com/ticket/12850): [IEQM] Fixed: An error is thrown after focusing the editor.

## CKEditor 4.4.6

**Security Updates:**

* Fixed XSS vulnerability in the HTML parser reported by [Maco Cortes](s://www.facebook.com/Maaacoooo).

	Issue summary: It was possible to execute XSS inside CKEditor after persuading the victim to: (i) switch CKEditor to source mode, then (ii) paste a specially crafted HTML code, prepared by the attacker, into the opened CKEditor source area, and (iii) switch back to WYSIWYG mode.

**An upgrade is highly recommended!**

New Features:

* [#12501](s://dev.ckeditor.com/ticket/12501): Allowed dashes in element names in the [string format of allowed content rules](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_allowed_content_rules.html#string-format).
* [#12550](s://dev.ckeditor.com/ticket/12550): Added the `<main>` element to the [`CKEDITOR.dtd`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.dtd.html).

Fixed Issues:

* [#12506](s://dev.ckeditor.com/ticket/12506): [Safari] Fixed: Cannot paste into inline editor if the page has `user-select: none` style. Thanks to [shaohua](s://github.com/shaohua)!
* [#12683](s://dev.ckeditor.com/ticket/12683): Fixed: [Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_acf.html) fails to remove custom tags. Thanks to [timselier](s://github.com/timselier)!
* [#12489](s://dev.ckeditor.com/ticket/12489) and [#12491](s://dev.ckeditor.com/ticket/12491): Fixed: Various issues related to restoring the selection after performing operations on filler character. See the [fixed cases](s://dev.ckeditor.com/ticket/12491#comment:4).
* [#12621](s://dev.ckeditor.com/ticket/12621): Fixed: Cannot remove inline styles (bold, italic, etc.) in empty lines.
* [#12630](s://dev.ckeditor.com/ticket/12630): [Chrome] Fixed: Selection is placed outside the paragraph when the [New Page](s://ckeditor.com/cke4/addon/newpage) button is clicked. This patch significantly simplified the way how the initial selection (a selection after the content of the editable is overwritten) is being fixed. That might have fixed many related scenarios in all browsers.
* [#11647](s://dev.ckeditor.com/ticket/11647): Fixed: The [`editor.blur`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-blur) event is not fired on first blur after initializing the inline editor on an already focused element.
* [#12601](s://dev.ckeditor.com/ticket/12601): Fixed: [Strikethrough](s://ckeditor.com/cke4/addon/basicstyles) button tooltip spelling.
* [#12546](s://dev.ckeditor.com/ticket/12546): Fixed: The Preview tab in the [Document Properties](s://ckeditor.com/cke4/addon/docprops) dialog window is always disabled.
* [#12300](s://dev.ckeditor.com/ticket/12300): Fixed: The [`editor.change`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-change) event fired on first navigation key press after typing.
* [#12141](s://dev.ckeditor.com/ticket/12141): Fixed: List items are lost when indenting a list item with content wrapped with a block element.
* [#12515](s://dev.ckeditor.com/ticket/12515): Fixed: Cursor is in the wrong position when undoing after adding an image and typing some text.
* [#12484](s://dev.ckeditor.com/ticket/12484): [Blink/WebKit] Fixed: DOM is changed outside the editor area in a certain case.
* [#12688](s://dev.ckeditor.com/ticket/12688): Improved the tests of the [styles system](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.style.html) and fixed two minor issues.
* [#12403](s://dev.ckeditor.com/ticket/12403): Fixed: Changing the [font](s://ckeditor.com/cke4/addon/font) style should not lead to nesting it in the previous style element.
* [#12609](s://dev.ckeditor.com/ticket/12609): Fixed: Incorrect `config.magicline_putEverywhere` name used for a [Magic Line](s://ckeditor.com/cke4/addon/magicline) all-encompassing [`config.magicline_everywhere`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-magicline_everywhere) configuration option.


## CKEditor 4.4.5

New Features:

* [#12279](s://dev.ckeditor.com/ticket/12279): Added a possibility to pass a custom evaluator to [`node.getAscendant()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_node.html#method-getAscendant).

Fixed Issues:

* [#12423](s://dev.ckeditor.com/ticket/12423): [Safari7.1+] Fixed: *Enter* key moved cursor to a strange position.
* [#12381](s://dev.ckeditor.com/ticket/12381): [iOS] Fixed: Selection issue. Thanks to [Remiremi](s://github.com/Remiremi)!
* [#10804](s://dev.ckeditor.com/ticket/10804): Fixed: `CKEDITOR_GETURL` is not used with some plugins where it should be used. Thanks to [Thomas Andraschko](s://github.com/tandraschko)!
* [#9137](s://dev.ckeditor.com/ticket/9137): Fixed: The `<base>` tag is not created when `<head>` has an attribute. Thanks to [naoki.fujikawa](s://github.com/naoki-fujikawa)!
* [#12377](s://dev.ckeditor.com/ticket/12377): Fixed: Errors thrown in the [Image](s://ckeditor.com/cke4/addon/image) plugin when removing preview from the dialog window definition. Thanks to [Axinet](s://github.com/Axinet)!
* [#12162](s://dev.ckeditor.com/ticket/12162): Fixed: Auto paragraphing and *Enter* key in nested editables.
* [#12315](s://dev.ckeditor.com/ticket/12315): Fixed: Marked [`config.autoParagraph`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-autoParagraph) as deprecated.
* [#12113](s://dev.ckeditor.com/ticket/12113): Fixed: A [code snippet](s://ckeditor.com/cke4/addon/codesnippet) should be presented in the [elements path](s://ckeditor.com/cke4/addon/elementspath) as "code snippet" (translatable).
* [#12311](s://dev.ckeditor.com/ticket/12311): Fixed: [Remove Format](s://ckeditor.com/cke4/addon/removeformat) should also remove `<cite>` elements.
* [#12261](s://dev.ckeditor.com/ticket/12261): Fixed: The filter is not destroyed and removed from [`CKEDITOR.filter.instances`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_filter.html#static-property-instances) on editor destroy.
* [#12398](s://dev.ckeditor.com/ticket/12398): Fixed: [Maximize](s://ckeditor.com/cke4/addon/maximize) does not work on an instance without a [title](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-title).
* [#12097](s://dev.ckeditor.com/ticket/12097): Fixed: JAWS not reading the number of options correctly in the [Text Color and Background Color](s://ckeditor.com/cke4/addon/colorbutton) button menu.
* [#12411](s://dev.ckeditor.com/ticket/12411): Fixed: [Page Break](s://ckeditor.com/cke4/addon/pagebreak) used directly in the editable breaks the editor.
* [#12354](s://dev.ckeditor.com/ticket/12354): Fixed: Various issues in undo manager when holding keys.
* [#12324](s://dev.ckeditor.com/ticket/12324): [IE8] Fixed: Undo steps are not recorded when changing the caret position by clicking below the body.
* [#12332](s://dev.ckeditor.com/ticket/12332): Fixed: Lowered DOM events listeners' priorities in undo manager in order to avoid ambiguity.
* [#12402](s://dev.ckeditor.com/ticket/12402): [Blink] Fixed: Workaround for Blink bug with `document.title` which breaks updating title in the full HTML mode.
* [#12338](s://dev.ckeditor.com/ticket/12338): Fixed: The CKEditor package contains unoptimized images.


## CKEditor 4.4.4

Fixed Issues:

* [#12268](s://dev.ckeditor.com/ticket/12268): Cleanup of [UI Color](s://ckeditor.com/cke4/addon/uicolor) YUI styles. Thanks to [CasherWest](s://github.com/CasherWest)!
* [#12263](s://dev.ckeditor.com/ticket/12263): Fixed: [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) filter does not properly normalize semicolons style text. Thanks to [Alin Purcaru](s://github.com/mesmerizero)!
* [#12243](s://dev.ckeditor.com/ticket/12243): Fixed: Text formatting lost when pasting from Word. Thanks to [Alin Purcaru](s://github.com/mesmerizero)!
* [#111739](s://dev.ckeditor.com/ticket/11739): Fixed: `keypress` listeners should not be used in the undo manager. A complete rewrite of keyboard handling in the undo manager was made. Numerous smaller issues were fixed, among others:
  * [#10926](s://dev.ckeditor.com/ticket/10926): [Chrome@Android] Fixed: Typing does not record snapshots and does not fire the [`editor.change`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-change) event.
  * [#11611](s://dev.ckeditor.com/ticket/11611): [Firefox] Fixed: The [`editor.change`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-change) event is fired when pressing Arrow keys.
  * [#12219](s://dev.ckeditor.com/ticket/12219): [Safari] Fixed: Some modifications of the [`UndoManager.locked`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_undo_UndoManager.html#property-locked) property violate strict mode in the [Undo](s://ckeditor.com/cke4/addon/undo) plugin.
* [#10916](s://dev.ckeditor.com/ticket/10916): Fixed: [Magic Line](s://ckeditor.com/cke4/addon/magicline) icon in Right-To-Left environments.
* [#11970](s://dev.ckeditor.com/ticket/11970): [IE] Fixed: CKEditor `paste` event is not fired when pasting with *Shift+Ins*.
* [#12111](s://dev.ckeditor.com/ticket/12111): Fixed: Linked image attributes are not read when opening the image dialog window by doubleclicking.
* [#10030](s://dev.ckeditor.com/ticket/10030): [IE] Fixed: Prevented "Unspecified Error" thrown in various cases when IE8-9 does not allow access to `document.activeElement`.
* [#12273](s://dev.ckeditor.com/ticket/12273): Fixed: Applying block style in a description list breaks it.
* [#12218](s://dev.ckeditor.com/ticket/12218): Fixed: Minor syntax issue in CSS files.
* [#12178](s://dev.ckeditor.com/ticket/12178): [Blink/WebKit] Fixed: Iterator does not return the block if the selection is located at the end of it.
* [#12185](s://dev.ckeditor.com/ticket/12185): [IE9QM] Fixed: Error thrown when moving the mouse over focused editor's scrollbar.
* [#12215](s://dev.ckeditor.com/ticket/12215): Fixed: Basepath resolution does not recognize semicolon as a query separator.
* [#12135](s://dev.ckeditor.com/ticket/12135): Fixed: [Remove Format](s://ckeditor.com/cke4/addon/removeformat) does not work on widgets.
* [#12298](s://dev.ckeditor.com/ticket/12298): [IE11] Fixed: Clicking below `<body>` in Compatibility Mode will no longer reset selection to the first line.
* [#12204](s://dev.ckeditor.com/ticket/12204): Fixed: Editor's voice label is not affected by [`config.title`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-title).
* [#11915](s://dev.ckeditor.com/ticket/11915): Fixed: With [SCAYT](s://ckeditor.com/cke4/addon/scayt) enabled, cursor moves to the beginning of the first highlighted, misspelled word after typing or pasting into the editor.
* [SCAYT](s://github.com/WebSpellChecker/ckeditor-plugin-scayt/issues/69): Fixed: Error thrown in the console after enabling [SCAYT](s://ckeditor.com/cke4/addon/scayt) and trying to add a new image.


Other Changes:

* [#12296](s://dev.ckeditor.com/ticket/12296): Merged `benderjs-ckeditor` into the main CKEditor repository.

## CKEditor 4.4.3

**Security Updates:**

* Fixed XSS vulnerability in the Preview plugin reported by Mario Heiderich of [Cure53](s://cure53.de/).

**An upgrade is highly recommended!**

New Features:

* [#12164](s://dev.ckeditor.com/ticket/12164): Added the "Justify" option to the "Horizontal Alignment" drop-down in the Table Cell Properties dialog window.

Fixed Issues:

* [#12110](s://dev.ckeditor.com/ticket/12110): Fixed: Editor crash after deleting a table. Thanks to [Alin Purcaru](s://github.com/mesmerizero)!
* [#11897](s://dev.ckeditor.com/ticket/11897): Fixed: *Enter* key used in an empty list item creates a new line instead of breaking the list. Thanks to [noam-si](s://github.com/noam-si)!
* [#12140](s://dev.ckeditor.com/ticket/12140): Fixed: Double-clicking linked widgets opens two dialog windows.
* [#12132](s://dev.ckeditor.com/ticket/12132): Fixed: Image is inserted with `width` and `height` styles even when they are not allowed.
* [#9317](s://dev.ckeditor.com/ticket/9317): [IE] Fixed: [`config.disableObjectResizing`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-disableObjectResizing) does not work on IE. **Note**: We were not able to fix this issue on IE11+ because necessary events stopped working. See a [last resort workaround](s://dev.ckeditor.com/ticket/9317#comment:16) and make sure to [support our complaint to Microsoft](s://connect.microsoft.com/IE/feedback/details/742593/please-respect-execcommand-enableobjectresizing-in-contenteditable-elements).
* [#9638](s://dev.ckeditor.com/ticket/9638): Fixed: There should be no information about accessibility help available under the *Alt+0* keyboard shortcut if the [Accessibility Help](s://ckeditor.com/cke4/addon/a11yhelp) plugin is not available.
* [#8117](s://dev.ckeditor.com/ticket/8117) and [#9186](s://dev.ckeditor.com/ticket/9186): Fixed: In HTML5 `<meta>` tags should be allowed everywhere, including inside the `<body>` element.
* [#10422](s://dev.ckeditor.com/ticket/10422): Fixed: [`config.fillEmptyBlocks`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-fillEmptyBlocks) not working properly if a function is specified.

## CKEditor 4.4.2

Important Notes:

* The CKEditor testing environment is now publicly available. Read more about how to set up the environment and execute tests in the [CKEditor Testing Environment](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_tests.html) guide.
	Please note that the [`tests/`](s://github.com/ckeditor/ckeditor-dev/tree/master/tests) directory which contains editor tests is not available in release packages. It can only be found in the development version of CKEditor on [GitHub](s://github.com/ckeditor/ckeditor-dev/).

New Features:

* [#11909](s://dev.ckeditor.com/ticket/11909): Introduced a parameter to prevent the [`editor.setData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-setData) method from recording undo snapshots.

Fixed Issues:

* [#11757](s://dev.ckeditor.com/ticket/11757): Fixed: Imperfections in the [Moono](s://ckeditor.com/cke4/addon/moono) skin. Thanks to [danyaPostfactum](s://github.com/danyaPostfactum)!
* [#10091](s://dev.ckeditor.com/ticket/10091): Blockquote should be treated like an object by the styles system. Thanks to [dan-james-deeson](s://github.com/dan-james-deeson)!
* [#11478](s://dev.ckeditor.com/ticket/11478): Fixed: Issue with passing jQuery objects to [adapter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_jquery.html) configuration.
* [#10867](s://dev.ckeditor.com/ticket/10867): Fixed: Issue with setting encoded URI as image link.
* [#11983](s://dev.ckeditor.com/ticket/11983): Fixed: Clicking a nested widget does not focus it. Additionally, performance of the [`widget.repository.getByElement()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_repository.html#method-getByElement) method was improved.
* [#12000](s://dev.ckeditor.com/ticket/12000): Fixed: Nested widgets should be initialized on [`editor.setData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-setData) and [`nestedEditable.setData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_nestedEditable.html#method-setData).
* [#12022](s://dev.ckeditor.com/ticket/12022): Fixed: Outer widget's drag handler is not created at all if it has any nested widgets inside.
* [#11960](s://dev.ckeditor.com/ticket/11960): [Blink/WebKit] Fixed: The caret should be scrolled into view on *Backspace* and *Delete* (covers only the merging blocks case).
* [#11306](s://dev.ckeditor.com/ticket/11306): [OSX][Blink/WebKit] Fixed: No widget entries in the context menu on widget right-click.
* [#11957](s://dev.ckeditor.com/ticket/11957): Fixed: Alignment labels in the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) dialog window are not translated.
* [#11980](s://dev.ckeditor.com/ticket/11980): [Blink/WebKit] Fixed: `<span>` elements created when joining adjacent elements (non-collapsed selection).
* [#12009](s://dev.ckeditor.com/ticket/12009): [Nested widgets] Integration with the [Magic Line](s://ckeditor.com/cke4/addon/magicline) plugin.
* [#11387](s://dev.ckeditor.com/ticket/11387): Fixed: `role="radiogroup"` should be applied only to radio inputs' container.
* [#7975](s://dev.ckeditor.com/ticket/7975): [IE8] Fixed: Errors when trying to select an empty table cell.
* [#11947](s://dev.ckeditor.com/ticket/11947): [Firefox+IE11] Fixed: *Shift+Enter* in lists produces two line breaks.
* [#11972](s://dev.ckeditor.com/ticket/11972): Fixed: Feature detection in the [`element.setText()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-setText) method should not trigger the layout engine.
* [#7634](s://dev.ckeditor.com/ticket/7634): Fixed: The [Flash Dialog](s://ckeditor.com/cke4/addon/flash) plugin omits the `allowFullScreen` parameter in the editor data if set to `true`.
* [#11910](s://dev.ckeditor.com/ticket/11910): Fixed: [Enhanced Image](s://ckeditor.com/cke4/addon/image2) does not take [`config.baseHref`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-baseHref) into account when updating image dimensions.
* [#11753](s://dev.ckeditor.com/ticket/11753): Fixed: Wrong [`checkDirty()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-checkDirty) method value after focusing or blurring a widget.
* [#11830](s://dev.ckeditor.com/ticket/11830): Fixed: Impossible to pass some arguments to [CKBuilder](s://github.com/ckeditor/ckbuilder) when using the `/dev/builder/build.sh` script.
* [#11945](s://dev.ckeditor.com/ticket/11945): Fixed: [Form Elements](s://ckeditor.com/cke4/addon/forms) plugin should not change a core method.
* [#11384](s://dev.ckeditor.com/ticket/11384): [IE9+] Fixed: `IndexSizeError` thrown when pasting into a non-empty selection anchored in one text node.

## CKEditor 4.4.1

New Features:

* [#9661](s://dev.ckeditor.com/ticket/9661): Added the option to [configure](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-linkJavaScriptLinksAllowed) anchor tags with JavaScript code in the `href` attribute.

Fixed Issues:

* [#11861](s://dev.ckeditor.com/ticket/11861): [WebKit/Blink] Fixed: Span elements created while joining adjacent elements. **Note:** This patch only covers cases when *Backspace* or *Delete* is pressed on a collapsed (empty) selection. The remaining case, with a non-empty selection, will be fixed in the next release.
* [#10714](s://dev.ckeditor.com/ticket/10714): [iOS] Fixed: Selection and drop-downs are broken if a touch event listener is used due to a [WebKit bug](s://bugs.webkit.org/show_bug.cgi?id=128924). Thanks to [Arty Gus](s://github.com/artygus)!
* [#11911](s://dev.ckeditor.com/ticket/11911): Fixed setting the `dir` attribute for a preloaded language in [CKEDITOR.lang](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.lang.html). Thanks to [Akash Mohapatra](s://github.com/akashmohapatra)!
* [#11926](s://dev.ckeditor.com/ticket/11926): Fixed: [Code Snippet](s://ckeditor.com/cke4/addon/codesnippet) does not decode HTML entities when loading code from the `<code>` element.
* [#11223](s://dev.ckeditor.com/ticket/11223): Fixed: Issue when [Protected Source](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-protectedSource) was not working in the `<title>` element.
* [#11859](s://dev.ckeditor.com/ticket/11859): Fixed: Removed the [Source Dialog](s://ckeditor.com/cke4/addon/sourcedialog) plugin dependency from the [Code Snippet](s://ckeditor.com/cke4/addon/codesnippet) sample.
* [#11754](s://dev.ckeditor.com/ticket/11754): [Chrome] Fixed: Infinite loop when content includes not closed attributes.
* [#11848](s://dev.ckeditor.com/ticket/11848): [IE] Fixed: [`editor.insertElement()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertElement) throwing an exception when there was no selection in the editor.
* [#11801](s://dev.ckeditor.com/ticket/11801): Fixed: Editor anchors unavailable when linking the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) widget.
* [#11626](s://dev.ckeditor.com/ticket/11626): Fixed: [Table Resize](s://ckeditor.com/cke4/addon/tableresize) sets invalid column width.
* [#11872](s://dev.ckeditor.com/ticket/11872): Made [`element.addClass()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-addClass) chainable symmetrically to [`element.removeClass()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-removeClass).
* [#11813](s://dev.ckeditor.com/ticket/11813): Fixed: Link lost while pasting a captioned image and restoring an undo snapshot ([Enhanced Image](s://ckeditor.com/cke4/addon/image2)).
* [#11814](s://dev.ckeditor.com/ticket/11814): Fixed: _Link_ and _Unlink_ entries persistently displayed in the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) context menu.
* [#11839](s://dev.ckeditor.com/ticket/11839): [IE9] Fixed: The caret jumps out of the editable area when resizing the editor in the source mode.
* [#11822](s://dev.ckeditor.com/ticket/11822): [WebKit] Fixed: Editing anchors by double-click is broken in some cases.
* [#11823](s://dev.ckeditor.com/ticket/11823): [IE8] Fixed: [Table Resize](s://ckeditor.com/cke4/addon/tableresize) throws an error over scrollbar.
* [#11788](s://dev.ckeditor.com/ticket/11788): Fixed: It is not possible to change the language back to _Not set_ in the [Code Snippet](s://ckeditor.com/cke4/addon/codesnippet) dialog window.
* [#11788](s://dev.ckeditor.com/ticket/11788): Fixed: [Filter](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlParser.filter.html) rules are not applied inside elements with the `contenteditable` attribute set to `true`.
* [#11798](s://dev.ckeditor.com/ticket/11798): Fixed: Inserting a non-editable element inside a table cell breaks the table.
* [#11793](s://dev.ckeditor.com/ticket/11793): Fixed: Drop-down is not "on" when clicking it while the editor is blurred.
* [#11850](s://dev.ckeditor.com/ticket/11850): Fixed: Fake objects with the `contenteditable` attribute set to `false` are not downcasted properly.
* [#11811](s://dev.ckeditor.com/ticket/11811): Fixed: Widget's data is not encoded correctly when passed to an attribute.
* [#11777](s://dev.ckeditor.com/ticket/11777): Fixed encoding ampersand in the [Mathematical Formulas](s://ckeditor.com/cke4/addon/mathjax) plugin.
* [#11880](s://dev.ckeditor.com/ticket/11880): [IE8-9] Fixed: Linked image has a default thick border.

Other Changes:

* [#11807](s://dev.ckeditor.com/ticket/11807): Updated jQuery version used in the sample to 1.11.0 and tested CKEditor jQuery Adapter with version 1.11.0 and 2.1.0.
* [#9504](s://dev.ckeditor.com/ticket/9504): Stopped using deprecated `attribute.specified` in all browsers except Internet Explorer.
* [#11809](s://dev.ckeditor.com/ticket/11809): Changed tab size in `<pre>` to 4 spaces.

## CKEditor 4.4

**Important Notes:**

* Marked the [`editor.beforePaste`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-beforePaste) event as deprecated.
* The default class of captioned images has changed to `image` (was: `caption`). Please note that once edited in CKEditor 4.4+, all existing images of the `caption` class (`<figure class="caption">`) will be [filtered out](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html) unless the [`config.image2_captionedClass`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-image2_captionedClass) option is set to `caption`. For backward compatibility (i.e. when upgrading), it is highly recommended to use this setting, which also helps prevent CSS conflicts, etc. This does not apply to new CKEditor integrations.
* Widgets without defined buttons are no longer registered automatically to the [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html). Before CKEditor 4.4 widgets were registered to the ACF which was an incorrect behavior ([#11567](s://dev.ckeditor.com/ticket/11567)). This change should not have any impact on standard scenarios, but if your button does not execute the widget command, you need to set [`allowedContent`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_feature.html#property-allowedContent) and [`requiredContent`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_feature.html#property-requiredContent) properties for it manually, because the editor will not be able to find them.
* The [Show Borders](s://ckeditor.com/cke4/addon/showborders) plugin was added to the Standard installation package in order to ensure that unstyled tables are still visible for the user ([#11665](s://dev.ckeditor.com/ticket/11665)).
* Since CKEditor 4.4 the editor instance should be passed to [`CKEDITOR.style`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.style.html) methods to ensure full compatibility with other features (e.g. applying styles to widgets requires that). We ensured backward compatibility though, so the [`CKEDITOR.style`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.style.html) will work even when the editor instance is not provided.

New Features:

* [#11297](s://dev.ckeditor.com/ticket/11297): Styles can now be applied to widgets. The definition of a style which can be applied to a specific widget must contain two additional properties &mdash; `type` and `widget`. Read more in the [Widget Styles](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_styles.html#widget-styles) section of the "Syles Drop-down" guide. Note that by default, widgets support only classes and no other attributes or styles. Related changes and features:
  * Introduced the [`CKEDITOR.style.addCustomHandler()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_style.html#static-method-addCustomHandler) method for registering custom style handlers.
  * The [`CKEDITOR.style.apply()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_style.html#method-apply) and [`CKEDITOR.style.remove()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_style.html#method-remove) methods are now called with an editor instance instead of the document so they can be reused by the [`CKEDITOR.editor.applyStyle()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-applyStyle) and [`CKEDITOR.editor.removeStyle()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-removeStyle) methods. Backward compatibility was preserved, but from CKEditor 4.4 it is highly recommended to pass an editor instead of a document to these methods.
  * Many new methods and properties were introduced in the [Widget API](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.widget.html) to make the handling of styles by widgets fully customizable. See: [`widget.definition.styleableElements`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-styleableElements), [`widget.definition.styleToAllowedContentRule`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-styleToAllowedContentRules), [`widget.addClass()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#method-addClass), [`widget.removeClass()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#method-removeClass), [`widget.getClasses()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#method-getClasses), [`widget.hasClass()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#method-hasClass), [`widget.applyStyle()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#method-applyStyle), [`widget.removeStyle()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#method-removeStyle), [`widget.checkStyleActive()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#method-checkStyleActive).
  * Integration with the [Allowed Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html) required an introduction of the [`CKEDITOR.style.toAllowedContent()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_style.html#method-toAllowedContentRules) method which can be implemented by the custom style handler and if exists, it is used by the [`CKEDITOR.filter`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.filter.html) to translate a style to [allowed content rules](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.filter.allowedContentRules.html).
* [#11300](s://dev.ckeditor.com/ticket/11300): Various changes in the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) plugin:
  * Introduced the [`config.image2_captionedClass`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-image2_captionedClass) option to configure the class of captioned images.
  * Introduced the [`config.image2_alignClasses`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-image2_alignClasses) option to configure the way images are aligned with CSS classes.
  If this setting is defined, the editor produces classes instead of inline styles for aligned images.
  * Default image caption can be translated (customized) with the `editor.lang.image2.captionPlaceholder` string.
* [#11341](s://dev.ckeditor.com/ticket/11341): [Enhanced Image](s://ckeditor.com/cke4/addon/image2) plugin: It is now possible to add a link to any image type.
* [#10202](s://dev.ckeditor.com/ticket/10202): Introduced wildcard support in the [Allowed Content Rules](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_allowed_content_rules.html) format.
* [#10276](s://dev.ckeditor.com/ticket/10276): Introduced blacklisting in the [Allowed Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html).
* [#10480](s://dev.ckeditor.com/ticket/10480): Introduced code snippets with code highlighting. There are two versions available so far &mdash; the default [Code Snippet](s://ckeditor.com/cke4/addon/codesnippet) which uses the [highlight.js](://highlightjs.org) library and the [Code Snippet GeSHi](s://ckeditor.com/cke4/addon/codesnippetgeshi) which uses the [GeSHi](://qbnz.com/highlighter/) library.
* [#11737](s://dev.ckeditor.com/ticket/11737): Introduced an option to prevent [filtering](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html) of an element that matches custom criteria (see [`filter.addElementCallback()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_filter.html#method-addElementCallback)).
* [#11532](s://dev.ckeditor.com/ticket/11532): Introduced the [`editor.addContentsCss()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-addContentsCss) method that can be used for [adding custom CSS files](s://ckeditor.com/docs/ckeditor4/latest/guide/plugin_sdk_styles.html).
* [#11536](s://dev.ckeditor.com/ticket/11536): Added the [`CKEDITOR.tools.htmlDecode()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-htmlDecode) method for decoding HTML entities.
* [#11225](s://dev.ckeditor.com/ticket/11225): Introduced the [`CKEDITOR.tools.transparentImageData`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#property-transparentImageData) property which contains transparent image data to be used in CSS or as image source.

Other Changes:

* [#11377](s://dev.ckeditor.com/ticket/11377): Unified internal representation of empty anchors using the [fake objects](s://ckeditor.com/cke4/addon/fakeobjects).
* [#11422](s://dev.ckeditor.com/ticket/11422): Removed Firefox 3.x, Internet Explorer 6 and Opera 12.x leftovers in code.
* [#5217](s://dev.ckeditor.com/ticket/5217): Setting data (including switching between modes) creates a new undo snapshot. Besides that:
  * Introduced the [`editable.status`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editable.html#property-status) property.
  * Introduced a new `forceUpdate` option for the [`editor.lockSnapshot`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-lockSnapshot) event.
  * Fixed: Selection not being unlocked in inline editor after setting data ([#11500](s://dev.ckeditor.com/ticket/11500)).
* The [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) plugin was updated to the latest version.

Fixed Issues:

* [#10190](s://dev.ckeditor.com/ticket/10190): Fixed: Removing block style with [`editor.removeStyle()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-removeStyle) should result in a paragraph and not a div.
* [#11727](s://dev.ckeditor.com/ticket/11727): Fixed: The editor tries to select a non-editable image which was clicked.

## CKEditor 4.3.5

New Features:

* Added new translation: Tatar.

Fixed Issues:

* [#11677](s://dev.ckeditor.com/ticket/11677): Fixed: Undo/Redo keystrokes are blocked in the source mode.
* [#11717](s://dev.ckeditor.com/ticket/11717): [Document Properties](s://ckeditor.com/cke4/addon/docprops) plugin requires the [Color Dialog](s://ckeditor.com/cke4/addon/colordialog) plugin to work.

## CKEditor 4.3.4

Fixed Issues:

* [#11597](s://dev.ckeditor.com/ticket/11597): [IE11] Fixed: Error thrown when trying to open the [preview](s://ckeditor.com/cke4/addon/preview) using the keyboard.
* [#11544](s://dev.ckeditor.com/ticket/11544): [Placeholders](s://ckeditor.com/cke4/addon/placeholder) will no longer be upcasted in parents not accepting `<span>` elements.
* [#8663](s://dev.ckeditor.com/ticket/8663): Fixed [`element.renameNode()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-renameNode) not clearing the [`element.getName()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_element.html#method-getName) cache.
* [#11574](s://dev.ckeditor.com/ticket/11574): Fixed: *Backspace* destroying the DOM structure if an inline editable is placed in a list item.
* [#11603](s://dev.ckeditor.com/ticket/11603): Fixed: [Table Resize](s://ckeditor.com/cke4/addon/tableresize) attaches to tables outside the editable.
* [#9205](s://dev.ckeditor.com/ticket/9205), [#7805](s://dev.ckeditor.com/ticket/7805), [#8216](s://dev.ckeditor.com/ticket/8216): Fixed: `{cke_protected_1}` appearing in data in various cases where HTML comments are placed next to `"` or `'`.
* [#11635](s://dev.ckeditor.com/ticket/11635): Fixed: Some attributes are not protected before the content is passed through the fix bin.
* [#11660](s://dev.ckeditor.com/ticket/11660): [IE] Fixed: Table content is lost when some extra markup is inside the table.
* [#11641](s://dev.ckeditor.com/ticket/11641): Fixed: Switching between modes in the classic editor removes content styles for the inline editor.
* [#11568](s://dev.ckeditor.com/ticket/11568): Fixed: [Styles](s://ckeditor.com/cke4/addon/stylescombo) drop-down list is not enabled on selection change.

## CKEditor 4.3.3

Fixed Issues:

* [#11500](s://dev.ckeditor.com/ticket/11500): [WebKit/Blink] Fixed: Selection lost when setting data in another inline editor. Additionally, [`selection.removeAllRanges()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_selection.html#method-removeAllRanges) is now scoped to selection's [root](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_selection.html#property-root).
* [#11104](s://dev.ckeditor.com/ticket/11104): [IE] Fixed: Various issues with scrolling and selection when focusing widgets.
* [#11487](s://dev.ckeditor.com/ticket/11487): Moving mouse over the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) widget will no longer change the value returned by the [`editor.checkDirty()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-checkDirty) method.
* [#8673](s://dev.ckeditor.com/ticket/8673): [WebKit] Fixed: Cannot select and remove the [Page Break](s://ckeditor.com/cke4/addon/pagebreak).
* [#11413](s://dev.ckeditor.com/ticket/11413): Fixed: Incorrect [`editor.execCommand()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-execCommand) behavior.
* [#11438](s://dev.ckeditor.com/ticket/11438): Splitting table cells vertically is no longer changing table structure.
* [#8899](s://dev.ckeditor.com/ticket/8899): Fixed: Links in the [About CKEditor](s://ckeditor.com/cke4/addon/about) dialog window now open in a new browser window or tab.
* [#11490](s://dev.ckeditor.com/ticket/11490): Fixed: [Menu button](s://ckeditor.com/cke4/addon/menubutton) panel not showing in the source mode.
* [#11417](s://dev.ckeditor.com/ticket/11417): The [`widget.doubleclick`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget.html#event-doubleclick) event is not canceled anymore after editing was triggered.
* [#11253](s://dev.ckeditor.com/ticket/11253): [IE] Fixed: Clipped upload button in the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) dialog window.
* [#11359](s://dev.ckeditor.com/ticket/11359): Standardized the way anchors are discovered by the [Link](s://ckeditor.com/cke4/addon/link) plugin.
* [#11058](s://dev.ckeditor.com/ticket/11058): [IE8] Fixed: Error when deleting a table row.
* [#11508](s://dev.ckeditor.com/ticket/11508): Fixed: [`htmlDataProcessor`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlDataProcessor.html) discovering protected attributes within other attributes' values.
* [#11533](s://dev.ckeditor.com/ticket/11533): Widgets: Avoid recurring upcasts if the DOM structure was modified during an upcast.
* [#11400](s://dev.ckeditor.com/ticket/11400): Fixed: The [`domObject.removeAllListeners()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_domObject.html#method-removeAllListeners) method does not remove custom listeners completely.
* [#11493](s://dev.ckeditor.com/ticket/11493): Fixed: The [`selection.getRanges()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_selection.html#method-getRanges) method does not override cached ranges when used with the `onlyEditables` argument.
* [#11390](s://dev.ckeditor.com/ticket/11390): [IE] All [XML](s://ckeditor.com/cke4/addon/xml) plugin [methods](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.xml.html) now work in IE10+.
* [#11542](s://dev.ckeditor.com/ticket/11542): [IE11] Fixed: Blurry toolbar icons when Right-to-Left UI language is set.
* [#11504](s://dev.ckeditor.com/ticket/11504): Fixed: When [`config.fullPage`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-fullPage) is set to `true`, entities are not encoded in editor output.
* [#11004](s://dev.ckeditor.com/ticket/11004): Integrated [Enhanced Image](s://ckeditor.com/cke4/addon/image2) dialog window with [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html).
* [#11439](s://dev.ckeditor.com/ticket/11439): Fixed: Properties get cloned in the Cell Properties dialog window if multiple cells are selected.

## CKEditor 4.3.2

Fixed Issues:

* [#11331](s://dev.ckeditor.com/ticket/11331): A menu button will have a changed label when selected instead of using the `aria-pressed` attribute.
* [#11177](s://dev.ckeditor.com/ticket/11177): Widget drag handler improvements:
  * [#11176](s://dev.ckeditor.com/ticket/11176): Fixed: Initial position is not updated when the widget data object is empty.
  * [#11001](s://dev.ckeditor.com/ticket/11001): Fixed: Multiple synchronous layout recalculations are caused by initial drag handler positioning causing performance issues.
  * [#11161](s://dev.ckeditor.com/ticket/11161): Fixed: Drag handler is not repositioned in various situations.
  * [#11281](s://dev.ckeditor.com/ticket/11281): Fixed: Drag handler and mask are duplicated after widget reinitialization.
* [#11207](s://dev.ckeditor.com/ticket/11207): [Firefox] Fixed: Misplaced [Enhanced Image](s://ckeditor.com/cke4/addon/image2) resizer in the inline editor.
* [#11102](s://dev.ckeditor.com/ticket/11102): `CKEDITOR.template` improvements:
  * [#11102](s://dev.ckeditor.com/ticket/11102): Added newline character support.
  * [#11216](s://dev.ckeditor.com/ticket/11216): Added "\\'" substring support.
* [#11121](s://dev.ckeditor.com/ticket/11121): [Firefox] Fixed: High Contrast mode is enabled when the editor is loaded in a hidden iframe.
* [#11350](s://dev.ckeditor.com/ticket/11350): The default value of [`config.contentsCss`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-contentsCss) is affected by [`CKEDITOR.getUrl()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#method-getUrl).
* [#11097](s://dev.ckeditor.com/ticket/11097): Improved the [Autogrow](s://ckeditor.com/cke4/addon/autogrow) plugin performance when dealing with very big tables.
* [#11290](s://dev.ckeditor.com/ticket/11290): Removed redundant code in the [Source Dialog](s://ckeditor.com/cke4/addon/sourcedialog) plugin.
* [#11133](s://dev.ckeditor.com/ticket/11133): [Page Break](s://ckeditor.com/cke4/addon/pagebreak) becomes editable if pasted.
* [#11126](s://dev.ckeditor.com/ticket/11126): Fixed: Native Undo executed once the bottom of the snapshot stack is reached.
* [#11131](s://dev.ckeditor.com/ticket/11131): [Div Editing Area](s://ckeditor.com/cke4/addon/divarea): Fixed: Error thrown when switching to source mode if the selection was in widget's nested editable.
* [#11139](s://dev.ckeditor.com/ticket/11139): [Div Editing Area](s://ckeditor.com/cke4/addon/divarea): Fixed: Elements Path is not cleared after switching to source mode.
* [#10778](s://dev.ckeditor.com/ticket/10778): Fixed a bug with range enlargement. The range no longer expands to visible whitespace.
* [#11146](s://dev.ckeditor.com/ticket/11146): [IE] Fixed: Preview window switches Internet Explorer to Quirks Mode.
* [#10762](s://dev.ckeditor.com/ticket/10762): [IE] Fixed: JavaScript code displayed in preview window's URL bar.
* [#11186](s://dev.ckeditor.com/ticket/11186): Introduced the [`widgets.repository.addUpcastCallback()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_repository.html#method-addUpcastCallback) method that allows to block upcasting given element to a widget.
* [#11307](s://dev.ckeditor.com/ticket/11307): Fixed: Paste as Plain Text conflict with the [MooTools](://mootools.net) library.
* [#11140](s://dev.ckeditor.com/ticket/11140): [IE11] Fixed: Anchors are not draggable.
* [#11379](s://dev.ckeditor.com/ticket/11379): Changed default contents `line-height` to unitless values to avoid huge text overlapping (like in [#9696](s://dev.ckeditor.com/ticket/9696)).
* [#10787](s://dev.ckeditor.com/ticket/10787): [Firefox] Fixed: Broken replacement of text while pasting into `div`-based editor.
* [#10884](s://dev.ckeditor.com/ticket/10884): Widgets integration with the [Show Blocks](s://ckeditor.com/cke4/addon/showblocks) plugin.
* [#11021](s://dev.ckeditor.com/ticket/11021): Fixed: An error thrown when selecting entire editable contents while fake selection is on.
* [#11086](s://dev.ckeditor.com/ticket/11086): [IE8] Re-enable inline widgets drag&drop in Internet Explorer 8.
* [#11372](s://dev.ckeditor.com/ticket/11372): Widgets: Special characters encoded twice in nested editables.
* [#10068](s://dev.ckeditor.com/ticket/10068): Fixed: Support for protocol-relative URLs.
* [#11283](s://dev.ckeditor.com/ticket/11283): [Enhanced Image](s://ckeditor.com/cke4/addon/image2): A `<div>` element with `text-align: center` and an image inside is not recognised correctly.
* [#11196](s://dev.ckeditor.com/ticket/11196): [Accessibility Instructions](s://ckeditor.com/cke4/addon/a11yhelp): Allowed additional keyboard button labels to be translated in the dialog window.

## CKEditor 4.3.1

**Important Notes:**

* To match the naming convention, the `language` button is now `Language` ([#11201](s://dev.ckeditor.com/ticket/11201)).
* [Enhanced Image](s://ckeditor.com/cke4/addon/image2) button, context menu, command, and icon names match those of the [Image](s://ckeditor.com/cke4/addon/image) plugin ([#11222](s://dev.ckeditor.com/ticket/11222)).

Fixed Issues:

* [#11244](s://dev.ckeditor.com/ticket/11244): Changed: The [`widget.repository.checkWidgets()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_repository.html#method-checkWidgets) method now fires the [`widget.repository.checkWidgets`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_repository.html#event-checkWidgets) event, so from CKEditor 4.3.1 it is preferred to use the method rather than fire the event.
* [#11171](s://dev.ckeditor.com/ticket/11171): Fixed: [`editor.insertElement()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertElement) and [`editor.insertText()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertText) methods do not call the [`widget.repository.checkWidgets()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_repository.html#method-checkWidgets) method.
* [#11085](s://dev.ckeditor.com/ticket/11085): [IE8] Replaced preview generated by the [Mathematical Formulas](s://ckeditor.com/cke4/addon/mathjax) widget with a placeholder.
* [#11044](s://dev.ckeditor.com/ticket/11044): Enhanced WAI-ARIA support for the [Language](s://ckeditor.com/cke4/addon/language) plugin drop-down menu.
* [#11075](s://dev.ckeditor.com/ticket/11075): With drop-down menu button focused, pressing the *Down Arrow* key will now open the menu and focus its first option.
* [#11165](s://dev.ckeditor.com/ticket/11165): Fixed: The [File Browser](s://ckeditor.com/cke4/addon/filebrowser) plugin cannot be removed from the editor.
* [#11159](s://dev.ckeditor.com/ticket/11159): [IE9-10] [Enhanced Image](s://ckeditor.com/cke4/addon/image2): Fixed buggy discovery of image dimensions.
* [#11101](s://dev.ckeditor.com/ticket/11101): Drop-down lists no longer break when given double quotes.
* [#11077](s://dev.ckeditor.com/ticket/11077): [Enhanced Image](s://ckeditor.com/cke4/addon/image2): Empty undo step recorded when resizing the image.
* [#10853](s://dev.ckeditor.com/ticket/10853): [Enhanced Image](s://ckeditor.com/cke4/addon/image2): Widget has paragraph wrapper when de-captioning unaligned image.
* [#11198](s://dev.ckeditor.com/ticket/11198): Widgets: Drag handler is not fully visible when an inline widget is in a heading.
* [#11132](s://dev.ckeditor.com/ticket/11132): [Firefox] Fixed: Caret is lost after drag and drop of an inline widget.
* [#11182](s://dev.ckeditor.com/ticket/11182): [IE10-11] Fixed: Editor crashes (IE11) or works with minor issues (IE10) if a page is loaded in Quirks Mode. See [`env.quirks`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_env.html#property-quirks) for more details.
* [#11204](s://dev.ckeditor.com/ticket/11204): Added `figure` and `figcaption` styles to the `contents.css` file so [Enhanced Image](s://ckeditor.com/cke4/addon/image2) looks nicer.
* [#11202](s://dev.ckeditor.com/ticket/11202): Fixed: No newline in [BBCode](s://ckeditor.com/cke4/addon/bbcode) mode.
* [#10890](s://dev.ckeditor.com/ticket/10890): Fixed: Error thrown when pressing the *Delete* key in a list item.
* [#10055](s://dev.ckeditor.com/ticket/10055): [IE8-10] Fixed: *Delete* pressed on a selected image causes the browser to go back.
* [#11183](s://dev.ckeditor.com/ticket/11183): Fixed: Inserting a horizontal rule or a table in multiple row selection causes a browser crash. Additionally, the [`editor.insertElement()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-insertElement) method does not insert the element into every range of a selection any more.
* [#11042](s://dev.ckeditor.com/ticket/11042): Fixed: Selection made on an element containing a non-editable element was not auto faked.
* [#11125](s://dev.ckeditor.com/ticket/11125): Fixed: Keyboard navigation through menu and drop-down items will now cycle.
* [#11011](s://dev.ckeditor.com/ticket/11011): Fixed: The [`editor.applyStyle()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-applyStyle) method removes attributes from nested elements.
* [#11179](s://dev.ckeditor.com/ticket/11179): Fixed: [`editor.destroy()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-destroy) does not cleanup content generated by the [Table Resize](s://ckeditor.com/cke4/addon/tableresize) plugin for inline editors.
* [#11237](s://dev.ckeditor.com/ticket/11237): Fixed: Table border attribute value is deleted when pasting content from Microsoft Word.
* [#11250](s://dev.ckeditor.com/ticket/11250): Fixed: HTML entities inside the `<textarea>` element are not encoded.
* [#11260](s://dev.ckeditor.com/ticket/11260): Fixed: Initially disabled buttons are not read by JAWS as disabled.
* [#11200](s://dev.ckeditor.com/ticket/11200):  Added [Clipboard](s://ckeditor.com/cke4/addon/clipboard) plugin as a dependency for [Widget](s://ckeditor.com/cke4/addon/widget) to fix drag and drop.

## CKEditor 4.3

New Features:

* [#10612](s://dev.ckeditor.com/ticket/10612): Internet Explorer 11 support.
* [#10869](s://dev.ckeditor.com/ticket/10869): Widgets: Added better integration with the [Elements Path](s://ckeditor.com/cke4/addon/elementspath) plugin.
* [#10886](s://dev.ckeditor.com/ticket/10886): Widgets: Added tooltip to the drag handle.
* [#10933](s://dev.ckeditor.com/ticket/10933): Widgets: Introduced drag and drop of block widgets with the [Line Utilities](s://ckeditor.com/cke4/addon/lineutils) plugin.
* [#10936](s://dev.ckeditor.com/ticket/10936): Widget System changes for easier integration with other dialog systems.
* [#10895](s://dev.ckeditor.com/ticket/10895): [Enhanced Image](s://ckeditor.com/cke4/addon/image2): Added file browser integration.
* [#11002](s://dev.ckeditor.com/ticket/11002): Added the [`draggable`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_widget_definition.html#property-draggable) option to disable drag and drop support for widgets.
* [#10937](s://dev.ckeditor.com/ticket/10937): [Mathematical Formulas](s://ckeditor.com/cke4/addon/mathjax) widget improvements:
  * loading indicator ([#10948](s://dev.ckeditor.com/ticket/10948)),
  * applying paragraph changes (like font color change) to iframe ([#10841](s://dev.ckeditor.com/ticket/10841)),
  * Firefox and IE9 clipboard fixes ([#10857](s://dev.ckeditor.com/ticket/10857)),
  * fixing same origin policy issue ([#10840](s://dev.ckeditor.com/ticket/10840)),
  * fixing undo bugs ([#10842](s://dev.ckeditor.com/ticket/10842), [#10930](s://dev.ckeditor.com/ticket/10930)),
  * fixing other minor bugs.
* [#10862](s://dev.ckeditor.com/ticket/10862): [Placeholder](s://ckeditor.com/cke4/addon/placeholder) plugin was rewritten as a widget.
* [#10822](s://dev.ckeditor.com/ticket/10822): Added styles system integration with non-editable elements (for example widgets) and their nested editables. Styles cannot change non-editable content and are applied in nested editable only if allowed by its type and content filter.
* [#10856](s://dev.ckeditor.com/ticket/10856): Menu buttons will now toggle the visibility of their panels when clicked multiple times. [Language](s://ckeditor.com/cke4/addon/language) plugin fixes: Added active language highlighting, added an option to remove the language.
* [#10028](s://dev.ckeditor.com/ticket/10028): New [`config.dialog_noConfirmCancel`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-dialog_noConfirmCancel) configuration option that eliminates the need to confirm closing of a dialog window when the user changed any of its fields.
* [#10848](s://dev.ckeditor.com/ticket/10848): Integrate remaining plugins ([Styles](s://ckeditor.com/cke4/addon/stylescombo), [Format](s://ckeditor.com/cke4/addon/format), [Font](s://ckeditor.com/cke4/addon/font), [Color Button](s://ckeditor.com/cke4/addon/colorbutton), [Language](s://ckeditor.com/cke4/addon/language) and [Indent](s://ckeditor.com/cke4/addon/indent)) with [active filter](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-activeFilter).
* [#10855](s://dev.ckeditor.com/ticket/10855): Change the extension of emoticons in the [BBCode](s://ckeditor.com/cke4/addon/bbcode) sample from GIF to PNG.

Fixed Issues:

* [#10831](s://dev.ckeditor.com/ticket/10831): [Enhanced Image](s://ckeditor.com/cke4/addon/image2): Merged `image2inline` and `image2block` into one `image2` widget.
* [#10835](s://dev.ckeditor.com/ticket/10835): [Enhanced Image](s://ckeditor.com/cke4/addon/image2): Improved visibility of the resize handle.
* [#10836](s://dev.ckeditor.com/ticket/10836): [Enhanced Image](s://ckeditor.com/cke4/addon/image2): Preserve custom mouse cursor while resizing the image.
* [#10939](s://dev.ckeditor.com/ticket/10939): [Firefox] [Enhanced Image](s://ckeditor.com/cke4/addon/image2): hovering the image causes it to change.
* [#10866](s://dev.ckeditor.com/ticket/10866): Fixed: Broken *Tab* key navigation in the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) dialog window.
* [#10833](s://dev.ckeditor.com/ticket/10833): Fixed: *Lock ratio* option should be on by default in the [Enhanced Image](s://ckeditor.com/cke4/addon/image2) dialog window.
* [#10881](s://dev.ckeditor.com/ticket/10881): Various improvements to *Enter* key behavior in nested editables.
* [#10879](s://dev.ckeditor.com/ticket/10879): [Remove Format](s://ckeditor.com/cke4/addon/removeformat) should not leak from a nested editable.
* [#10877](s://dev.ckeditor.com/ticket/10877): Fixed: [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) fails to apply changes if a nested editable was focused.
* [#10877](s://dev.ckeditor.com/ticket/10877): Fixed: [SCAYT](s://ckeditor.com/cke4/addon/wsc) blocks typing in nested editables.
* [#11079](s://dev.ckeditor.com/ticket/11079): Add button icons to the [Placeholder](s://ckeditor.com/cke4/addon/placeholder) sample.
* [#10870](s://dev.ckeditor.com/ticket/10870): The `paste` command is no longer being disabled when the clipboard is empty.
* [#10854](s://dev.ckeditor.com/ticket/10854): Fixed: Firefox prepends `<br>` to `<body>`, so it is stripped by the HTML data processor.
* [#10823](s://dev.ckeditor.com/ticket/10823): Fixed: [Link](s://ckeditor.com/cke4/addon/link) plugin does not work with non-editable content.
* [#10828](s://dev.ckeditor.com/ticket/10828): [Magic Line](s://ckeditor.com/cke4/addon/magicline) integration with the Widget System.
* [#10865](s://dev.ckeditor.com/ticket/10865): Improved hiding copybin, so copying widgets works smoothly.
* [#11066](s://dev.ckeditor.com/ticket/11066): Widget's private parts use CSS reset.
* [#11027](s://dev.ckeditor.com/ticket/11027): Fixed: Block commands break on widgets; added the [`contentDomInvalidated`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-contentDomInvalidated) event.
* [#10430](s://dev.ckeditor.com/ticket/10430): Resolve dependence of the [Image](s://ckeditor.com/cke4/addon/image) plugin on the [Form Elements](s://ckeditor.com/cke4/addon/forms) plugin.
* [#10911](s://dev.ckeditor.com/ticket/10911): Fixed: Browser *Alt* hotkeys will no longer be blocked while a widget is focused.
* [#11082](s://dev.ckeditor.com/ticket/11082): Fixed: Selected widget is not copied or cut when using toolbar buttons or context menu.
* [#11083](s://dev.ckeditor.com/ticket/11083): Fixed list and div element application to block widgets.
* [#10887](s://dev.ckeditor.com/ticket/10887): Internet Explorer 8 compatibility issues related to the Widget System.
* [#11074](s://dev.ckeditor.com/ticket/11074): Temporarily disabled inline widget drag and drop, because of seriously buggy native `range#moveToPoint` method.
* [#11098](s://dev.ckeditor.com/ticket/11098): Fixed: Wrong selection position after undoing widget drag and drop.
* [#11110](s://dev.ckeditor.com/ticket/11110): Fixed: IFrame and Flash objects are being incorrectly pasted in certain conditions.
* [#11129](s://dev.ckeditor.com/ticket/11129): Page break is lost when loading data.
* [#11123](s://dev.ckeditor.com/ticket/11123): [Firefox] Widget is destroyed after being dragged outside of `<body>`.
* [#11124](s://dev.ckeditor.com/ticket/11124): Fixed the [Elements Path](s://ckeditor.com/cke4/addon/elementspath) in an editor using the [Div Editing Area](s://ckeditor.com/cke4/addon/divarea).

## CKEditor 4.3 Beta

New Features:

* [#9764](s://dev.ckeditor.com/ticket/9764): Widget System.
  * [Widget plugin](s://ckeditor.com/cke4/addon/widget) introducing the [Widget API](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.widget.html).
  * New [`editor.enterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-enterMode) and [`editor.shiftEnterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-shiftEnterMode) properties &ndash; normalized versions of [`config.enterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enterMode) and [`config.shiftEnterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-shiftEnterMode).
  * Dynamic editor settings. Starting from CKEditor 4.3 Beta, *Enter* mode values and [content filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html) instances may be changed dynamically (for example when the caret was placed in an element in which editor features should be adjusted). When you are implementing a new editor feature, you should base its behavior on [dynamic](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-activeEnterMode) or [static](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-enterMode) *Enter* mode values depending on whether this feature works in selection context or globally on editor content.
      * Dynamic *Enter* mode values &ndash; [`editor.setActiveEnterMode()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-setActiveEnterMode) method, [`editor.activeEnterModeChange`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-activeEnterModeChange) event, and two properties: [`editor.activeEnterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-activeEnterMode) and [`editor.activeShiftEnterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-activeShiftEnterMode).
      * Dynamic content filter instances &ndash; [`editor.setActiveFilter()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-setActiveFilter) method, [`editor.activeFilterChange`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-activeFilterChange) event, and [`editor.activeFilter`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-activeFilter) property.
  * "Fake" selection was introduced. It makes it possible to virtually select any element when the real selection remains hidden. See the  [`selection.fake()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_selection.html#method-fake) method.
  * Default [`htmlParser.filter`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlParser.filter.html) rules are not applied to non-editable elements (elements with `contenteditable` attribute set to `false` and their descendants) anymore. To add a rule which will be applied to all elements you need to pass an additional argument to the [`filter.addRules()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_htmlParser_filter.html#method-addRules) method.
  * Dozens of new methods were introduced &ndash; most interesting ones:
      * [`document.find()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_document.html#method-find),
      * [`document.findOne()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_document.html#method-findOne),
      * [`editable.insertElementIntoRange()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editable.html#method-insertElementIntoRange),
      * [`range.moveToClosestEditablePosition()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-moveToClosestEditablePosition),
      * New methods for [`htmlParser.node`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlParser.node.html) and [`htmlParser.element`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlParser.element.html).
* [#10659](s://dev.ckeditor.com/ticket/10659): New [Enhanced Image](s://ckeditor.com/cke4/addon/image2) plugin that introduces a widget with integrated image captions, an option to center images, and dynamic "click and drag" resizing.
* [#10664](s://dev.ckeditor.com/ticket/10664): New [Mathematical Formulas](s://ckeditor.com/cke4/addon/mathjax) plugin that introduces the MathJax widget.
* [#7987](s://dev.ckeditor.com/ticket/7987): New [Language](s://ckeditor.com/cke4/addon/language) plugin that implements Language toolbar button to support [WCAG 3.1.2 Language of Parts](://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning-other-lang-id.html).
* [#10708](s://dev.ckeditor.com/ticket/10708): New [smileys](s://ckeditor.com/cke4/addon/smiley).

## CKEditor 4.2.3

Fixed Issues:

* [#10994](s://dev.ckeditor.com/ticket/10994): Fixed: Loading external jQuery library when opening the [jQuery Adapter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_jquery.html) sample directly from file.
* [#10975](s://dev.ckeditor.com/ticket/10975): [IE] Fixed: Error thrown while opening the color palette.
* [#9929](s://dev.ckeditor.com/ticket/9929): [Blink/WebKit] Fixed: A non-breaking space is created once a character is deleted and a regular space is typed.
* [#10963](s://dev.ckeditor.com/ticket/10963): Fixed: JAWS issue with the keyboard shortcut for [Magic Line](s://ckeditor.com/cke4/addon/magicline).
* [#11096](s://dev.ckeditor.com/ticket/11096): Fixed: TypeError: Object has no method 'is'.

## CKEditor 4.2.2

Fixed Issues:

* [#9314](s://dev.ckeditor.com/ticket/9314): Fixed: Incorrect error message on closing a dialog window without saving changs.
* [#10308](s://dev.ckeditor.com/ticket/10308): [IE10] Fixed: Unspecified error when deleting a row.
* [#10945](s://dev.ckeditor.com/ticket/10945): [Chrome] Fixed: Clicking with a mouse inside the editor does not show the caret.
* [#10912](s://dev.ckeditor.com/ticket/10912): Prevent default action when content of a non-editable link is clicked.
* [#10913](s://dev.ckeditor.com/ticket/10913): Fixed [`CKEDITOR.plugins.addExternal()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_resourceManager.html#method-addExternal) not handling paths including file name specified.
* [#10666](s://dev.ckeditor.com/ticket/10666): Fixed [`CKEDITOR.tools.isArray()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_tools.html#method-isArray) not working cross frame.
* [#10910](s://dev.ckeditor.com/ticket/10910): [IE9] Fixed JavaScript error thrown in Compatibility Mode when clicking and/or typing in the editing area.
* [#10868](s://dev.ckeditor.com/ticket/10868): [IE8] Prevent the browser from crashing when applying the Inline Quotation style.
* [#10915](s://dev.ckeditor.com/ticket/10915): Fixed: Invalid CSS filter in the Kama skin.
* [#10914](s://dev.ckeditor.com/ticket/10914): Plugins [Indent List](s://ckeditor.com/cke4/addon/indentlist) and [Indent Block](s://ckeditor.com/cke4/addon/indentblock) are now included in the build configuration.
* [#10812](s://dev.ckeditor.com/ticket/10812): Fixed [`range.createBookmark2()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dom_range.html#method-createBookmark2) incorrectly normalizing offsets. This bug was causing many issues: [#10850](s://dev.ckeditor.com/ticket/10850), [#10842](s://dev.ckeditor.com/ticket/10842).
* [#10951](s://dev.ckeditor.com/ticket/10951): Reviewed and optimized focus handling on panels (combo, menu buttons, color buttons, and context menu) to enhance accessibility. Fixed [#10705](s://dev.ckeditor.com/ticket/10705), [#10706](s://dev.ckeditor.com/ticket/10706) and [#10707](s://dev.ckeditor.com/ticket/10707).
* [#10704](s://dev.ckeditor.com/ticket/10704): Fixed a JAWS issue with the Select Color dialog window title not being announced.
* [#10753](s://dev.ckeditor.com/ticket/10753): The floating toolbar in inline instances now has a dedicated accessibility label.

## CKEditor 4.2.1

Fixed Issues:

* [#10301](s://dev.ckeditor.com/ticket/10301): [IE9-10] Undo fails after 3+ consecutive paste actions with a JavaScript error.
* [#10689](s://dev.ckeditor.com/ticket/10689): Save toolbar button saves only the first editor instance.
* [#10368](s://dev.ckeditor.com/ticket/10368): Move language reading direction definition (`dir`) from main language file to core.
* [#9330](s://dev.ckeditor.com/ticket/9330): Fixed pasting anchors from MS Word.
* [#8103](s://dev.ckeditor.com/ticket/8103): Fixed pasting nested lists from MS Word.
* [#9958](s://dev.ckeditor.com/ticket/9958): [IE9] Pressing the "OK" button will trigger the `onbeforeunload` event in the popup dialog.
* [#10662](s://dev.ckeditor.com/ticket/10662): Fixed styles from the Styles drop-down list not registering to the ACF in case when the [Shared Spaces plugin](s://ckeditor.com/cke4/addon/sharedspace) is used.
* [#9654](s://dev.ckeditor.com/ticket/9654): Problems with Internet Explorer 10 Quirks Mode.
* [#9816](s://dev.ckeditor.com/ticket/9816): Floating toolbar does not reposition vertically in several cases.
* [#10646](s://dev.ckeditor.com/ticket/10646): Removing a selected sublist or nested table with *Backspace/Delete* removes the parent element.
* [#10623](s://dev.ckeditor.com/ticket/10623): [WebKit] Page is scrolled when opening a drop-down list.
* [#10004](s://dev.ckeditor.com/ticket/10004): [ChromeVox] Button names are not announced.
* [#10731](s://dev.ckeditor.com/ticket/10731): [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) plugin breaks cloning of editor configuration.
* It is now possible to set per instance [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) plugin configuration instead of setting the configuration globally.

## CKEditor 4.2

**Important Notes:**

* Dropped compatibility support for Internet Explorer 7 and Firefox 3.6.

* Both the Basic and the Standard distribution packages will not contain the new [Indent Block](s://ckeditor.com/cke4/addon/indentblock) plugin. Because of this the [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html) might remove block indentations from existing contents. If you want to prevent this, either [add an appropriate ACF rule to your filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_allowed_content_rules.html) or create a custom build based on the Basic/Standard package and add the Indent Block plugin in [CKBuilder](s://ckeditor.com/cke4/builder).

New Features:

* [#10027](s://dev.ckeditor.com/ticket/10027): Separated list and block indentation into two plugins: [Indent List](s://ckeditor.com/cke4/addon/indentlist) and [Indent Block](s://ckeditor.com/cke4/addon/indentblock).
* [#8244](s://dev.ckeditor.com/ticket/8244): Use *(Shift+)Tab* to indent and outdent lists.
* [#10281](s://dev.ckeditor.com/ticket/10281): The [jQuery Adapter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_jquery.html) is now available. Several jQuery-related issues fixed: [#8261](s://dev.ckeditor.com/ticket/8261), [#9077](s://dev.ckeditor.com/ticket/9077), [#8710](s://dev.ckeditor.com/ticket/8710), [#8530](s://dev.ckeditor.com/ticket/8530), [#9019](s://dev.ckeditor.com/ticket/9019), [#6181](s://dev.ckeditor.com/ticket/6181), [#7876](s://dev.ckeditor.com/ticket/7876), [#6906](s://dev.ckeditor.com/ticket/6906).
* [#10042](s://dev.ckeditor.com/ticket/10042): Introduced [`config.title`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-title) setting to change the human-readable title of the editor.
* [#9794](s://dev.ckeditor.com/ticket/9794): Added [`editor.change`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-change) event.
* [#9923](s://dev.ckeditor.com/ticket/9923): HiDPI support in the editor UI. HiDPI icons for [Moono skin](s://ckeditor.com/cke4/addon/moono) added.
* [#8031](s://dev.ckeditor.com/ticket/8031): Handle `required` attributes on `<textarea>` elements &mdash; introduced [`editor.required`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-required) event.
* [#10280](s://dev.ckeditor.com/ticket/10280): Ability to replace `<textarea>` elements with the inline editor.

Fixed Issues:

* [#10599](s://dev.ckeditor.com/ticket/10599): [Indent](s://ckeditor.com/cke4/addon/indent) plugin is no longer required by the [List](s://ckeditor.com/cke4/addon/list) plugin.
* [#10370](s://dev.ckeditor.com/ticket/10370): Inconsistency in data events between framed and inline editors.
* [#10438](s://dev.ckeditor.com/ticket/10438): [FF, IE] No selection is done on an editable element on executing [`editor.setData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-setData).

## CKEditor 4.1.3

New Features:

* Added new translation: Indonesian.

Fixed Issues:

* [#10644](s://dev.ckeditor.com/ticket/10644): Fixed a critical bug when pasting plain text in Blink-based browsers.
* [#5189](s://dev.ckeditor.com/ticket/5189): [Find/Replace](s://ckeditor.com/cke4/addon/find) dialog window: rename "Cancel" button to "Close".
* [#10562](s://dev.ckeditor.com/ticket/10562): [Housekeeping] Unified CSS gradient filter formats in the [Moono](s://ckeditor.com/cke4/addon/moono) skin.
* [#10537](s://dev.ckeditor.com/ticket/10537): Advanced Content Filter should register a default rule for [`config.shiftEnterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-shiftEnterMode).
* [#10610](s://dev.ckeditor.com/ticket/10610): [`CKEDITOR.dialog.addIframe()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_dialog.html#static-method-addIframe) incorrectly sets the iframe size in dialog windows.

## CKEditor 4.1.2

New Features:

* Added new translation: Sinhala.

Fixed Issues:

* [#10339](s://dev.ckeditor.com/ticket/10339): Fixed: Error thrown when inserted data was totally stripped out after filtering and processing.
* [#10298](s://dev.ckeditor.com/ticket/10298): Fixed: Data processor breaks attributes containing protected parts.
* [#10367](s://dev.ckeditor.com/ticket/10367): Fixed: [`editable.insertText()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editable.html#method-insertText) loses characters when `RegExp` replace controls are being inserted.
* [#10165](s://dev.ckeditor.com/ticket/10165): [IE] Access denied error when `document.domain` has been altered.
* [#9761](s://dev.ckeditor.com/ticket/9761): Update the *Backspace* key state in [`keystrokeHandler.blockedKeystrokes`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_keystrokeHandler.html#property-blockedKeystrokes) when calling [`editor.setReadOnly()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-setReadOnly).
* [#6504](s://dev.ckeditor.com/ticket/6504): Fixed: Race condition while loading several [`config.customConfig`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-customConfig) files.
* [#10146](s://dev.ckeditor.com/ticket/10146): [Firefox] Empty lines are being removed while [`config.enterMode`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enterMode) is [`CKEDITOR.ENTER_BR`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#property-ENTER_BR).
* [#10360](s://dev.ckeditor.com/ticket/10360): Fixed: ARIA `role="application"` should not be used for dialog windows.
* [#10361](s://dev.ckeditor.com/ticket/10361): Fixed: ARIA `role="application"` should not be used for floating panels.
* [#10510](s://dev.ckeditor.com/ticket/10510): Introduced unique voice labels to differentiate between different editor instances.
* [#9945](s://dev.ckeditor.com/ticket/9945): [iOS] Scrolling not possible on iPad.
* [#10389](s://dev.ckeditor.com/ticket/10389): Fixed: Invalid HTML in the "Text and Table" template.
* [WebSpellChecker](s://ckeditor.com/cke4/addon/wsc) plugin user interface was changed to match CKEditor 4 style.

## CKEditor 4.1.1

New Features:

* Added new translation: Albanian.

Fixed Issues:

* [#10172](s://dev.ckeditor.com/ticket/10172): Pressing *Delete* or *Backspace* in an empty table cell moves the cursor to the next/previous cell.
* [#10219](s://dev.ckeditor.com/ticket/10219): Error thrown when destroying an editor instance in parallel with a `mouseup` event.
* [#10265](s://dev.ckeditor.com/ticket/10265): Wrong loop type in the [File Browser](s://ckeditor.com/cke4/addon/filebrowser) plugin.
* [#10249](s://dev.ckeditor.com/ticket/10249): Wrong undo/redo states at start.
* [#10268](s://dev.ckeditor.com/ticket/10268): [Show Blocks](s://ckeditor.com/cke4/addon/showblocks) does not recover after switching to Source view.
* [#9995](s://dev.ckeditor.com/ticket/9995): HTML code in the `<textarea>` should not be modified by the [`htmlDataProcessor`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlDataProcessor.html).
* [#10320](s://dev.ckeditor.com/ticket/10320): [Justify](s://ckeditor.com/cke4/addon/justify) plugin should add elements to Advanced Content Filter based on current [Enter mode](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-enterMode).
* [#10260](s://dev.ckeditor.com/ticket/10260): Fixed: Advanced Content Filter blocks [`tabSpaces`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-tabSpaces). Unified `data-cke-*` attributes filtering.
* [#10315](s://dev.ckeditor.com/ticket/10315): [WebKit] [Undo manager](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.plugins.undo.UndoManager.html) should not record snapshots after a filling character was added/removed.
* [#10291](s://dev.ckeditor.com/ticket/10291): [WebKit] Space after a filling character should be secured.
* [#10330](s://dev.ckeditor.com/ticket/10330): [WebKit] The filling character is not removed on `keydown` in specific cases.
* [#10285](s://dev.ckeditor.com/ticket/10285): Fixed: Styled text pasted from MS Word causes an infinite loop.
* [#10131](s://dev.ckeditor.com/ticket/10131): Fixed: [`undoManager.update()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_plugins_undo_UndoManager.html#method-update) does not refresh the command state.
* [#10337](s://dev.ckeditor.com/ticket/10337): Fixed: Unable to remove `<s>` using [Remove Format](s://ckeditor.com/cke4/addon/removeformat).

## CKEditor 4.1

Fixed Issues:

* [#10192](s://dev.ckeditor.com/ticket/10192): Closing lists with the *Enter* key does not work with [Advanced Content Filter](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html) in several cases.
* [#10191](s://dev.ckeditor.com/ticket/10191): Fixed allowed content rules unification, so the [`filter.allowedContent`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_filter.html#property-allowedContent) property always contains rules in the same format.
* [#10224](s://dev.ckeditor.com/ticket/10224): Advanced Content Filter does not remove non-empty `<a>` elements anymore.
* Minor issues in plugin integration with Advanced Content Filter:
  * [#10166](s://dev.ckeditor.com/ticket/10166): Added transformation from the `align` attribute to `float` style to preserve backward compatibility after the introduction of Advanced Content Filter.
  * [#10195](s://dev.ckeditor.com/ticket/10195): [Image](s://ckeditor.com/cke4/addon/image) plugin no longer registers rules for links to Advanced Content Filter.
  * [#10213](s://dev.ckeditor.com/ticket/10213): [Justify](s://ckeditor.com/cke4/addon/justify) plugin is now correctly registering rules to Advanced Content Filter when [`config.justifyClasses`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-justifyClasses) is defined.

## CKEditor 4.1 RC

New Features:

* [#9829](s://dev.ckeditor.com/ticket/9829): Advanced Content Filter - data and features activation based on editor configuration.

  Brand new data filtering system that works in 2 modes:

  * Based on loaded features (toolbar items, plugins) - the data will be filtered according to what the editor in its
  current configuration can handle.
  * Based on [`config.allowedContent`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-allowedContent) rules - the data
  will be filtered and the editor features (toolbar items, commands, keystrokes) will be enabled if they are allowed.

  See the `datafiltering.html` sample, [guides](s://ckeditor.com/docs/ckeditor4/latest/guide/dev_advanced_content_filter.html) and [`CKEDITOR.filter` API documentation](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.filter.html).
* [#9387](s://dev.ckeditor.com/ticket/9387): Reintroduced [Shared Spaces](s://ckeditor.com/cke4/addon/sharedspace) - the ability to display toolbar and bottom editor space in selected locations and to share them by different editor instances.
* [#9907](s://dev.ckeditor.com/ticket/9907): Added the [`contentPreview`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#event-contentPreview) event for preview data manipulation.
* [#9713](s://dev.ckeditor.com/ticket/9713): Introduced the [Source Dialog](s://ckeditor.com/cke4/addon/sourcedialog) plugin that brings raw HTML editing for inline editor instances.
* Included in [#9829](s://dev.ckeditor.com/ticket/9829): Introduced new events, [`toHtml`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-toHtml) and [`toDataFormat`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-toDataFormat), allowing for better integration with data processing.
* [#9981](s://dev.ckeditor.com/ticket/9981): Added ability to filter [`htmlParser.fragment`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlParser.fragment.html), [`htmlParser.element`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlParser.element.html) etc. by many [`htmlParser.filter`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.htmlParser.filter.html)s before writing structure to an HTML string.
* Included in [#10103](s://dev.ckeditor.com/ticket/10103):
  * Introduced the [`editor.status`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-status) property to make it easier to check the current status of the editor.
  * Default [`command`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.command.html) state is now [`CKEDITOR.TRISTATE_DISABLE`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#property-TRISTATE_DISABLED). It will be activated on [`editor.instanceReady`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#event-instanceReady) or immediately after being added if the editor is already initialized.
* [#9796](s://dev.ckeditor.com/ticket/9796): Introduced `<s>` as a default tag for strikethrough, which replaces obsolete `<strike>` in HTML5.

## CKEditor 4.0.3

Fixed Issues:

* [#10196](s://dev.ckeditor.com/ticket/10196): Fixed context menus not opening with keyboard shortcuts when [Autogrow](s://ckeditor.com/cke4/addon/autogrow) is enabled.
* [#10212](s://dev.ckeditor.com/ticket/10212): [IE7-10] Undo command throws errors after multiple switches between Source and WYSIWYG view.
* [#10219](s://dev.ckeditor.com/ticket/10219): [Inline editor] Error thrown after calling [`editor.destroy()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-destroy).

## CKEditor 4.0.2

Fixed Issues:

* [#9779](s://dev.ckeditor.com/ticket/9779): Fixed overriding [`CKEDITOR.getUrl()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR.html#method-getUrl) with `CKEDITOR_GETURL`.
* [#9772](s://dev.ckeditor.com/ticket/9772): Custom buttons in the dialog window footer have different look and size ([Moono](s://ckeditor.com/cke4/addon/moono), [Kama](s://ckeditor.com/cke4/addon/kama) skins).
* [#9029](s://dev.ckeditor.com/ticket/9029): Custom styles added with the [`stylesSet.add()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_stylesSet.html#method-add) are displayed in the wrong order.
* [#9887](s://dev.ckeditor.com/ticket/9887): Disable [Magic Line](s://ckeditor.com/cke4/addon/magicline) when [`editor.readOnly`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#property-readOnly) is set.
* [#9882](s://dev.ckeditor.com/ticket/9882): Fixed empty document title on [`editor.getData()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-getData) if set via the Document Properties dialog window.
* [#9773](s://dev.ckeditor.com/ticket/9773): Fixed rendering problems with selection fields in the Kama skin.
* [#9851](s://dev.ckeditor.com/ticket/9851): The [`selectionChange`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#event-selectionChange) event is not fired when mouse selection ended outside editable.
* [#9903](s://dev.ckeditor.com/ticket/9903): [Inline editor] Bad positioning of floating space with page horizontal scroll.
* [#9872](s://dev.ckeditor.com/ticket/9872): [`editor.checkDirty()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-checkDirty) returns `true` when called onload. Removed the obsolete `editor.mayBeDirty` flag.
* [#9893](s://dev.ckeditor.com/ticket/9893): [IE] Fixed broken toolbar when editing mixed direction content in Quirks mode.
* [#9845](s://dev.ckeditor.com/ticket/9845): Fixed TAB navigation in the [Link](s://ckeditor.com/cke4/addon/link) dialog window when the Anchor option is used and no anchors are available.
* [#9883](s://dev.ckeditor.com/ticket/9883): Maximizing was making the entire page editable with [divarea](s://ckeditor.com/cke4/addon/divarea)-based editors.
* [#9940](s://dev.ckeditor.com/ticket/9940): [Firefox] Navigating back to a page with the editor was making the entire page editable.
* [#9966](s://dev.ckeditor.com/ticket/9966): Fixed: Unable to type square brackets with French keyboard layout. Changed [Magic Line](s://ckeditor.com/cke4/addon/magicline) keystrokes.
* [#9507](s://dev.ckeditor.com/ticket/9507): [Firefox] Selection is moved before editable position when the editor is focused for the first time.
* [#9947](s://dev.ckeditor.com/ticket/9947): [WebKit] Editor overflows parent container in some edge cases.
* [#10105](s://dev.ckeditor.com/ticket/10105): Fixed: Broken [sourcearea](s://ckeditor.com/cke4/addon/sourcearea) view when an RTL language is set.
* [#10123](s://dev.ckeditor.com/ticket/10123): [WebKit] Fixed: Several dialog windows have broken layout since the latest WebKit release.
* [#10152](s://dev.ckeditor.com/ticket/10152): Fixed: Invalid ARIA property used on menu items.

## CKEditor 4.0.1.1

Fixed Issues:

* Security update: Added protection against XSS attack and possible path disclosure in the PHP sample.

## CKEditor 4.0.1

Fixed Issues:

* [#9655](s://dev.ckeditor.com/ticket/9655): Support for IE Quirks Mode in the new [Moono skin](s://ckeditor.com/cke4/addon/moono).
* Accessibility issues (mainly in inline editor): [#9364](s://dev.ckeditor.com/ticket/9364), [#9368](s://dev.ckeditor.com/ticket/9368), [#9369](s://dev.ckeditor.com/ticket/9369), [#9370](s://dev.ckeditor.com/ticket/9370), [#9541](s://dev.ckeditor.com/ticket/9541), [#9543](s://dev.ckeditor.com/ticket/9543), [#9841](s://dev.ckeditor.com/ticket/9841), [#9844](s://dev.ckeditor.com/ticket/9844).
* [Magic Line](s://ckeditor.com/cke4/addon/magicline) plugin:
    * [#9481](s://dev.ckeditor.com/ticket/9481): Added accessibility support for Magic Line.
    * [#9509](s://dev.ckeditor.com/ticket/9509): Added Magic Line support for forms.
    * [#9573](s://dev.ckeditor.com/ticket/9573): Magic Line does not disappear on `mouseout` in a specific case.
* [#9754](s://dev.ckeditor.com/ticket/9754): [WebKit] Cutting & pasting simple unformatted text generates an inline wrapper in WebKit browsers.
* [#9456](s://dev.ckeditor.com/ticket/9456): [Chrome] Properly paste bullet list style from MS Word.
* [#9699](s://dev.ckeditor.com/ticket/9699), [#9758](s://dev.ckeditor.com/ticket/9758): Improved selection locking when selecting by dragging.
* Context menu:
    * [#9712](s://dev.ckeditor.com/ticket/9712): Opening the context menu destroys editor focus.
    * [#9366](s://dev.ckeditor.com/ticket/9366): Context menu should be displayed over the floating toolbar.
    * [#9706](s://dev.ckeditor.com/ticket/9706): Context menu generates a JavaScript error in inline mode when the editor is attached to a header element.
* [#9800](s://dev.ckeditor.com/ticket/9800): Hide float panel when resizing the window.
* [#9721](s://dev.ckeditor.com/ticket/9721): Padding in content of div-based editor puts the editing area under the bottom UI space.
* [#9528](s://dev.ckeditor.com/ticket/9528): Host page `box-sizing` style should not influence the editor UI elements.
* [#9503](s://dev.ckeditor.com/ticket/9503): [Form Elements](s://ckeditor.com/cke4/addon/forms) plugin adds context menu listeners only on supported input types. Added support for `tel`, `email`, `search` and `url` input types.
* [#9769](s://dev.ckeditor.com/ticket/9769): Improved floating toolbar positioning in a narrow window.
* [#9875](s://dev.ckeditor.com/ticket/9875): Table dialog window does not populate width correctly.
* [#8675](s://dev.ckeditor.com/ticket/8675): Deleting cells in a nested table removes the outer table cell.
* [#9815](s://dev.ckeditor.com/ticket/9815): Cannot edit dialog window fields in an editor initialized in the jQuery UI modal dialog.
* [#8888](s://dev.ckeditor.com/ticket/8888): CKEditor dialog windows do not show completely in a small window.
* [#9360](s://dev.ckeditor.com/ticket/9360): [Inline editor] Blocks shown for a `<div>` element stay permanently even after the user exits editing the `<div>`.
* [#9531](s://dev.ckeditor.com/ticket/9531): [Firefox & Inline editor] Toolbar is lost when closing the Format drop-down list by clicking its button.
* [#9553](s://dev.ckeditor.com/ticket/9553): Table width incorrectly set when the `border-width` style is specified.
* [#9594](s://dev.ckeditor.com/ticket/9594): Cannot tab past CKEditor when it is in read-only mode.
* [#9658](s://dev.ckeditor.com/ticket/9658): [IE9] Justify not working on selected images.
* [#9686](s://dev.ckeditor.com/ticket/9686): Added missing contents styles for `<pre>` elements.
* [#9709](s://dev.ckeditor.com/ticket/9709): [Paste from Word](s://ckeditor.com/cke4/addon/pastefromword) should not depend on configuration from other styles.
* [#9726](s://dev.ckeditor.com/ticket/9726): Removed [Color Dialog](s://ckeditor.com/cke4/addon/colordialog) plugin dependency from [Table Tools](s://ckeditor.com/cke4/addon/tabletools).
* [#9765](s://dev.ckeditor.com/ticket/9765): Toolbar Collapse command documented incorrectly in the [Accessibility Instructions](s://ckeditor.com/cke4/addon/a11yhelp) dialog window.
* [#9771](s://dev.ckeditor.com/ticket/9771): [WebKit & Opera] Fixed scrolling issues when pasting.
* [#9787](s://dev.ckeditor.com/ticket/9787): [IE9] `onChange` is not fired for checkboxes in dialogs.
* [#9842](s://dev.ckeditor.com/ticket/9842): [Firefox 17] When opening a toolbar menu for the first time and pressing the *Down Arrow* key, focus goes to the next toolbar button instead of the menu options.
* [#9847](s://dev.ckeditor.com/ticket/9847): [Elements Path](s://ckeditor.com/cke4/addon/elementspath) should not be initialized in the inline editor.
* [#9853](s://dev.ckeditor.com/ticket/9853): [`editor.addRemoveFormatFilter()`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_editor.html#method-addRemoveFormatFilter) is exposed before it really works.
* [#8893](s://dev.ckeditor.com/ticket/8893): Value of the [`pasteFromWordCleanupFile`](s://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-pasteFromWordCleanupFile) configuration option is now taken from the instance configuration.
* [#9693](s://dev.ckeditor.com/ticket/9693): Removed "Live Preview" checkbox from UI color picker.


## CKEditor 4.0

The first stable release of the new CKEditor 4 code line.

The CKEditor JavaScript API has been kept compatible with CKEditor 4, whenever
possible. The list of relevant changes can be found in the [API Changes page of
the CKEditor 4 documentation][1].

[1]: s://ckeditor.com/docs/ckeditor4/latest/guide/dev_api_changes.html "API Changes"
