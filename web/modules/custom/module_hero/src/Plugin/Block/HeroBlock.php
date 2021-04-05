<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block called "Example hero block".
 *
 * @Block(
 *  id = "module_hero_hero",
 *  admin_label = @Translation("Example hero block")
 * )
 */
class HeroBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $heroes = [
      ['hero_name' => 'Thor', 'real_name' => 'Vasilije'],
      ['hero_name' => 'Captain America', 'real_name' => 'Nick'],
      ['hero_name' => 'Wolverine', 'real_name' => 'Dimitry'],
      ['hero_name' => 'Phoenix', 'real_name' => 'Vasilije'],
      ['hero_name' => 'Wonder Woman', 'real_name' => 'Sara'],
      ['hero_name' => 'Batman', 'real_name' => 'Miki'],
      ['hero_name' => 'Superman', 'real_name' => 'Lean'],
      ['hero_name' => 'Spider-Man', 'real_name' => 'Rony']
    ];

    $table = [
      '#type' => 'table',
      '#header' => [
        $this->t('Hero name'),
        $this->t('Real name')
      ]
    ];

    foreach ($heroes as $hero) {
      $table[] = [
        'hero_name' => [
          '#type' => 'markup',
          '#markup' => $hero['hero_name']
        ],
        'real_name' => [
          '#type' => 'markup',
          '#markup' => $hero['real_name']
        ]
      ];
    }

    return $table;
  }

}
