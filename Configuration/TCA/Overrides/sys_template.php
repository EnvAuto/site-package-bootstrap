<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'envauto_bootstrap_site_package';

    /**
     * Default TypoScript for EnvautoBootstrapSitePackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'EnvAuto Bootstrap Site Package'
    );
});
