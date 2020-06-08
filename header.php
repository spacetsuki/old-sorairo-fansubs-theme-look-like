<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - Ini fansub bukan?</title>

    <!-- head -->
    <?php wp_head(); ?>
    <!-- style and font is enqueued in functions -->

</head>

<body>
    <!-- header -->
    <header>
        <div class="jumbotron-fluid">
            <div class="container">
                <h1><?php bloginfo('name') ?></h1>
            </div>
        </div>
    </header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mb-2">
        <!-- brand -->
        <a class="navbar-brand" href="<?= home_url(); ?>"><?php bloginfo('name') ?></a>
        <!-- collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- navbar item -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                // 'container_class'   => 'collapse navbar-collapse',
                // 'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            )); ?>
            <!-- search -->
            <?php get_search_form(); ?>
        </div>
    </nav>