<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'envauto_bootstrap_site_package';

    /**
     * Default PageTS for EnvautoBootstrapSitePackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/PageTS/All.txt',
        'EnvAuto Bootstrap Site Package'
    );
});
