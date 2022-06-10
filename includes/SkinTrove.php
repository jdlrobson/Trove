<?php
/**
 * SkinTemplate class for the Trove skin.
 * 
 * @file
 * @ingroup Skins
 */

 class SkinTrove extends SkinTemplate {

  var $skinname = 'trove';
  var $stylename = 'Trove';
  var $template = 'TroveTemplate';
  var $useHeadElement = true;
  
  /**
   * This function adds JavaScript to the skin, via ResourceLoader.
   * 
   * @param OutputPage $out
   */
  public function initPage(OutputPage $out) {
    parent::initPage($out);
    $out->addModules('skins.trove.js');
    $out->addModuleStyles(array('mediawiki.skinning.interface', 'skins.trove'));
  }
 }
