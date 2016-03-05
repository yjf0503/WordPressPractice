/**
 * Created by PhpStorm.
 * User: jiefuyang
 * Date: 2/29/16
 * Time: 8:18 PM
 */
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">



	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>



<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->



<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



<?php wp_get_archives('type=monthly&format=link'); ?>

<?php //comments_popup_script(); // off by default ?>

<?php wp_head(); ?>

</head>

<body>

<div id="header">

<h1><a href="<?php blog_info('url');?>"><?php blog_info('name'); ?></a></h1>

<?php blog_info('description'); ?>
</div>

<div id="container">
 <?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>

     <div class="post" id=”post-<?php the_ID(); ?>”>
         <h2><a href="<?php the_permalink(); ?>" title=”<?php the_title(); ?>”><?php the_title(); ?></a></h2>

        <div class="enrty">
         <?php the_content(); ?>

         <p class="postmetadata">
          <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?><br />
          <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
         </p>
        </div>

     </div>

 <?php endwhile; ?>

     <div class="navigation">
        <?php posts_nav_link(); ?>
     </div>

     <?php else : ?>
     <div class="post">
         <h2><?php _e('Not Found'); ?></h2>
     </div>

 <?php endif; ?>
</div>

<div class="'sidebar">
    <ul>
        <?php if(function_exists('dynamic_sidebar')&&dynamic_sidebar() ) : else : ?>

        <li id="search">
            <?php include(TEMPLATEPATH.'/searchform.php'); ?>
        </li>

        <li>
            <h2><?php _e('Calender'); ?></h2>
            <?php get_calendar(); ?>
        </li>

        <?php wp_list_pages('depth=3&title_li=<h2>Pages</h2>'); ?>
        <li>
            <h2><?php _e('Categories'); ?></h2>
            <ul>
                <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical'); ?>
            </ul>
        </li>

        <li>
            <h2><?php _e('Archives'); ?></h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </li>

        <?php get_link_lists(); ?>

        <li>
            <h2><?php _e('Meta'); ?></h2>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </li>
        <?php endif; ?>
    </ul>
</div>

</body>

</html>