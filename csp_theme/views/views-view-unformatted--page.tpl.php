<?php
  $plugin = context_get_plugin('reaction', 'block');
  $inline = $plugin->execute('inline');
?>

<?php if (!empty($title)): ?>
  <h2><?php print $title; ?></h2>
<?php endif; ?>

<?php
  $count = 0;
  foreach ($rows as $id => $row) {
    if (!empty($inline) && $count == 2) {
      print '<div class="inline-banner clearfix">'. $inline .'</div>';
    }

    $class = ($id) ? $classes[$id] : 'clearfix';
    print '<div about="'. $rdfa_about_links[$id] .'" class="'. $class .'">';
    print $row;
    print '</div>';

    if (stripos($classes[$id],'views-row-last') === false) {
      print '<div class="views-separator"></div>';
    }  

    $count++;
  }
?>