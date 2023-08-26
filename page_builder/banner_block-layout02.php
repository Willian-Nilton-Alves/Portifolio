<!-- BANNER BLOCK - LAYOUT 02 -->
<section class="banner layout-02">
    
    <section class="content-container d-flex flex-column flex-sm-row flexbox-gap-40">

        <section class="content">

            <h1>
                <?=get_sub_field('jumbotron_line_1');?>
            </h1>
            
            <p class="description">
                <?=get_sub_field('text_description');?>
            </p>

            <?php
            if(get_sub_field('button_url')){
                ?>
                <a href="<?=get_sub_field('button_url');?>" class="button button-primary button-jumbotron">
                    <?=get_sub_field('cta_button');?>
                </a>
            <?php
            }
            ?>

            <section class="d-flex flex-column flex-sm-row flexbox-gap-30 features">

                <?php
                get_template_part( 'template-parts/content', 'products-categories' );                            
                ?>

            </section>
        </section>

        <section class="image" style="background-image: url('<?=get_sub_field("image");?>');"></section>

    </section>
</section>
<!-- BANNER BLOCK - LAYOUT 02 -->