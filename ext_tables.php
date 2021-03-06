<?php
defined('TYPO3_MODE') or die('Access denied.');

call_user_func(function($namespace, $extkey) {
  $extensionSignature = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($namespace . '.' . $extkey);

  // === TCA ===

  // --- Slide Model ---

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3vstage_domain_model_slide', 'EXT:' . $extkey . '/Resources/Private/Language/locallang_csh_tx_t3vstage_domain_model_slide.xlf');
  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3vstage_domain_model_slide');

  // === Icons ===

  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
  );

  // --- Slider Content Element ---

  $iconIdentifier = 'slider_content_element';

  $iconRegistry->registerIcon(
    "{$extkey}-{$iconIdentifier}",
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "EXT:{$extkey}/Resources/Public/Icons/ContentElements/SliderContentElement.svg"]
  );

  // === TypoScript ===

  \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extkey, 'Configuration/TypoScript', 'T3v Stage');
}, 't3v', $_EXTKEY);