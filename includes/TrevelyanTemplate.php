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
  public function execute() {
    $this->html('headelement');
?>

<!-- TODO: Implement skin here -->

<?php
    $this->printTrail();
?>

  </body>
</html>

<?php
  }
}