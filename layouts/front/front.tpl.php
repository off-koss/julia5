<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a very simple "one column" panel display layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   $content['middle']: The only panel in the layout.
 */
?>
<div <?php !empty($css_id) ? print 'id="' . $css_id . '"' : ''; ?>>
  <div class="wide">
    <?php print $content['wide']; ?>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <?php print $content['middle']; ?>
    </div>
  </div>
</div>
