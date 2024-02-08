<?php

use Leuchtfeuer\BmImageGallery\Controller\ListController;
use Leuchtfeuer\BmImageGallery\Updates\PluginUpdateWizard;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die('Access denied.');

call_user_func(
    function ($extensionKey) {
        ExtensionUtility::configurePlugin(
            $extensionKey,
            'GalleryList',
            [
                ListController::class => 'list,gallery',
            ],
            []
        );

        ExtensionUtility::configurePlugin(
            $extensionKey,
            'GalleryDetail',
            [
                ListController::class => 'gallery',
            ],
            []
        );

        ExtensionUtility::configurePlugin(
            $extensionKey,
            'SelectedGallery',
            [
                ListController::class => 'selectedGallery',
            ],
            []
        );

        // Upgrade Wizards
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update'][PluginUpdateWizard::class]
            = PluginUpdateWizard::class;
    },
    'bm_image_gallery'
);
