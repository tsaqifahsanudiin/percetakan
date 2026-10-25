<?php get_header(); ?>
<main class="w-full pt-20 bg-surface min-h-screen"><div class="max-w-5xl mx-auto px-6 py-16"><?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?></div></main>
<?php get_footer(); ?>