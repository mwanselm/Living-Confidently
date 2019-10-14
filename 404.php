<?php
/*
* @package Wordpress
* @subpackage Living Confidently
*/
?>

<?php get_header(); ?>
<section id="oops">
  <div class="wrapper">
  
    <div>
      <h1>Oops!</h1>
      <h3>We can’t find the page you’re looking for.</h3>
      <p class="code">Error code: 404</p>
      
      <p>Here are some helpful links:</p>
      <p class="links">
        <a href="/">Home</a><br/>
        <a href="/tools-and-resources">Tools &amp; Resources</a><br/>
        <a href="/research">Research</a><br/>
        <a href="/about">About</a>
    </div>
    
    <img src="<?php echo get_bloginfo('template_directory'); ?>/img/calculator.png" alt="Calculator" id="calculator" />
    <p style="clear:both;">&nbsp;</p>
  
  </div>
</section>

<?php get_footer(); ?>