<?php

namespace Drupal\answer1;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Answer1 entity.
 *
 * @see \Drupal\answer1\Entity\Answer1.
 */
class Answer1AccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\answer1\Entity\Answer1Interface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished answer1 entities');
        }


        return AccessResult::allowedIfHasPermission($account, 'view published answer1 entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit answer1 entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete answer1 entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add answer1 entities');
  }


}
