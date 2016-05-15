<?php
// $Id: views-view-list.tpl.php,v 1.3 2008/09/30 19:47:11 merlinofchaos Exp $
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>
<div class="container">
  <div class="col-6">
    <?php if (!empty($title)) : ?>
      <h3><?php print $title; ?></h3>
    <?php endif; ?>

    <?php foreach ($rows as $id => $row): ?>
      <section class="article-snippet"> <!-- <?php print $classes[$id]; ?> -->
        <?php print $row; ?>
      </section>
    <?php endforeach; ?>

  </div>
</div>