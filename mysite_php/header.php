<!DOCTYPE html>
<html lang="ja">
      <head>
            <meta charset="utf-8">
            <title><?php wp_title('|',true,'right');bloginfo('name');  ?><title>
            <link rel="stylesheet"  type="text/css "href="/css/master.css">
            <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri();?>">
      </head>
      <body>
            <div id="header"   class="container">
                  header
            <h1><a href="<?php echo home_url('/');?>"><?php bloginfo('name');?><?php wp_nav_menu(); ?>
                      <ul class="menu">
                            <li><a href="">menu</a></li>
                            <li><a href="">menu</a></li>
                            <li><a href="">menu</a></li>
                      </ul>
                </div>
                </div><!-- /header-->
<?php wp_head();?>
