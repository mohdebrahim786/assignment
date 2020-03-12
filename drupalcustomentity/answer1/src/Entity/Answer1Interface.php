<?php

namespace Drupal\answer1\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;

/**
 * Provides an interface for defining Answer1 entities.
 *
 * @ingroup answer1
 */
interface Answer1Interface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Answer1 name.
   *
   * @return string
   *   Name of the Answer1.
   */
  public function getName();

  /**
   * Sets the Answer1 name.
   *
   * @param string $name
   *   The Answer1 name.
   *
   * @return \Drupal\answer1\Entity\Answer1Interface
   *   The called Answer1 entity.
   */
  public function setName($name);

  /**
   * Gets the Answer1 creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Answer1.
   */
  public function getCreatedTime();

  /**
   * Sets the Answer1 creation timestamp.
   *
   * @param int $timestamp
   *   The Answer1 creation timestamp.
   *
   * @return \Drupal\answer1\Entity\Answer1Interface
   *   The called Answer1 entity.
   */
  public function setCreatedTime($timestamp);

}
