<!-- ______________________ CUSTOM NODE.TPL POUR FICHE FORMATION _______________________ -->
<!-- ______________________ COLONNE GAUCHE _______________________ -->


         <div id="left-content-fiche-formations">
              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>
                <br clear="all"/>
                <?php if ($node->field_complement_info_formation[0]['view']): ?>

                <div class="complement_titre_fiche"><?php  (print $node->field_complement_info_formation[0]['view']); /*Info complementaire sur formation*/ ?></div>

            <?php endif; ?>

                <div id="diapo_fiche">
                   <?php //foreach ((array)$node->field_diapo_deco as $item){ ?>
                    <?php //print $item['view'] ?>
                    <?php //} ?>
                    <?php //if ($node->field_diapo_deco[0]['view']): ?>
                        <?php //print $node->field_diapo_deco[0]['view'] ?>
                    <?php //endif; ?>    
                    
                          <?php //affichage diaporama views inclue via CCK
                          if ($node->field_diapo_ficheform[0]['view']): ?>
                        <?php print $node->field_diapo_ficheform[0]['view'] ?>
                    <?php endif; ?>  
                </div>
                
                  
                
                
                <?php if ($node-> field_programme_formation[0]['view'] ):?>
                <div id="programme">
                <?php  print $node->content['field_programme_formation']['field']['#title'] ?>
                <?php print $node-> field_programme_formation[0]['view'] ?>
                </div> 
               <?php endif; ?>
                
                    <?php
                    /* 06/2015 Liste les fichiers à partir du tableau créé
                     * création d'une liste dynamique 
                     */
                    if (!empty($node->field_lien_ficheform[0]['view'])): ?>
                <div class="lien-ficheform">
               <?php  print $node->content['field_lien_ficheform']['field']['#title'] ?>
                    <ul>
               <?php
               foreach ($node->field_lien_ficheform as $key => $lien) {
                    print '<li>'.$node->field_lien_ficheform[$key]['view'].'</li>';
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>
                
           

                <?php //if ($left): ?>
                    <?php //print $left; ?>
                <?php //endif; ?>
          </div>
             <!-- /sidebar-left -->

		<!--fin du contenu gauche -->


            <!-- ____________LAYOUT NODE FICHE FORMATION____-->
             <!-- ______________________ CONTENU CENTRAL _______________________ -->
          <div id="middle-content-fiche-formations">
          

<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">

    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>

    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
      <?php //print $content; ?>
<?php print $node->content['body']['#value'] ?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->

          </div> <!-- /#content-area -->
<?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>
<!--           </div>  /content-inner /content -->