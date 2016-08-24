<?php

/**
 * @file
 * Contains \Drupal\ckeditor_liststyle\Plugin\CKEditorPlugin\ListStylePlugin.
 */

namespace Drupal\ckeditor_liststyle\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "List Style" plugin.
 *
 * @CKEditorPlugin(
 *   id = "liststyle",
 *   label = @Translation("List Style"),
 * )
 */
class ListStylePlugin extends CKEditorPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return ['dialog', 'contextmenu'];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return base_path() . 'libraries/liststyle/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
