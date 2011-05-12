<?php
// $Id: page-footer.tpl.php,v 1.1.2.2 2010/07/22 22:01:38 tirdadc Exp $
/**
 * @file page-footer.tpl.php
 * Footer template.
 *
 * For the list of available variables, please see: page.tpl.php
 *
 * @ingroup page
 */
?>

      </div> <!-- /#container -->
      <span class="clear"></span>
    </div> <!-- /#wrapper -->
 
        <div class="clear"></div>	
         	
        <div id="footer" class="clearfix clear">
          <div id="footer-sponsors">
            <div class="footer-wrapper">
            
            </div>
          </div>
          <div id="footer-brand">
            <div class="footer-wrapper">
              <a href="#" class="top"><?php print t('Back to Top'); ?></a><br />
              <a href="/"><?php print t('Home'); ?></a>
            </div>
          </div>
          <div class="footer-wrapper clearfix clear">
            <div class="footer-message">
              <?php print $footer . $footer_message ?>   
            </div>
          </div>     
        </div> <!-- /#footer -->
 
  </div> <!-- /#outer-wrapper -->
  <!-- /layout -->
  <?php print $closure ?>
</body>
</html>
