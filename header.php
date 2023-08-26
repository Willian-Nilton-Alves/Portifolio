<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ballistic_Shield
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- FIXME: enqueue with wordpress function -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Bitter:wght@100;300;400;700;900&family=Inter:wght@100;300;400;700;900&display=swap"
        rel="stylesheet"
    />
    
    <!-- FIXME: enqueue with wordpress function -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
        crossorigin="anonymous"
    />



	<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>





<!-- HEADER  -->
<header>
    <section class="d-flex justify-content-between align-items-center content-container">
        <a
            href="/"
            class="logo-container justify-content-between align-items-start"
            ><img src="/wp-content/uploads/2023/08/logo-ballistic-shield.png"
        /></a>

        <section class="d-flex align-items-center container-right">

            <?php
            $args = array(
                "container_class" => "menu-principal-container",
                "menu_class" => "d-flex flexbox-gap-20",
                "menu" => "Main Menu",
            );
            wp_nav_menu($args);
            ?>

            <a href="#" class="button button-primary button-header">Make an Enquiry</a>
        </section>

        <a class="menu-icon" id="menu-icon" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15" fill="none">
                <path d="M1.5 1.5H17.5" stroke="#002889" stroke-width="1.5" stroke-linecap="square"/>
                <path d="M1.5 7.5H17.5" stroke="#002889" stroke-width="1.5" stroke-linecap="square"/>
                <path d="M1.5 13.5H17.5" stroke="#002889" stroke-width="1.5" stroke-linecap="square"/>
            </svg>
        </a>

        <section id="menu-principal-mobile-container">
            <header>
                <section  class="d-flex justify-content-between align-items-center content-container ">

                    <a href="/" class="logo-container justify-content-between align-items-start">
                        <img src="/wp-content/uploads/2023/08/logo-ballistic-shield.png"/>
                    </a>

                    <a class="menu-icon" id="menu-icon-close" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <path d="M14.9998 1.00001L0.999989 15C0.44771 15.5523 0.44771 16.4477 0.999989 17C1.55227 17.5523 2.44769 17.5523 2.99997 17L16.9998 3.00001C17.5521 2.44773 17.5521 1.5523 16.9998 1.00001C16.4475 0.447729 15.5521 0.447729 14.9998 1.00001Z" fill="#002889"/>
                            <path d="M17 15L3.00017 0.999999C2.44789 0.447715 1.55247 0.447715 1.00019 0.999999C0.447916 1.55228 0.447916 2.44771 1.00019 3L15 17C15.5523 17.5523 16.4477 17.5523 17 17C17.5523 16.4477 17.5523 15.5523 17 15Z" fill="#002889"/>
                        </svg>
                    </a>

                </section>
            </header>

            <?php
            $args = array(
                "container_class" => "mobile-container",
                // "menu_class" => "d-flex flexbox-gap-20",
                "menu_id" => "menu-mobile",
                "menu" => "Main Menu",
            );
            wp_nav_menu($args);
            ?>

            <section class="button-container">
                <a href="#" class="button button-primary button-header">Make an Enquiry</a>
            </section>

        </section>

    </section>
</header>
<!-- HEADER  -->









