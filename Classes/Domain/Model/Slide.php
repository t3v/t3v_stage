<?php
namespace T3v\T3vStage\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Slide Class
 *
 * @package T3v\T3vStage\Domain\Model
 */
class Slide extends AbstractModel {
  /**
   * The slide's title.
   *
   * @var string
   */
  protected $title;

  /**
   * The slide's header.
   *
   * @var string
   */
  protected $header;

  /**
   * The slide's abstract.
   *
   * @var string
   */
  protected $abstract;

  /**
   * The slide's image.
   *
   * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
   */
  protected $image;

  /**
   * The slide's link.
   *
   * @var string
   */
  protected $link;

  /**
   * Returns the slide's title.
   *
   * @return string The slide's title
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Sets the slide's title.
   *
   * @param string $title The slide's title
   * @return void
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Returns the slide's header.
   *
   * @return string The slide's header
   */
  public function getHeader() {
    return $this->header;
  }

  /**
   * Sets the slide's header.
   *
   * @param string $header The slide's header
   * @return void
   */
  public function setHeader($header) {
    $this->header = $header;
  }

  /**
   * Returns the slide's abstract.
   *
   * @return string The slide's abstract
   */
  public function getAbstract() {
    return $this->abstract;
  }

  /**
   * Sets the slide's abstract.
   *
   * @param string $abstract The slide's abstract
   * @return void
   */
  public function setAbstract($abstract) {
    $this->abstract = $abstract;
  }

  /**
   * Returns the slide's image.
   *
   * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference The slide's image
   */
  public function getImage() {
    return $this->image;
  }

  /**
   * Sets the slide's image.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image The slide's image
   * @return void
   */
  public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
    $this->image = $image;
  }

  /**
   * Returns the slide's link.
   *
   * @return string The slide's link
   */
  public function getLink() {
    return $this->link;
  }

  /**
   * Sets the slide's link.
   *
   * @param string $link The slide's link
   * @return void
   */
  public function setLink($link) {
    $this->link = $link;
  }
}