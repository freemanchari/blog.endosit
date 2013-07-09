 <div id="tabvanilla">
	
	 <ul class="tabnav">
                <li><a href="#popular">Popular</a></li>
                <li><a href="#archives">Recent</a></li>
                <li><a href="#tags">Random</a></li>
     </ul>

           <div id="popular" class="tabdiv widget">
                <ul>
						<?php query_posts('posts_per_page=5&orderby=comment_count'); ?>

<?php if (have_posts()) : ?>



		<?php while (have_posts()) : the_post(); ?>
					<li><?php flr_sidethumb_image()?><a href="<?php the_permalink() ?>"" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a> </li>
													<?php endwhile; ?>

							    <?php else : ?>



	<?php endif; ?>		
                </ul>
            </div><!--/popular-->
            
            <div id="archives" class="tabdiv widget">
	                            <ul>
						<?php query_posts('posts_per_page=5'); ?>

<?php if (have_posts()) : ?>



		<?php while (have_posts()) : the_post(); ?>
					<li><?php flr_sidethumb_image()?><a href="<?php the_permalink() ?>"" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a> </li>
													<?php endwhile; ?>

							    <?php else : ?>



	<?php endif; ?>		
                </ul>
            </div><!--/recent-->
           
           <div id="tags" class="tabdiv widget">
                <ul>
						<?php query_posts('posts_per_page=5&orderby=rand'); ?>

<?php if (have_posts()) : ?>



		<?php while (have_posts()) : the_post(); ?>
					<li><?php flr_sidethumb_image()?><a href="<?php the_permalink() ?>"" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a> </li>
													<?php endwhile; ?>

							    <?php else : ?>



	<?php endif; ?>		
                </ul>
            </div><!--/tags-->
                
  </div><!--tab-->