<?php get_header(); ?>

   <div id="main">
      <div class="lay_base background_pattern_002"></div>
      <div class="lay_base shadow_001"></div>

      <div class="container_12">
         <?php if (have_posts()): ?>
            <div id="content" class="grid_12">
            <div id="boxdesign_001" class="boxes">
               <div class="container_box_pieces">
                  <div class="box_top_left"></div>
                  <div class="box_top_center"></div>
                  <div class="box_top_right">
                     <div class="box_token"></div>
                  </div>
                  <div class="box_middle_left"></div>
                  <div class="box_content">
                     <?php while (have_posts()) : the_post(); ?>
                     <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                     <div id="meta">
                        <p>erstellt am: <?php the_date('d.m.Y'); ?> |
                        von: <?php the_author(); ?> |
                        Kategorie(n): <?php the_category(', '); ?></p>
                     </div>
                     <div class="entry">
                        <?php the_content(); ?>
                     </div>
                     <?php endwhile; ?>
                        <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
                  </div>
                  <div class="box_middle_right"></div>
                  <div class="box_bottom_left"></div>
                  <div class="box_bottom_center"></div>
                  <div class="box_bottom_right"></div>
               </div>
            </div>
         </div>
         <?php endif; ?>

         <div id="content" class="grid_8">
            <div id="boxdesign_001" class="boxes">
               <div class="container_box_pieces">
                  <div class="box_top_left"></div>
                  <div class="box_top_center"></div>
                  <div class="box_top_right"></div>
                  <div class="box_middle_left"></div>
                  <div class="box_content">
                     <?php comments_template(); ?>
                  </div>
                  <div class="box_middle_right"></div>
                  <div class="box_bottom_left"></div>
                  <div class="box_bottom_center"></div>
                  <div class="box_bottom_right"></div>
               </div>
            </div>
         </div><!-- content -->
         <div id="sidebar" class="grid_4">
            <?php dynamic_sidebar( 'sidebar_right' ); ?>
         </div><!-- sidebar --> 
      </div> <!-- main -->
      <div class="bar_seperator main_seperator"></div>
      
   </div><!-- main -->

 <?php get_footer(); ?>