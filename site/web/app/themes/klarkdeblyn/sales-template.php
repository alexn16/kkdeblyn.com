<?php
/**
 * Template Name: Sales Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<script type="text/javascript" src="http://www.redbubble.com/assets/external_portfolio.js"></script>
<script id="rb-xzfcxvzx" type="text/javascript">new RBExternalPortfolio('www.redbubble.com', 'alexn16', 5, 5).renderIframe();</script>
