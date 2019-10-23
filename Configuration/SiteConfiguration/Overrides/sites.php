<?php
/**
 * Preview url configuration
 */
$GLOBALS['SiteConfiguration']['site']['columns']['headlessPreviewDomain'] = [
    'label' => 'Preview domain',
    'config' => [
        'type' => 'input',
        'size' => 10
    ],
];
$GLOBALS['SiteConfiguration']['site']['palettes']['headlessPreviewDomain']['showitem'] = 'headlessPreviewDomain';

$GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] = '--palette--;;default,--palette--;;base,--palette--;;headlessPreviewDomain,
                --div--;LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.languages, languages,
                --div--;LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.errorHandling, errorHandling,
                --div--;LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.routes, routes';