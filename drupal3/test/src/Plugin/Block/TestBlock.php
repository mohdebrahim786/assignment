<?php

namespace Drupal\test\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
* Provides a 'Check Block' block.
*
* @Block(
*   id = "check_feasibility_block",
*   admin_label = @Translation("Check Block"),
*   category = @Translation("Custom")
* )
*/
class TestBlock extends BlockBase {

/**
* {@inheritdoc}
*/
public function build() {
//     return [
//       '#markup' => $this->t('Hello, World!'),
//     ];
$url = '<table><tr><th>Name</th><th>Id</th></tr>';
      $query = \Drupal::entityQuery('node')->condition('status', 1);
       $nids = $query->execute();
       foreach ($nids as $nid) {
          $node = \Drupal\node\Entity\Node::load($nid); 
          $body = $node->field_employee_id->value;
          $title = $node->field_employee_name->value;
          $url .= '<tr><td>'.$title.'</td><td>'.$body.'</td></tr>';
          // kint($node);
       } 
       $url .= '</table>'; 
       return [
      '#type' => 'markup',
      '#markup' => $url,
    ];
}


}