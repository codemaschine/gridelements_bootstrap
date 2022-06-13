<?php

// Add viewhelper namespace
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['grbo'] = ['SaschaEnde\\GridelementsBootstrap\\ViewHelpers'];


$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1552729988] = [
    'nodeName' => 'grindelements_render',
    'priority' => 40,
    'class' => \SaschaEnde\GridelementsBootstrap\Flexform\ModuleDescription::class,
];
