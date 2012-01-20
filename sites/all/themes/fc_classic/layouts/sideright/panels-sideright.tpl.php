<?php
/**
 * @file
 * Template for a 2 column panel layout w/ a right sidebar.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 */
?>
<div class="sideright clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="main-content">
    <div class="inside"><?php print $content['left']; ?></div>
  </div>

  <div class="side-content">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
</div>
