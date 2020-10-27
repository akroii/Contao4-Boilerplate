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

#$GLOBALS['TL_DCA']['tl_content']['fields']['text']['eval']['rte'] = 'tinyMCE_custom';
$GLOBALS['TL_DCA']['tl_form_field']['fields']['options']['eval']['allowHtml'] = true;
$GLOBALS['TL_DCA']['tl_form_field']['fields']['label']['eval']['allowHtml'] = true;

if (\BackendUser::getInstance()->isAdmin) {
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'alias';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'includeLayout';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'layout:tl_layout.name';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['fields'][] = 'cssClass';
$GLOBALS['TL_DCA']['tl_page']['list']['label']['format'] = '
<span title="%3$s">%s</span>
<span style="color: #ccc !important; font-weight:normal; padding-left: 3px;" title="Seiten-ID">[ID: %s]</span>
<span style="color: #ccc !important; font-weight:normal; padding-left: 3px;" data-l="%.3s" title="Verwendetes Layout">[%5$s]</span>';

$GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'id';
$GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'cssID';
$GLOBALS['TL_DCA']['tl_article']['list']['label']['fields'][] = 'alias';
$GLOBALS['TL_DCA']['tl_article']['list']['label']['format'] = '
<span title="Artikel-Alias: %5$s | id: %3$s">%1$s</span>
<span style="color: #ccc !important; font-weight:normal; padding-left: 3px;" title="In Spalte">[%2$s]</span>';
}
