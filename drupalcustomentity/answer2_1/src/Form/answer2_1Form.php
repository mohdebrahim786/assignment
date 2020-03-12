<?php

namespace Drupal\answer2_1\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class answer2_1Form.
 */
class answer2_1Form extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $answer2_1 = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('customer'),
      '#maxlength' => 255,
      '#default_value' => $answer2_1->label(),
      '#description' => $this->t("Label for the Answer2_1."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $answer2_1->id(),
      '#machine_name' => [
        'exists' => '\Drupal\answer2_1\Entity\answer2_1::load',
      ],
      '#disabled' => !$answer2_1->isNew(),
    ];
    $form['timeslot'] = [
      '#type' => 'select',
      '#options'=>[1=>'Time slot -1 (9:00 Am - 11:00 Am)' ,2=>'Time slot - 2( 11:00 Am - 2:00 pm)',3=>'Time slot -3 (2:00 pm - 5:00 pm)' ],
      '#title' => 'Timeslot',
      // '#default_value' => $detailcustomer->timeslot(),
      // '#machine_name' => [
      // 'exists' => '\Drupal\seecont\Entity\detailcustomer::load',
      // ],
      // '#disabled' => !$detailcustomer->isNew(),
      ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $answer2_1 = $this->entity;
    $status = $answer2_1->save();

    switch ($status) {
      case SAVED_NEW:
        $this->messenger()->addMessage($this->t('Created the %label Answer2_1.', [
          '%label' => $answer2_1->label(),
        ]));
        break;

      default:
        $this->messenger()->addMessage($this->t('Saved the %label Answer2_1.', [
          '%label' => $answer2_1->label(),
        ]));
    }
    $form_state->setRedirectUrl($answer2_1->toUrl('collection'));
  }

}
