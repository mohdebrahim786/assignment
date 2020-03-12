<?php

namespace Drupal\answer1\Entity;

use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityChangedTrait;
use Drupal\Core\Entity\EntityPublishedTrait;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Defines the Answer1 entity.
 *
 * @ingroup answer1
 *
 * @ContentEntityType(
 *   id = "answer1",
 *   label = @Translation("Answer1"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\answer1\Answer1ListBuilder",
 *     "views_data" = "Drupal\answer1\Entity\Answer1ViewsData",
 *
 *     "form" = {
 *       "default" = "Drupal\answer1\Form\Answer1Form",
 *       "add" = "Drupal\answer1\Form\Answer1Form",
 *       "edit" = "Drupal\answer1\Form\Answer1Form",
 *       "delete" = "Drupal\answer1\Form\Answer1DeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\answer1\Answer1HtmlRouteProvider",
 *     },
 *     "access" = "Drupal\answer1\Answer1AccessControlHandler",
 *   },
 *   base_table = "answer1",
 *   translatable = FALSE,
 *   admin_permission = "administer answer1 entities",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name",
 *     "uuid" = "uuid",
 *     "langcode" = "langcode",
 *     "published" = "status",
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/answer1/{answer1}",
 *     "add-form" = "/admin/structure/answer1/add",
 *     "edit-form" = "/admin/structure/answer1/{answer1}/edit",
 *     "delete-form" = "/admin/structure/answer1/{answer1}/delete",
 *     "collection" = "/admin/structure/answer1",
 *   },
 *   field_ui_base_route = "answer1.settings"
 * )
 */
class Answer1 extends ContentEntityBase implements Answer1Interface {

  use EntityChangedTrait;
  use EntityPublishedTrait;

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return $this->get('name')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setName($name) {
    $this->set('name', $name);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function setCreatedTime($timestamp) {
    $this->set('created', $timestamp);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    // Add the published field.
    $fields += static::publishedBaseFieldDefinitions($entity_type);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setDescription(t('The name of the Answer1 entity.'))
      ->setSettings([
        'max_length' => 50,
        'text_processing' => 0,
      ])
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'string',
        'weight' => -4,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -4,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

      $fields['email'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Email'))
      ->setDescription(t('The name of the Answer1 entity.'))
      ->setSettings([
        'max_length' => 50,
        'text_processing' => 0,
      ])
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'string',
        'weight' => -4,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -4,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);

      $fields['contact'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Contact'))
      ->setDescription(t('The name of the Answer1 entity.'))
      ->setSettings([
        'max_length' => 50,
        'text_processing' => 0,
      ])
      ->setDefaultValue('')
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'integer',
        'weight' => -4,
      ])
      ->setDisplayOptions('form', [
        'type' => 'integer',
        'weight' => -4,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setRequired(TRUE);


    $fields['status']->setDescription(t('A boolean indicating whether the Answer1 is published.'))
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'weight' => -3,
      ]);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed'))
      ->setDescription(t('The time that the entity was last edited.'));

    return $fields;
  }

}
