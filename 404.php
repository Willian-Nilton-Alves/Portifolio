<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package XPro Code Boilerplate
 */

get_header();
?>

<!-- BANNER BLOCK - LAYOUT 04 -->
<?php
if(wp_is_mobile()){
    $background_image = '/wp-content/uploads/2023/08/background-homepage-header-mobile-scaled.jpeg';
} else {
    $background_image = '/wp-content/uploads/2023/08/background-homepage-header-scaled.jpeg';
}
?>
<section class="page-404" style="background-image: url('<?=$background_image;?>');">
    <section class="banner-effect" >
        
        <section class="content-container d-flex flex-column flex-sm-row justify-content-between">
            
            <section>
                <h2>Something's missing</h2>
                <a class="goback" href="#">Go back</a>
            </section>
            <section>
                
                <a href="#" class="button button-primary">Contact Us</a>
            </section>

        </section>
        <section>

            <svg xmlns="http://www.w3.org/2000/svg" width="793" height="303" viewBox="0 0 793 303" fill="none">
                <path d="M0.477295 249.432V188.068L117.523 3.97727H173.205V85.7954H141.386L78.3182 185.795V188.068H251.046V249.432H0.477295ZM141.955 294.886V230.682L143.659 203.977V3.97727H217.523V294.886H141.955Z" fill="white"/>
                <path d="M394.882 302.841C368.462 302.746 345.64 296.638 326.416 284.517C307.193 272.396 292.373 254.924 281.956 232.102C271.539 209.28 266.378 181.913 266.473 150C266.568 117.992 271.776 90.8144 282.098 68.4659C292.515 46.1174 307.287 29.1193 326.416 17.4716C345.64 5.82387 368.462 0 394.882 0C421.303 0 444.125 5.87122 463.348 17.6136C482.572 29.2614 497.392 46.2595 507.808 68.6079C518.225 90.9564 523.386 118.087 523.291 150C523.291 182.102 518.083 209.564 507.666 232.386C497.25 255.208 482.429 272.68 463.206 284.801C444.077 296.828 421.303 302.841 394.882 302.841ZM394.882 238.636C408.518 238.636 419.693 231.534 428.405 217.33C437.212 203.03 441.568 180.587 441.473 150C441.473 130.019 439.484 113.684 435.507 100.994C431.53 88.3049 426.037 78.9299 419.03 72.8693C412.022 66.714 403.973 63.6364 394.882 63.6364C381.246 63.6364 370.119 70.5492 361.501 84.375C352.884 98.2008 348.481 120.076 348.291 150C348.197 170.36 350.138 187.121 354.115 200.284C358.092 213.352 363.585 223.011 370.592 229.261C377.695 235.511 385.791 238.636 394.882 238.636Z" fill="white"/>
                <path d="M541.524 249.432V188.068L658.57 3.97727H714.251V85.7954H682.433L619.365 185.795V188.068H792.092V249.432H541.524ZM683.001 294.886V230.682L684.706 203.977V3.97727H758.57V294.886H683.001Z" fill="white"/>
            </svg>

        </section>
    </section>
</section>
<!-- BANNER BLOCK - LAYOUT 04 -->




<?php
get_footer();
