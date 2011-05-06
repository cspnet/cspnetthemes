<?php

/**
 * Implementation of phptemplate_page().
 */
function csp_theme_preprocess_page(&$vars) {
  global $user;

  if (arg(0) == 'node' && is_numeric(arg(1))) {
    $node = node_load(arg(1));
    $vars['html_title'] = check_markup($node->title);
    $clean_title = strip_tags($node->title);
    $vars['head_title'] = check_plain($clean_title);
  }
  
  $vars['logo'] = '/'. $vars['directory'] .'/images/csp-net.png';
  
  $header_menu = module_invoke('menu', 'block', 'view', 'menu-header-menu');
  $vars['header_menu'] = '<div id="header-menu"><div class="menu-wrapper clearfix">'. $header_menu['content'] .'</div></div>';

  if ($user->uid) {
    $header_links  = t('Welcome, !s', array('!s' => $user->name)) .' &nbsp;|&nbsp; ';
    $header_links .= l(t('My Account'), 'user') .' &nbsp;|&nbsp; ';
    $header_links .= l(t('Logout'), 'logout');
  }
  else {
    $header_links  = l(t('Login'), 'user') .' &nbsp;|&nbsp; ';
    $header_links .= l(t('Join Now'), 'user/register');
  }
  $vars['header_links'] = '<div class="text-links">'. $header_links .'</div>';
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
