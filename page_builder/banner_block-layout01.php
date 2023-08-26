<!-- BANNER BLOCK - LAYOUT 01 -->
<?php
if(wp_is_mobile()){
    $background_image = get_sub_field('background_image_mobile');
} else {
    $background_image = get_sub_field('background_image');    
}
?>
<section class="banner" style="background-image: url('<?=$background_image;?>');">
    <section class="banner-effect" style="<?=(get_sub_field("overlay") ? 'background: '.get_sub_field('overlay_color').'A6;' : '' );?> <?=(get_sub_field("blur") ? 'backdrop-filter: blur(4px);' : '' );?>">
        <section class="content-container">
            
            <h1>
                <?=get_sub_field('jumbotron_line_1');?>
            </h1>
            <h2>
                <?=get_sub_field('jumbotron_line_2');?>
            </h2>

            <p class="description">
                <?=get_sub_field('text_description');?>
            </p>

            <?php
            if(get_sub_field('button_url')){
                ?>
                <a href="<?=get_sub_field('button_url');?>" class="button button-secondary button-jumbotron">
                    <?=get_sub_field('cta_button');?>
                </a>
            <?php
            }
            ?>

            <section class="d-flex flex-column flex-sm-row flexbox-gap-40 features">

                <?php
                $features = get_sub_field('features');
                if($features){
                    foreach($features as $feature){
                        ?>
                        <article class="flex-sm-grow-1">
                            <img src="<?=$feature['feature_icon'];?>" />
                            <h3><?=$feature['feature_title'];?></h3>
                            <?=$feature['feature_description'];?>
                        </article>
                        <?php
                    }
                }
                ?>

            </section>
        </section>
    </section>
</section>
<!-- BANNER BLOCK - LAYOUT 01 -->