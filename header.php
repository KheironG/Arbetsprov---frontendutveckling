<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header-desktop-container">
            <video muted autoplay loop poster="<?php echo esc_attr( get_template_directory_uri() . '/assets/images/bergendal-header.png' ); ?>">
                <source src="<?php echo esc_attr( get_template_directory_uri() . '/assets/images/bergendal.mp4' ); ?>" type="video/mp4">
            </video>
            <img class="header-full-logo" src="<?php echo esc_attr( get_template_directory_uri() . '/assets/logo/bergendal-full-logo.svg' ); ?>" alt="Välkommen till Bergendal">
        </div>
        <div class="header-mobile-container">
            <img class="header-full-logo" src="<?php echo esc_attr( get_template_directory_uri() . '/assets/logo/bergendal-full-logo.svg' ); ?>" alt="Välkommen till Bergendal">
        </div>
        <div class="header-container">
            <div class="header-ui-container">
                <img id="header-logo" src="<?php echo esc_attr( get_template_directory_uri() . '/assets/logo/bergendal-b-logo.svg' ); ?>"
                    alt="Det här är Bergendal">
                <div class="header-buttons">
                    <button class="button-rounded-white">BOKA</button>
                    <div id="header-menu-hamburger" onclick="menuToggle(this);">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div id="header-flyout" class="header-flyout hide">
                <div class="left">
                </div>
                <div class="right">
                    <div class="flyout-buttons" onclick="menuToggle(this);">
                        <p>Stäng</p>
                        <div id="header-menu-close"></div>
                    </div>
                </div>
            </div>

        </div>

    </header>
