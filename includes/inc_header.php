<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <title><?php print $head_title; ?></title>
    <!--  _____META SEO_______ -->
    <meta name="google-site-verification" content="BcygBpeibR_udGKY5GKvsNmezztMGp_k2iZJS6au1JA" />
    <meta name="msvalidate.01" content="E2114447554473259DE0996EF11B87E0" />
    <meta name="y_key" content="ebe97757bb161b9c"/>
    <?php print $head; ?>
    <?php print $styles; ?>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>-->
    
    <?php // IMPORTANT : charger les librairies externes avant les scripts !! ?>
   <?php print $scripts; ?>
 
<!--    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">-->

    <!--<script src="<?php print $base_path . path_to_theme() ?>/js/typos.js" type="text/javascript" charset="utf-8"></script>-->
      
  </head>

 <body class="<?php print $body_classes; ?>">
 
	<div id="general">
 
    <!-- ______________________ HEADER _______________________ -->
	 <div id="header">
	 
		<div id="header-inner">
	
        <div id="headHaut">
		
          <div id="logoHead">
	           <?php if (!empty($logo)): ?>
		           <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
	          <?php endif; ?>
	       </div>   
		   
         <div id="menuImg">
              <?php if (!empty($navStatic)): ?>
		           <?php print $navStatic; ?>
	          <?php endif; ?>
          </div>

          </div><!-- /headHaut -->
		 <div id="headBas">
		 
	<?php if (!empty($site_slogan)): ?>
            <div id="site-slogan">
	<?php print $site_slogan; ?>
            </div><!-- /site-slogan -->
            <?php endif; ?>


            <div id="headSearch">
		  <?php if (!empty($search_box)): ?>
		  <?php print $search_box ?>
		  <?php endif; ?>
		  </div><!-- /recherche -->

                  
          <div id="menuHead">
	        <?php if (!empty($menuDyn)): ?>
			   <?php print $menuDyn; ?>
            <?php endif; ?>

          </div><!-- /menuHead -->
		 
		  
		</div><!-- /headBas -->
          
        

     
      
      
	  </div> <!-- /header-inner -->
   </div> <!-- /header -->
