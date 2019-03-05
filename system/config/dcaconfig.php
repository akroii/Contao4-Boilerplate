<?php
$GLOBALS['TL_DCA']['tl_content']['fields']['headline']['options'] = array('h2', 'h3', 'h4', 'h5', 'h6', 'span', 'strong');
$GLOBALS['TL_DCA']['tl_module']['fields']['headline']['options'] = array('h2', 'h3', 'h4', 'h5', 'h6', 'span', 'strong');

$GLOBALS['TL_DCA']['tl_page']['fields']['published']['sql'] = "char(1) NOT NULL default '1'";
$GLOBALS['TL_DCA']['tl_article']['fields']['published']['default'] = true;
$GLOBALS['TL_DCA']['tl_page']['fields']['published']['default'] = true;

$GLOBALS['TL_DCA']['tl_article']['fields']['author']['eval']['doNotCopy'] = false;
$GLOBALS['TL_DCA']['tl_article']['fields']['published']['eval']['doNotCopy'] = false;
$GLOBALS['TL_DCA']['tl_page']['fields']['published']['eval']['doNotCopy'] = false;
$GLOBALS['TL_LANG']['MSC']['copyOf'] = '%s';

// Deaktivieren der Update-Anzeige für Nicht-Admins
if (!\BackendUser::getInstance()->isAdmin) {
	foreach ((array) $GLOBALS['TL_HOOKS']['getSystemMessages'] as $k => $arrHook) {
		if ($arrHook[1] == 'versionCheck') {
			unset($GLOBALS['TL_HOOKS']['getSystemMessages'][$k]);
		}
	}
}
#$GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['rte'] = 'tinyMCE_custom';
$GLOBALS['TL_DCA']['tl_form_field']['fields']['options']['eval']['allowHtml'] = true;