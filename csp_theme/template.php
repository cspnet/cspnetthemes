<?php

/**
 * Implementation of phptemplate_page().
 */
function csp_theme_preprocess_page(&$vars) {
  if (arg(0) == 'node' && is_numeric(arg(1))) {
    $node = node_load(arg(1));
    $vars['html_title'] = check_markup($node->title);
    $clean_title = strip_tags($node->title);
    $vars['head_title'] = check_plain($clean_title);
  }
  
  $vars['logo'] = '/'. $vars['directory'] .'/images/csp-net.png';
  
  $header_menu = module_invoke('menu', 'block', 'view', 'menu-header-menu');
  $vars['header_menu'] = '<div id="header-menu"><div class="menu-wrapper clearfix">'. $header_menu['content'] .'</div></div>';
}

/**
 * Implementation of theme_menu_item_link().
 */
function csp_theme_menu_item_link($link) {
  if (empty($link['localized_options'])) {
    $link['localized_options'] = array();
  }
  
  // For the header menu items, we display the link description
  // in the display of the link.
  if ($link['menu_name'] == 'menu-header-menu') {
    $link['localized_options']['html'] = TRUE;
    return l($link['title'] .'<span>'. $link['localized_options']['attributes']['title'] .'</span>', $link['href'], $link['localized_options']);
  }
  
  // Otherwise return a normal link.
  else {
    return l($link['title'], $link['href'], $link['localized_options']);
  }
}
