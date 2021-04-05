<?php

namespace Drupal\module_hero;

use Drupal;
use Drupal\webprofiler\Entity\EntityManagerWrapper;

/**
 * Our hero article service class.
 */
class HeroArticleService {

  private $entityManager;

  public function __construct(EntityManagerWrapper $entityManager) {
    $this->entityManager = $entityManager;
  }

  /**
   * Method for getting Articles, regarding heroes.
   */
  public function getHeroArticles() {
    $query = Drupal::entityQuery('node')
      ->condition('type', 'article')
      ->condition('status', 1)
      ->sort('title')
      ->execute();

    return $this->entityManager->getStorage('node')->loadMultiple($query);
  }
}

