<?php
/**
 * @file
 * Implementation of a panels grid ready layout.
 *
 * Available variables:
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 * - $css_id: unique id if present.
 */
?>
<div class="panel-display grid-ready two-brick-three clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['two_brick_top']): ?>
  <div id="two-brick-top-wrapper" class="fullwidth">
      <div class="region region-top region-conditional-stack">
        <div class="region-inner clearfix">
          <?php print $content['two_brick_top']; ?>
        </div>
      </div>
  </div>
  <?php endif; ?>
  <?php if ($content['two_brick_top_middle']): ?>
  <div id="two-brick-top-middle-wrapper" class="fullwidth">
    <div class="container">
      <div class="region region-top-middle region-conditional-stack">
        <div class="region-inner clearfix">
          <?php print $content['two_brick_top_middle']; ?>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($content['two_brick_middle']): ?>
    <div id="two-brick-middle-wrapper" class="fullwidth">
      <div class="container">
        <div class="region region-middle region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['two_brick_middle']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div id="two-brick-below-wrapper" class="fullwidth">
    <div class="container">
      <?php if ($content['two_brick_left_below']): ?>
        <div class="region region-left-below">
        <div class="region-inner clearfix">
          <?php print $content['two_brick_left_below']; ?>
        </div>
      </div>
      <?php endif; ?>
      <?php if ($content['two_brick_right_below']): ?>
        <div class="region region-right-below">
        <div class="region-inner clearfix">
          <?php print $content['two_brick_right_below']; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <?php if ($content['two_brick_bottom']): ?>
    <div id="two-brick-bottom-wrapper" class="fullwidth">
      <div class="container">
        <div class="region region-bottom region-conditional-stack">
          <div class="region-inner clearfix">
            <?php print $content['two_brick_bottom']; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
