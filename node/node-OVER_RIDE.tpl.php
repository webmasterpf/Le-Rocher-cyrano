<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
      
        <div id="colonne-1" class="CHOIX_DU_LAYOUT">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
        
            <?php 
  $theme_path = drupal_get_path('theme', 'NOM_THEME');
include($theme_path .'/includes/inc_region_col_1.php');
?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="CHOIX_DU_LAYOUT">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
 <?php 
  $theme_path = drupal_get_path('theme', 'NOM_THEME');
include($theme_path .'/includes/inc_region_col_2.php');
?>
            
        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>
        </div>

        <!--______________COLONNE 3________________ -->
        <div id="colonne-3" class="CHOIX_DU_LAYOUT">
            <!--***********!!!!!!  EXEMPLE DE CHAMP CCK INCLUS AVEC CONDITION !!!!!!!!************ -->
            <?php if ($node->nom_du_champ[0]['view']): ?>
            <div class="nom-css">
                    <?php  print $node->nom_du_champ[0]['view']  ?>
            </div>
            <?php endif;?>
            
            SI CHAMP ITEMS MULTIPLES (fichiers,..) **
             <?php if (!empty($node->nom_du_champ[0]['view'])): ?>
           <div class="nom-css">
               <?php
               foreach ($node->nom_du_champ as $key => $TYPE_CONTENU) {
                   print $node->nom_du_champ[$key]['view'];
               }
               ?>            
           </div>
            <?php endif;?>
 <?php 
  $theme_path = drupal_get_path('theme', 'NOM_THEME');
include($theme_path .'/includes/inc_region_col_3.php');
?>

        </div>


    </div> <!-- /node-inner -->
</div> <!-- /node-->