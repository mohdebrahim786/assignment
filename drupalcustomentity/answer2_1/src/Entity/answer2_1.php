<?php

namespace Drupal\answer2_1\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;

/**
 * Defines the Answer2_1 entity.
 *
 * @ConfigEntityType(
 *   id = "answer2_1",
 *   label = @Translation("Answer2_1"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\answer2_1\answer2_1ListBuilder",
 *     "form" = {
 *       "add" = "Drupal\answer2_1\Form\answer2_1Form",
 *       "edit" = "Drupal\answer2_1\Form\answer2_1Form",
 *       "delete" = "Drupal\answer2_1\Form\answer2_1DeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\answer2_1\answer2_1HtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "answer2_1",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/answer2_1/{answer2_1}",
 *     "add-form" = "/admin/structure/answer2_1/add",
 *     "edit-form" = "/admin/structure/answer2_1/{answer2_1}/edit",
 *     "delete-form" = "/admin/structure/answer2_1/{answer2_1}/delete",
 *     "collection" = "/admin/structure/answer2_1"
 *   }
 * )
 */
class answer2_1 extends ConfigEntityBase implements answer2_1Interface {

  /**
   * The Answer2_1 ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Answer2_1 label.
   *
   * @var string
   */
  protected $label;

}
