<?php
/*
 * Template Name: custom landing page KJP
 * */

get_header(); ?>
<article>
<div id="content" class="widecolumn">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="post">
		<header class="entry-header">
        <h1 class="entry-tile"><?php the_title();?></h1>
		</header>
        <div class="entrytext">
            <?php the_content(); ?>
        </div>
    </div>
	<?php endwhile; endif; ?>
</div>
<div class='widget-area' role='complementary'>
	<?php get_sidebar(); ?>
</div>
</article>
<?php get_footer(); ?>
