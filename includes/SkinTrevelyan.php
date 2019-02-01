<?php
/**
 * SkinTemplate class for the Trevelyan skin.
 * 
 * @file
 * @ingroup Skins
 */

 class SkinTrevelyan extends SkinTemplate {

  var $skinname = 'trevelyan';
  var $stylename = 'Trevelyan';
  var $template = 'TrevelyanTemplate';
  var $useHeadElement = true;
  
  /**
   * This function adds JavaScript to the skin, via ResourceLoader.
   * 
   * @param OutputPage $out
   */
  public function initPage(OutputPage $out) {
    parent::initPage($out);
    $out->addModules('skins.trevelyan.js');
  }

  /**
   * Add CSS to the skin, via ResourceLoader.
   * 
   * @param OutputPage $out
   */
  function setupSkinUserCss(OutputPage $out) {
    parent::setupSkinUserCss($out);
    $out->addModuleStyles(array('mediawiki.skinning.interface', 'skins.trevelyan'));
  }
 }
