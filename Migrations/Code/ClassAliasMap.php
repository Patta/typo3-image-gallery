<?php

use Bitmotion\BmImageGallery\Domain\Transfer\CollectionInfo;
use Bitmotion\BmImageGallery\Factory\FileFactory;
use Leuchtfeuer\BmImageGallery\Controller\ListController;
use Leuchtfeuer\BmImageGallery\Domain\Repository\FileCollectionRepository;

/*
 * This file is part of the "Image Gallery" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */
return [
    '\Bitmotion\BmImageGallery\Controller\ListController' => ListController::class,
    '\Bitmotion\BmImageGallery\Domain\Repository\FileCollectionRepository' => FileCollectionRepository::class,
    '\\' . CollectionInfo::class => \Leuchtfeuer\BmImageGallery\Domain\Transfer\CollectionInfo::class,
    '\\' . FileFactory::class => \Leuchtfeuer\BmImageGallery\Factory\FileFactory::class,
];
