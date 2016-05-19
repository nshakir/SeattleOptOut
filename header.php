<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<meta name="description" content="Nectar Shakir | Web Design | Web Development | UX Experience | Seattle, WA">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="main-nav">
    <div id="logo">
    <a href="http://seattleoptoutgroup.com">SEATTLE<br><span>Opt Out</span></a>
    </div>
    <div id="nav-items">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>

    </div>
</div>
<?php
    echo do_shortcode("[metaslider id=49 restrict_to=home]");
?>
  <div id="wrapper">
