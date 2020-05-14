<?php
/**
 * BaseTemplate class for the Trove skin.
 * 
 * @file
 * @ingroup Skins
 */

class TroveTemplate extends BaseTemplate {

  /**
   * Outputs the entire contents of the page/
   */
  public function execute() { ?>
<!-- START OF PAGE -->
  <?php $this->html('headelement'); ?>
    <!-- BANNER -->
    <div id="trove-banner">
      <!-- BANNER SEARCH BUTTON -->
      <div id="trove-banner-search">
        <!-- TODO: Implement search button -->
      </div>
      <!-- BANNER MENU BUTTON -->
      <div id="trove-banner-menu">
        <!-- TODO: Implement menu button -->
      </div>
      <!-- BANNER LOGO/NAV BUTTON -->
      <div id="trove-banner-navigation">
        <!-- TODO: Implement main logo --->
      </div>
    </div>
    <!-- NAVIGATION -->
    <div id="trove-navigation">
      <!-- TODO: Implement navigation fetching -->
    </div>
    <!-- MENU -->
    <div id="trove-menu">
      <!-- TODO: Implement menu -->
    </div>
    <!-- SEARCH -->
    <div id="trove-search">
      <!-- TODO: Implement search form -->
    </div>
    <!-- PAGE CONTENT -->
    <div id="trove-page">
      <!-- ARTICLE HEADER -->
      <div id="trove-page-header">
        <!-- ARTICLE TITLE -->
        <h1 id="trove-header-title">
          <?php $this->html('title'); ?>
        </h1>
        <!-- EDIT BUTTON -->
        <div id="trove-header-editButton">
          <!-- TODO: Implement edit button -->
        </div>
        <!-- PAGE STATUS INDICATORS -->
        <?php echo $this->getIndicators(); ?>
      </div>
      <!-- TODO: Implement infobox handling -->
      <!-- ARTICLE CONTENT --->
      <?php $this->html('bodytext'); ?>
      <!-- ARTIClE CATEGORIES -->
      <?php $this->html('catlinks'); ?>
    </div>
  <?php $this->printTrail(); ?>
<!-- END OF PAGE -->
<?php
  }
}