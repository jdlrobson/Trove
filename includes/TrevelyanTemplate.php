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
    <div id="trevelyan-banner">
      <!-- BANNER SEARCH BUTTON -->
      <div id="trevelyan-banner-search">
        <!-- TODO: Implement search button -->
      </div>
      <!-- BANNER LOGO/NAV BUTTON -->
      <div id="trevelyan-banner-navigation">
        <!-- TODO: Implement main logo --->
      </div>
      <!-- BANNER MENU BUTTON -->
      <div id="trevelyan-banner-menu">
        <!-- TODO: Implement menu button -->
      </div>
    </div>
    <!-- NAVIGATION -->
    <div id="trevelyan-navigation">
      <!-- TODO: Implement navigation fetching -->
    </div>
    <!-- MENU -->
    <div id="trevelyan-menu">
      <!-- TODO: Implement menu -->
    </div>
    <!-- SEARCH -->
    <div id="trevelyan-search">
      <!-- TODO: Implement search form -->
    </div>
    <!-- PAGE CONTENT -->
    <div id="trevelyan-page">
      <!-- ARTICLE HEADER -->
      <div id="trevelyan-page-header">
        <!-- ARTICLE TITLE -->
        <h1 id="trevelyan-header-title">
          <?php $this->html('title'); ?>
        </h1>
        <!-- EDIT BUTTON -->
        <div id="trevelyan-header-editButton">
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