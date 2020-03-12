<?php

namespace Drupal\answer1\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Answer1 entities.
 */
class Answer1ViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
