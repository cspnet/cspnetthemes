<?php
// $Id: page-header.tpl.php,v 1.1.2.15 2010/12/01 18:00:38 tirdadc Exp $
/**
 * @file page-header.tpl.php
 * Header template.
 *
 * For the list of available variables, please see: page.tpl.php
 *
 * @ingroup page
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html 
     xmlns="http://www.w3.org/1999/xhtml"      
     xmlns:dc="http://purl.org/dc/terms/" 
     xmlns:dcmitype="http://purl.org/dc/terms/DCMIType/"
     xmlns:ctag="http://commontag.org/ns#"
     xmlns:foaf="http://xmlns.com/foaf/0.1/"      
     xmlns:v="http://rdf.data-vocabulary.org/#"
     xmlns:fb="http://www.facebook.com/2008/fbml"
     lang="<?php print $language->language; ?>" 
     dir="<?php print $language->dir; ?>"
     version="XHTML+RDFa 1.0" >
<head>
  <title><?php print $head_title ?></title>
  <?php print $op_head; ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <!--[if gte IE 6]><?php print openpublish_get_ie_styles(); ?><![endif]-->  
  <!--[if IE 6]><?php print openpublish_get_ie6_styles(); ?><![endif]-->
</head>

<body <?php print openpublish_body_classes($left, $right, $body_classes); ?> >
  <?php if (!empty($admin)) print $admin; ?>

  <div id="ad-wrapper">
    <div id="ad-inner-wrapper">
      <?php print $header; ?>   
      <div class="clear"></div>
    </div>
  </div>

  <div id="outer-wrapper"> 
  <div id="wrapper">    	

  <div id="menu-wrapper" class="clearfix">
    <div id="logo-area" class="clearfix">	    
      <div id="logo"><a href="<?php print check_url($front_page); ?>" title="<?php print check_plain($site_name); ?>"><img src="<?php print check_url($logo); ?>" alt="<?php print check_plain($site_name); ?>" /></a></div>
    </div>
    
    <?php print $header_menu; ?>

    <div id="header-links">
      <a href="#" class="image-link twitter" title="Twitter"></a>
      <a href="#" class="image-link linkedin" title="LinkedIn"></a>
      <a href="#" class="image-link facebook" title="Facebook"></a>
      <?php print $header_links; ?>
    </div>
  </div>
  
  <div id="nav-search-wrapper">
    <div id="nav" class="clearfix">
      <?php if (isset($expanded_primary_links)): ?>
        <?php print theme('openpublish_menu', $expanded_primary_links); ?>
      <?php else: ?> 
        <?php if (isset($primary_links)) : ?>
          <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
        <?php endif; ?>
        <?php if (isset($secondary_links)) : ?>
          <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
        <?php endif; ?>
      <?php endif; ?>      
    </div> <!-- /#nav -->
    <div id="search_box_top" class="clearfix">
      <?php if ($search_box): ?><?php print $search_box; ?><?php endif; ?>
    </div>
    <div class="nav-bg"></div>
  </div>
  
  <div class="clear"></div>	
  <div id="container" class="clearfix">