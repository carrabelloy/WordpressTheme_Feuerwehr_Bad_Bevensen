<?php get_header(); ?>
 
   <div id="main">
      <div class="lay_base background_pattern_002"></div>
      <div class="lay_base shadow_001"></div>


      <div class="container_12">
         <div id="content" class="grid_8">
            <?php if (have_posts()) : ?>
               <p class="info">Deine Suchergebnisse f&uuml;r <strong><?php echo $s ?></strong></p>
               <?php while (have_posts()) : the_post(); ?>
                  <div id="boxdesign_001" class="boxes">
                     <div class="container_box_pieces">
                        <div class="box_top_left"></div>
                        <div class="box_top_center"></div>
                        <div class="box_top_right">
                           <div class="box_token"></div>
                        </div>
                        <div class="box_middle_left"></div>
                        <div class="box_content">
                           <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a ></h2>     
                           <div class="entry">
                              <?php the_content(); ?> 
                           </div>
                        </div>
                        <div class="box_middle_right"></div>
                        <div class="box_bottom_left"></div>
                        <div class="box_bottom_center"></div>
                        <div class="box_bottom_right"></div>
                     </div>
                  </div>
               <?php endwhile; ?>
               <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
            <?php else : ?>
               <h2 class="info">Leider nichts gefunden</h2>
            <?php endif; ?>
         </div><!-- content -->
         <div id="sidebar" class="grid_4">
            <?php dynamic_sidebar( 'sidebar_right' ); ?>
         </div><!-- sidebar --> 
      </div>
   </div> <!-- main -->

   <div class="bar_seperator main_seperator"></div>
 
<?php get_footer(); ?>