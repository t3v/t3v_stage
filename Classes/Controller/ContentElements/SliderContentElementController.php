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
    $settings = $this->settings;
    $uids     = $settings['slides'];
    $slides   = $this->slideRepository->findByUids($uids);

    $this->view->assign('settings', $settings);
    $this->view->assign('slides', $slides);
  }
}