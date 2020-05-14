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
  }

  /**
   * Add CSS to the skin, via ResourceLoader.
   * 
   * @param OutputPage $out
   */
  function setupSkinUserCss(OutputPage $out) {
    parent::setupSkinUserCss($out);
    $out->addModuleStyles(array('mediawiki.skinning.interface', 'skins.trove'));
  }
 }
