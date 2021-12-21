<?php get_header()?>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="main__content">
                    <div class="main__title">
                        <h1><?php single_cat_title()?></h1>
                    </div>  
                    <?php get_template_part('related')?>
                </div>
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
<?php get_footer()?>
<?php wp_footer(); ?>
</body>
</html>