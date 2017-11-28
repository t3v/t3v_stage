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
   * The slide's abstract.
   *
   * @var string
   */
  protected $abstract;

  /**
   * The slide's text.
   *
   * @var string
   */
  protected $text;

  /**
   * The slide's thumbnails.
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   * @lazy
   * @cascade remove
   */
  protected $thumbnails;

  /**
   * The slide's images.
   *
   * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
   * @lazy
   * @cascade remove
   */
  protected $images;

  /**
   * The slide's link.
   *
   * @var string
   */
  protected $link;

  /**
   * Constructs a new slide.
   */
  public function __construct() {
    $this->thumbnails = new ObjectStorage();
    $this->images     = new ObjectStorage();
  }

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
   * Returns the slide's text.
   *
   * @return string The slide's text
   */
  public function getText() {
    return $this->text;
  }

  /**
   * Sets the slide's text.
   *
   * @param string $text The slide's text
   * @return void
   */
  public function setText($text) {
    $this->text = $text;
  }

  /**
   * Returns all thumbnails belonging to the slide.
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> The slide's thumbnails
   */
  public function getThumbnails() {
    return $this->thumbnails;
  }

  /**
   * Adds a thumbnail to the slide.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be added
   * @return void
   */
  public function addThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->attach($thumbnail);
  }

  /**
   * Removes a thumbnail from slide.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail The thumbnail to be removed
   * @return void
   */
  public function removeThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
    $this->thumbnails->detach($thumbnail);
  }

  /**
   * Removes all thumbnails from the slide.
   *
   * @return void
   */
  public function removeAllThumbnails() {
    $this->thumbnails = new ObjectStorage();
  }

  /**
   * Returns all images belonging to the slide.
   *
   * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> The slide's images
   */
  public function getImages() {
    return $this->images;
  }

  /**
   * Adds a image to the slide.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image The image to be added
   * @return void
   */
  public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
    $this->images->attach($image);
  }

  /**
   * Removes a image from slide.
   *
   * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image The image to be removed
   * @return void
   */
  public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
    $this->images->detach($image);
  }

  /**
   * Removes all images from the slide.
   *
   * @return void
   */
  public function removeAllImages() {
    $this->images = new ObjectStorage();
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