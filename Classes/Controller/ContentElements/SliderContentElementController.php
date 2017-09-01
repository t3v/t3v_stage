<?php
namespace T3v\T3vStage\Controller\ContentElements;

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
    $settings   = $this->settings;
    $uids       = $settings['slides'];
    $slides     = $this->slideRepository->findByUids($uids);
    $responsive = $settings['responsive'];

    $settings['responsive'] = $this->sortResponsiveSettingsByMinWidth($responsive, 'minWidth');

    $this->view->assign('settings', $settings);
    $this->view->assign('slides', $slides);
  }

  /**
   * Helper function to sort the responsive settings by minimum width.
   *
   * @param array $settings The responsive settings
   * @return array The sorted responsive settings by minimum width
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