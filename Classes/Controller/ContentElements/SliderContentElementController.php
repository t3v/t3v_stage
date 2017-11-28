<?php
namespace T3v\T3vStage\Controller\ContentElements;

use TYPO3\CMS\Core\Utility\GeneralUtility;

use T3v\T3vContent\Controller\ContentElements\ContentElementController;

use T3v\T3vStage\Domain\Repository\SlideRepository;

/**
 * Slider Content Element Controller Class
 *
 * @package T3v\T3vStage\Controller\ContentElements
 */
class SliderContentElementController extends ContentElementController {
  /**
   * The slide repository.
   *
   * @var \T3v\T3vStage\Domain\Repository\SlideRepository
   * @inject
   */
  protected $slideRepository;

  /**
   * The index action.
   *
   * @return void
   */
  public function indexAction() {
    $settings = $this->settings;
    $slides   = $this->getSlidesFromSettings($settings);

    $responsiveSettings = $settings['responsive'];

    if (!empty($responsiveSettings)) {
      $settings['responsive'] = $this->sortResponsiveSettingsByMinWidth($responsiveSettings);
    }

    $this->view->assign('settings', $settings);
    $this->view->assign('slides', $slides);
  }

  /**
   * Helper function to get slides from settings.
   *
   * @param array $settings The settings
   * @return array The slides
   */
  protected function getSlidesFromSettings($settings) {
    $slides     = [];
    $slidesUids = GeneralUtility::intExplode(',', $settings['slides'], true);

    foreach($slidesUids as $uid) {
      $slide = $this->slideRepository->findByUid($uid);

      if ($slide) {
        $slides[] = $slide;
      }
    }

    return $slides;
  }

  /**
   * Helper function to sort the responsive settings by minimum width.
   *
   * @param array $settings The responsive settings
   * @return array The by minimum width sorted responsive settings
   */
  protected function sortResponsiveSettingsByMinWidth($settings) {
    if (!empty($settings)) {
      usort($settings, function ($setting1, $setting2) {
        $minWidth1 = $setting1['breakpoint']['minWidth'];
        $minWidth2 = $setting2['breakpoint']['minWidth'];

        return $minWidth1 <=> $minWidth2;
      });
    }

    return $settings;
  }
}