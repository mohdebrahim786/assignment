<?php

/**
 * @file
 * Contains answer1.page.inc.
 *
 * Page callback for Answer1 entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Answer1 templates.
 *
 * Default template: answer1.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_answer1(array &$variables) {
  // Fetch Answer1 Entity Object.
  $answer1 = $variables['elements']['#answer1'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
