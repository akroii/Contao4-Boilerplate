<?php
use Contao\CoreBundle\DataContainer\PaletteManipulator;
$GLOBALS['TL_DCA']['tl_module']['fields']['id']['search'] = true;
$GLOBALS['TL_DCA']['tl_module']['fields']['placeholder'] = [
    'label' => ['Placeholder-Text', 'Welcher Text soll als Platzhalter in dem Eingabefeld stehen?'],
    'inputType' => 'text',
    'eval' => ['tl_class' => 'w50', 'maxlength' => 255],
    'sql' => ['type' => 'string', 'length' => 255, 'default' => ''],
];

PaletteManipulator::create()
    ->addField('placeholder', 'config_legend', PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('search', 'tl_module');
