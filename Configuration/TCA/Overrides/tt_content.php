<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die('Access denied.');

call_user_func(
    function ($extensionKey) {
        ExtensionUtility::registerPlugin(
            $extensionKey,
            'GalleryList',
            'LLL:EXT:bm_image_gallery/Resources/Private/Language/locallang_be.xlf:ffds.display_mode.1'
        );
        ExtensionUtility::registerPlugin(
            $extensionKey,
            'GalleryDetail',
            'LLL:EXT:bm_image_gallery/Resources/Private/Language/locallang_be.xlf:ffds.display_mode.2'
        );
        ExtensionUtility::registerPlugin(
            $extensionKey,
            'SelectedGallery',
            'LLL:EXT:bm_image_gallery/Resources/Private/Language/locallang_be.xlf:ffds.display_mode.3'
        );

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['bmimagegallery_gallerylist'] = 'recursive,select_key,pages';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['bmimagegallery_gallerylist'] = 'pi_flexform';

        ExtensionManagementUtility::addPiFlexFormValue(
            'bmimagegallery_gallerylist',
            'FILE:EXT:bm_image_gallery/Configuration/FlexForms/GalleryList.xml'
        );

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['bmimagegallery_gallerydetail'] = 'recursive,select_key,pages';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['bmimagegallery_gallerydetail'] = 'pi_flexform';

        ExtensionManagementUtility::addPiFlexFormValue(
            'bmimagegallery_gallerydetail',
            'FILE:EXT:bm_image_gallery/Configuration/FlexForms/GalleryDetail.xml'
        );

        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['bmimagegallery_selectedgallery'] = 'recursive,select_key,pages';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['bmimagegallery_selectedgallery'] = 'pi_flexform';

        ExtensionManagementUtility::addPiFlexFormValue(
            'bmimagegallery_selectedgallery',
            'FILE:EXT:bm_image_gallery/Configuration/FlexForms/SelectedGallery.xml'
        );
    },
    'bm_image_gallery'
);
