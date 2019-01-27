<?php
/**
 * BaseTemplate class for the Trevelyan skin.
 * 
 * @file
 * @ingroup Skins
 */

class TrevelyanTemplate extends BaseTemplate {

  /**
   * Outputs the entire contents of the page/
   */
  public function execute() { ?>
<!-- START OF PAGE -->
  <?php $this->html('headelement'); ?>
    <!-- BANNER -->
    <div if="trevelyan-banner">

    </div>
    <!-- NAVIGATIOn -->
    <div id="trevelyan-navigation">

    </div>
    <!-- MENU -->
    <div id="trevelyan-menu">

    </div>
    <!-- SEARCH -->
    <div id="trevelyan-search">

    </div>
    <!-- PAGE CONTENT -->
    <div if="trevelyan-page">
      
    </div>
  <?php $this->printTrail(); ?>
<!-- END OF PAGE -->
<?php
  }
}