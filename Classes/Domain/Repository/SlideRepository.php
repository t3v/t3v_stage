<?php
namespace T3v\T3vStage\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

use T3v\T3vCore\Domain\Repository\AbstractRepository;

/**
 * Slide Repository Class
 *
 * @package T3v\T3vStage\Domain\Repository
 */
class SlideRepository extends AbstractRepository {
  /**
   * The default orderings.
   *
   * @var array
   */
  protected $defaultOrderings = [
    'sorting' => QueryInterface::ORDER_ASCENDING
  ];
}