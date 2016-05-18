 <?php  $theme_path = drupal_get_path('theme', 'cyrano_lr'); include ($theme_path.'/includes/inc_header.php'); ?>
 <!-- ______________________ LAYOUT PAGE  SORTIES _______________________ -->
  <!-- ______________________ CONTENU _______________________ -->
  
      <div id="contentPage">
      
          <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top ): ?>
            <div id="content-top">
	<span id="ariane"> <?php print $breadcrumb; ?></span>

              <?php print $content_top; ?>
            </div> <!-- /#content-top -->

            <!-- ______________________ CONTENT TOP NODE_______________________ -->
               <?php if ($content_top_node): ?>
            <div id="content-top-node">
	              <?php print $content_top_node; ?>
            </div> <!-- /#content-top-node -->
            <?php endif; ?>             
            
            
      
         <!-- ______________________ CONTENT INNER _______________________ -->

        <div id="content-inner" class="inner column center">




          <?php if ($mission || $messages || $help || $tabs): ?>
            <div id="content-header">

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>
		  <!-- ______________________ CONTENU CENTRAL _______________________ -->
          <div id="middle-content-sortie">

           <?php print $content; ?>

              <?php print $feed_icons; ?>
          </div> <!-- /#content-area -->





      </div> <!-- /content-inner /content -->

    	 <br clear="all"/>
         <!-- ______________________ CONTENU BAS _______________________ -->
<?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
	 </div> <!-- /contentPage -->
	  
	  <?php  $theme_path = drupal_get_path('theme', 'cyrano_lr'); include ($theme_path.'/includes/inc_footer.php'); ?>
         <?php endif; ?>
     