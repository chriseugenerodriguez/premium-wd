<?php
/**
 * Template Name: Sidebar Right
 *
 */

get_header(); ?>
<div class="wrapper">
  <div class="container">
    <div class="page-title clearfix">
      <div class="twelve columns clearfix">
        <h1>
          <?php the_title(); ?>
        </h1>
      </div>
    </div>
  </div>
  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="container">
    <section class="nine columns">
      <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </section>
    <aside class="three columns clearfix sidebar">
      <?php dynamic_sidebar('sidebar-widget-area'); ?>
    </aside>
  </div>
</div>
</div>
<?php get_footer(); ?>
